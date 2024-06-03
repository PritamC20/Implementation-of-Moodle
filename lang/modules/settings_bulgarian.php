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
// 3.3.0 $w_settings Browser BrowserChange
// Suppress apachePhpCurlDll

// Projects sub-menu
$w_projectsSubMenu = '����� �������';
// VirtualHosts sub-menu
$w_virtualHostsSubMenu = '����� ��������� �������';
$w_add_VirtualHost = '���������� �� ����������� �������';
$w_aliasSubMenu = '����� ����������';
$w_portUsed = '��������� �� Apache ����: ';
$w_portUsedMysql = '��������� �� MySQL ����: ';
$w_portUsedMaria = '��������� �� MariaDB ����: ';
$w_testPortUsed = '��������� �� ������� ����: ';
$w_portForApache = '���� �� Apache';
$w_listenForApache = '���� �� �������, ����� �� �� ������ � Apache';
$w_portForMysql = '���� �� MySQL';
$w_testPortMysql = '��������� ���� 3306';
$w_testPortMysqlUsed = '��������� ���� �� MySQL, ���������: ';
$w_testPortMariaUsed = '��������� ���� �� MariaDB, ���������: ';

// Right-click Settings
$w_wampSettings = '��������� �� WAMP';
$w_settings = array(
	'urlAddLocalhost' => '������� localhost ��� ������',
	'VirtualHostSubMenu' => '������� \'��������� �������\'',
	'AliasSubmenu' => '������� \'����������\'',
	'ProjectSubMenu' => '������� \'�������\'',
	'HomepageAtStartup' => '�������� �� Wampserver ��� ����������',
	'MenuItemOnline' => '������� � ������: ������ / ������',
	'ItemServicesNames' => '������� \'�����������\': ������� �� ������� �� ��������',
	'CheckVirtualHost' => '������� ����������� �� ����������� �������',
	'NotCheckVirtualHost' => '�� ���������� ����������� �� ����������� �������',
	'NotCheckDuplicate' => '�� ���������� �� ��������� �� ����� �� �������',
	'VhostAllLocalIp' => '������� ������ IP ������ �� ��������� �������, �������� �� 127.*',
	'SupportMySQL' => '��������� MySQL',
	'SupportMariaDB' => '��������� MariaDB',
	'DaredevilOptions' => '��������! ���������! ���� �� ��������.',
	'ShowphmyadMenu' => '�������� PhpMyAdmin � ������',
	'ShowadminerMenu' => '�������� Adminer � ������',
	'mariadbUseConsolePrompt' => '������� ������������ ������� �� MariaDB',
	'mysqlUseConsolePrompt' => '������� ������������ ������� �� MySQL',
	'NotVerifyPATH' => '�� ���������� ���� (PATH)',
	'NotVerifyTLD' => '�� ���������� ������� �� ����� ���� (TLD)',
	'NotVerifyHosts' => '�� ���������� ����� hosts',
	'Cleaning' => '����������� ����������',
	'AutoCleanLogs' => '��������� ��������� �� ���������� �����������',
	'AutoCleanLogsMax' => '���� ������, ��� ����� �� �� ������� ����������',
	'AutoCleanLogsMin' => '���� ������ ���� ������������',
	'AutoCleanTmp' => '��������� ������������ tmp �����������',
	'AutoCleanTmpMax' => '���� ������� ����� ����������',
	'ForTestOnly' => '���� �� ����������� ����',
	'iniCommented' => '����������� ��������� � php.ini (� �������� �� ���� ��� ����� � �������)',
	'BackupHosts' => '�������� ����� �� ����� hosts',
	'ShowWWWdirMenu' => '�������� ������� www � ������',
	'ApacheWampParams' => '��������� �� Wampserver �� Apache',
	'apacheCompareVersion' => '������� ��������� �� ����������� �� Apache.',
	'apacheRestoreFiles' => '������� �������������� �� ��������� �� Apache.',
	'apacheGracefulRestart' => '������� ���������� ������� �� Apache',
	'LinksOnProjectsHomePage' => '������� ������ �� ��������� �������� � ���������',
	'LinksOnProjectsHomeByIp' => '������ ��� ��������� ���� IP �� ������ �����',
	'ScrollListsHomePage' => '������� ���������� �� ��������� �� ��������� ��������',
	'WampserverBrowser' => '�������, ������� �� Wampserver',
	'BrowserChange' => '����� �������, ������� �� Wampserver',
);

