<?php
// Default English language file for
// Projects and VirtualHosts sub-menus
// Settings and Tools right-click sub-menus
// 3.0.7 add $w_listenForApache - $w_AddListenPort - $w_deleteListenPort - $w_settings['SupportMariaDB']
// $w_settings['DaredevilOptions']
// $w_Size - $w_EnterSize - $w_Time - $w_EnterTime - $w_Integer - $w_EnterInteger - $w_add_VirtualHost
// 3.0.8 $w_settings['SupportMySQL'] - $w_portUsedMaria - $w_testPortMariaUsed
// 3.0.9 $w_ext_zend
// 3.1.1 $w_defaultDBMS - $w_invertDefault - $w_changeCLI - $w_misc
// $w_settings['ShowphmyadMenu'] - $w_settings['ShowadminerMenu']
// 3.1.2 $w_reinstallServices - $w_settings['mariadbUseConsolePrompt'] - $w_settings['mysqlUseConsolePrompt']
// $w_enterServiceNameAll - $w_settings['NotVerifyPATH'] - $w_MysqlMariaUser
// 3.1.4 $w_settings 'NotVerifyTLD' 'Cleaning' 'AutoCleanLogs' 'AutoCleanLogsMax' 'AutoCleanLogsMax' 'AutoCleanTmp' 'AutoCleanTmpMax' 'iniCommented'
// $w_wampReport - $w_dowampReport
// 3.1.9 $w_settings 'BackupHosts'
// 3.2.0 $w_verifySymlink  - $w_settings['NotVerifyHosts']
// 3.2.1 $w_addingVer - $w_addingVerTxt - $w_goto - $w_FileRepository
// 3.2.2 $w_MysqlMariaUser and $w_EnterSize modified -  - $w_MySQLsqlmodeInfo $w_mysql_mode $w_phpMyAdminHelp $w_PhpMyAdMinHelpTxt
// 3.2.3 https for wampserver.aviatechno
// 3.2.5 $w_emptyLogs - $w_emptyPHPlog - $w_emptyApaErrLog - $w_emptyApaAccLog - $w_emptyMySQLog - $w_emptyMariaLog - $w_emptyAllLog
//       $w_testAliasDir - $w_verifyxDebugdll - $w_apacheLoadedIncludes - $w_settings 'ShowWWWdirMenu'
// 3.2.6 $w_compareApache - $w_versus - $w_restorefile - $w_restore - $w_apache_restore - $w_ApacheRestoreInfo - $w_apache_restore
//       $w_ApacheCompareInfo - $w_apacheDefineVariables - $w_Refresh_Restart - $w_Refresh_Restart_Info
//       $w_checkUpdates - $w_PhpMyAdminBigFileTxt - $w_apacheTools - $w_PHPloadedExt
//       $w_settings 	apacheCompareVersion - apacheRestoreFiles - apacheGracefulRestart - LinksOnProjectsHomePage
//                    ApacheWampParams - apachePhpCurlDll
//       Suppress : $w_enterServiceNameApache - $w_enterServiceNameMysql - $w_enterServiceNameAll
// 3.2.7 $w_showExcludedPorts
// 3.2.8 $w_phpNotExists - LinksOnProjectsHomeByIp - CheckVirtualHost - $w_PHPversionsUse - $w_All_Versions
//       $w_settings 	ScrollListsHomePage
// 3.2.9 $w_phpparam_obs - $w_ApacheCompiledIn - $w_ApacheDoesNotIf - $w_mod_not_disable
//       $w_NoDefaultDBMS
// 3.3.0 $w_settings WampserverBrowser BrowserChange
//       Suppress apachePhpCurlDll
// 3.3.2 $w_PhpMyAdminGoHidedb - $w_PhpMyAdminGoNoPassword - $w_ConvertHttps - $w_wampHttpsHelp - $w_wampHttpsHelpTxt
//       $w_MariaDBMySQLHelp - $w_MariaDBMySQLHelpTxt - $w_settings httpsReady
//       suppress $w_settings['ShowphmyadMenu']

