<?php
// Latvieðu valodas fails WAMP domçnam
// Apakðizvçlnes Projekti un VirtualHosts
// Iestatîjumi un rîki >> peles labâs pogas klikðíis uz WAMP ikonas
// 3.0.7. Pievienoti $w_listenForApache - $w_AddListenPort - $w_deleteListenPort - $w_settings ['SupportMariaDB']
// $w_settings ['DaredevilOptions']
// $w_Size - $w_EnterSize - $w_Time - $w_EnterTime - $w_Integer - $w_EnterInteger - $w_add_VirtualHost
// 3.0.8 $w_settings ['SupportMySQL'] - $w_portUsedMaria - $w_testPortMariaUsed
// 3.0.9 $w_ext_zend
// 3.1.1 $w_defaultDBMS - $w_invertDefault - $w_changeCLI - $w_misc
// $w_settings ['ShowphmyadMenu'] - $w_settings ['ShowadminerMenu']
// 3.1.2 $w_reinstallServices - $w_settings ['mariadbUseConsolePrompt'] - $w_settings ['mysqlUseConsolePrompt']
// $w_enterServiceNameAll - $w_settings ['NotVerifyPATH'] - $w_MysqlMariaUser
// 3.1.4 $w_settings 'NotVerifyTLD' 'Tîrîðana' 'AutoCleanLogs' 'AutoCleanLogsMax' 'AutoCleanLogsMax' 'AutoCleanTmp' 'AutoCleanTmpMax' 'iniCommented'
// $w_wampReport - $w_dowampReport
// 3.1.9 $w_settings 'BackupHosts'
// 3.2.0 $w_verifySymlink - $w_settings ['NotVerifyHosts']
// 3.2.1. $w_addingVer - $w_addingVerTxt - $w_goto - $w_FileRepository
// 3.2.2 $w_MysqlMariaUser un $w_EnterSize modificçts - - $w_MySQLsqlmodeInfo $w_mysql_mode $w_phpMyAdminHelp $ w_PhpMyAdMinHelpTxt
// 3.2.3 https for wampserver.aviatechno
// 3.2.5 $w_emptyLogs - $w_emptyPHPlog - $w_emptyApaErrLog - $w_emptyApaAccLog - $w_emptyMySQLog - $w_emptyMariaLog - $w_emptyAllLog
//       $w_testAliasDir - $w_verifyxDebugdll - $w_apacheLoadedIncludes - $w_settings 'ShowWWWdirMenu'

$w_translated_by = "Latvieðu valodâ tulkojis MariOzo" 
// Projektu apakðizvçlne
$w_projectsSubMenu = 'Projekti';
// VirtualHosts apakðizvçlne
$w_virtualHostsSubMenu = 'Jûsu VirtualHosts';
$w_add_VirtualHost = 'VirtualHost pârvaldîba';
$w_aliasSubMenu = 'Aizstâjvârdi';
$w_portUsed = 'Apache izmantotais ports:';
$w_portUsedMysql = 'MySQL izmantotais ports:';
$w_portUsedMaria = 'MariaDB izmantotais ports:';
$w_testPortUsed = 'Izmantotais testa ports:';
$w_portForApache = 'Apache ports';
$w_listenForApache = 'Klausîðanâs ports, ko pievienot Apache';
$w_portForMysql = 'MySQL ports';
$w_testPortMysql = 'Pârbaudes ports 3306';
$w_testPortMysqlUsed = 'Pârbaudiet izmantoto MySQL portu:';
$w_testPortMariaUsed = 'Pârbaudiet izmantoto MariaDB portu:';