// Right-click Tools
$w_wampTools = '�����������';
$w_restartDNS = '����������� DNS';
$w_testConf = '������� ���������� �� httpd.conf';
$w_testServices = '������� ����������� �� ��������';
$w_changeServices = '������� �� ������� �� ��������';
$w_compilerVersions = '������� ����������� �� VC, �������������� � .ini ���������';
$w_UseAlternatePort = '��������� �������� �� %s ����';
$w_AddListenPort = '������ ���� �� ������� �� Apache';
$w_vhostConfig = '������ ����������� �� Apache ��������� �������';
$w_apacheLoadedModules = '������ ���������� ������ �� Apache';
$w_apacheLoadedIncludes = '������ ���������� ���������� �� Apache';
$w_apacheDefineVariables = '������ ������������ �� Apache (���������)';
$w_showExcludedPorts = '������ ����������� �� ��������� �������';
$w_testAliasDir = '������� �������������� �� ������������  <-> ����������';
$w_verifyxDebugdll = '������� �� ������������ xDebug dll �������';
$w_empty = '�������';
$w_misc = '�����';
$w_emptyAll = '������� ������';

$w_emptyLogs = '���������� �� ����������';
$w_emptyPHPlog = '������� �������� �� ������ �� PHP';
$w_emptyApaErrLog = '������� �������� �� ������ �� Apache';
$w_emptyApaAccLog = '������� �������� �� ������ �� Apache';
$w_emptyMySQLog = '������� �������� �� MySQL';
$w_emptyMariaLog = '������� �������� �� MariaDB';
$w_emptyAllLog = '������� ������ ��������';

$w_dnsorder = '������� ������������������ �� ������� �� DNS';
$w_deleteVer = '������ �������������� ������';
$w_addingVer = '������ ������ �� Apache, PHP, MySQL, MariaDB � ��.';
$w_deleteListenPort = '������ ���� �� ������� �� Apache';
$w_delete = '������';
$w_defaultDBMS = '���������� ����:';
$w_NoDefaultDBMS = '���������� ����: ����';
$w_invertDefault = '������� ������������ ���� ';
$w_changeCLI = '������� �������� �� PHP CLI';
$w_reinstallServices = '������������� ������ ������';
$w_wampReport = '����� �� �������������� �� WampServer';
$w_dowampReport = '������ '.$w_wampReport;
$w_verifySymlink = '������� ������������ ������';
$w_goto = '����� ��:';
$w_FileRepository = '������ ��� ����������� �� WampServer �� ������� � �������';
$w_compareApache = '��������� �� ����������� �� Apache';
$w_versus = '������';
$w_restorefile = '���������� ���������, �������� ��� ������������ �� Apache';
$w_restore = '����������';
$w_checkUpdates = '������� �� ����������';
$w_apacheTools = '����������� �� Apache';
$w_PHPloadedExt = '������ ���������� ���������� �� PHP';
$w_PHPversionsUse = '������ ��� �� ��������� �������� �� PHP';

//miscellaneous
$w_ext_spec = '��������� ����������';
$w_ext_zend = '���������� �� Zend';
$w_phpparam_info = '���� �� ����������';
$w_ext_nodll = '������ dll ����';
$w_ext_noline = "������ 'extension='";
$w_mod_fixed = "������� �� ���� �� ���� �������.";
$w_mod_not_disable = "���� ������ �� ���� �� �� ���������.";
$w_no_module = '������ �� ������ ������.';
$w_no_moduleload = "������ 'LoadModule'";
$w_mysql_none = "����";
$w_mysql_user = "������������� �����";
$w_mysql_default = "�� ������������";
$w_mysql_mode = "��������� �� sql-mode";
$w_apache_restore = "�������������� �� �������������� �� Apache";
$w_apache_compare = "�������������� �� ��������� �� ����������� �� Apache";
$w_Refresh_Restart = "����� ".$w_refresh.' - '.$w_restartWamp;
$w_Size = "������";
$w_Time = "���";
$w_Integer = "����������� ��������";
$w_phpMyAdminHelp = "����� �� PhpMyAdmin";
$w_phpNotExists = '�������� �� PHP �� ����������';
$w_All_Versions = '������ ������';
$w_phpparam_obs = '��������� �� �������� | ������� | ����';
$w_ApacheCompiledIn = '�������� ������';
$w_ApacheDoesNotIf = '�� �������� <IfModule ModName>.';