// Projects sub-menu
$w_projectsSubMenu = 'Your projects';
// VirtualHosts sub-menu
$w_virtualHostsSubMenu = 'Your VirtualHosts';
$w_add_VirtualHost = 'VirtualHost Management';
$w_aliasSubMenu = 'Your Aliases';
$w_portUsed = 'Port used by Apache: ';
$w_portUsedMysql = 'Port used by MySQL: ';
$w_portUsedMaria = 'Port used by MariaDB : ';
$w_testPortUsed = 'Test port used: ';
$w_portForApache = 'Port for Apache';
$w_listenForApache = 'Listen Port to add to Apache';
$w_portForMysql = 'Port for MySQL';
$w_testPortMysql = 'Test port 3306';
$w_testPortMysqlUsed = 'Test MySQL port used: ';
$w_testPortMariaUsed = 'Test MariaDB port used: ';

// Right-click Settings
$w_wampSettings = 'Wamp Settings';
$w_settings = array(
	'urlAddLocalhost' => 'Add localhost in url',
	'VirtualHostSubMenu' => 'VirtualHosts sub-menu',
	'AliasSubmenu' => 'Alias sub-menu',
	'ProjectSubMenu' => 'Projects sub-menu',
	'HomepageAtStartup' => 'Wampserver Homepage at startup',
	'MenuItemOnline' => 'Menu item: Online / Offline',
	'ItemServicesNames' => 'Tools menu item: Change services names',
	'CheckVirtualHost' => 'Check VirtualHost definitions',
	'NotCheckVirtualHost' => 'Don\'t check VirtualHost definitions',
	'NotCheckDuplicate' => 'Don\'t check duplicate ServerName',
	'VhostAllLocalIp' => 'Allow VirtualHost local IP\'s others than 127.*',
	'SupportMySQL' => 'Allow MySQL',
	'SupportMariaDB' => 'Allow MariaDB',
	'DaredevilOptions' => 'Caution: Risky! Only for experts.',
	'ShowadminerMenu' => 'Show Adminer in Menu',
	'mariadbUseConsolePrompt' => 'Modify default Mariadb console prompt',
	'mysqlUseConsolePrompt' => 'Modify default Mysql console prompt',
	'NotVerifyPATH' => 'Do not verify PATH',
	'NotVerifyTLD' => 'Do not verify TLD',
	'NotVerifyHosts' => 'Do not verify hosts file',
	'Cleaning' => 'Automatic Cleaning',
	'AutoCleanLogs' => 'Clean log files automatically',
	'AutoCleanLogsMax' => 'Number of lines before cleaning',
	'AutoCleanLogsMin' => 'Number of lines after cleaning',
	'AutoCleanTmp' => 'Clean tmp directory automatically',
	'AutoCleanTmpMax' => 'Number of files before cleaning',
	'ForTestOnly' => 'Only for test purpose',
	'iniCommented' => 'Commented php.ini directives (; at the beginning of the line)',
	'BackupHosts' => 'Backup hosts file',
	'ShowWWWdirMenu' => 'Show www folder in Menu',
	'ApacheWampParams' => 'Wampserver settings for Apache',
	'apacheCompareVersion' => 'Allow comparison of Apache settings.',
	'apacheRestoreFiles' => 'Allow Apache files restoration',
	'apacheGracefulRestart' => 'Allow Apache Graceful Restart',
	'LinksOnProjectsHomePage' => 'Allow links on projects homepage',
	'LinksOnProjectsHomeByIp' => 'Link on projects by \'local link IP\'',
	'ScrollListsHomePage' => 'Allow scrolling of lists on home page',
	'WampserverBrowser' => 'Wampserver browser',
	'BrowserChange' => 'Set Wampserver browser',
	'httpsReady' => 'Wampserver ready to support https',
);

