<?php
// Romanian language file for
// Projects and VirtualHosts sub-menus
// Settings and Tools right-click sub-menus
// Translated by Ciprian Murariu <ciprianmp[at]yahoo[dot]com>
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
// 3.2.2 $w_MysqlMariaUser $w_EnterSize modified
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

// Projects sub-menu
$w_projectsSubMenu = 'Proiecte personale';
// VirtualHosts sub-menu
$w_virtualHostsSubMenu = 'VirtualHosts';
$w_add_VirtualHost = 'Administrare VirtualHost';
$w_aliasSubMenu = 'Aliasuri';
$w_portUsed = 'Portul curent Apache: ';
$w_portUsedMysql = 'Portul curent MySQL: ';
$w_portUsedMaria = 'Portul curent MariaDB : ';
$w_testPortUsed = 'Testeaz� portul curent: ';
$w_portForApache = 'Portul Apache';
$w_listenForApache = 'Portul de Intrare pentru ad�ugare la Apache';
$w_portForMysql = 'Portul MySQL';
$w_testPortMysql = 'Testeaz� portul 3306';
$w_testPortMysqlUsed = 'Testeaz� portul MySQL: ';
$w_testPortMariaUsed = 'Testeaz� portul MariaDB: ';

// Right-click Settings
$w_wampSettings = 'Set�ri Wamp';
$w_settings = array(
	'urlAddLocalhost' => 'Adaug� localhost la �nceputul url-ului',
	'VirtualHostSubMenu' => 'Arat� Sub-meniul VirtualHosts',
	'AliasSubmenu' => 'Arat� Sub-meniul Alias',
	'ProjectSubMenu' => 'Arat� Sub-meniul Proiecte personale',
	'HomepageAtStartup' => 'Deschide pagina Index la pornire',
	'MenuItemOnline' => 'Arat� �n Meniu: Online / Offline',
	'ItemServicesNames' => 'Arat� �n Instrumente: Schimb� numele serviciilor',
	'CheckVirtualHost' => 'Verific� defini�iile VirtualHost',
	'NotCheckVirtualHost' => 'Nu verifica defini�iile VirtualHost',
	'NotCheckDuplicate' => 'Nu verifica dublarea Numelui Serverului',
	'VhostAllLocalIp' => 'Permite utilizarea IP-urilor locale, altele dec�t 127.*',
	'SupportMySQL' => 'Permite utilizarea MySQL',
	'SupportMariaDB' => 'Permite utilizarea MariaDB',
	'DaredevilOptions' => 'Aten�ie: Riscant! Numai pentru exper�i.',
	'ShowphmyadMenu' => 'Arat� phpMyAdmin �n Meniu',
	'ShowadminerMenu' => 'Arat� Adminer �n Meniu',
	'mariadbUseConsolePrompt' => 'Modific� prompterul implicit al consolei MariaDB',
	'mysqlUseConsolePrompt' => 'Modific� prompterul implicit al consolei MySQL',
	'NotVerifyPATH' => 'Nu testa CALEA',
	'NotVerifyTLD' => 'Nu testa TLD',
	'NotVerifyHosts' => 'Nu verifica fi�ierul hosts',
	'Cleaning' => 'Cur��are Automat�',
	'AutoCleanLogs' => 'Cur��� automat fi�ierele jurnal',
	'AutoCleanLogsMax' => 'Num�r de linii �nainte de cur��are',
	'AutoCleanLogsMin' => 'Num�r de linii dup� de cur��are',
	'AutoCleanTmp' => 'Gole�te automat directorul tmp',
	'AutoCleanTmpMax' => 'Num�r de fi�iere �nainte de cur��are',
	'ForTestOnly' => 'Numai �n scopul test�rii',
	'iniCommented' => 'Directive php.ini comentate (; la �nceputul liniei)',
	'BackupHosts' => 'Fi�ier hosts de rezerv�',
	'ShowWWWdirMenu' => 'Arat� directorul www �n Meniu',
	'ApacheWampParams' => 'Set�ri Wampserver pentru Apache',
	'apacheCompareVersion' => 'Permite compara�ia set�rilor Apache.',
	'apacheRestoreFiles' => 'Permite recuperarea fi�ierelor Apache',
	'apacheGracefulRestart' => 'Permite Repornirea For�at� Apache',
	'LinksOnProjectsHomePage' => 'Permite link-uri �n pagina de pornire a proiectelor',
	'LinksOnProjectsHomeByIp' => 'Link-uri �n proiecte prin \'IP-ul local al link-ului\'',
	'apachePhpCurlDll' => 'Permite Apache s� utilizeze libcrypto-*.dll �i libssl-*.dll din PHP',
	'ScrollListsHomePage' => 'Permite derularea listelor �n pagina de pornire',
);

