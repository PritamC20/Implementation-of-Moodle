<?php

if(!defined('WAMPTRACE_PROCESS')) require 'config.trace.php';
if(WAMPTRACE_PROCESS) {
	$errorTxt = "script ".__FILE__;
	$iw = 1; while(!empty($_SERVER['argv'][$iw])) {$errorTxt .= " ".$_SERVER['argv'][$iw];$iw++;}
	error_log($errorTxt."\n",3,WAMPTRACE_FILE);
}

require 'config.inc.php';
require 'wampserver.lib.php';

require 'httpsFiles/https_virtualhost.php';

$changeError = '';
if(trim($_SERVER['argv'][1]) == 'https') {
	$ServerName = trim($_SERVER['argv'][2]);
	$DocRoot    = trim($_SERVER['argv'][3]);
	$vh_IP      = trim($_SERVER['argv'][4]);
	$modeFCGI = false;
	if(trim($_SERVER['argv'][5]) != '0.0.0') {
		$modeFCGI = true;
		$versionPHP = trim($_SERVER['argv'][5]);
		$https_virtualhost_fgci = str_replace('VERSIONPHPFCGI',$versionPHP,$https_virtualhost_fgci,$count);
		if($count == 0) $changeError .= "\nError in ".__FILE__."\nReplace not working for FCGI mode";
	}
	$search = array(
		'HTTPSIP',
		'HTTPSSERVERNAME',
		'HTTPSDOCUMENTROOT',
	);
	$replace = array(
		$vh_IP,
		$ServerName,
		$DocRoot,
	);

	$https_virtualhost = str_replace($search,$replace,$https_virtualhost,$count);
	if($count == 0) $changeError .= "\nError in ".__FILE__."\nReplace not working for https_virtulahost";

	if($modeFCGI) {
		$https_virtualhost = str_replace('</VirtualHost>',$https_virtualhost_fgci.'</VirtualHost>',$https_virtualhost,$count);
		if($count == 0) $changeError .= "\nError in ".__FILE__."\nReplace not working for https_virtulahost";
	}
	$https_virtualhost = <<<EOF
## BEGIN OF SSL VIRTUAL HOST {$ServerName} CONTEXT
$https_virtualhost
## END OF SSL VIRTUAL HOST {$ServerName} CONTEXT

EOF;
	$installDir = str_replace('/','\\',$c_installDir);
	if(empty($changeError)) {
		//HTTPS VirtualHost is ready - Needs to create site certificate
		$command = <<<EOF
Rem Wampserver installation variables
set installdir=$installDir
set apachever=$c_apacheVersion
set OPENSSL_CONF=%installdir%\bin\apache\apache%apachever%\conf\openssl.cnf
set DIRCERTS=%installdir%\bin\Certs
cd /D %installdir%\bin\apache\apache%apachever%\bin
set /P PASSWORD= <..\..\..\Certs\Other\Password.txt
Rem 6- ServerName of the local site for which you want the keys
set SERVLOCAL=$ServerName
Rem 7- Random number (Different seed - 1677 may be changed)
if exist %DIRCERTS%\Server\Server.rnd del %DIRCERTS%\Server\Server.rnd
openssl rand -out %DIRCERTS%/Server/Server.rnd -base64 1677
Rem 8- Private RSA key.
if exist %DIRCERTS%\Server\Server.key del %DIRCERTS%\Server\Server.key
openssl genrsa -out %DIRCERTS%/Server/Server.key -rand %DIRCERTS%/Server/Server.rnd 4096
Rem 9- Signing request for ServerName certificate
Rem /C=FR : Country -- /ST=Paris : State or région -- /L=Paris : City
Rem /O=Otomatic & Cie : Organisation -- /CN=nom du site local
if exist %DIRCERTS%\Server\Server.csr del %DIRCERTS%\Server\Server.csr
openssl req -new -sha256 -key %DIRCERTS%/Server/Server.key -out %DIRCERTS%/Server/Server.csr -subj "/C=FR/ST=Paris/L=Paris/O=Otomatic & Cie/OU=Wampserver/CN=%SERVLOCAL%"
Rem 10- Signature request for server certificate.
if exist %DIRCERTS%\Server\Server.crt del %DIRCERTS%\Server\Server.crt
openssl x509 -req -days 4383 -sha256 -in %DIRCERTS%/Server/Server.csr -CA %DIRCERTS%/Cacerts/Certificat.crt -CAkey %DIRCERTS%/Cacerts/Certificat.key -CAcreateserial -out %DIRCERTS%/Server/Server.crt
openssl x509 -outform der -in %DIRCERTS%/Server/Server.crt -out %DIRCERTS%/Server/Server.der
openssl x509 -inform DER -outform PEM -in %DIRCERTS%/Server/Server.der -out %DIRCERTS%/Server/Server.pem
openssl crl2pkcs7 -nocrl -certfile %DIRCERTS%/Cacerts/Certificat.crt -certfile %DIRCERTS%/Server/Server.crt -out %DIRCERTS%/Server/%SERVLOCAL%.p7b
if exist %DIRCERTS%\Server\%SERVLOCAL%.pfx del %DIRCERTS%\Server\%SERVLOCAL%.pfx
openssl pkcs12 -export -nodes -in %DIRCERTS%/Cacerts/Certificat.crt -inkey %DIRCERTS%/Server/Server.key-out %DIRCERTS%/Server/%SERVLOCAL%.pfx -descert -name "%SERVLOCAL%" -password pass:%PASSWORD%
Rem
Rem 11- Client certificate.
Rem Nota : A password will be requested unless the final option is -password pass:MyPass
openssl pkcs12 -nodes -export -in %DIRCERTS%/Server/Server.crt -inkey %DIRCERTS%/Server/Server.key -out %DIRCERTS%/Site/%SERVLOCAL%.pfx -clcerts -descert -name "Client %SERVLOCAL% Certificate" -password pass:%PASSWORD%
Rem 12- Copy of keys
copy /Y %DIRCERTS%\Server\Server.crt %DIRCERTS%\Site\%SERVLOCAL%.crt
copy /Y %DIRCERTS%\Server\Server.key %DIRCERTS%\Site\%SERVLOCAL%.key

EOF;

		write_file('batch.bat',$command);
		$result = exec('batch.bat',$output,$result_code);
		unlink('batch.bat');
		//error_log("result=".$result."\nresult_code=".$result_code."\noutput=".print_r($output,true));
		if($result_code != '0') {
			$changeError .= "\nError in batch file to create certificats";
		}
		if(empty($changeError)) {
			//Put new HTTPS VirtualHost into httpd-ssl.conf
			$contents = file_get_contents_dos($c_apacheConfDir."/extra/httpd-ssl.conf");
			$contents = str_replace('## Never modify these four lines',$https_virtualhost."
## Never modify these four lines",$contents,$count);
			if($count > 0) {
				if(write_file($c_apacheConfDir."/extra/httpd-ssl.conf",$contents) === false)
				$changeError .= "\nError in writing file ".$c_apacheConfDir."/extra/httpd-ssl.conf";
			}
			else{
				$changeError .= "\nError in modify file ".$c_apacheConfDir."/extra/httpd-ssl.conf";
			}
		}
	}
}
elseif(trim($_SERVER['argv'][1]) == 'nohttps') {
	$replaceVhostSsl = false;
	$value = trim($_SERVER['argv'][2]);
	$myVhostsSslContents = file_get_contents($c_apacheConfDir.'/extra/httpd-ssl.conf');
	if(preg_match("~## BEGIN OF SSL VIRTUAL HOST ".$value." CONTEXT.+## END OF SSL VIRTUAL HOST ".$value." CONTEXT~mis",$myVhostsSslContents,$matches) === 1){
		$replaceVhostSsl = true;
		$myVhostsSslContents = str_replace($matches[0],'',$myVhostsSslContents,$count);
		if($count > 0) {
			$myVhostsSslContents = clean_file_contents($myVhostsSslContents,array(2,1),false,true,false,$c_apacheConfDir.'/extra/https-ssl.conf');
			if(write_file($c_apacheConfDir.'/extra/httpd-ssl.conf',$myVhostsSslContents) === false) {
				$changeError .= '<p class="warning">Error in writing file '.$c_apacheConfDir.'/extra/httpd-ssl.conf</p>';
			}
		}
	}
	if($replaceVhostSsl) {
		//Suppress ServerName certificats into Certs/Server and Certs/Site
		$files_to_delete = array(
			$c_installDir.'/bin/Certs/Server/'.$value.'p7b',
			$c_installDir.'/bin/Certs/Site/'.$value.'crt',
			$c_installDir.'/bin/Certs/Site/'.$value.'key',
			$c_installDir.'/bin/Certs/Site/'.$value.'pfx',
		);
		foreach($files_to_delete as $del_value) {
			if(file_exists($del_value)) @unlink($del_value);
		}
	}
}

if(!empty($changeError)) {
	$message = color('red',"********************* WARNING ********************\n\n");
	$message .= $changeError;
	$message .= "\nPress ENTER to continue...";
	Command_Windows($message,-1,-1,0,'Change to https script');
  trim(fgets(STDIN));
}

?>