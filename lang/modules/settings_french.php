<?php
// French language file for
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
// $w_enterServiceNameAll $w_settings['NotVerifyPATH' -> $w_MysqlMariaUse,
// 3.1.4 $w_settings 'NotVerifyTLD' 'Cleaning' 'AutoCleanLogs' 'AutoCleanLogsMax' 'AutoCleanLogsMax' 'AutoCleanTmp' 'AutoCleanTmpMax' 'iniCommented'
// $w_wampReport - $w_dowampReport
// 3.1.9 $w_settings 'BackupHosts'
// 3.2.0 $w_verifySymlink  - $w_settings['NotVerifyHosts']
// 3.2.1 $w_addingVer - $w_addingVerTxt - $w_goto - $w_FileRepository
// 3.2.2 $w_MysqlMariaUser et $w_EnterSize modifiés - $w_MySQLsqlmodeInfo $w_mysql_mode $w_phpMyAdminHelp $w_PhpMyAdMinHelpTxt
// 3.2.3 https for wampserver.aviatechno
// 3.2.5 $w_emptyLogs - $w_emptyPHPlog - $w_emptyApaErrLog - $w_emptyApaAccLog - $w_emptyMySQLog - $w_emptyMariaLog - $w_emptyAllLog
//       $w_testAliasDir - $w_verifyxDebugdll - $w_apacheLoadedIncludes - $w_settings 'ShowWWWdirMenu'
// 3.2.6 $w_compareApache - $w_versus - $w_restorefile - $w_restore - $w_apache_restore - $w_ApacheRestoreInfo - $w_apache_restore
//       $w_ApacheCompareInfo - $w_apacheDefineVariables - $w_Refresh_Restart - $w_Refresh_Restart_Info
//       $w_checkUpdates - $w_PhpMyAdminBigFileTxt - $w_apacheTools - $w_PHPloadedExt
//       $w_settings  apacheCompareVersion - apacheRestoreFiles - apacheGracefulRestart - LinksOnProjectsHomePage
//                    ApacheWampParams - apachePhpCurlDll
//       Suppression de : $w_enterServiceNameApache - $w_enterServiceNameMysql - $w_enterServiceNameAll
// 3.2.7 $w_showExcludedPorts
// 3.2.8 $w_phpNotExists - LinksOnProjectsHomeByIp - CheckVirtualHost - $w_PHPversionsUse - $w_All_Versions
//       $w_settings 	ScrollListsHomePage
// 3.2.9 $w_phpparam_obs - $w_ApacheCompiledIn - $w_ApacheDoesNotIf - $w_mod_not_disable
//       $w_NoDefaultDBMS
// 3.3.0 $w_settings WamperverBrowser BrowserChange
//       suppress apachePhpCurlDll
// 3.3.2 $w_PhpMyAdminGoHidedb - $w_PhpMyAdminGoNoPassword - $w_ConvertHttps - $w_wampHttpsHelp - $w_wampHttpsHelpTxt
//       $w_MariaDBMySQLHelp - $w_MariaDBMySQLHelpTxt - $w_settings httpsReady
//       suppress $w_settings['ShowphmyadMenu']


// Projects sub-menu
$w_projectsSubMenu = 'Vos projets';
// VirtualHosts sub-menu
$w_virtualHostsSubMenu = 'Vos VirtualHosts';
$w_add_VirtualHost = 'Gestion VirtualHost';
$w_aliasSubMenu = 'Vos Alias';
$w_portUsed = 'Port utilisé par Apache : ';
$w_portUsedMysql = 'Port utilisé par MySQL : ';
$w_portUsedMaria = 'Port utilisé par MariaDB : ';
$w_testPortUsed = 'Tester port utilisé : ';
$w_portForApache = 'Port pour Apache';
$w_listenForApache = 'Listen Port à ajouter à Apache';
$w_portForMyql = 'Port pour MySQL';
$w_testPortMysql = 'Tester le port 3306';
$w_testPortMysqlUsed = 'Tester port MySQL utilisé : ';
$w_testPortMariaUsed = 'Tester port MariaDB utilisé : ';

