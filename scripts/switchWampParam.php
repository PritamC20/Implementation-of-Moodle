<?php

if(!defined('WAMPTRACE_PROCESS')) require 'config.trace.php';
if(WAMPTRACE_PROCESS) {
	$errorMessageTxt = "script ".__FILE__;
	$iw = 1; while(!empty($_SERVER['argv'][$iw])) {$errorMessageTxt .= " ".$_SERVER['argv'][$iw];$iw++;}
	error_log($errorMessageTxt."\n",3,WAMPTRACE_FILE);
}

require 'config.inc.php';
require 'wampserver.lib.php';

if($_SERVER['argv'][2] == 'create') {
	createWampConfParam($_SERVER['argv'][1],$_SERVER['argv'][3],$_SERVER['argv'][4],$configurationFile);
}
else {
	$errorMessage = '';
	$goodParam = true;
	if($_SERVER['argv'][1] == 'SupportMariaDB') {
		if(file_exists($c_mariadbVersionDir) && is_dir($c_mariadbVersionDir)) {
			if($_SERVER['argv'][2] == 'on') {
  			$mariadbVersionList = listDir($c_mariadbVersionDir,'checkMariaDBConf','mariadb');
  			if(count($mariadbVersionList) == 0) {
  				$goodParam = false;
  				$errorMessage .= "No version of MariaDB is installed.\nAt least one version of MariaDB must be installed in Wampserver.\n";
  			}
  			else {
  				//Check if mariadb version installed is that in wampmanager.conf
  				$versionsAll = ListAllVersions();
  				$versionsMariadb = $versionsAll['mariadb'];
  				array_walk($versionsMariadb,function(&$value, $key){$value = str_replace(['USED','mariadb'],'',$value);});
   				if(!in_array($wampConf['mariadbVersion'], $versionsMariadb)) {
  					//MariaDB version in wampmanager.conf does not exist - Correct it
  					$wampIniNewContents['mariadbVersion'] = $versionsMariadb[0];
  					$c_mariadbExe = str_replace($wampConf['mariadbVersion'],$versionsMariadb[0],$c_mariadbExe);
  					$c_mariadbConfFile = str_replace($wampConf['mariadbVersion'],$versionsMariadb[0],$c_mariadbConfFile);
  				}
  				//Check if mariadb service is installed and create it if not
					$command = 'CMD /D /C sc query state= all | FINDSTR /C:"SERVICE_NAME: wamp"';
					$output = `$command`;
					if(preg_match("~.*".$c_mariadbService."\s?$~m",$output) === 0) {
						//Service does not exists
							$command = 'CMD /D /C '.$c_mariadbExe." ".$c_mariadbServiceInstallParams;
							$output = `$command`;
							if(strpos($output, 'successfully installed') === false) {
								$goodParam = false;
  							$errorMessage .= "The service '".$c_mariadbService."' seems to be not successfully installed\n";
							}
					}
  			}
  		}
  		if($goodParam) {
				//Check if port is not that used by Mysql or default port in case off and change it if necessary
				$mariaIniFileContents = @file_get_contents($c_mariadbConfFile) or die ("my.ini file not found");
				preg_match_all("~^port[ \t]*=[ \t]*([0-9]{4})\s?$~m",$mariaIniFileContents, $matches);
				if(in_array($c_UsedMysqlPort,$matches[1]) || ($_SERVER['argv'][2] == 'off' && in_array($c_DefaultMysqlPort,$matches[1]))) {
					$portToUse = "3307";
					if($portToUse == $c_UsedMysqlPort)
						$portToUse = "3308";
					$nb_myIni = 0; //must be three replacements: [client], [wampmysqld] and [mysqld] groups
					$findTxtRegex = array(
					'/^(port)[ \t]*=.*$/m',
					);
					$mariaIniFileContents = preg_replace($findTxtRegex,"$1 = ".$portToUse, $mariaIniFileContents, -1, $nb_myIni);
					if($nb_myIni == 3)
						$myIniReplace = true;

					if($myIniReplace) {
						write_file($c_mariadbConfFile,$mariaIniFileContents);
						$myIniConf['mariaPortUsed'] = $portToUse;
						if($portToUse == $c_DefaultMysqlPort)
							$myIniConf['mariaUseOtherPort'] = "off";
						else
							$myIniConf['mariaUseOtherPort'] = "on";
						wampIniSet($configurationFile, $myIniConf);
					}
				}
			}
		}
		else {
			$goodParam = false;
			$errorMessage .= $c_mariadbVersionDir." does not exist or is not a directory\n";
		}
		if($goodParam) {
			if($_SERVER['argv'][2] == 'on') {
				//Start mariadb service in case of not started
				$command = 'CMD /D /C net start '.$c_mariadbService;
				`$command`;
			}
			elseif($_SERVER['argv'][2] == 'off') {
				//Stop mariadb service in case of started
				$command = 'CMD /D /C net stop '.$c_mariadbService;
				`$command`;
				$command = 'CMD /C /D sc delete '.$c_mariadbService;
				`$command`;
			}
		}
	}
	elseif($_SERVER['argv'][1] == 'SupportMySQL') {
		if(file_exists($c_mysqlVersionDir) && is_dir($c_mysqlVersionDir)) {
			if($_SERVER['argv'][2] == 'on') {
  			$mysqlVersionList = listDir($c_mysqlVersionDir,'checkMysqlConf','mysql');
  			if(count($mysqlVersionList) == 0) {
  				$goodParam = false;
  				$errorMessage .= "No version of MySQL is installed.\nAt least one version of MySQL must be installed in Wampserver.\n";
  			}
  			else {
  				//Check if mysql version installed is that in wampmanager.conf
  				$versionsAll = ListAllVersions();
  				$versionsMySQL = $versionsAll['mysql'];
  				array_walk($versionsMySQL,function(&$value, $key){$value = str_replace(['USED','mysql'],'',$value);});
   				if(!in_array($wampConf['mysqlVersion'], $versionsMySQL)) {
  					//MySQL version in wampmanager.conf does not exist - Correct it
  					$wampIniNewContents['mysqlVersion'] = $versionsMySQL[0];
  					$c_mysqlExe = str_replace($wampConf['mysqlVersion'],$versionsMySQL[0],$c_mysqlExe);
  					$c_mysqlConfFile = str_replace($wampConf['mysqlVersion'],$versionsMySQL[0],$c_mysqlConfFile);
  				}

  				//Check if mysql service is installed and create it if not
					$command = 'CMD /D /C sc query state= all | FINDSTR /C:"SERVICE_NAME: wamp"';
					$output = `$command`;
					if(preg_match("~.*".$c_mysqlService."\s?$~m",$output) === 0) {
						//Service does not exists
							$command = 'CMD /D /C '.$c_mysqlExe." ".$c_mysqlServiceInstallParams;
							$output = `$command`;
							if(strpos($output, 'successfully installed') === false) {
								$goodParam = false;
  							$errorMessage .= "The service '".$c_mysqlService."' seems to be not successfully installed\n";
							}
					}
  			}
  		}
  		if($goodParam) {
				//Check if port is not that used by MariaDB and change it if necessary
				$mySqlIniFileContents = @file_get_contents($c_mysqlConfFile) or die ("my.ini file not found");
				preg_match_all("~^port[ \t]*=[ \t]*([0-9]{4})\s?$~m",$mySqlIniFileContents, $matches);
				if(in_array($c_UsedMariaPort,$matches[1]) || ($_SERVER['argv'][2] == 'off' && in_array($c_DefaultMysqlPort,$matches[1]))) {
					$portToUse = "3308";
					if($portToUse == $c_UsedMariaPort)
						$portToUse = "3309";
					$nb_myIni = 0; //must be three replacements: [client], [wampmysqld] and [mysqld] groups
					$findTxtRegex = array(
					'/^(port)[ \t]*=.*$/m',
					);
					$mySqlIniFileContents = preg_replace($findTxtRegex,"$1 = ".$portToUse, $mySqlIniFileContents, -1, $nb_myIni);
					if($nb_myIni == 3)
						$myIniReplace = true;

					if($myIniReplace) {
						write_file($c_mysqlConfFile,$mySqlIniFileContents);
						$myIniConf['mysqlPortUsed'] = $portToUse;
						if($portToUse == $c_DefaultMysqlPort)
							$myIniConf['mysqlUseOtherPort'] = "off";
						else
							$myIniConf['mysqlUseOtherPort'] = "on";
						wampIniSet($configurationFile, $myIniConf);
					}
				}
			}
		}
		else {
			$goodParam = false;
			$errorMessage .= $c_mysqlVersionDir." does not exist or is not a directory\n";
		}
		if($goodParam) {
			if($_SERVER['argv'][2] == 'on') {
				//Start mysql service in case of not started
				$command = 'CMD /D /C net start '.$c_mysqlService;
				`$command`;
			}
			elseif($_SERVER['argv'][2] == 'off') {
				//Stop mysql service in case of started
				$command = 'CMD /D /C net stop '.$c_mysqlService;
				`$command`;
				$command = 'CMD /D /C sc delete '.$c_mysqlService;
				`$command`;
			}
		}
	}
	elseif($_SERVER['argv'][1] == 'httpsReady'){
		if($_SERVER['argv'][2] == 'off') {
			$warning = "\n".color('red','You are about to delete Wampserver\'s https ready mode')."\n\nBy doing so, you will:\n- delete all https certificates\n- restore the original httpd-ssl.conf and openssl.cnf files\n- delete the loading of Apache modules\n\n".color('red','Press the Y then Enter keys to confirm the deletion of https mode')."\nPress only the Enter key not to do so.\n";
			Command_Windows($warning,-1,-1,0,'Suppress mode https ready');
			$confirm = mb_strtoupper(trim(fgets(STDIN)));
			if($confirm != 'Y') {
				$goodParam = false;
			}
			else {
				//Suppress Certs directory
				$installDir = str_replace('/','\\',$c_installDir);
				$command = <<<EOF
Rem Wampserver installation variables
set installdir=$installDir
cd /D %installdir%\bin
Rem Removal of any certificates that may be present
if exist Certs rmdir /S /Q Certs

EOF;
				write_file('batch.bat',$command);
				`batch.bat`;
				unlink('batch.bat');
				//Replace httpd-ssl.conf;
				$source = $c_installDir.'/bin/apache/apache'.$c_apacheVersion.'/conf/original/extra/httpd-ssl.conf';
				$dest   = $c_installDir.'/bin/apache/apache'.$c_apacheVersion.'/conf/extra/httpd-ssl.conf';
				if(copy($source,$dest) === false){
					$goodParam = false;
					$errorMessage .= "Error in copy https-ssl file\n";
				}
				//Replace openssl.cnf;
				$source = $c_installDir.'/scripts/httpsFiles/openssl.cnf';
				$dest   = $c_installDir.'/bin/apache/apache'.$c_apacheVersion.'/conf/openssl.cnf';
				if(copy($source,$dest) === false){
					$goodParam = false;
					$errorMessage .= "Error in copy openssl.cnf file\n";
				}
				//Unload https ssl Apache modules and includes
				$counts = $count = 0;
				$contents = file_get_contents($c_apacheConfFile);
				if(strpos($contents,'#LoadModule ssl_module') === false) {
					$contents = str_replace('LoadModule ssl_module','#LoadModule ssl_module',$contents,$count);
					$counts += $count;
				}
				if(strpos($contents,'#LoadModule socache_shmcb_module') === false) {
					$contents = str_replace('LoadModule socache_shmcb_module','#LoadModule socache_shmcb_module',$contents,$count);
					$counts += $count;
				}
				if(strpos($contents,'#Include conf/extra/httpd-ssl.conf') === false) {
					$contents = str_replace('Include conf/extra/httpd-ssl.conf','#Include conf/extra/httpd-ssl.conf',$contents,$count);
					$counts += $count;
				}
				$write_httpd_conf = true;
				if($counts > 0) {
					$write_httpd_conf = write_file($c_apacheConfFile,$contents);
				}
				if($write_httpd_conf === false) {
					$goodParam = false;
					$errorMessage .= "Error in writing httpd.conf\n";
				}
			}//End else to suppress https ready
		}
		elseif($_SERVER['argv'][2] == 'on') {
			$virtualHost = check_virtualhost();
			if($virtualHost['nb_Virtual'] < 2) {
				$good_Param = false;
				$errorMessage = "It is essential to have created at least one working http VirtualHost\nbefore switching Wampserver to https mode\n\nThe 'localhost' VirtualHost cannot and must not be switched to https mode.\n";
				goto errorend;
			}
			if(version_compare($c_apacheVersion, '2.4.47', '<')) {
				$errorMessage = "Your Apache version is ".$c_apacheVersion."\nCan only work with an Apache version greater than or equal to 2.4.47.\nInstall an Apache version >= 2.4.47\nthen switch to this new version before trying to validate https mode.\n";
				goto errorend;
			}
			$reinstallhttps = true;
			// ***** Preparing Wampserver to support HTTPS SSL *****
			// Replace https-ssl.conf if necessary
			$contents_ssl_conf = file_get_contents($c_apacheConfDir.'\extra\httpd-ssl.conf');
			$write_ssl_conf_needed = $write_ssl_conf = false;
			$message = '';
			if(strpos($contents_ssl_conf,'Define CERTIFS ${INSTALL_DIR}/bin/Certs') === false) {
				//It is original Apache file - Need to be replaced
				$write_ssl_conf_needed = true;
			}
			else {
				$message .= 'File: '.$c_apacheConfDir."/extra/httpd-ssl.conf already modified for Wampserver https\n";
			}
			// Replace openssl.cnf if necessary
			$contents_ssl_cnf = file_get_contents($c_apacheConfDir.'\openssl.cnf');
			$write_ssl_cnf_needed = $write_ssl_cnf = false;
			if(strpos($contents_ssl_cnf,'Wampserver') === false) {
				//It is original Apache file - Need to be replaced
				$write_ssl_cnf_needed = true;
			}
			else {
				$message .= 'File: '.$c_apacheConfDir."/openssl.cnf already modified for Wampserver https\n";
			}
			//Check if Certs directory already exists
			$Certs_dir = false;
			if(file_exists($c_installDir.'/bin/Certs')) {
				$Certs_dir = true;
				$message .= 'Directory '.$c_installDir."/bin/Certs already exists for Wampserver https\n";
			}
			if($Certs_dir === true || $write_ssl_cnf_needed === false || $write_ssl_conf_needed === false) {
				$reinstallhttps = false;
				$message .= "\n It seems that Wampserver is already 'https ready'\nDo you want to reapply it anyway?\n\n";
				$message .= color('red',' *** WARNING *** ')."If you answer Y for yes, you risk losing:\n- your existing certificates\n- your own https modifications\n";
				$message .= "\n --- Press the Y key to confirm - Press ENTER key to continue...";
				Command_Windows($message,-1,-1,1,'Wampserver HTTPS ready');
		    $confirm = trim(fgetc(STDIN));
				$confirm = mb_strtolower(trim($confirm ,'\''));
				if($confirm == 'y') {
					$reinstallhttps = true;
				}
				else {
					exit(0);
				}
			}
			if($reinstallhttps === true) {
				// Begin httpd-ssl_conf write
				// Get $httpd_ssl_conf contents
				include 'httpsFiles/httpd_ssl_conf.php';
				$rename_ssl_conf = false;
				$rename_ssl_conf = rename($c_apacheConfDir.'\extra\httpd-ssl.conf',$c_apacheConfDir.'\extra\httpd-ssl_sav.conf');
				$write_ssl_conf = write_file($c_apacheConfDir.'\extra\httpd-ssl.conf',$httpd_ssl_conf);
				//End write ssl_conf

				//Begin openssl.cnf write
				// Get $openssl_cnf contents
				include 'httpsFiles/open_ssl_cnf.php';
				$rename_ssl_cnf = false;
				$rename_ssl_cnf = rename($c_apacheConfDir.'\openssl.cnf',$c_apacheConfDir.'\openssl_sav.cnf');
				$write_ssl_cnf = write_file($c_apacheConfDir.'\openssl.cnf',$openssl_cnf);

				// Create wamp64\bin\Certs\ directory by command lines
				$rename_certs = false;
				if($Certs_dir === true) {
					$rename_certs = rename($c_installDir.'/bin/Certs',$c_installDir.'/bin/Certs_sav');
				}
				$installDir = str_replace('/','\\',$c_installDir);
				$command = <<<EOF
Rem Wampserver installation variables
Rem To be modified according to your installation
set installdir=$installDir
set apachever=$c_apacheVersion
Rem
Rem Verification and possible creation of folders
cd /D %installdir%\bin
Rem Removal of any certificates that may be present
if exist Certs rmdir /S /Q Certs
if not exist Certs md Certs
cd Certs
if not exist Other md Other
if not exist Cacerts md Cacerts
if not exist Server md Server
if not exist Site md Site
Rem Information to be created
copy nul .\Other\Index.txt
@echo 01> .\Other\Serial.txt
Rem MyPass can be replaced by your own password (4 to 20 characters)
@echo MyPass> .\Other\Password.txt
set /P PASSWORD= <.\Other\Password.txt
Rem
cd..
Rem We are in the folder %installdir%\bin
Rem We go to apache used /bin
cd apache\apache%apachever%\bin
Rem Declaration of variables - Imperative
set OPENSSL_CONF=%installdir%\bin\apache\apache%apachever%\conf\openssl.cnf
set DIRCERTS=%installdir%\bin\Certs
Rem +-+-+-+-+ Creation of the self-signed certificate +-+-+-+
Rem 1- Generation of a random number. (The seed 1358 can be replaced)
openssl rand -out %DIRCERTS%/Cacerts/Certificat.rnd -base64 1358
Rem 2- Private RSA key.
openssl genrsa -out %DIRCERTS%/Cacerts/Certificat.key -rand %DIRCERTS%/Cacerts/Certificat.rnd 4096
Rem 3- Request for signature.
Rem /C=FR : Country -- /ST=Paris : State or region -- /L=Paris : City
Rem /O=Otomatic & Cie : Organisation -- /CN=Otomatic & Cie : Division
openssl req -new -sha256 -key %DIRCERTS%/Cacerts/Certificat.key -out %DIRCERTS%/Cacerts/Certificat.csr -subj "/C=FR/ST=Paris/L=Paris/O=Otomatic & Cie/CN=Otomatic & Cie"
Rem 4- Self-signed certificate.
openssl x509 -req -days 1830 -sha256 -in %DIRCERTS%/Cacerts/Certificat.csr -signkey %DIRCERTS%/Cacerts/Certificat.key -out %DIRCERTS%/Cacerts/Certificat.crt
openssl x509 -in %DIRCERTS%/Cacerts/Certificat.crt -outform der -out %DIRCERTS%/Cacerts/Certificat.der
openssl x509 -in %DIRCERTS%/Cacerts/Certificat.crt -outform pem -out %DIRCERTS%/Cacerts/Certificat.pem
Rem 5- Public Key Extraction Plaintext Block Chaining
openssl rsa -in %DIRCERTS%/Cacerts/Certificat.key -pubout -out %DIRCERTS%/Cacerts/Certificat.pbc
Rem +-+-+-+-+ End of the creation of the self-signed certificate +-+-+-+-+

EOF;
				write_file('batch.bat',$command);
				$result = exec('batch.bat',$output,$result_code);
				unlink('batch.bat');
				//Verify if https ssl Apache modules and includes are OK
				$counts = $count = 0;
				$contents = file_get_contents($c_apacheConfFile);
				if(strpos($contents,'#LoadModule ssl_module') !== false) {
					$contents = str_replace('#LoadModule ssl_module','LoadModule ssl_module',$contents,$count);
					$counts += $count;
				}
				if(strpos($contents,'#LoadModule socache_shmcb_module') !== false) {
					$contents = str_replace('#LoadModule socache_shmcb_module','LoadModule socache_shmcb_module',$contents,$count);
					$counts += $count;
				}
				if(strpos($contents,'#Include conf/extra/httpd-ssl.conf') !== false) {
					$contents = str_replace('#Include conf/extra/httpd-ssl.conf','Include conf/extra/httpd-ssl.conf',$contents,$count);
					$counts += $count;
				}
				$write_httpd_conf = true;
				if($counts > 0) {
					$write_httpd_conf = write_file($c_apacheConfFile,$contents);
				}

				if($result === false || $result_code !== 0 || $write_httpd_conf === false
				|| ($write_ssl_cnf_needed === true && $write_ssl_cnf === false)
				|| ($write_ssl_conf_needed === true && $write_ssl_conf === false)) {
					//Incorrect result - Return to previous
					$goodParam = false;
					if($write_ssl_cnf_needed === true && $write_ssl_cnf === false) {
						$error_message .= "Error in writing file openssl.cnf\n";
					}
					if($write_ssl_conf_needed === true && $write_ssl_conf === false) {
						$error_message .= "Error in wrtiting file https-ssl.conf\n";
					}
					if($result === false || $result_code !== 0){
						$error_message .= "Error in creating Certs directory and/or creating certficats\n";
					}
					$error_message .= "\n*** Wampserver https ready procedure\n*** Error in procedure https ready\n*** Return to original state\n";
					error_log($error_message);
					if($rename_certs) {
						$installDir = str_replace('/','\\',$c_installDir);
						$command = <<<EOF
Rem Wampserver installation variables
set installdir=$installDir
cd /D %installdir%\bin
Rem Removal of any certificates that may be present
if exist Certs rmdir /S /Q Certs

EOF;
						write_file('batch.bat',$command);
						`batch.bat`;
						unlink('batch.bat');
						rename($c_installDir.'/bin/Certs_sav',$c_installDir.'/bin/Certs');
					}
					if($write_ssl_cnf === true) {
						rename($c_apacheConfDir.'\openssl_sav.cnf',$c_apacheConfDir.'\openssl.cnf');
					}
					if($write_ssl_conf === true) {
						rename($c_apacheConfDir.'\extra\httpd-ssl_sav.conf',$c_apacheConfDir.'\extra\httpd-ssl.conf');
					}
				}
			}
		}//End httpsReady to on
	}

	if($goodParam === true) {
		if(array_key_exists($_SERVER['argv'][1],$WampParamServitude) && $_SERVER['argv'][2] == 'off') {
			$wampIniNewContents[$WampParamServitude[$_SERVER['argv'][1]]['servitude']] = 'off';
		}
		$wampIniNewContents[$_SERVER['argv'][1]] = $_SERVER['argv'][2];
		wampIniSet($configurationFile, $wampIniNewContents);
	}
	else {
		errorend:
		$message = "The parameter '".$_SERVER['argv'][1]."' cannot be switched '".$_SERVER['argv'][2]."'\n\n";
		if(!empty($errorMessage)) $message .= $errorMessage."\n\n";
		$message .= "----- Switch canceled -----\n\n";
		$message .=  "\nPress ENTER to continue...";
		Command_Windows($message,-1,-1,0,'Switch Wampmanager parameter');
 		$confirm = trim(fgets(STDIN));
	}
}
?>