// PromptText for Aestan Tray Menu type: prompt variables
// May have \r\n for multilines
$w_EnterInteger = "������ ���� �����";
$w_enterPort = "������ ������ �� ������� ����";
$w_EnterSize = "������ ������: xxxx � ���� ���� M �� \'����\' � G �� \'����\'.\r\n�������� M ��� G ������ �� ���� ������� �� �������.\r\n��������: 64M ; 256M ; 1G.";
$w_EnterTime = "������ ������� � �������";
$w_MysqlMariaUser = "������ ������� ������������� ���. ��� �� ����� �����, ������ root �� ������������.\r\n��� �� ����� ������ �� root ��� �� ��������� �� ��� ������������� ���, �� ������ �� � �������, ������ ����� Enter password: � ���������. ��� �� �� ����� ������, ������� Enter.";

// Long texts
// Quotation marks " in texts must be escaped: \" - May have \r\n for multilines
$w_addingVerTxt = "������ \"�������\", �.�. ������ ����������� �� ������ �� Apache, PHP, MySQL � MariaDB, ����� � �� ���������� (Wampserver, Aestan Tray Menu, xDebug � ��.) � ��� ���������� (PhpMyAdmin, Adminer) �� ������� ��\r\n\r\n'https://sourceforge.net/projects/wampserver/'\r\n\r\n������ ������� ��������������� ������� � �� ���������, ���� ������� ����� ��� � ������ ����� �� ������� � ������� \"������� ���� �������������\", �� �� �� ������ ��������� ��� ������������ ��� ������ ������ �� Wampserver.\r\n\r\n���� ���� ������� �� �������� �� Apache, PHP, MySQL ��� MariaDB ����� ���� � ��� ���������:\r\n� ��� ����� -> PHP|Apache|MySQL|MariaDB -> ������ -> ������ ������\r\n\r\n��������� �� �������� �� ��������� ��������� �� �����������, ����� �� ������, ���� ��������� ������ ����� ��� ������ ������.\r\n\r\n���������� ����� ��-����� ������������ � ������ �������� ��������� �� Sourceforge:\r\n\r\n'https://wampserver.aviatechno.net'.\r\n\r\n�������� ��� ����������� �� ������� ��� ����� ����� -> �����\r\n";
$w_MySQLsqlmodeInfo = "MySQL/MariaDB sql-mode\r\nSQL �������� ���� �� ������ � �������� SQL ������ � ���������� �� ���������� �� ����������� �� sql-mode.\r\n���������� �� ���� ��� ������ ������ ���������� ����� ����������� � ������� ��-������ �������� ��� ���������� �� SQL � ����������� �� �������.\r\n�������� �� ���������� sql-mode ��� ����� my.ini � ����� ������:\r\n\r\n- sql-mode: by default\r\n����������� sql-mode �� ���������� ��� � ������������� (;sql-mode=\"...\").\r\n�������� �� ������������ ������ �� �������� �� MySQL/MariaDB.\r\n\r\n- sql-mode: user mode\r\n����������� sql-mode � ��������� � ���������� �� ����������� ������, �������� :\r\nsql-mode=\"NO_ZERO_DATE,NO_ZERO_IN_DATE,NO_AUTO_CREATE_USER\"\r\n\r\n- sql-mode: none\r\n����������� sql-mode � ������, �� ������ �� ����������:\r\nsql-mode=\"\"\r\n�� �� ������� SQL �����.";
$w_PhpMyAdMinHelpTxt = "-- PhpMyAdmin\r\n������ ��������� phpMyAdmin, �� �� ����� �������� ������������� ��� � ������.\r\n������ ���������� WampServer 3, ��������������� ��� �� ������������ � \"root\" (��� ���������) � ���� ������, ����� ��������, �� ������ �� ������� ������ Password ������.\r\n\r\nPhpMyAdmin � ������������ �� ��������� ������ �� MySQL ��� MariaDB, � ���������� �� ���� ��� � �������.\r\n��� �� ���������� � ����� ����, �� ������ �� ���� �� ��� ����� ������, ��������� \"Server Choice\" (\"����� �� ������\"), ���� �������� �� ������������ �� ���� ����� � �������. ������ ����, ����� ����� �� ��������� ��� ���� ���� �� ����������� �� ����.\r\n�� ����������, �� ��� ���� �������� ������������� �����, �� ������ �� ��������� ���������� �� ��������� ��������� ����.\r\n����� ����: ��� ���� ���� � ���� ������������� ���, ����. root, � �� ����� ����, �� �� ����� �������� ������, �� ������ �� ��������� ���������� �� ����������� ����.\r\n";
$w_PhpMyAdminBigFileTxt = "\r\n-- ����������� �� ������ �������\r\n������ ���������� ������ �������, ���� �� ����� ��������� ������������� �� ����. ����� � �����������.\r\n��������� �� ������������� �� ������� � ������������� �� ���� �� �� ������ � php.ini, � ��� ����� wamp(64)\\alias\\phpmyadmin.conf.\r\n";
$w_ApacheRestoreInfo = "--- �������������� �� ��������� �� Apache\r\n�� Apache 2.4.41, � ���� �� ������������ �� �������, ��������� ������� httpd.conf � httpd-vhosts.conf �� ������� � ����� �� �������� �����.\r\n� ������ �� ������� ��� �� �������� ������� �� Apache ����� �� ����������� ���� ��� ����� ��� ������������ �� ������������.\r\n������� ��, � ����� ������ �� ������� ������ ��������������� �������, ����� �� �������� ���� ������������, ���� �������� ������ � ����������, ����� �� �� ��������.";
$w_ApacheCompareInfo = "--- ���������� �� ������ �� Apache\r\n��� ���� ���� ��� ������ �� Apache, ����� �� ������� �������� � �������� ������.\r\n��������� �� �������� ����:\r\n- LoadModule\r\n- Include\r\n- ��������� httpd-vhosts.conf\r\n- ��������� httpd-ssl.conf\r\n- ��������� openssl.cnf\r\n- ��������� � ������������ �� ������� Certs\r\n����� �� ������� �������������� �� ��-����� ������ ����� ���� �� ��������.\r\n*** �������� *** �� �� ������ �������� �����. ���� ����������� � �� �������� �������� �����, ����� �� ������� ��������������.";
$w_Refresh_Restart_Info = "--- ��������� ����� '".$w_refresh."' � '".$w_restartWamp."'\r\n-- ".$w_refresh.":\r\n- ��������� �� �������� ��������,\r\n- ������� ������ ����������������� ������� �� Wampserver, Apache, PHP, MySQL � MariaDB,\r\n- ������� ���������������� ���� �� Wampmanager �� ���������� ����� � �������� ��������,\r\n- ��������� '���������� ������� �� Apache',\r\n- ���������� ������ Aestan Tray.\r\n���� ���������� �� �������� �� Apache, PHP, MySQL � MariaDB.\r\n\r\n-- ".$w_restartWamp.":\r\n- ����� �������� :".$c_apacheService.", ".$c_mysqlService." � ".$c_mariadbService.",\r\n- �������� ������ ��������,\r\n- �������� ������� tmp,\r\n- ����� �� Wampserver,\r\n- �������� Wampserver '��������'.\r\n���� �� �������� ����� ���������� �� �������� �� Apache, PHP, MySQL � MariaDB �� ������������ ��� ����� �������������.";

?>