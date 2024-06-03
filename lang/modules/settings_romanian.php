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
$w_testPortUsed = 'Testeazã portul curent: ';
$w_portForApache = 'Portul Apache';
$w_listenForApache = 'Portul de Intrare pentru adãugare la Apache';
$w_portForMysql = 'Portul MySQL';
$w_testPortMysql = 'Testeazã portul 3306';
$w_testPortMysqlUsed = 'Testeazã portul MySQL: ';
$w_testPortMariaUsed = 'Testeazã portul MariaDB: ';

// Right-click Settings
$w_wampSettings = 'Setãri Wamp';
$w_settings = array(
	'urlAddLocalhost' => 'Adaugã localhost la începutul url-ului',
	'VirtualHostSubMenu' => 'Aratã Sub-meniul VirtualHosts',
	'AliasSubmenu' => 'Aratã Sub-meniul Alias',
	'ProjectSubMenu' => 'Aratã Sub-meniul Proiecte personale',
	'HomepageAtStartup' => 'Deschide pagina Index la pornire',
	'MenuItemOnline' => 'Aratã în Meniu: Online / Offline',
	'ItemServicesNames' => 'Aratã în Instrumente: Schimbã numele serviciilor',
	'CheckVirtualHost' => 'Verificã definiþiile VirtualHost',
	'NotCheckVirtualHost' => 'Nu verifica definiþiile VirtualHost',
	'NotCheckDuplicate' => 'Nu verifica dublarea Numelui Serverului',
	'VhostAllLocalIp' => 'Permite utilizarea IP-urilor locale, altele decât 127.*',
	'SupportMySQL' => 'Permite utilizarea MySQL',
	'SupportMariaDB' => 'Permite utilizarea MariaDB',
	'DaredevilOptions' => 'Atenþie: Riscant! Numai pentru experþi.',
	'ShowphmyadMenu' => 'Aratã phpMyAdmin în Meniu',
	'ShowadminerMenu' => 'Aratã Adminer în Meniu',
	'mariadbUseConsolePrompt' => 'Modificã prompterul implicit al consolei MariaDB',
	'mysqlUseConsolePrompt' => 'Modificã prompterul implicit al consolei MySQL',
	'NotVerifyPATH' => 'Nu testa CALEA',
	'NotVerifyTLD' => 'Nu testa TLD',
	'NotVerifyHosts' => 'Nu verifica fiºierul hosts',
	'Cleaning' => 'Curãþare Automatã',
	'AutoCleanLogs' => 'Curãþã automat fiºierele jurnal',
	'AutoCleanLogsMax' => 'Numãr de linii înainte de curãþare',
	'AutoCleanLogsMin' => 'Numãr de linii dupã de curãþare',
	'AutoCleanTmp' => 'Goleºte automat directorul tmp',
	'AutoCleanTmpMax' => 'Numãr de fiºiere înainte de curãþare',
	'ForTestOnly' => 'Numai în scopul testãrii',
	'iniCommented' => 'Directive php.ini comentate (; la începutul liniei)',
	'BackupHosts' => 'Fiºier hosts de rezervã',
	'ShowWWWdirMenu' => 'Aratã directorul www în Meniu',
	'ApacheWampParams' => 'Setãri Wampserver pentru Apache',
	'apacheCompareVersion' => 'Permite comparaþia setãrilor Apache.',
	'apacheRestoreFiles' => 'Permite recuperarea fiºierelor Apache',
	'apacheGracefulRestart' => 'Permite Repornirea Forþatã Apache',
	'LinksOnProjectsHomePage' => 'Permite link-uri în pagina de pornire a proiectelor',
	'LinksOnProjectsHomeByIp' => 'Link-uri în proiecte prin \'IP-ul local al link-ului\'',
	'apachePhpCurlDll' => 'Permite Apache sã utilizeze libcrypto-*.dll ºi libssl-*.dll din PHP',
	'ScrollListsHomePage' => 'Permite derularea listelor în pagina de pornire',
);