// Right-click Settings
$w_wampSettings = 'Paramètres Wamp';
$w_settings = array(
	'urlAddLocalhost' => 'Ajouter localhost dans url',
	'VirtualHostSubMenu' => 'Sous-menu VirtualHosts',
	'AliasSubmenu' => 'Sous-menu Alias',
	'ProjectSubMenu' => 'Sous-menu Projets',
	'HomepageAtStartup' => 'Page d\'accueil Wampserver au démarrage',
	'MenuItemOnline' => 'Item menu : En Ligne/Hors Ligne',
	'ItemServicesNames' => 'Item menu Outils : Changer noms des services',
	'CheckVirtualHost' => 'Vérification définitions VirtualHost',
	'NotCheckVirtualHost' => 'Ne pas vérifier les définitions des VirtualHost',
	'NotCheckDuplicate' => 'Ne pas vérifier ServerName dupliqués',
	'VhostAllLocalIp' => 'Autoriser IP locales VirtualHost autres que 127.*',
	'SupportMySQL' => 'Autoriser MySQL',
	'SupportMariaDB' => 'Autoriser MariaDB',
	'DaredevilOptions' => 'Attention: risqué ! Uniquement pour expert',
	'ShowadminerMenu' => 'Afficher Adminer dans Menu',
	'mariadbUseConsolePrompt' => 'Changer prompt console MariaDB',
	'mysqlUseConsolePrompt' => 'Changer prompt console MySQL',
	'NotVerifyPATH' => 'Ne pas vérifier PATH',
	'NotVerifyTLD' => 'Ne pas vérifier TLD',
	'NotVerifyHosts' => 'Ne pas vérifier fichier hosts',
	'Cleaning' => 'Netoyage automatique',
	'AutoCleanLogs' => 'Nettoyer fichiers de logs automatiquement',
	'AutoCleanLogsMax' => 'Nombre de lignes avant nettoyage',
	'AutoCleanLogsMin' => 'Nombre de lignes après nettoyage',
	'AutoCleanTmp' => 'Nettoyer dossier tmp automatiquement',
	'AutoCleanTmpMax' => 'Nombre de fichiers avant nettoyage',
	'ForTestOnly' => 'Only for test purpose',
	'iniCommented' => 'Directives php.ini commentées (; au début de la ligne)',
	'BackupHosts' => 'Sauvegarde fichier hosts',
	'ShowWWWdirMenu' => 'Afficher dossier www dans menu',
	'ApacheWampParams' => 'Paramètres Wampserver pour Apache',
	'apacheCompareVersion' => 'Autoriser comparaison configurations Apache',
	'apacheRestoreFiles' => 'Autoriser retauration fichiers Apache',
	'apacheGracefulRestart' => 'Autoriser Apache Graceful Restart',
	'LinksOnProjectsHomePage' => 'Autoriser liens sur les projets page d\'accueil',
	'LinksOnProjectsHomeByIp' => 'Liens sur les projets par IP \'link local\'',
	'ScrollListsHomePage' => 'Autoriser le défilement des listes page d\'accueil',
	'WampserverBrowser' => 'Navigateur Wampserver',
	'BrowserChange' => 'Choisir le navigateur Wampserver',
	'httpsReady' => 'Wampserver prêt pour supporter https',
);

// Right-click Tools
$w_wampTools = 'Outils';
$w_restartDNS = 'Redémarrage DNS';
$w_testConf = 'Vérifier syntaxe httpd.conf';
$w_testServices = 'Vérifier l\'état des services';
$w_changeServices = 'Changer le nom des services';
$w_compilerVersions = 'Vérifier compilateur VC, compatibilités et fichiers ini';
$w_UseAlternatePort = 'Utiliser un port autre que %s';
$w_AddListenPort = 'Ajouter un Listen port à Apache';
$w_vhostConfig = 'Afficher les VirtualHost examinés par Apache';
$w_apacheLoadedModules = 'Afficher les modules Apache chargés';
$w_apacheLoadedIncludes = 'Afficher les includes Apache chargés';
$w_apacheDefineVariables = 'Afficher les variables Apache (Define)';
$w_showExcludedPorts = 'Voir les ports exclus par le Systéme';
$w_testAliasDir = 'Vérifier relations Alias <-> Directory';
$w_verifyxDebugdll = 'Vérifier xDebug dll inutilisé';
$w_misc = 'Divers';
$w_empty = 'Vider';
$w_emptyAll = 'Vider TOUS les';