// Labâs peles pogas izvçlnes
$w_wampSettings = 'Wamp iestatîjumi';
$w_settings = array(
	'urlAddLocalhost' => 'Pievienot vietçjo hostu vietrâdî URL',
	'VirtualHostSubMenu' => 'VirtualHosts apakðizvçlne',
	'AliasSubmenu' => 'Apakðizvçlne Alias',
	'ProjectSubMenu' => 'Projektu apakðizvçlne',
	'HomepageAtStartup' => 'Wampserver mâjas lapa startçjot',
	'MenuItemOnline' => 'Izvçlnes vienums: tieðsaistç / bezsaistç',
	'ItemServicesNames' => 'Izvçlnes Rîki: pakalpojumu nosaukumu maiòa',
	'NotCheckVirtualHost' => 'Nepârbaudît VirtualHost definîcijas',
	'NotCheckDuplicate' => 'Nepârbaudît servera nosaukuma dublikâtu',
	'VhostAllLocalIp' => 'Atïaut VirtualHost lokâlo IP citâdu kâ 127.*',
	'SupportMySQL' => 'Atïaut MySQL',
	'SupportMariaDB' => 'Atïaut MariaDB',
	'DaredevilOptions' => 'Uzmanîbu: riskanti! Tikai ekspertiem. ',
	'ShowphmyadMenu' => 'Râdît izvçlnç PhpMyAdmin',
	'ShowadminerMenu' => 'Râdît Adminer izvçlnç',
	'mariadbUseConsolePrompt' => 'Mainît noklusçjuma Mariadb konsoles uzvedni',
	'mysqlUseConsolePrompt' => 'Mainît noklusçjuma Mysql konsoles uzvedni',
	'NotVerifyPATH' => 'Nepârbaudît PATH',
	'NotVerifyTLD' => 'Nepârbaudît TLD',
	'NotVerifyHosts' => 'Nepârbaudît resursdatora failu',
	'Cleaning' => 'Automâtiska tîrîðana',
	'AutoCleanLogs' => 'Automâtiski notîrît þurnâla failus',
	'AutoCleanLogsMax' => 'Lîniju skaits pirms tîrîðanas',
	'AutoCleanLogsMin' => 'Lîniju skaits pçc tîrîðanas',
	'AutoCleanTmp' => 'Automâtiski iztîrît tmp direktoriju',
	'AutoCleanTmpMax' => 'Failu skaits pirms tîrîðanas',
	'ForTestOnly' => 'Tikai testa vajadzîbâm',
	'iniCommented' => 'Komentçtâs php.ini direktîvas (; rindas sâkumâ)',
	'BackupHosts' => 'Dublçt resursdatora failu',
	'ShowWWWdirMenu' => 'Izvçlnç râdît mapi www',
);

// Ar peles labo pogu klikðíiniet uz Rîki
$w_wampTools = 'Rîki';
$w_restartDNS = 'Restartçt DNS';
$w_testConf = 'Pârbaudiet httpd.conf sintaksi';
$w_testServices = 'Pârbaudît pakalpojumu stâvokli';
$w_changeServices = 'Mainît pakalpojumu nosaukumus';
$w_enterServiceNameApache = "Ievadiet Apache pakalpojuma indeksa numuru. Tas tiks pievienots 'wampapache'";
$w_enterServiceNameMysql = "Ievadiet Mysql pakalpojuma indeksa numuru. Tas tiks pievienots 'wampmysqld'";
$w_enterServiceNameAll = "Ievadiet pakalpojumu nosaukumu sufiksa numuru (tukðs, lai atgrieztu oriìinâlos pakalpojumus)";
$w_compilerVersions = 'Pârbaudît kompilatora VC, savietojamîbas un ini failus';
$w_UseAlternatePort = 'Izmantojiet citu portu, nevis %s';
$w_AddListenPort = 'Pievienojiet Apache klausîðanâs portu';
$w_vhostConfig = 'Râdît Apache pârbaudîto VirtualHost';
$w_apacheLoadedModules = 'Râdît Apache ielâdçtos moduïus';
$w_apacheLoadedIncludes = 'Râdît ielâdçto Apache iekïauðanu';
$w_testAliasDir = 'Pârbaudît relâcijas Alias  <-> Directory';
$w_verifyxDebugdll = 'Pârbaudît neizmantotos xDebug dlls';
$w_empty = 'Tukðs';
$w_misc = 'Daþâdi';
$w_emptyAll = 'Iztukðot VISU';