// Right-click Tools
$w_wampTools = 'Instrumente';
$w_restartDNS = 'Reporne�te DNS';
$w_testConf = 'Verific� sintaxa httpd.conf';
$w_testServices = 'Verific� starea serviciilor';
$w_changeServices = 'Schimb� numele serviciilor';
$w_compilerVersions = 'Verific� compilatorul VC, compatibilitatea �i fi�ierele ini';
$w_UseAlternatePort = 'Folose�te alt port dec�t %s';
$w_AddListenPort = 'Adaug� un port de Intrare pentru Apache';
$w_vhostConfig = 'Arat� VirtualHost verificat de Apache';
$w_apacheLoadedModules = 'Arat� Modulele �nc�rcate de Apache';
$w_apacheLoadedIncludes = 'Arat� Includes �nc�rcate de Apache';
$w_apacheDefineVariables = 'Arat� variabilele Apache (Define)';
$w_showExcludedPorts = 'Arat� porturile excluse de c�tre sistem';
$w_testAliasDir = 'Verific� rela�iile Alias <-> Directory';
$w_verifyxDebugdll = 'Verific� dll-uri xDebug neutilizate';
$w_empty = 'Gole�te';
$w_misc = 'Diverse';
$w_emptyAll = 'Gole�te TOATE';

$w_emptyLogs = 'Gole�te fi�ierele jurnal';
$w_emptyPHPlog = 'Gole�te fi�ierul de erori PHP';
$w_emptyApaErrLog = 'Gole�te fi�ierul de erori Apache';
$w_emptyApaAccLog = 'Gole�te fi�ierul de acces Apache';
$w_emptyMySQLog = 'Gole�te fi�ierele jurnal MySQL';
$w_emptyMariaLog = 'Gole�te fi�ierele jurnal MariaDB';
$w_emptyAllLog ='Gole�te toate fi�ierele jurnal';

$w_dnsorder = 'Verific� ordinea de c�utare a DNS';
$w_deleteVer = '�terge versiunile neutilizate';
$w_addingVer = 'Adaug� versiuni de Apache, PHP, MySQL, MariaDB, etc.';
$w_deleteListenPort = '�terge un port de Intrare Apache';
$w_delete = '�terge';
$w_defaultDBMS = 'DBMS implicit:';
$w_NoDefaultDBMS = 'DBMS implicit: niciunul';
$w_invertDefault = 'Inverseaz� DBMS implicit ';
$w_changeCLI = 'Schimb� versiunea PHP CLI';
$w_reinstallServices = 'Reinstaleaz� toate serviciile';
$w_wampReport = 'Raportul de Configurare Wampserver';
$w_dowampReport = 'Genereaz� '.$w_wampReport;
$w_verifySymlink = 'Verific� link-uri simbolice';
$w_goto = 'Mergi la:';
$w_FileRepository = 'Link-uri c�tre arhiva de fi�iere �i addon-uri pentru Wampserver';
$w_compareApache = 'Compara�ia set�rilor Apache';
$w_versus = 'fa�� de';
$w_restorefile = 'Recupereaz� fi�ierele salvate la instalarea Apache';
$w_restore = 'Recupereaz�';
$w_checkUpdates = 'Verific� actualiz�ri';
$w_apacheTools = 'Instrumente Apache';
$w_PHPloadedExt = 'Arat� Extensiile PHP �nc�rcate';
$w_PHPversionsUse = 'Arat� utilizarea versiunilor PHP';

