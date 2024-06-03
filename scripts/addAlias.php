<?php

require 'config.inc.php';
require 'wampserver.lib.php';

enter_alias_name:
$message = "Enter the Alias name.\n\nFor example ".color('green','myimages')."\nwould create an alias ".color('green','Alias /myimages "directory"')."\n";
$message .= color('red','Warning:')." No space - No underscore(_) - No slash(/) or antislash(\\)\n\n";
$newAliasName = Command_Windows($message,-1,-1,0,'Add an Alias Name','Enter Alias name: ');
$newAliasName = trim($newAliasName);
$newAliasName = str_replace(array(' ','_','/','\\'),'',$newAliasName);
if(strlen($newAliasName) < 4 ) {
	if(empty($newAliasName)) $newAliasName = ' ';
	$message = color('red','WARNING: ')."The alias name you entered: '".color('green',$newAliasName)."' is too short.\n";
	$message .= "The alias name must be at least four(4) characters long.\n\n";
	$message .= "What do you want to do?\n\n";
	$command = Command_Windows($message,-1,-1,0,'Add an Alias Name','Press R then Enter to retry - Enter to exit: ');
	$command = mb_strtoupper(trim($command));
	if($command == 'R') goto enter_alias_name;
	exit;
}
$newAliasName = '/'.$newAliasName;

enter_alias_path:
$message = "Alias name is: '".color('green',$newAliasName)."'\n";
$message .= "Enter the destination path of your alias. For example, ".color('green','c:/div/images/')."\n";
$message .= "would make an alias: ".color('green','Alias '.$newAliasName.'"c:/div/images/"')."\n\n";
$newAliasDir = Command_Windows($message,80,-1,0,'Add an Alias','Enter yout alias path: ');
$newAliasDir = trim($newAliasDir);
$newAliasDir = str_replace('\\','/',$newAliasDir);
if(empty($newAliasDir)) $newAliasDir= ' ';
if(!file_exists($newAliasDir) || !is_dir($newAliasDir)) {
	$message = color('red','WARNING: ')."The directory '".color('green',$newAliasDir)."' doesn't exist or is not a directory.\n";
	$message .= "What do you want to do?\n\n";
	$command = Command_Windows($message,-1,-1,0,'Add an Alias Name','Press R then Enter to retry - Enter to exit: ');
	$command = mb_strtoupper(trim($command));
	$newAliasDir = '';
	if($command == 'R') goto enter_alias_path;
	exit;
}
$newAliasDir = rtrim($newAliasDir,'/');

$newConfFileContents = <<< ALIASEOF
Alias {$newAliasName} "{$newAliasDir}"
<Directory "{$newAliasDir}/">
  Options +Indexes +FollowSymLinks +MultiViews
  AllowOverride all
  Require local
</Directory>

ALIASEOF;

$AliasExist = true;
$i = 1;
while($AliasExist) {
	$file = $aliasDir.'myalias_'.$i.'.conf';
	if(!file_exists($file)) break;
	$i++;
}
write_file($file,$newConfFileContents);

$message = "\n\nAlias:\n".color('green',$newConfFileContents)."\ncreated withe file name ".color('green',$file)."\n\n";
Command_Windows($message,-1,-1,0,'Add an Alias','Press Enter to exit ');
exit();

?>