$w_emptyLogs = 'Iztukðot þurnâlus';
$w_emptyPHPlog = 'Iztukðot PHP kïûdu þurnâlu';
$w_emptyApaErrLog = 'Iztukðot Apache kïûdu þurnâlu';
$w_emptyApaAccLog = 'Iztukðot Apache piekïuves þurnâlu';
$w_emptyMySQLog = 'Iztukðot MySQL þurnâlu';
$w_emptyMariaLog = 'Iztukðot MariaDB þurnâlu';
$w_emptyAllLog ='Iztukðot visus þurnâlu failus';

$w_dnsorder = 'Pârbaudît DNS meklçðanas secîbu';
$w_deleteVer = 'Dzçst neizmantotâs versijas';
$w_addingVer = 'Pievienojiet Apache, PHP, MySQL, MariaDB utt. versijas.';
$w_deleteListenPort = 'Dzçst klausîðanâs portu Apache';
$w_delete = 'Dzçst';
$w_defaultDBMS = 'Noklusçjuma DBVS:';
$w_invertDefault = 'Apgriezt noklusçjuma DBMS ';
$w_changeCLI = 'Mainît PHP CLI versiju';
$w_reinstallServices = 'Pârinstalçt visus pakalpojumus';
$w_wampReport = 'Wampserver konfigurâcijas pârskats';
$w_dowampReport = 'Izveidot'. $w_wampReport;
$w_verifySymlink = 'Pârbaudît simboliskâs saites';
$w_goto = 'Iet uz:';
$w_FileRepository = 'Saites uz Wampserver krâtuvju failiem un papildinâjumiem';

//daþâdi
$w_ext_spec = 'Îpaði paplaðinâjumi';
$w_ext_zend = 'Zend paplaðinâjumi';
$w_phpparam_info = 'Vienîgi informâcijai';
$w_ext_nodll = 'Nav dll faila';
$w_ext_noline = "Nav 'paplaðinâjuma ='";
$w_mod_fixed = "Neatgriezenisks modulis";
$w_no_module = 'Nav moduïa faila';
$w_no_moduleload = "Nav 'LoadModule'";
$w_mysql_none = "nav";
$w_mysql_user = "lietotâja reþîms";
$w_mysql_default = "pçc noklusçjuma";
$w_mysql_mode = "sql-mode paskaidrojumi";
$w_Size = "Izmçrs";
$w_Time = "Laiks";
$w_Integer = "Integer vçrtîba";
$w_phpMyAdminHelp = "PhpMyAdmin palîdzîba ";

// PromptText for Aestan Tray Menu type: uzvednes mainîgie
// Var bût \r\n daudzrindu
$w_EnterInteger = "Ievadiet veselu skaitli";
$w_enterPort = "Ievadiet vajadzîgo porta numuru";
$w_EnterSize = "Ievadiet izmçru: xxxx, kam seko M - Mega vai G - Giga \ r \ nSkaitlim jâpievieno simbols M vai G. \ r \ nPiemçram: 64M; 256M; 1G";
$w_EnterTime = "Ievadiet laiku sekundçs";
$w_MysqlMariaUser = "Ievadiet derîgu lietotâjvârdu. Ja nezinât, saglabâjiet 'root' noklusçjumâ. \ R \ nJa esat iestatîjis paroli vai nu root, vai izvçlçtajam lietotâjam, jums bûs jâievada ðî parole, kad konsolç tiek prasîts ievadît paroli: Bez paroles ievadiet taustiòu Enter";