// Right-click Tools
$w_wampTools = 'Tools';
$w_restartDNS = 'Restart DNS';
$w_testConf = 'Check httpd.conf syntax';
$w_testServices = 'Check state of services';
$w_changeServices = 'Change the names of services';
$w_compilerVersions = 'Check Compiler VC, compatibility and ini files';
$w_UseAlternatePort = 'Use a port other than %s';
$w_AddListenPort = 'Add a Listen port for Apache';
$w_vhostConfig = 'Show VirtualHost examined by Apache';
$w_apacheLoadedModules = 'Show Apache loaded Modules';
$w_apacheLoadedIncludes = 'Show Apache loaded Includes';
$w_apacheDefineVariables = 'Show Apache variables (Define)';
$w_showExcludedPorts = 'Show the ports excluded by the system';
$w_testAliasDir = 'Check relationships Alias  <-> Directory';
$w_verifyxDebugdll = 'Check for unused xDebug dlls';
$w_empty = 'Empty';
$w_misc = 'Miscellaneous';
$w_emptyAll = 'Empty ALL';

$w_emptyLogs = 'Empty logs';
$w_emptyPHPlog = 'Empty PHP error log';
$w_emptyApaErrLog = 'Empty Apache error log';
$w_emptyApaAccLog = 'Empty Apache access log';
$w_emptyMySQLog = 'Empty MySQL log';
$w_emptyMariaLog = 'Empty MariaDB log';
$w_emptyAllLog ='Empty all log files';

$w_dnsorder = 'Check DNS search order';
$w_deleteVer = 'Delete unused versions';
$w_addingVer = 'Add Apache, PHP, MySQL, MariaDB, etc. versions.';
$w_deleteListenPort = 'Delete a Listen port Apache';
$w_delete = 'Delete';
$w_defaultDBMS = 'Default DBMS:';
$w_NoDefaultDBMS = 'Default DBMS : none';
$w_invertDefault = 'Invert default DBMS ';
$w_changeCLI = 'Change PHP CLI version';
$w_reinstallServices = 'Reinstall all services';
$w_wampReport = 'Wampserver Configuration Report';
$w_dowampReport = 'Create '.$w_wampReport;
$w_verifySymlink = 'Verify symbolic links';
$w_goto = 'Go to:';
$w_FileRepository = 'Links to Wampserver repositories files & addons';
$w_compareApache = 'Apache settings comparison';
$w_versus = 'versus';
$w_restorefile = 'Restore files saved at the installation of Apache';
$w_restore = 'Restore';
$w_checkUpdates = 'Check for updates';
$w_apacheTools = 'Apache Tools';
$w_PHPloadedExt = 'Show PHP loaded Extensions';
$w_PHPversionsUse = 'Show the use of PHP versions';

//miscellaneous
$w_ext_spec = 'Special extensions';
$w_ext_zend = 'Zend extensions';
$w_phpparam_info = 'For information only';
$w_ext_nodll = 'No dll file';
$w_ext_noline = "No 'extension='";
$w_mod_fixed = "Irreversible module";
$w_mod_not_disable = "These modules should not be disabled";
$w_no_module = 'No module file';
$w_no_moduleload = "No 'LoadModule'";
$w_mysql_none = "none";
$w_mysql_user = "user mode";
$w_mysql_default = "by default";
$w_mysql_mode = "Explanations of sql-mode";
$w_apache_restore = "Warning Apache restoration;";
$w_apache_compare = "Warning Apache settings comparison";
$w_Refresh_Restart = "Help ".$w_refresh.' - '.$w_restartWamp;
$w_Size = "Size";
$w_Time = "Time";
$w_Integer = "Integer Value";
$w_phpMyAdminHelp = "Help PhpMyAdmin";
$w_wampHttpsHelp = "Wampserver HTTPS mode help";
$w_phpNotExists = 'PHP version doesn\'t exist';
$w_All_Versions = 'All versions';
$w_phpparam_obs = 'Settings Depreciated | Deleted | New';
$w_ApacheCompiledIn = 'Built-in modules';
$w_ApacheDoesNotIf = 'Do not require <IfModule ModName>.';
$w_PhpMyAdminGoHidedb = 'Hide native databases';
$w_PhpMyAdminGoNoPassword = 'Allow connection without password';
$w_ConvertHttps = 'HTTPS mode for VirtualHost';
$w_MariaDBMySQLHelp = "Help MariaDB - MySQL";