$w_emptyLogs = 'Vider logs';
$w_emptyPHPlog = 'Vider PHP error log';
$w_emptyApaErrLog = 'Vider Apache error log';
$w_emptyApaAccLog = 'Vider Apache access log';
$w_emptyMySQLog = 'Vider MySQL log';
$w_emptyMariaLog = 'Vider MariaDB log';
$w_emptyAllLog ='Vider tous les fichiers de log';

$w_dnsorder = 'Vérifier l\'ordre de recherche DNS';
$w_deleteVer = 'Supprimer versions inutilisées';
$w_addingVer = 'Ajouter version Apache, PHP, MySQL, MariaDB, etc.';
$w_deleteListenPort = 'Supprimer un Listen port Apache';
$w_delete = 'Supprimer';
$w_defaultDBMS = 'SGBD par défaut :';
$w_NoDefaultDBMS = 'SGBD par défaut : aucun';
$w_invertDefault = 'Inverser SGBD par defaut ';
$w_changeCLI = 'Changer version PHP CLI';
$w_reinstallServices = 'Réinstaller tous les services';
$w_wampReport = 'Rapport de configuration Wampserver';
$w_dowampReport = 'Créer '.$w_wampReport;
$w_verifySymlink = 'Vérifier les liens symboliques';
$w_goto = 'Aller à :';
$w_FileRepository = 'Liens dépôts fichiers & addons Wampserver';
$w_compareApache = 'Comparaison configurations Apache';
$w_versus = 'par rapport à';
$w_restorefile = 'Restaure fichiers sauvegardés à l\'installation d\'Apache';
$w_restore = 'Restaure';
$w_checkUpdates = 'Vérifier les mises à jour';
$w_apacheTools = 'Outils Apache';
$w_PHPloadedExt = 'Afficher extensions PHP chargées';
$w_PHPversionsUse = 'Afficher l\'utilisation des versions PHP';

//Divers
$w_ext_spec = 'Extensions spéciales';
$w_ext_zend = 'Extensions Zend';
$w_phpparam_info = 'Pour information';
$w_ext_nodll = 'Pas de fichier dll';
$w_ext_noline = "Pas de 'extension='";
$w_mod_fixed = "Module irréversible";
$w_mod_not_disable = "Ces modules ne doivent pas être désactivés";
$w_no_module = 'Pas de fichier module';
$w_no_moduleload = "Pas de 'LoadModule'";
$w_mysql_none = "aucun";
$w_mysql_user = "mode utilisateur";
$w_mysql_default = "par défaut";
$w_mysql_mode = "Explications de sql-mode";
$w_apache_restore = "Avertissement restauration Apache";
$w_apache_compare = "Avertissement comparaison configurations Apache";
$w_Refresh_Restart = "Aide ".$w_refresh.' - '.$w_restartWamp;
$w_Size = "Taille";
$w_Time = "Temps";
$w_Integer = "Nombre entier";
$w_phpMyAdminHelp = "Aide PhpMyAdmin";
$w_wampHttpsHelp = "Aide mode HTTPS Wampserver";
$w_phpNotExists = 'La version de PHP n\'existe pas';
$w_All_Versions = 'Toutes versions';
$w_phpparam_obs = 'Paramètres Dépréciés | Supprimés | Nouveaux';
$w_ApacheCompiledIn = 'Modules intégrés';
$w_ApacheDoesNotIf = 'Ne nécessitent pas <IfModule ModName>';
$w_PhpMyAdminGoHidedb = 'Masque les bases de données natives';
$w_PhpMyAdminGoNoPassword = 'Autorise la connexion sans mot de passe';
$w_ConvertHttps = 'Mode HTTPS pour VirtualHost';
$w_MariaDBMySQLHelp = "Aide MariaDB - MySQL";