// Gari teksti
// Pçdiòas " tekstâ ir jâatceï: \" - \r\n var bût daudzrindu 
$w_addingVerTxt = "Visi \"papildinâjumi\", t.i., visi Apache, PHP, MySQL vai MariaDB versiju instalçtâji, kâ arî atjauninâjumu (Wampserver, Aestan Tray Menu, xDebug u.c.) un tîmekïa lietojumprogrammu (PhpMyAdmin, Adminer) instalçtâji ir vietnç \r\n\r\n'https://sourceforge.net/projects/wampserver/ '\r\n\r\n Vienkârði lejupielâdçjiet vajadzîgos instalçðanas failus un palaidiet tos, ar peles labo pogu klikðíinot uz lejupielâdçtâ faila nosaukuma. failu \"Palaist kâ administratoram \", lai Wampserver versijai pievienotu pievienojumprogrammu vai lietojumprogrammu. \r\n\r\nTad Apache, PHP, MySQL vai MariaDB versijas maiòa ir trîs klikðíu jautâjums: \r\nKreisais klikðíis -> PHP | Apache | MySQL | MariaDB -> Versija -> Izvçlieties versiju \r\n\r\nVersijas maiòa nemainîs jûsu veiktâs parametru izmaiòas, kâ arî nenodod datubâzes no vecâs versijas uz jaunâko. \r\n\r\n Pastâv daudz labâk organizçta un vienmçr atjauninâta krâtuve nekâ Sourceforge: \r\n\r\n 'https: //wampserver.aviatechno.net '. \r\n\r\n Saites uz krâtuvçm atrodamas ar peles labo pogu klikðíinot -> Palîdzîba\r\n";
$w_MySQLsqlmodeInfo = "MySQL/MariaDB sql-mode\r\nSQL serveris var darboties daþâdos SQL reþîmos atkarîbâ no sql-mode direktîvas vçrtîbas.\r\nViena vai vairâku reþîmu iestatîðana ierobeþo noteiktas iespçjas un prasa lielâku stingrîbu SQL sintaksç un datu validâcijâ.\r\nsql-mode reþîma darbîba my.ini failâ ir ðâda.\r\n\r\n- sql-mode: pçc noklusçjuma\r\nnepastâv vai ir komentçts (;sql-mode=\"... \")\r\nPiemçro MySQL / MariaDB versijas noklusçjuma reþîmus\r\n\r\n- sql-mode: lietotâja reþîms\r\nKvalifikâcijas reþîma direktîva ir aizpildîta ar lietotâja definçtiem reþîmiem, piemçram :\r\nsql-mode=\"NO_ZERO_DATE,NO_ZERO_IN_DATE,NO_AUTO_CREATE_USER\"\r\n\r\n- sql-mode: none\r\nKvalifikâcijas reþîma sql reþîms ir tukðs, taèu tam jâbût:\r\nsql-mode=\"\"\r\nneviens SQL reþîms netiek lietots. ";
$w_PhpMyAdMinHelpTxt = "-- PhpMyAdmin\r\nIesâkot phpMyAdmin, jums tiks lûgts ievadît lietotâja vârdu un paroli.\r\nPçc Wampserver 3 instalçðanas noklusçjuma lietotâjvârds ir \"root\"(bez pçdiòâm) un nav parole, kas nozîmç, ka veidlapas Parole lodziòð jâatstâj tukðs.\r\n\r\nPhpMyAdmin ir konfigurçts tâ, lai ïautu piekïût MySQL vai MariaDB atkarîbâ no tâ, kuri ir aktîvi.\r\nJa abas DBVS ir aktivizçtas, jûs pieteikðanâs ekrânâ bûs redzama nolaiþamâ izvçlne ar nosaukumu \"Servera izvçle\", nolaiþamajâ sarakstâ vispirms tiks parâdîts noklusçjuma serveris. Atlasiet DBMS, kuru vçlaties izmantot ðeit kâ daïu no pieteikðanâs procesa.\r\nATCERIETIES, ja jums ir daþâdi lietotâju konti, jums jâizmanto pareizais atlasîtajam DBMS.\r\nARÎ: Ja jums ir viens un tas pats konts, t.i., 'root' abâs DBMS, ja esat iestatîjis daþâdas paroles, jums ir jâizmanto pareizâ konta un DBMS parole.\r\n";

?>