// Right-click Tools
$w_wampTools = 'Instrumente';
$w_restartDNS = 'Reporneºte DNS';
$w_testConf = 'Verificã sintaxa httpd.conf';
$w_testServices = 'Verificã starea serviciilor';
$w_changeServices = 'Schimbã numele serviciilor';
$w_compilerVersions = 'Verificã compilatorul VC, compatibilitatea ºi fiºierele ini';
$w_UseAlternatePort = 'Foloseºte alt port decât %s';
$w_AddListenPort = 'Adaugã un port de Intrare pentru Apache';
$w_vhostConfig = 'Aratã VirtualHost verificat de Apache';
$w_apacheLoadedModules = 'Aratã Modulele încãrcate de Apache';
$w_apacheLoadedIncludes = 'Aratã Includes încãrcate de Apache';
$w_apacheDefineVariables = 'Aratã variabilele Apache (Define)';
$w_showExcludedPorts = 'Aratã porturile excluse de cãtre sistem';
$w_testAliasDir = 'Verificã relaþiile Alias <-> Directory';
$w_verifyxDebugdll = 'Verificã dll-uri xDebug neutilizate';
$w_empty = 'Goleºte';
$w_misc = 'Diverse';
$w_emptyAll = 'Goleºte TOATE';

$w_emptyLogs = 'Goleºte fiºierele jurnal';
$w_emptyPHPlog = 'Goleºte fiºierul de erori PHP';
$w_emptyApaErrLog = 'Goleºte fiºierul de erori Apache';
$w_emptyApaAccLog = 'Goleºte fiºierul de acces Apache';
$w_emptyMySQLog = 'Goleºte fiºierele jurnal MySQL';
$w_emptyMariaLog = 'Goleºte fiºierele jurnal MariaDB';
$w_emptyAllLog ='Goleºte toate fiºierele jurnal';

$w_dnsorder = 'Verificã ordinea de cãutare a DNS';
$w_deleteVer = 'ªterge versiunile neutilizate';
$w_addingVer = 'Adaugã versiuni de Apache, PHP, MySQL, MariaDB, etc.';
$w_deleteListenPort = 'ªterge un port de Intrare Apache';
$w_delete = 'ªterge';
$w_defaultDBMS = 'DBMS implicit:';
$w_NoDefaultDBMS = 'DBMS implicit: niciunul';
$w_invertDefault = 'Inverseazã DBMS implicit ';
$w_changeCLI = 'Schimbã versiunea PHP CLI';
$w_reinstallServices = 'Reinstaleazã toate serviciile';
$w_wampReport = 'Raportul de Configurare Wampserver';
$w_dowampReport = 'Genereazã '.$w_wampReport;
$w_verifySymlink = 'Verificã link-uri simbolice';
$w_goto = 'Mergi la:';
$w_FileRepository = 'Link-uri cãtre arhiva de fiºiere ºi addon-uri pentru Wampserver';
$w_compareApache = 'Comparaþia setãrilor Apache';
$w_versus = 'faþã de';
$w_restorefile = 'Recupereazã fiºierele salvate la instalarea Apache';
$w_restore = 'Recupereazã';
$w_checkUpdates = 'Verificã actualizãri';
$w_apacheTools = 'Instrumente Apache';
$w_PHPloadedExt = 'Aratã Extensiile PHP încãrcate';
$w_PHPversionsUse = 'Aratã utilizarea versiunilor PHP';

//miscellaneous
$w_ext_spec = 'Extensii speciale';
$w_ext_zend = 'Extensii Zend';
$w_phpparam_info = 'Informaþii suplimentare';
$w_ext_nodll = 'Fiºier dll inexistent';
$w_ext_noline = "Nu existã 'extensie='";
$w_mod_fixed = "Module ireversibile";
$w_mod_not_disable = "Nu trebuiesc dezactivate";
$w_no_module = 'Fiºier modul inexistent';
$w_no_moduleload = "Nu existã 'LoadModule'";
$w_mysql_none = "niciunul";
$w_mysql_user = "modul utilizator";
$w_mysql_default = "implicit";
$w_mysql_mode = "Explicaþii pentru sql-mode";
$w_apache_restore = "Atenþie recuperare Apache;";
$w_apache_compare = "Atenþie comparaþie setãri Apache";
$w_Refresh_Restart = "Ajutor ".$w_refresh.' - '.$w_restartWamp;
$w_Size = "Mãrimea";
$w_Time = "Timpul";
$w_Integer = "Numãr Întreg";
$w_phpMyAdminHelp = "Ajutor PhpMyAdmin";
$w_phpNotExists = 'Versiune PHP indisponibilã';
$w_All_Versions = 'Toate versiunile';
$w_phpparam_obs = 'Setãri Depreciate | ªterse | Noi';
$w_ApacheCompiledIn = 'Module încorporate';
$w_ApacheDoesNotIf = 'Nu impun <IfModule ModName>';

