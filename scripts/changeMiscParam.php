<?php

if(!defined('WAMPTRACE_PROCESS')) require 'config.trace.php';
if(WAMPTRACE_PROCESS) {
	$errorTxt = "script ".__FILE__;
	$iw = 1; while(!empty($_SERVER['argv'][$iw])) {$errorTxt .= " ".$_SERVER['argv'][$iw];$iw++;}
	error_log($errorTxt."\n",3,WAMPTRACE_FILE);
}

require 'config.inc.php';
require 'wampserver.lib.php';
$changeError ='';

function check_choose($choose, $newvalue) {
	global $changeError;
	if($choose == 'Seconds') {
		if(preg_match('/^[1-9][0-9]{1,3}$/m',$newvalue) != 1) {
		$changeError = <<< EOFERROR
The value you entered ({$newvalue}) is out of range.
The number of seconds must be between 10 and 9999.
The value is set to 360 seconds by default.
EOFERROR;
		$newvalue = '360';
		}
	}
	elseif($choose == 'Size') {
		$newvalue = mb_strtoupper($newvalue);
		if(preg_match('/^[1-9][0-9]{0,3}(M|G)$/m',$newvalue) != 1) {
		$changeError = <<< EOF1ERROR
The value you entered ({$newvalue}) is out of range.
The number must be between 1 and 9999.
The number must be followed by M (For Mega) or G (For Giga)
The value is set to 128M by default.
EOF1ERROR;
		$newvalue = '128M';
		}
	}
	return $newvalue;
}

if($_SERVER['argv'][1] == 'phpmyadmin') {
	if($_SERVER['argv'][2]== 'cfghidedb') {
		if(!empty($_SERVER['argv'][3]) && !empty($_SERVER['argv'][4])){
			$file = $_SERVER['argv'][3];
			if(file_exists($file)) {
				$count = 0;
				$contents = file_get_contents_dos($file);
				$search = "\$cfg['Servers'][\$i]['hide_db']";
				if($_SERVER['argv'][4] == 'nohidedb') {
					$contents = str_replace($search,'//'.$search,$contents,$count);
				}
				elseif($_SERVER['argv'][4] == 'hidedb') {
					$contents = str_replace('//'.$search,$search,$contents,$count);
				}
				else {
					$changeError .= "\nThe fourth parameter '".$_SERVER['argv'][4]."' is not valid\n";
				}
				if($count > 0) write_file($file,$contents);
			}
			else $changeError .= "\nFile '".$file."' does not exists\n";
		}
	}
	elseif($_SERVER['argv'][2] == 'cfgpassword') {
		if(!empty($_SERVER['argv'][3]) && !empty($_SERVER['argv'][4])){
			$file = $_SERVER['argv'][3];
			if(file_exists($file)) {
				$count = 0;
				$contents = file_get_contents_dos($file);
				// $cfg['Servers'][$i]['AllowNoPassword'] = true;
				if($_SERVER['argv'][4] == 'nopassword') {
					$newvalue = 'false;';
				}
				elseif($_SERVER['argv'][4] == 'password') {
					$newvalue = 'true;';
				}
				else {
					$changeError .= "\nThe fourth parameter '".$_SERVER['argv'][4]."' is not valid\n";
				}
				if(preg_match_all("/(.cfg\['Servers.+AllowNoPassword.+=\s*)(.+)\s*;/mi",$contents,$matches) > 0) {
					$counts = 0;
					foreach($matches[0] as $key => $value) {
						$contents = str_replace($value,$matches[1][$key].$newvalue,$contents,$count);
						$counts += $count;
					}
					if($counts > 0) write_file($file,$contents);
				}
			}
			else $changeError .= "\nFile '".$file."' does not exists\n";
		}
	}
	elseif($_SERVER['argv'][2] == 'aliasvalue') {
		if(!empty($_SERVER['argv'][3]) && !empty($_SERVER['argv'][4]) && !empty($_SERVER['argv'][5]) && !empty($_SERVER['argv'][6])){
			$file = trim($_SERVER['argv'][3]);
			$parameter = trim($_SERVER['argv'][5]);
			$newvalue = trim($_SERVER['argv'][6]);
			if(!empty($_SERVER['argv'][7])) {
				$choose = $_SERVER['argv'][7];
				$newvalue = check_choose($choose, $newvalue);
			}
			if(file_exists($file)) {
				$count = 0;
				$contents = file_get_contents_dos($file);
				preg_match("/([ \t]*php_admin_value)[ \t]+".$parameter."[ \t]+.*/mi",$contents,$matches);
				$contents = str_replace($matches[0],$matches[1].' '.$parameter.' '.$newvalue,$contents,$count);
				if($count > 0) write_file($file,$contents);
			}
			else $changeError .= "\nFile '".$file."' does not exists\n";
		}
	}
	elseif($_SERVER['argv'][2] == 'aliasflag') {
		if(!empty($_SERVER['argv'][3]) && !empty($_SERVER['argv'][4]) && !empty($_SERVER['argv'][5])){
			$file = trim($_SERVER['argv'][3]);
			$parameter = trim($_SERVER['argv'][4]);
			$newvalue = trim($_SERVER['argv'][5]);
			if(file_exists($file)) {
				$count = 0;
				$contents = file_get_contents_dos($file);
				preg_match("/([ \t]*php_admin_flag)[ \t]+".$parameter."[ \t]+.*/mi",$contents,$matches);
				$contents = str_replace($matches[0],$matches[1].' '.$parameter.' '.$newvalue,$contents,$count);
				if($count > 0) write_file($file,$contents);
			}
			else $changeError .= "\nFile '".$file."' does not exists\n";
		}
	}
}

if(!empty($changeError)) {
	$message = color('red',"********************* WARNING ********************\n\n");
	$message .= $changeError;
	$message .= "\nPress ENTER to continue...";
	Command_Windows($message,-1,-1,0,'Change Miscelaneous parameter');
  trim(fgets(STDIN));
}

?>