// PromptText for Aestan Tray Menu type: prompt variables
// May have \r\n for multilines
$w_EnterInteger = "Enter an integer";
$w_enterPort = "Enter the desired port number";
$w_EnterSize = "Enter Size: xxxx followed by M for Mega or G for Giga\r\nThe symbol M or G must be attached to the number.\r\nFor example : 64M ; 256M ; 1G";
$w_EnterTime = "Enter time in seconds";
$w_MysqlMariaUser = "Enter a valid username. If you don't know, keep 'root' by default.\r\nIf you have set a password for either root or the chosen user, you will need to type that password when prompted for 'Enter password:' from the console. Without password, Enter key";

// Long texts
// Quotation marks " in texts must be escaped: \" - May have \r\n for multilines
$w_addingVerTxt ="All \"addons\", i.e. all installers of Apache, PHP, MySQL or MariaDB versions as well as installers of updates (Wampserver, Aestan Tray Menu, xDebug, etc.) and web applications (PhpMyAdmin, Adminer) are on\r\n\r\n'https://sourceforge.net/projects/wampserver/'\r\n\r\nJust download the installer files you want and launch them by right-clicking on the name of the downloaded file then \"Run as administrator\" to have the addon or application added to your version of Wampserver.\r\n\r\nThen, changing Apache, PHP, MySQL or MariaDB version is a matter of three clicks:\r\nLeft-Click -> PHP|Apache|MySQL|MariaDB -> Version -> Choose version\r\n\r\nThe version change does not include any parameter changes you might have made, nor does it transfer databases from the old version to the new one.\r\n\r\nA much better organized and always up to date repository than Sourceforge exists:\r\n\r\n'https://wampserver.aviatechno.net'.\r\n\r\nThe links to the repositories are in Right-Click -> Help\r\n";
$w_MySQLsqlmodeInfo = "MySQL/MariaDB sql-mode\r\nThe SQL server may run in different SQL modes depending on the value of the sql-mode directive.\r\nSetting one or more modes restricts certain possibilities and requires greater rigor in SQL syntax and data validation.\r\nThe operation of the sql-mode directive in the my.ini file is as follows.\r\n\r\n- sql-mode: by default\r\nThe sql-mode directive does not exist or is commented out (;sql-mode=\"...\")\r\nThe default modes of the MySQL/MariaDB version are applied\r\n\r\n- sql-mode: user mode\r\nThe sql-mode directive is populated with user-defined modes, for example :\r\nsql-mode=\"NO_ZERO_DATE,NO_ZERO_IN_DATE,NO_AUTO_CREATE_USER\"\r\n\r\n- sql-mode: none\r\nThe sql-mode directive is empty but must exist:\r\nsql-mode=\"\"\r\nno SQL mode is applied.";
$w_PhpMyAdMinHelpTxt = "-- PhpMyAdmin\r\nWhen starting phpMyAdmin, you will be asked for a user name and password.\r\nAfter installing Wampserver 3, the default username is \"root\" (without quotes) and there is no password, which means that you must leave the form Password box empty.\r\n\r\nPhpMyAdmin is configured to allow you access to either MySQL or MariaDB depending on which ones are active.\r\nIf both DBMS's are activated, you will see a dropdown on the Login screen, called \"Server Choice\", the default server will be shown first in the dropdown list. Select the DBMS you want to use here as part of the login process.\r\nREMEMBER, if you have different user accounts you must use the correct one for the selected DBMS.\r\nALSO: If you have the same account i.e. `root` on both DBMS's, if you have set different passwords, you need to use the right password for the account and DBMS.\r\n";
$w_PhpMyAdminBigFileTxt = "\r\n-- Importing large files\r\nWhen importing large files, the maximum memory and/or time limits may be exceeded.\r\nAny changes to the memory and time limits should not be made in php.ini but in the wamp(64)\\alias\\phpmyadmin.conf file.\r\n";
$w_ApacheRestoreInfo = "--- Restoring Apache Files\r\nSince Apache 2.4.41, at the end of a release installation, the operational files httpd.conf and httpd-vhosts.conf are copied to a backup folder.\r\nIn case of problems or unwanted changes to Apache you can restore these two files to the original Apache configuration.\r\nOf course, IN THIS CASE YOU WILL LOSE ANY CONFIGURATION CHANGES YOU MAY HAVE MADE AFTER INSTALLATION, such as module or include loads.";
$w_ApacheCompareInfo = "--- Comparing Apache versions\r\nIf you have at least two versions of Apache, you have the possibility to compare the current version with a previous version.\r\nThe following are compared:\r\n- LoadModule\r\n- Include\r\n- httpd-vhosts.conf files\r\n- httpd-ssl.conf files\r\n- openssl.cnf files\r\n- Presence and content of the Certs folder\r\nYou have the possibility to copy the configuration of an old version on the current version.\r\n*** WARNING *** No backups will be made, it is your responsibility to make backups BEFORE copying the configurations.";
$w_Refresh_Restart_Info = "--- Differences between '".$w_refresh."' and '".$w_restartWamp."'\r\n-- ".$w_refresh.":\r\n- Performs various checks,\r\n- Rereads the configuration files of Wampserver, Apache, PHP, MySQL and MariaDB,\r\n- Modifies the Wampmanager configuration file accordingly and updates the menus,\r\n- Performs a 'Graceful Restart Apache',\r\n- Reloads the Aestan Tray menu.\r\nThere is no interruption of the Apache, PHP, MySQL and MariaDB connections.\r\n\r\n-- ".$w_restartWamp.":\r\n- Stop the services :".$c_apacheService.", ".$c_mysqlService." and ".$c_mariadbService.",\r\n- Empty all the log files,\r\n- Empty the tmp folder,\r\n- Exit Wampserver,\r\n- Starts Wampserver 'normally'.\r\nThere is thus a total cut of the connections Apache, PHP, MySQL and MariaDB and put back in place these under other identifications";
$w_wampHttpsHelpTxt = "-- Wampserver HTTPS mode\r\nBefore you can create an HTTPS VirtualHost, Wampserver must be able to support it.\r\nTo do this, you need to modify some files, add others and create certificates.\r\nThis preparation will be carried out automatically by validating the menu item, if it is not already checked:\r\n\r\n   Right-click -> Wamp settings -> Wampserver ready to support https\r\n\r\nOnce this has been done, the menu item will be checked and remain so.\r\n\r\n-- Switch a VirtualHost to HTTPS mode\r\nA VirtualHost in http mode must exist and be operational.\r\nVirtualHosts that can be switched to HTTPS mode are displayed in the menu:\r\n\r\n   Left-click -> Your VirtualHosts -> HTTPS mode for VirtualHost\r\n\r\nSimply click on the VirtualHost you want to convert to HTTPS mode.\r\n   That's all there is to it!\r\n\r\n- Browser warning because self-signed certificate.\r\n-- Mozilla Firefox\r\nWarning: probable security risk\r\nAdvanced button: Error code: SEC_ERROR_UNKNOWN_ISSUER\r\nValidate: Accept risk and continue.\r\n-- Opera\r\nYour connection is not private\r\nNET::ERR_CERT_AUTHORITY_INVALID\r\nValidate: Help me understand\r\nValidate: Continue on site name (dangerous)\r\n-- Chrome\r\nYour connection is not private\r\nNET::ERR_CERT_AUTHORITY_INVALID\r\nValidate : Advanced settings\r\nValidate : Continue to site site name (dangerous)\r\n-- Edge\r\nYour connection is not private\r\nNET::ERR_CERT_AUTHORITY_INVALID\r\nValidate : Advanced\r\nContinue to site name (not secure)\r\n\r\nOf course, in principle, this will only work if the 'Force strict https mode' or similar option is not enabled in the browser settings.";
$w_MariaDBMySQLHelpTxt ="- 1 - MySQL and MariaDB\r\n- 2 - Database connection via MariaDB or MySQL\r\n- 3 - Replace the default DBMS MariaDB with MySQL and vice versa\r\n- 4 - Only one database manager - No DBMS manager\r\n- 5 - Default DBMS: none - /!\ No Default DBMS\r\n- 6 - PhpMyAdmin\r\n\r\n- 1 - MySQL and MariaDB\r\nMySQL has been supported since the beginning of Wampserver and MariaDB has been supported since Wampserver 3.0.8.\r\nFor SQL connections the default port is and always has been port 3306.\r\nBoth MySQL and MariaDB are installed by the full installer.\r\nDepending on the versions of the full installer of Wampserver you used, either MySQL or MariaDB will be the default database manager.\r\n- If MySQL is the default DBMS, it uses port 3306 and therefore MariaDB will use port 3307.\r\n- If MariaDB is the default DBMS, it uses port 3306 and therefore MySQL will use port 3308.\r\nThe default database manager is shown in the Left-Click menu of Wampmanager\r\n\r\n- 2 - Database connection via MariaDB or MySQL\r\nThe default Database manager port is 3306. Connections that do not specify the port number will always be on the default port.\r\nIf the database manager (MySQL or MariaDB) you want to use is not the default one, it is therefore imperative to specify the port number in connection requests since it will not be using the default port 3306. We repeat, without specifying the port, it will be the default port that will be used, so 3306.\r\nNormally, connection scripts do not mention the port to use. For example:\r\n\$mysqli = new mysqli('127.0.0.1', 'user', 'password', 'database');\r\nor, in procedural :\r\n\$mysqli = mysqli_connect('127.0.0.0.1', 'user', 'password', 'database');\r\n\r\nSo, to connect with a manager that doesn't use port 3306, you have to specify the port number on the connection request:\r\n\$mysqli = new mysqli('127.0.0.1', 'user', 'password', 'database', '3307');\r\nor, procedurally:\r\n\$mysqli = mysqli_connect('127.0.0.0.1', 'user', 'password', 'database', '3307');\r\n\r\nTo check the connections on the MySQL or MariaDB database manager, use the script:\r\nwamp(64)\www\testmysql.php\r\nby putting 'http://localhost/testmysql.php' in the browser address bar having first modified the script according to your parameters.\r\n\r\n- 3 - Replace the default DBMS MariaDB with MySQL and vice versa\r\nImportant note : If you want to move a database from MySQL to MariaDB or visa versa, it is IMPERATIVE to BACKUP your databases (phpMyAdmin -> EXPORT) in format - SQL before switching DBMS.\r\nThis is the only reliable way to transfer a database between MySQL and MariaDB.\r\n- There is a tool to reverse the default DBMS with one click if both are enabled (MySQL AND MariaDB):\r\n- If MySQL is the default DBMS\r\nRight-click Wampmanager icon -> Tools -> Invert default DBMS MySQL <-> MariaDB\r\nor\r\n- If MariaDB is the default DBMS\r\nRight-click Wampmanager icon -> Tools -> Invert default DBMS MariaDB <-> MySQL\r\nOf course, you still have to import your previously saved databases.\r\n\r\n- 4 - Only one database manager - No database manager\r\nYou don't have to keep both MySQL and MariaDB managers active, you can deactivate the one that you do not require. You can even disable both database managers completely if you wish :\r\nRight-Click Wampmanager Icon -> Wamp Settings -> Allow MariaDB to deactivate - removes the green Tick\r\nRight-Click Wampmanager Icon -> Wamp Settings -> Allow MySQL to deactivate - removes the green Tick\r\nYou can reactivate either of both at a leater date if you and when you want to. This does not uninstall the DBMS, it just unregisters the Windows Service for that DBMS.\r\n\r\n- 5 - Default DBMS : none - /!\ No Default DBMS\r\nThis means that none of the database managers (MariaDB and/or MySQL) use port 3306 and it is therefore imperative to specify the port number in connection requests since this is not the default port 3306.\r\nIt is then essential that you choose which DBMS you want to use by default; to do this, use the built-in tools (Right-click -> Tools) to assign port 3306 (Use a port other than xxxx) to the DBMS (MariaDB or MySQL) you want to set as default.\r\n\r\n- 6 - PhpMyAdmin\r\nPhpMyAdmin is configured to allow you access to either MySQL or MariaDB depending on which ones are active.\r\nIf both DBMS's are activated, you will see a dropdown on the Login screen, called \"Server Choice\", the default server will be shown first in the dropdown list. Select the DBMS you want to use here as part of the login process.\r\nREMEMBER, if you have different user accounts you must use the correct one for the selected DBMS.\r\nALSO: If you have the same account i.e. `root` on both DBMS's, if you have set different passwords, you need to use the right password for the account and DBMS.\r\n";

?>