// PromptText pour Aestan Tray Menu variables de type: prompt
// Peuvent contenir \r\n pour plusieurs lignes
$w_EnterInteger = "Entrez un nombre entier";
$w_enterPort = "Entrer le numéro de port souhaité";
$w_EnterSize = "Entrez la taille : xxxx suivie par M pour Mega ou G pour Giga.\r\nLe symbole M ou G doit être accolé au nombre.\r\nPar exemple : 64M ; 256M ; 1G";
$w_EnterTime = "Entrez le temps en secondes";
$w_MysqlMariaUser = "Entrer un nom utilisateur valide. Si vous ne savez pas, laissez 'root' par défaut.\r\nSi vous avez mis un mot de passe à root ou à l'utilisateur choisi, il faudra taper ce mot de passe lors de la demande de la console\r\n'Enter password:'\r\nSans mot de passe, uniquement touche Entrée.";

// Textes longs
// Les guillemets " dans les textes doivent être échappés : \" - Peuvent contenir \r\n pour plusieurs lignes
$w_addingVerTxt = "Tous les \"addons\", c'est-à-dire tous les installeurs de versions Apache, PHP, MySQL ou MariaDB ainsi que les installeurs des mises à jour (Wampserver, Aestan Tray Menu, xDebug, etc.) et des applications Web (PhpMyAdmin, Adminer) sont sur:\r\n\r\n'https://sourceforge.net/projects/wampserver/'\r\n\r\nIl suffit de télécharger les fichiers-installeurs que vous voulez et de les lancer par un clic-droit sur le nom du fichier téléchargé puis \"Exécuter en tant qu'administrateur\" pour que l'addon ou l'application soit ajouté à votre version de Wampserver.\r\n\r\nEnsuite, changer de version Apache, PHP, MySQL ou MariaDB est l'affaire de trois clics:\r\nClic-Gauche -> PHP|Apache|MySQL|MariaDB -> Version -> Choisir la version\r\nLe changement de version ne reprend pas les modifications de paramètres que vous auriez pu faire ni ne transfère les bases de données de l'ancienne version vers la nouvelle.\r\n\r\nUn dépôt bien mieux organisé que Sourceforge et toujours à jour existe :\r\n\r\n'https://wampserver.aviatechno.net'\r\n\r\nLes liens sur les dépôts sont dans Clic-Droit -> Aide\r\n";
$w_MySQLsqlmodeInfo = "MySQL/MariaDB sql-mode\r\nLe serveur SQL peut fonctionner dans différents modes SQL en fonction de la valeur de la directive sql-mode.\r\nDéfinir un ou plusieurs modes restreint certaines possibilités et exige une plus grande rigeur dans la syntaxe SQL et la validation des données.\r\nLe fonctionnement de la directive sql-mode du fichier my.ini est le suivant.\r\n\r\n- sql-mode: par défaut\r\nLa directive sql-mode n'existe pas ou est commentée (;sql-mode=\"....\")\r\nLes modes par défaut de la version de MySQL/MariaDB sont appliqués\r\n\r\n- sql-mode: mode utilisateur\r\nLa directive sql-mode est remplie avec des modes définis par l'utilisateur, par exemple :\r\nsql-mode=\"NO_ZERO_DATE,NO_ZERO_IN_DATE,NO_AUTO_CREATE_USER\"\r\n\r\n- sql-mode: aucun\r\nLa directive sql-mode est vide mais doit exister :\r\nsql-mode=\"\"\r\naucun mode SQL n'est appliqué.\r\n";
$w_PhpMyAdMinHelpTxt = "-- PhpMyAdmin\r\nAu lancement de PhpMyAdmin, il vous sera demandé un nom utilisateur et un mot de passe.\r\nAprès installation de Wampserver 3, le nom utilisateur par défaut est \"root\" (Sans les guillemets) et il n'y a pas de mot de passe, ce qui veut dire que vous devez laisser la case Mot de passe du formulaire d'accès vide.\r\n\r\nPhpMyAdmin est configuré pour vous permettre d'accéder à MySQL ou à MariaDB selon les SGBD qui sont actifs.\r\nSi les deux SGBD sont activés, vous verrez un menu déroulant sur l'écran de connexion, appelé \"Choix du serveur\", le serveur par défaut sera affiché en premier dans la liste déroulante. Sélectionnez ici le SGBD que vous souhaitez utiliser dans le cadre de la procédure de connexion.\r\nN'oubliez pas que si vous avez différents comptes d'utilisateurs, vous devez utiliser le bon pour le SGBD sélectionné.\r\nAUSSI : Si vous avez le même compte, c'est-à-dire \"root\" sur les deux SGBD, si vous avez défini des mots de passe différents, vous devez utiliser le bon mot de passe pour le compte et le SGBD.\r\n";
$w_PhpMyAdminBigFileTxt = "\r\n-- Import de gros fichiers\r\nEn cas d'import de gros fichiers, il se peut que les limites mémoire et/ou de temps maximum d'exécution soient dépassées.\r\nLes éventuelles modifications des limites mémoire et de temps ne doivent pas être effectuées dans le fichier php.ini mais dans le fichier wamp(64)\\alias\\phpmyadmin.conf.\r\n";
$w_ApacheRestoreInfo = "--- Restauration de fichiers Apache\r\nDepuis Apache 2.4.41, à la fin de l'installation d'une version, les fichiers opérationnels httpd.conf et httpd-vhosts.conf sont copiés dans un dossier de sauvegarde.\r\nEn cas de problèmes ou de modifications intempestives d'Apache, vous avez la possibilité de restaurer ces deux fichiers pour retrouver la configuration d'origine d'Apache.\r\nBien sûr, dans ce cas, VOUS PERDREZ LES MODIFICATIONS DE CONFIGURATION QUE VOUS AURIEZ PU FAIRE APRÈS INSTALLATION, comme les chargements de module ou d'include.";
$w_ApacheCompareInfo = "--- Comparaison de versions Apache\r\nSi vous disposez d'au moins deux versions d'Apache, vous avez la possibilité de comparer la version actuelle avec une version précédente.\r\nSont comparés :\r\n- LoadModule\r\n- Include\r\n- Fichiers httpd-vhosts.conf\r\n- Fichiers httpd-ssl.conf\r\n- Fichiers openssl.cnf\r\n- Présence et contenu du dossier Certs\r\nVous avez la possibilité de recopier la configuration d'une ancienne version sur la version actuelle.\r\n*** ATTENTION *** Aucune sauvegarde ne sera effectuée, il vous appartient d'effectuer des sauvegardes AVANT de recopier les configurations.\r\n";
$w_Refresh_Restart_Info = "--- Différences entre '".$w_refresh."' et '".$w_restartWamp."'\r\n-- ".$w_refresh.":\r\n- Effectue diverses vérifications,\r\n- Relit les fichiers de configuration de Wampserver, Apache, PHP, MySQL et MariaDB,\r\n- Modifie en conséquence le fichier de configuration de Wampmanager puis met à jour les menus,\r\n- Effectue un 'Graceful Restart Apache',\r\n- Recharge Aestan Tray menu.\r\nIl n'y a aucune interruption des connexions Apache, PHP, MySQL et MariaDB.\r\n\r\n-- ".$w_restartWamp.":\r\n- Arrête les services : ".$c_apacheService.", ".$c_mysqlService." et ".$c_mariadbService.",\r\n- Vide tous les fichiers de log,\r\n- Vide le dossier tmp,\r\n- Arrête Wampserver,\r\n- Lance Wampserver 'normalement'.\r\nIl y a donc coupure totale des connexions Apache, PHP, MySQL et MariaDB et remise en place de celles-ci sous d'autres identifications.";
$w_wampHttpsHelpTxt = "-- Mode HTTPS Wampserver\r\nAvant de pouvoir créer un VirtualHost HTTPS, il est nécessaire que Wampserver puisse le supporter.\r\nPour ce faire, il faut modifier certains fichiers, en ajouter d'autres et créer des certificats.\r\nCette préparation sera effectuée automatiquement en validant l'item de menu, s'il n'est pas déjà coché :\r\n\r\n    Clic-Droit -> Paramètres Wamp -> Wampserver prêt pour supporter https\r\n\r\nUne fois ceci effectué, l'item de menu sera coché et le restera.\r\n \r\n-- Passer un VirtualHost en mode HTTPS\r\nIl est indispensable que le VirtualHost en mode http existe et soit opérationnel.\r\nLes VirtualHost pouvant être passés en mode HTTPS sont affichés dans le menu :\r\n \r\n    Clic-Gauche -> Vos VirtualHosts -> Mode HTTPS pour VirtualHost\r\n \r\nIl suffit de cliquer sur le VirtualHost voulu pour le passer en mode HTTPS.\r\n    C'est Tout !!\r\n\r\n- Avertissement des navigateurs car certificat auto-signé.\r\n-- Mozilla Firefox\r\nAttention : risque probable de sécurité\r\nBouton Avancé : Code d’erreur : SEC_ERROR_UNKNOWN_ISSUER\r\nValider : Accepter le risque et poursuivre.\r\n-- Opera\r\nVotre connexion n'est pas privée\r\nNET::ERR_CERT_AUTHORITY_INVALID\r\nValider : Help me understand\r\nValider : Continuer sur nom du site (dangereux)\r\n-- Chrome\r\nVotre connexion n'est pas privée\r\nNET::ERR_CERT_AUTHORITY_INVALID\r\nValider : Paramètres avancès\r\nValider : Continuer vers le site nom du site (dangereux)\r\n-- Edge\r\nVotre connexion n'est pas privée\r\nNET::ERR_CERT_AUTHORITY_INVALID\r\nValider : Avancè\r\nContinuer vers nom du site (non sécurisé)\r\n\r\nBien sûr, en principe, cela ne pourra fonctionner que si dans les paramètres des navigateurs l'option 'Forcer le mode https strict' ou similaire n'est pas validée.";
$w_MariaDBMySQLHelpTxt ="- 1 - MySQL et MariaDB\r\n- 2 - Connexion à la base de données par MariaDB ou MySQL\r\n- 3 - Remplacer le SGBD par défaut MariaDB par MySQL et vice-versa\r\n- 4 - Un seul gestionnaire de base de données - Aucun gestionnaire SGDB\r\n- 5 - SGDB par défaut: none - /!\ No Default DBMS\r\n- 6 - PhpMyAdmin\r\n\r\n- 1 - MySQL et MariaDB\r\nMySQL est supporté depuis le début de Wampserver et MariaDB est supporté depuis Wampserver 3.0.8.\r\nPour les connexions SQL le port par défaut est et a toujours été le port 3306\r\nMySQL et MariaDB sont tous deux installés par le programme d'installation complet.\r\nSelon les versions des installeurs complets de Wampserver c'est soit MySQL, soit MariaDB qui est le gestionnaire de base de données par défaut.\r\n- Si MySQL est le gestionnaire par défaut, il utilise le port 3306, auquel cas MariaDB utilisera le port 3307.\r\n- Si MariaDB est le gestionnaire par défaut, il utilise le port 3306, auquel cas MySQL utilisera le port 3308.\r\nLe gestionnaire de base de données par défaut est indiqué sur le menu Clic-Gauche de Wampmanager\r\n\r\n- 2 - Connexion à la base de données par MariaDB ou MySQL\r\nLe port SQL par défaut est le port 3306. Les connexions qui ne précisent pas le numéro de port aurons systématiquement lieu sur le port par défaut.\r\nSi le gestionnaire de bases de données (MySQL ou MariaDB) que vous voulez utiliser n'est pas le gestionnaire par défaut, on le répète : sans préciser le port, ce sera le port par défaut qui sera utilisé, donc le port 3306.\r\nPar défaut, les scripts de connexion ne mentionnent pas le port à utiliser. Par exemple :\r\n\$mysqli = new mysqli('127.0.0.1', 'user', 'password', 'database');\r\nou, en procédural :\r\n\$mysqli = mysqli_connect('127.0.0.1', 'user', 'password', 'database');\r\n\r\nDonc, pour pouvoir se connecter avec un gestionnaire qui n'utilise pas le port 3306, il faut préciser le numéro de port :\r\n\$mysqli = new mysqli('127.0.0.1', 'user', 'password', 'database', '3307');\r\nou, en procédural :\r\n\$mysqli = mysqli_connect('127.0.0.1', 'user', 'password', 'database', '3307');\r\n\r\nPour vérifier les connexions sur le gestionnaire de base de données MySQL ou MariaDB, utilisez le script :\r\nwamp(64)\www\testmysql.php\r\npar 'http://localhost/testmysql.php' dans la barre d'adresse du navigateur en ayant, au préalable, modifié le script en fonction de vos paramètres.\r\n\r\n- 3 - Remplacer le SGBD par défaut MariaDB par MySQL et vice-versa\r\nNote importante : Il est impératif de sauvegarder vos bases de données dans des fichiers SQL par export de celles-ci avant de remplacer MariaDB par MySQL ou vice-versa.\r\nC'est le seul moyen pérenne de transférer vos bases de données entre MySQL et MariaDB.\r\n- Il existe un outil pour inverser d'un seul clic le SGBD par défaut si les deux sont activés (MySQL ET MariaDB) :\r\n- Si MySQL est le SGBD par défaut\r\nClic-Droit icône Wampmanager -> Outils -> Inverser SGBD par défaut MySQL <-> MariaDB\r\nou\r\n- Si MariaDB est le SGBD par défaut\r\nClic-Droit icône Wampmanager -> Outils -> Inverser SGBD par défaut MariaDB <-> MySQL\r\nBien sûr, il vous reste à importer vos bases de données préalablement sauvegardées.\r\n\r\n- 4 - Un seul gestionnaire de bases de données - Aucun gestionnaire de bases de données\r\nVous n'êtes pas obligé de conserver l'utilisation des deux gestionnaires MySQL et MariaDB, vous pouvez ne conserver que celui qui vous convient et vous pouvez même desactiver totalement les deux gestionnaires de bases de données par :\r\nClic-Droit Icône Wampmanager -> Paramètres Wamp -> Autoriser MariaDB pour décocher\r\nClic-Droit Icône Wampmanager -> Paramètres Wamp -> Autoriser MySQL pour décocher\r\nVous pouvez réactiver l'un ou l'autre à une date ultérieure si vous le souhaitez et quand vous le souhaitez. Cette opération ne désinstalle pas le SGBD, elle désinscrit simplement le service Windows pour ce SGBD.\r\n\r\n- 5 - SGDB par défaut : none\r\n/!\ No Default DBMS\r\nCela signifie qu'aucun des gestionnaire de base de données (MariaDB et/ou MySQL) n'utilise le port 3306 et qu'il est donc impératif de préciser le numéro de port dans les demandes de connexions puisque celui-ci n'est pas le port par défaut 3306.\r\nIl est alors indispensable que vous choisissiez quel SGDB vous voulez utiliser par défaut ; pour ce faire, utilisez les outils intégrés (Clic-Droit -> Outils) pour affecter le port 3306 (Utiliser un port autre que xxxx) au SGDB (MariaDB ou MySQL) que vous voulez définir par défaut.\r\n\r\n- 6 - PhpMyAdmin\r\nPhpMyAdmin est configuré pour vous permettre d'accéder à MySQL ou à MariaDB selon les SGBD qui sont actifs.\r\nSi les deux SGBD sont activés, vous verrez un menu déroulant sur l'écran de connexion, appelé \"Choix du serveur\", le serveur par défaut sera affiché en premier dans la liste déroulante. Sélectionnez ici le SGBD que vous souhaitez utiliser dans le cadre de la procédure de connexion.\r\nN'oubliez pas que si vous avez différents comptes d'utilisateurs, vous devez utiliser le bon pour le SGBD sélectionné.\r\nAUSSI : Si vous avez le même compte, c'est-à-dire \"root\" sur les deux SGBD, si vous avez défini des mots de passe différents, vous devez utiliser le bon mot de passe pour le compte et le SGBD.\r\n";
?>