//miscellaneous
$w_ext_spec = 'Extensii speciale';
$w_ext_zend = 'Extensii Zend';
$w_phpparam_info = 'Informa�ii suplimentare';
$w_ext_nodll = 'Fi�ier dll inexistent';
$w_ext_noline = "Nu exist� 'extensie='";
$w_mod_fixed = "Module ireversibile";
$w_mod_not_disable = "Nu trebuiesc dezactivate";
$w_no_module = 'Fi�ier modul inexistent';
$w_no_moduleload = "Nu exist� 'LoadModule'";
$w_mysql_none = "niciunul";
$w_mysql_user = "modul utilizator";
$w_mysql_default = "implicit";
$w_mysql_mode = "Explica�ii pentru sql-mode";
$w_apache_restore = "Aten�ie recuperare Apache;";
$w_apache_compare = "Aten�ie compara�ie set�ri Apache";
$w_Refresh_Restart = "Ajutor ".$w_refresh.' - '.$w_restartWamp;
$w_Size = "M�rimea";
$w_Time = "Timpul";
$w_Integer = "Num�r �ntreg";
$w_phpMyAdminHelp = "Ajutor PhpMyAdmin";
$w_phpNotExists = 'Versiune PHP indisponibil�';
$w_All_Versions = 'Toate versiunile';
$w_phpparam_obs = 'Set�ri Depreciate | �terse | Noi';
$w_ApacheCompiledIn = 'Module �ncorporate';
$w_ApacheDoesNotIf = 'Nu impun <IfModule ModName>';

// PromptText for Aestan Tray Menu type: prompt variables
// May have \r\n for multilines
$w_EnterInteger = "Introdu un num�r �ntreg";
$w_enterPort = 'Introdu num�rul noului port';
$w_EnterSize = "Introdu M�rimea: xxxx urmat de M pentru Mega sau G pentru Giga.\r\nNum�rul trebuie �nso�it de simbolul M sau G.\r\nExemplu : 64M ; 256M ; 1G";
$w_EnterTime = "Introdu timpul �n secunde";
$w_MysqlMariaUser = "Introdu un nume de utilizator valabil. Dac� nu-l cuno�ti, p�streaz� 'root' implicit.\r\nDac� ai setat o parol� pentru root sau utilizatorul selectat, va trebui s� introduci parola c�nd �i se va cere 'Enter password:' de la consol�. F�r� parol�, apas� Enter";

