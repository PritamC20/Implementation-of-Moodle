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

// translated by Franti�ek Barto� (Bart, admin@bart.cz)

// Projects sub-menu
$w_projectsSubMenu = 'Projekty';
// VirtualHosts sub-menu
$w_virtualHostsSubMenu = 'VirtualHosts';
$w_add_VirtualHost = 'P�idat VirtualHost';
$w_aliasSubMenu = 'Aliasy';
$w_portUsed = 'Port pou�it� slu�bou Apache: ';
$w_portUsedMysql = 'Port pou�it� slu�bou MySQL: ';
$w_portUsedMaria = 'Port pou�it� slu�bou MariaDB : ';
$w_testPortUsed = 'Otestovat pou�it� port: ';
$w_portForApache = 'Port pro Apache';
$w_listenForApache = 'Nastavit port pro naslouch�n� Apache';
$w_portForMysql = 'Port pro MySQL';
$w_testPortMysql = 'Otestovat port 3306';
$w_testPortMysqlUsed = 'Otestovat pou�it� port slu�bou MySQL: ';
$w_testPortMariaUsed = 'Otestovat pou�it� port slu�bou MariaDB: ';
$w_enterPort = 'Zadejte po�adovan� ��slo portu';

// Right-click Settings
$w_wampSettings = 'Wamp nastaven�';
$w_settings['urlAddLocalhost'] = 'P�idat adresu localhost do URL projektu';
$w_settings['VirtualHostSubMenu'] = 'Zobrazit sub-menu VirtualHosts';
$w_settings['AliasSubmenu'] = 'Zobrazit sub-menu Aliasy';
$w_settings['ProjectSubMenu'] = 'Zobrazit sub-menu Projekty';
$w_settings['HomepageAtStartup'] = 'Zobrazit P�ehled p�i startu WampServer';
$w_settings['MenuItemOnline'] = 'Zobrazit polo�ku v menu: Nastavit Online / Offline';
$w_settings['ItemServicesNames'] = 'Zobrazit polo�ku v menu: Zm�nit n�zev slu�eb ve Slu�b�ch Windows';
$w_settings['NotCheckVirtualHost'] = 'Nekontrolovat definice VirtualHost';
$w_settings['NotCheckDuplicate'] = 'Nekontrolovat duplicitn� ServerName';
$w_settings['VhostAllLocalIp'] = 'Povolit pro VirtualHost i jinou m�stn� IP adresu ne� 127.*';
$w_settings['SupportMySQL'] = 'Povolit MySQL';
$w_settings['SupportMariaDB'] = 'Povolit MariaDB';
$w_settings['DaredevilOptions'] = 'Upozorn�n�: Rizikov� nastaven�! Pouze pro experty.';
$w_settings['ShowphmyadMenu'] = 'Zobrazit v menu PhpMyAdmin';
$w_settings['ShowadminerMenu'] = 'Zobrazit v menu Adminer';
$w_settings['mariadbUseConsolePrompt'] = 'Zm�na v�choz� p��kazov� konzole Mariadb';
$w_settings['mysqlUseConsolePrompt'] = 'Zm�na v�choz� p��kazov� konzole Mysql';
$w_settings['NotVerifyPATH'] = 'Neov��ovat CESTU';

// Right-click Tools
$w_wampTools = 'N�stroje';
$w_restartDNS = 'Restartovat slu�bu DNS';
$w_testConf = 'Zkontrolovat syntaxi httpd.conf';
$w_testServices = 'Zkontrolovat stav slu�eb';
$w_changeServices = 'Zm�nit n�zev slu�eb ve Slu�b�ch Windows';
$w_enterServiceNameApache = "Zadejte indexov� ��slo pro slu�bu Apache. Bude p�id�no do slu�by 'wampapache'";
$w_enterServiceNameMysql = "Zadejte indexov� ��slo pro slu�bu Mysql. Bude p�id�no do slu�by 'wampmysqld'";
$w_compilerVersions = 'Zkontrolovat Compiler VC, kompatibilitu a INI soubory';
$w_UseAlternatePort = 'Pou��t jin� port ne� %s';
$w_AddListenPort = 'Nastavit port pro naslouch�n� Apache';
$w_vhostConfig = 'Zobrazit p�ezkouman� VirtualHost prov�d�n� Apache';
$w_apacheLoadedModules = 'Zobrazit na�ten� MODULY Apache';
$w_empty = 'Vy�istit';
$w_misc = 'R�zn�';
$w_emptyAll = 'Vy�istit v�echny';
$w_dnsorder = 'Zkontrolovat po�ad� DNS z�znam� pro vyhled�v�n�';
$w_deleteVer = 'Odstranit nepou��van� verze';
$w_deleteListenPort = 'Odstranit port pro naslouch�n� Apache';
$w_delete = 'Odstranit';
$w_defaultDBMS = 'V�choz� DBMS (Syst�m ��zen� b�ze dat):';
$w_invertDefault = 'Zm�nit v�choz� DBMS ';
$w_changeCLI = 'Zm�nit verzi PHP CLI';
$w_reinstallServices = 'P�einstalovat v�echny slu�by';

//miscellaneous
$w_ext_spec = 'Speci�ln� roz���en�';
$w_ext_zend = 'Zend roz���en�';
$w_phpparam_info = 'Pouze pro informaci';
$w_ext_nodll = '��dn� dll soubor';
$w_ext_noline = "��dn� 'roz���en�='";
$w_mod_fixed = "Nezm�niteln� modul";
$w_no_module = '��dn� modul';
$w_no_moduleload = "��dn� 'LoadModule'";
$w_mysql_none = "��dn�";
$w_mysql_user = "u�ivatelsk� m�d";
$w_mysql_default = "p�epnout na v�choz� stav";
$w_Size = "Velikost";
$w_EnterSize = "Zadejte velikost: xxxx ve form�tu M pro Mega nebo G pro Giga";
$w_Time = "�as";
$w_EnterTime = "Zadejte �as v sekund�ch";
$w_Integer = "Hodnota Integer (cel� ��slo)";
$w_EnterInteger = "Zadejte cel� ��slo";
$w_MysqlMariaUser = "Zadejte platn� u�ivatelsk� jm�no. Pokud si nev�te rady, ponechte v�choz� 'root'.";         

?>