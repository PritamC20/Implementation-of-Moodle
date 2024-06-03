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

// Projects sub-menu
$w_projectsSubMenu = 'Tus proyectos';
// VirtualHosts sub-menu
$w_virtualHostsSubMenu = 'Tus VirtualHosts';
$w_add_VirtualHost = 'Gesti�n de hostVirtualHosts';
$w_aliasSubMenu = 'Tus alias';
$w_portUsed = 'Puerto utilizado por Apache: ';
$w_portUsedMysql = 'Puerto utilizado por MySQL: ';
$w_portUsedMaria = 'Puerto utilizado por MariaDB: ';
$w_testPortUsed = ' Probar puerto utilizado: ';
$w_portForApache = 'Puerto para Apache';
$w_listenForApache = 'Puerto de escucha para a�adir a Apache';
$w_portForMysql = 'Puerto para MySQL';
$w_testPortMysql = ' Probar puerto 3306';
$w_testPortMysqlUsed = 'Probar el puerto MySQL utilizado: ';
$w_testPortMariaUsed = 'Probar el puerto de MariaDB utilizado: ';
$w_enterPort = 'Introduzca el n�mero de puerto deseado';

// Right-click Settings
$w_wampSettings = 'Configuraciones de Wamp';
$w_settings = array(
	'urlAddLocalhost' => 'A�adir localhost en url',
	'VirtualHostSubMenu' => 'Submen� VirtualHosts',
	'AliasSubmenu' => 'Submen� alias',
	'ProjectSubMenu' => 'Submen� de proyectos',
	'HomepageAtStartup' => 'P�gina de inicio de Wampserver al iniciar',
	'MenuItemOnline' => 'Elemento de men�: Online / Offline',
	'ItemServicesNames' => 'Elemento del men� Herramientas: Cambiar nombres de servicios',
	'NotCheckVirtualHost' => 'No comprobar las definiciones de VirtualHost',
	'NotCheckDuplicate' => 'No comprobar nombre de servidor duplicado',
	'VhostAllLocalIp' => 'Permitir el IP local de VirtualHost que no sea 127. *',
	'SupportMySQL' => 'Permitir MySQL',
	'SupportMariaDB' => 'Permitir a MariaDB',
	'DaredevilOptions' => 'Precauci�n: �Arriesgado! S�lo para expertos.',
	'ShowphmyadMenu' => 'Mostrar PhpMyAdmin en el Men�',
	'ShowadminerMenu' => 'Mostrar Adminer en el men�',
	'mariadbUseConsolePrompt' => 'Modificar el prompt de la consola de Mariadb por defecto',
	'mysqlUseConsolePrompt' => 'Modificar el prompt de la consola de Mysql por defecto',
	'NotVerifyPATH' => 'No verificar PATH',
	'NotVerifyTLD' => 'No verificar TLD',
	'Cleaning' => 'Limpieza automatica',
	'AutoCleanLogs' => 'Limpiar los archivos de registro autom�ticamente',
	'AutoCleanLogsMax' => 'N�mero de l�neas antes de la limpieza',
	'AutoCleanLogsMin' => 'N�mero de l�neas despu�s de la limpieza',
	'AutoCleanTmp' => 'Limpiar el directorio tmp autom�ticamente',
	'AutoCleanTmpMax' => 'N�mero de archivos antes de limpiar',
	'ForTestOnly' => 'S�lo para fines de prueba',
	'iniCommented' => 'Directivas comentadas php.ini (; al principio de la l�nea)',
);

// Right-click Tools
$w_wampTools = 'Herramientas';
$w_restartDNS = 'Reiniciar DNS';
$w_testConf = 'Comprobar la sintaxis de httpd.conf';
$w_testServices = 'Comprobar el estado de los servicios';
$w_changeServices = 'Cambiar los nombres de los servicios.';
$w_enterServiceNameApache = "Introduzca un n�mero de �ndice para el servicio de Apache. Se a�adir� a 'wampapache'.";
$w_enterServiceNameMysql = "Introduzca un n�mero de �ndice para el servicio Mysql. Se a�adir� a 'wampmysqld'.";
$w_enterServiceNameAll = "Introduzca un n�mero para el sufijo de nombres de servicio (vac�o para devolver los servicios originales)";
$w_compilerVersions = 'Comprobar Compilador VC, compatibilidad y archivos ini';
$w_UseAlternatePort = 'Utilizar un puerto distinto de %s';
$w_AddListenPort = 'A�adir un puerto de escucha para Apache';
$w_vhostConfig = 'Mostrar VirtualHost examinado por Apache';
$w_apacheLoadedModules = 'Mostrar los m�dulos cargados de apache';
$w_empty = 'Vaciar';
$w_misc = ' Varios';
$w_emptyAll = 'Vaciar TODO';
$w_dnsorder = 'Comprobar orden de b�squeda de DNS';
$w_deleteVer = 'Eliminar versiones no utilizadas';
$w_deleteListenPort = 'Eliminar un puerto de escucha Apache';
$w_delete = 'Eliminar';
$w_defaultDBMS = 'DBMS predeterminado: ';
$w_invertDefault = 'Invertir DBMS por defecto ';
$w_changeCLI = 'Change Versi�n Cliente PHP';
$w_reinstallServices = 'Reinstalar todos los servicios.';
$w_wampReport = 'Informe de configuraci�n de Wampserver';
$w_dowampReport = 'Crear '.$w_wampReport;

//miscellaneous
$w_ext_spec = 'Extensiones especiales';
$w_ext_zend = 'extensiones Zend';
$w_phpparam_info = 'Solo para informaci�n';
$w_ext_nodll = 'No hay archivo DLL';
$w_ext_noline = "No 'extension ='";
$w_mod_fixed = "M�dulo irreversible";
$w_no_module = 'No hay archivo de m�dulo';
$w_no_moduleload = "No 'LoadModule'";
$w_mysql_none = "ninguno";
$w_mysql_user = "modo de usuario";
$w_mysql_default = "por defecto";
$w_Size = "Tama�o";
$w_EnterSize = "Introduzca Tama�o: xxxx seguido por M para Mega o G para Giga";
$w_Time = "Tiempo";
$w_EnterTime = "Introduzca el tiempo en segundos";
$w_Integer = "Valor entero";
$w_EnterInteger = "Introduce un entero";
$w_MysqlMariaUser = "Introduzca un nombre de usuario v�lido. Si no lo sabe, mantenga 'root' por defecto.";

?>