// PromptText for Aestan Tray Menu type: prompt variables
// May have \r\n for multilines
$w_EnterInteger = "Introdu un numãr întreg";
$w_enterPort = 'Introdu numãrul noului port';
$w_EnterSize = "Introdu Mãrimea: xxxx urmat de M pentru Mega sau G pentru Giga.\r\nNumãrul trebuie însoþit de simbolul M sau G.\r\nExemplu : 64M ; 256M ; 1G";
$w_EnterTime = "Introdu timpul în secunde";
$w_MysqlMariaUser = "Introdu un nume de utilizator valabil. Dacã nu-l cunoºti, pãstreazã 'root' implicit.\r\nDacã ai setat o parolã pentru root sau utilizatorul selectat, va trebui sã introduci parola când þi se va cere 'Enter password:' de la consolã. Fãrã parolã, apasã Enter";

// Long texts
// Quotation marks " in texts must be escaped: \" - May have \r\n for multilines
$w_addingVerTxt ="Toate \"addon-urile\", ex. toate installer-ele pentru versiunile Apache, PHP, MySQL sau MariaDB cât ºi cele pentru actualizãri (Wampserver, Aestan Tray Menu, xDebug, etc.), precum ºi aplicaþiile web (PhpMyAdmin, Adminer) se gãsesc la adresa\r\n\r\n'https://sourceforge.net/projects/wampserver/'\r\n\r\nDescãrcaþi fiºierele pe care le doriþi ºi lansaþi-le apãsând click-dreapta pe numele fiºierelor descãrcate, iar apoi \"Ruleazã ca administrator\" pentru a adãuga addon-ul sau aplicaþia respectivã la versiunea existentã de Wampserver.\r\n\r\nApoi, schimbarea versiunii de Apache, PHP, MySQL sau MariaDB se face în doar trei paºi:\r\nClick-Stânga pe icon -> PHP|Apache|MySQL|MariaDB -> Schimbã versiunea -> Versiune\r\n\r\nSchimbarea versiunii nu va realiza automat ºi schimbarea parametrilor modificaþi anterior ºi nici nu va transfera bazele de date de la vechea versiune la cea nouã.\r\n\r\nO arhivã mult mai bine organizatã ºi permanent la zi decât cea de la Sourceforge existã la adresa:\r\n\r\n'https://wampserver.aviatechno.net'.\r\n\r\nLink-urile la arhive se regãsesc cu Click-dreapta pe icon -> Ajutor\r\n";
$w_MySQLsqlmodeInfo = "MySQL/MariaDB sql-mode\r\nServerul SQL poate rula în diferite moduri SQL, în funcþie de valoare directivei sql-mode.\r\nSetând una sau mai multe directive va restricþiona anumite posibilitãþi ºi va cere o rigoare crescutã în sintaxa SQL ºi validarea datelor.\r\nModul de operare a directivei sql-mode din fiºierul my.ini este urmãtorul.\r\n\r\n- sql-mode: implicit\r\nDirectiva sql-mode nu existã sau este anulatã/comentatã (;sql-mode=\"...\")\r\nSe aplicã modurile implicite pentru versiunea de MySQL/MariaDB\r\n\r\n- sql-mode: user mode\r\nDirectiva sql-mode este populatã cu moduri definite de utilizator, ca de exemplu:\r\nsql-mode=\"NO_ZERO_DATE,NO_ZERO_IN_DATE,NO_AUTO_CREATE_USER\"\r\n\r\n- sql-mode: none\r\nDirectiva sql-mode directive este goalã dar trebuie sã existe:\r\nsql-mode=\"\"\r\nNu se aplicã niciun mod SQL.";
$w_PhpMyAdMinHelpTxt = "-- PhpMyAdmin\r\nLa pornirea phpMyAdmin, se va solicita un nume de utilizator ºi o parolã.\r\nDupã instalarea Wampserver 3, numele de utilizator implicit este \"root\" (fãrã ghilimele) ºi fãrã parolã (câmpul Password trebuie lãsat necompletat).\r\n\r\nPhpMyAdmin este configurat sã permitã accesul la MySQL sau MariaDB în funcþie de care dintre ele este activ.\r\nDacã ambele DBMS sunt activate, va fi afiºatã o casetã de derulare (dropdown) în pagina de autentificare, numitã \"Server Choice\", serverul implicit fiind primul în listã. Se selecteazã DBMS dorit pentru autentificare.\r\nNU UITAÞI, dacã existã conturi de utilizatori diferite, trebuie introdus cel adecvat DBMS selectatã.\r\nÎN PLUS: Dacã existã acelaºi cont ex. `root` în ambele DBMS, trebuie folositã parola potrivitã contului ºi DBMS.\r\n";
$w_PhpMyAdminBigFileTxt = "\r\n-- Importarea fiºierelor supradimensionate\r\nPentru a permite importarea fiºierelor mari, mãrimea maximã a memoriei ºi/sau limitele de timp nu trebuie setate în fiºierul php.ini ci în fiºierul wamp(64)\\alias\\phpmyadmin.conf.\r\n";
$w_ApacheRestoreInfo = "--- Recuperarea Fiºierelor Apache\r\nÎncepând cu versiunea Apache 2.4.41, la terminarea procesului de instalare, fiºierele operaþionale httpd.conf ºi httpd-vhosts.conf sunt copiate automat într-un director de backup.\r\nÎn cazul în care sunt întâmpinate probleme sau se produc modificãri nedorite în funcþionarea Apache, se pot restaura/recupera aceste douã fiºiere în configuraþia originalã Apache.\r\nBineînþeles, ÎN ACEST CAZ SE VOR PIERDE ORICE MODIFICARE DE CONFIGURARE EFECTUATÃ DUPÃ INSTALARE, cum ar fi schimbarea modulele sau include care sã fie încãrcate.";
$w_ApacheCompareInfo = "--- Comparare versiunilor Apache\r\nDacã sunt instalate cel puþin douã versiuni de Apache, se poate efectua comparaþia între versiunea curentã ºi una anterioarã.\r\nUrmãtoarele sunt comparate:\r\n- LoadModule\r\n- Include\r\n- fiºierele httpd-vhosts.conf\r\n- fiºierele httpd-ssl.conf\r\n- fiºierele openssl.cnf\r\n- Existenþa ºi conþinutul directorului Certs\r\nSe poate copia o configuraþie dintr-o versiune anterioarã în versiunea curentã.\r\n*** ATENÞIE *** Nu se vo executa backup-uri, acestea trebuiesc efectuate manual, ÎNAINTE de copierea configuraþiilor.";
$w_Refresh_Restart_Info = "--- Diferenþele între '".$w_refresh."' ºi '".$w_restartWamp."'\r\n-- ".$w_refresh.":\r\n- Efectueazã diverse verificãri,\r\n- Reîncarcã fiºierele de configuraþie ale Wampserver, Apache, PHP, MySQL ºi MariaDB,\r\n- Modificã fiºierele de configuraþie ale Wampmanager ºi actualizeazã meniurile,\r\n- Efectueazã o 'Repornire Forþatã a Apache',\r\n- Reîncarcã meniul Aestan Tray din barã.\r\nNu se vor întrerupe conexiunile Apache, PHP, MySQL ºi/sau MariaDB.\r\n\r\n-- ".$w_restartWamp.":\r\n- Opreºte serviciile: ".$c_apacheService.", ".$c_mysqlService." ºi ".$c_mariadbService.",\r\n- Goleºte toate fiºierele jurnal,\r\n- Goleºte directorul tmp,\r\n- Închide Wampserver,\r\n- Porneºte Wampserver 'normal'.\r\nDe aceea conexiunile Apache, PHP, MySQL ºi MariaDB sunt complet întrerupte ºi le reporneºte sub alþi identificatori";

?>