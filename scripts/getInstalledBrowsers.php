<?php

if(!defined('WAMPTRACE_PROCESS')) require 'config.trace.php';
if(WAMPTRACE_PROCESS) {
	$errorTxt = "script ".__FILE__;
	$iw = 1; while(!empty($_SERVER['argv'][$iw])) {$errorTxt .= " ".$_SERVER['argv'][$iw];$iw++;}
	error_log($errorTxt."\n",3,WAMPTRACE_FILE);
}

require 'config.inc.php';
require 'wampserver.lib.php';

//Search for different browsers installed on the system
clearstatcache(true);
$commandStr = 'HKEY_LOCAL_MACHINE\SOFTWARE\Clients\StartMenuInternet';
$command = 'CMD /D /C reg query '.$commandStr;
exec($command, $output);
$clients = $browser = array();
foreach($output as $value) {
	if(strpos($value,$commandStr) !== false) {
		$temp = str_replace($commandStr,'',$value,$count);
		if(!empty($temp) && $count > 0) {
			$clients[] = str_replace('\\','',$temp);
		}
	}
}
unset($value);
//Search for the names and paths of the various installed browsers
foreach($clients as $value) {
	unset($output);
	$command = 'CMD /D /C reg query "'.$commandStr.'\\'.$value.'" /ve';
	exec($command, $output);
	foreach($output as $name) {
		if(strpos($name, 'REG_SZ') !== false) {
			preg_match('~^\s+.+REG_SZ\s+(.*)\r?$~mi',$name,$matches);
			$temp = $matches[1];
			if(stripos($temp,'Google') !== false && stripos($temp,'Chrome') !== false) {
				$temp = "Google Chrome";
			}
			$browser['name'][] = $temp;
		}
	}
	unset($output);
	$command = 'CMD /D /C reg query "'.$commandStr.'\\'.$value.'\\shell\\open\\command"';
	exec($command, $output);
	foreach($output as $path) {
		if(strpos($path, 'REG_SZ') !== false) {
			preg_match('~^\s+.+REG_SZ\s+(.*)\r?$~mi',$path,$matches);
			$temp = str_replace(array('"','\\'),array('','/'),$matches[1]);
			if(file_exists($temp)) {
				$browser['path'][] = $temp;
			}
			else {
				$browser['path'][] = '';
			}
		}
	}
}

$FileContents = '<?php'."\n\n".'$browser = '.var_export($browser, true).';'."\n\n?>\n";
write_file('ListBrowsers.txt',$FileContents);

?>