// Long texts
// Quotation marks " in texts must be escaped: \" - May have \r\n for multilines
$w_addingVerTxt ="Toate \"addon-urile\", ex. toate installer-ele pentru versiunile Apache, PHP, MySQL sau MariaDB c�t �i cele pentru actualiz�ri (Wampserver, Aestan Tray Menu, xDebug, etc.), precum �i aplica�iile web (PhpMyAdmin, Adminer) se g�sesc la adresa\r\n\r\n'https://sourceforge.net/projects/wampserver/'\r\n\r\nDesc�rca�i fi�ierele pe care le dori�i �i lansa�i-le ap�s�nd click-dreapta pe numele fi�ierelor desc�rcate, iar apoi \"Ruleaz� ca administrator\" pentru a ad�uga addon-ul sau aplica�ia respectiv� la versiunea existent� de Wampserver.\r\n\r\nApoi, schimbarea versiunii de Apache, PHP, MySQL sau MariaDB se face �n doar trei pa�i:\r\nClick-St�nga pe icon -> PHP|Apache|MySQL|MariaDB -> Schimb� versiunea -> Versiune\r\n\r\nSchimbarea versiunii nu va realiza automat �i schimbarea parametrilor modifica�i anterior �i nici nu va transfera bazele de date de la vechea versiune la cea nou�.\r\n\r\nO arhiv� mult mai bine organizat� �i permanent la zi dec�t cea de la Sourceforge exist� la adresa:\r\n\r\n'https://wampserver.aviatechno.net'.\r\n\r\nLink-urile la arhive se reg�sesc cu Click-dreapta pe icon -> Ajutor\r\n";
$w_MySQLsqlmodeInfo = "MySQL/MariaDB sql-mode\r\nServerul SQL poate rula �n diferite moduri SQL, �n func�ie de valoare directivei sql-mode.\r\nSet�nd una sau mai multe directive va restric�iona anumite posibilit��i �i va cere o rigoare crescut� �n sintaxa SQL �i validarea datelor.\r\nModul de operare a directivei sql-mode din fi�ierul my.ini este urm�torul.\r\n\r\n- sql-mode: implicit\r\nDirectiva sql-mode nu exist� sau este anulat�/comentat� (;sql-mode=\"...\")\r\nSe aplic� modurile implicite pentru versiunea de MySQL/MariaDB\r\n\r\n- sql-mode: user mode\r\nDirectiva sql-mode este populat� cu moduri definite de utilizator, ca de exemplu:\r\nsql-mode=\"NO_ZERO_DATE,NO_ZERO_IN_DATE,NO_AUTO_CREATE_USER\"\r\n\r\n- sql-mode: none\r\nDirectiva sql-mode directive este goal� dar trebuie s� existe:\r\nsql-mode=\"\"\r\nNu se aplic� niciun mod SQL.";
$w_PhpMyAdMinHelpTxt = "-- PhpMyAdmin\r\nLa pornirea phpMyAdmin, se va solicita un nume de utilizator �i o parol�.\r\nDup� instalarea Wampserver 3, numele de utilizator implicit este \"root\" (f�r� ghilimele) �i f�r� parol� (c�mpul Password trebuie l�sat necompletat).\r\n\r\nPhpMyAdmin este configurat s� permit� accesul la MySQL sau MariaDB �n func�ie de care dintre ele este activ.\r\nDac� ambele DBMS sunt activate, va fi afi�at� o caset� de derulare (dropdown) �n pagina de autentificare, numit� \"Server Choice\", serverul implicit fiind primul �n list�. Se selecteaz� DBMS dorit pentru autentificare.\r\nNU UITA�I, dac� exist� conturi de utilizatori diferite, trebuie introdus cel adecvat DBMS selectat�.\r\n�N PLUS: Dac� exist� acela�i cont ex. `root` �n ambele DBMS, trebuie folosit� parola potrivit� contului �i DBMS.\r\n";
$w_PhpMyAdminBigFileTxt = "\r\n-- Importarea fi�ierelor supradimensionate\r\nPentru a permite importarea fi�ierelor mari, m�rimea maxim� a memoriei �i/sau limitele de timp nu trebuie setate �n fi�ierul php.ini ci �n fi�ierul wamp(64)\\alias\\phpmyadmin.conf.\r\n";
$w_ApacheRestoreInfo = "--- Recuperarea Fi�ierelor Apache\r\n�ncep�nd cu versiunea Apache 2.4.41, la terminarea procesului de instalare, fi�ierele opera�ionale httpd.conf �i httpd-vhosts.conf sunt copiate automat �ntr-un director de backup.\r\n�n cazul �n care sunt �nt�mpinate probleme sau se produc modific�ri nedorite �n func�ionarea Apache, se pot restaura/recupera aceste dou� fi�iere �n configura�ia original� Apache.\r\nBine�n�eles, �N ACEST CAZ SE VOR PIERDE ORICE MODIFICARE DE CONFIGURARE EFECTUAT� DUP� INSTALARE, cum ar fi schimbarea modulele sau include care s� fie �nc�rcate.";
$w_ApacheCompareInfo = "--- Comparare versiunilor Apache\r\nDac� sunt instalate cel pu�in dou� versiuni de Apache, se poate efectua compara�ia �ntre versiunea curent� �i una anterioar�.\r\nUrm�toarele sunt comparate:\r\n- LoadModule\r\n- Include\r\n- fi�ierele httpd-vhosts.conf\r\n- fi�ierele httpd-ssl.conf\r\n- fi�ierele openssl.cnf\r\n- Existen�a �i con�inutul directorului Certs\r\nSe poate copia o configura�ie dintr-o versiune anterioar� �n versiunea curent�.\r\n*** ATEN�IE *** Nu se vo executa backup-uri, acestea trebuiesc efectuate manual, �NAINTE de copierea configura�iilor.";
$w_Refresh_Restart_Info = "--- Diferen�ele �ntre '".$w_refresh."' �i '".$w_restartWamp."'\r\n-- ".$w_refresh.":\r\n- Efectueaz� diverse verific�ri,\r\n- Re�ncarc� fi�ierele de configura�ie ale Wampserver, Apache, PHP, MySQL �i MariaDB,\r\n- Modific� fi�ierele de configura�ie ale Wampmanager �i actualizeaz� meniurile,\r\n- Efectueaz� o 'Repornire For�at� a Apache',\r\n- Re�ncarc� meniul Aestan Tray din bar�.\r\nNu se vor �ntrerupe conexiunile Apache, PHP, MySQL �i/sau MariaDB.\r\n\r\n-- ".$w_restartWamp.":\r\n- Opre�te serviciile: ".$c_apacheService.", ".$c_mysqlService." �i ".$c_mariadbService.",\r\n- Gole�te toate fi�ierele jurnal,\r\n- Gole�te directorul tmp,\r\n- �nchide Wampserver,\r\n- Porne�te Wampserver 'normal'.\r\nDe aceea conexiunile Apache, PHP, MySQL �i MariaDB sunt complet �ntrerupte �i le reporne�te sub al�i identificatori";

?>