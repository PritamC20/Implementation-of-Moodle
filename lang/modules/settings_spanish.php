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
$w_add_VirtualHost = 'Gestión de hostVirtualHosts';
$w_aliasSubMenu = 'Tus alias';
$w_portUsed = 'Puerto utilizado por Apache: ';
$w_portUsedMysql = 'Puerto utilizado por MySQL: ';
$w_portUsedMaria = 'Puerto utilizado por MariaDB: ';
$w_testPortUsed = ' Probar puerto utilizado: ';
$w_portForApache = 'Puerto para Apache';
$w_listenForApache = 'Puerto de escucha para añadir a Apache';
$w_portForMysql = 'Puerto para MySQL';
$w_testPortMysql = ' Probar puerto 3306';
$w_testPortMysqlUsed = 'Probar el puerto MySQL utilizado: ';
$w_testPortMariaUsed = 'Probar el puerto de MariaDB utilizado: ';
$w_enterPort = 'Introduzca el número de puerto deseado';

// Right-click Settings
$w_wampSettings = 'Configuraciones de Wamp';
$w_settings = array(
	'urlAddLocalhost' => 'Añadir localhost en url',
	'VirtualHostSubMenu' => 'Submenú VirtualHosts',
	'AliasSubmenu' => 'Submenú alias',
	'ProjectSubMenu' => 'Submenú de proyectos',
	'HomepageAtStartup' => 'Página de inicio de Wampserver al iniciar',
	'MenuItemOnline' => 'Elemento de menú: Online / Offline',
	'ItemServicesNames' => 'Elemento del menú Herramientas: Cambiar nombres de servicios',
	'NotCheckVirtualHost' => 'No comprobar las definiciones de VirtualHost',
	'NotCheckDuplicate' => 'No comprobar nombre de servidor duplicado',
	'VhostAllLocalIp' => 'Permitir el IP local de VirtualHost que no sea 127. *',
	'SupportMySQL' => 'Permitir MySQL',
	'SupportMariaDB' => 'Permitir a MariaDB',
	'DaredevilOptions' => 'Precaución: ¡Arriesgado! Sólo para expertos.',
	'ShowphmyadMenu' => 'Mostrar PhpMyAdmin en el Menú',
	'ShowadminerMenu' => 'Mostrar Adminer en el menú',
	'mariadbUseConsolePrompt' => 'Modificar el prompt de la consola de Mariadb por defecto',
	'mysqlUseConsolePrompt' => 'Modificar el prompt de la consola de Mysql por defecto',
	'NotVerifyPATH' => 'No verificar PATH',
	'NotVerifyTLD' => 'No verificar TLD',
	'Cleaning' => 'Limpieza automatica',
	'AutoCleanLogs' => 'Limpiar los archivos de registro automáticamente',
	'AutoCleanLogsMax' => 'Número de líneas antes de la limpieza',
	'AutoCleanLogsMin' => 'Número de líneas después de la limpieza',
	'AutoCleanTmp' => 'Limpiar el directorio tmp automáticamente',
	'AutoCleanTmpMax' => 'Número de archivos antes de limpiar',
	'ForTestOnly' => 'Sólo para fines de prueba',
	'iniCommented' => 'Directivas comentadas php.ini (; al principio de la línea)',
);

// Right-click Tools
$w_wampTools = 'Herramientas';
$w_restartDNS = 'Reiniciar DNS';
$w_testConf = 'Comprobar la sintaxis de httpd.conf';
$w_testServices = 'Comprobar el estado de los servicios';
$w_changeServices = 'Cambiar los nombres de los servicios.';
$w_enterServiceNameApache = "Introduzca un número de índice para el servicio de Apache. Se añadirá a 'wampapache'.";
$w_enterServiceNameMysql = "Introduzca un número de índice para el servicio Mysql. Se añadirá a 'wampmysqld'.";
$w_enterServiceNameAll = "Introduzca un número para el sufijo de nombres de servicio (vacío para devolver los servicios originales)";
$w_compilerVersions = 'Comprobar Compilador VC, compatibilidad y archivos ini';
$w_UseAlternatePort = 'Utilizar un puerto distinto de %s';
$w_AddListenPort = 'Añadir un puerto de escucha para Apache';
$w_vhostConfig = 'Mostrar VirtualHost examinado por Apache';
$w_apacheLoadedModules = 'Mostrar los módulos cargados de apache';
$w_empty = 'Vaciar';
$w_misc = ' Varios';
$w_emptyAll = 'Vaciar TODO';
$w_dnsorder = 'Comprobar orden de búsqueda de DNS';
$w_deleteVer = 'Eliminar versiones no utilizadas';
$w_deleteListenPort = 'Eliminar un puerto de escucha Apache';
$w_delete = 'Eliminar';
$w_defaultDBMS = 'DBMS predeterminado: ';
$w_invertDefault = 'Invertir DBMS por defecto ';
$w_changeCLI = 'Change Versión Cliente PHP';
$w_reinstallServices = 'Reinstalar todos los servicios.';
$w_wampReport = 'Informe de configuración de Wampserver';
$w_dowampReport = 'Crear '.$w_wampReport;

//miscellaneous
$w_ext_spec = 'Extensiones especiales';
$w_ext_zend = 'extensiones Zend';
$w_phpparam_info = 'Solo para información';
$w_ext_nodll = 'No hay archivo DLL';
$w_ext_noline = "No 'extension ='";
$w_mod_fixed = "Módulo irreversible";
$w_no_module = 'No hay archivo de módulo';
$w_no_moduleload = "No 'LoadModule'";
$w_mysql_none = "ninguno";
$w_mysql_user = "modo de usuario";
$w_mysql_default = "por defecto";
$w_Size = "Tamaño";
$w_EnterSize = "Introduzca Tamaño: xxxx seguido por M para Mega o G para Giga";
$w_Time = "Tiempo";
$w_EnterTime = "Introduzca el tiempo en segundos";
$w_Integer = "Valor entero";
$w_EnterInteger = "Introduce un entero";
$w_MysqlMariaUser = "Introduzca un nombre de usuario válido. Si no lo sabe, mantenga 'root' por defecto.";

?>