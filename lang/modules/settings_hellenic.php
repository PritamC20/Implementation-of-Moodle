<?php
// Hellenic language file for
// Projects and VirtualHosts sub-menus
// Settings and Tools right-click sub-menus

// Projects sub-menu
$w_projectsSubMenu = 'Τα έργα σας';
// VirtualHosts sub-menu
$w_virtualHostsSubMenu = 'Τα VirtualHosts σας';
$w_add_VirtualHost = 'Διαχείριση VirtualHost';
$w_aliasSubMenu = 'Τα Aliases σας';
$w_portUsed = 'Θύρα σε χρήση από τον Apache:';
$w_portUsedMysql = 'Θύρα σε χρήση από την MySQL:';
$w_portUsedMaria = 'Θύρα σε χρήση από την MariaDB:';
$w_testPortUsed = 'Έλεγχος θύρας σε χρήση: ';
$w_portForApache = 'Θύρα για τον Apache';
$w_listenForApache = 'Θύρα Ακρόασης για προσθήκη στον Apache';
$w_portForMysql = 'Θύρα για την MySQL';
$w_testPortMysql = 'Έλεγχος θύρας 3306';
$w_testPortMysqlUsed = 'Έλεγχος θύρας MySQL σε χρήση:';
$w_testPortMariaUsed = 'Έλεγχος θύρας MariaDB σε χρήση:';

// Right-click Settings
$w_wampSettings = 'Ρυθμίσεις Wamp';
$w_settings = array(
	'urlAddLocalhost' => 'Προσθήκη localhost στο url',
	'VirtualHostSubMenu' => 'Υπομενού VirtualHosts',
	'AliasSubmenu' => 'Υπομενού Alias',
	'ProjectSubMenu' => 'Υπομενού Έργων',
	'HomepageAtStartup' => '’νοιγμα Αρχικής Wampserver με την εκκίνηση',
	'MenuItemOnline' => 'Αντικείμενο Μενού: Σε λειτουργία / Εκτός λειτουργίας',
	'ItemServicesNames' => 'Αντικείμενο Μενού Εργαλείων: Αλλαγή ονομάτων υπηρεσιών',
	'CheckVirtualHost' => 'Έλεγχος ορισμών VirtualHost',
	'NotCheckVirtualHost' => 'Να μην ελεγχθούν οι ορισμοί των VirtualHost',
	'NotCheckDuplicate' => 'Να μην ελεγχθεί διπλοεγγραφή Ονόματος Διακομιστή',
	'VhostAllLocalIp' => 'Υποστήριξη τοπικής IP για VirtualHost διαφορετική από 127.*',
	'SupportMySQL' => 'Υποστήριξη MySQL',
	'SupportMariaDB' => 'Υποστήριξη MariaDB',
	'DaredevilOptions' => 'Προσοχή: Επικίνδυνο! Μόνο για ειδικούς.',
	'ShowphmyadMenu' => 'Εμφάνιση PhpMyAdmin στο Μενού',
	'ShowadminerMenu' => 'Εμφάνιση Adminer στο Μενού',
	'mariadbUseConsolePrompt' => 'Αλλαγή προεπιλεγμένης γραμμής εντολών Mariadb',
	'mysqlUseConsolePrompt' => 'Αλλαγή προεπιλεγμένης γραμμής εντολών Mysql',
	'NotVerifyPATH' => 'Όχι έλεγχος της μεταβλητής PATH',
	'NotVerifyTLD' => 'Όχι έλεγχος του TLD',
	'NotVerifyHosts' => 'Όχι έλεγχος του αρχείου hosts',
	'Cleaning' => 'Αυτόματη εκκαθάριση',
	'AutoCleanLogs' => 'Εκκαθάριση αρχείων καταγραφής αυτόματα',
	'AutoCleanLogsMax' => 'Αριθμός γραμμών πριν την εκκαθάριση',
	'AutoCleanLogsMin' => 'Αριθμός γραμμών μετά την εκκαθάριση',
	'AutoCleanTmp' => 'Εκκαθάριση φακέλου tmp αυτόματα',
	'AutoCleanTmpMax' => 'Αριθμός αρχείων πριν την εκκαθάριση',
	'ForTestOnly' => 'Μόνο για λόγους δοκιμής',
	'iniCommented' => 'Σχολιασμός οδηγιών php.ini (; στην αρχή της γραμμής)',
	'BackupHosts' => 'Αντίγραφο ασφαλείας αρχείου hosts',
	'ShowWWWdirMenu' => 'Εμφάνιση φακέλου www στο Μενού',
	'ApacheWampParams' => 'Ρυθμίσεις Wampserver για τον Apache',
	'apacheCompareVersion' => 'Υποστήριξη σύγκρισης ρυθμίσεων Apache.',
	'apacheRestoreFiles' => 'Υποστήριξη ανάκτησης αρχείων Apache',
	'apacheGracefulRestart' => 'Υποστήριξη Εκλεπτισμένης Επανεκκίνησης Apache',
	'LinksOnProjectsHomePage' => 'Υποστήριξη συνδέσμων στην ιστοσελίδα των έργων',
	'LinksOnProjectsHomeByIp' => 'Σύνδεσμος έργων κατά «τοπική σύνδεση IP»',
	'apachePhpCurlDll' => 'Υποστήριξη Apache για χρήση του libcrypto-*.dll και του libssl-*.dll από την PHP',
);

// Right-click Tools
$w_wampTools = 'Εργαλεία';
$w_restartDNS = 'Επανεκκίνηση DNS';
$w_testConf = 'Έλεγχος σύνταξης httpd.conf';
$w_testServices = 'Έλεγχος κατάστασης υπηρεσιών';
$w_changeServices = 'Αλλαγή των ονομάτων των υπηρεσιών';
$w_compilerVersions = 'Έλεγχος Μεταφραστή VC, συμβατότητας και αρχείων ini';
$w_UseAlternatePort = 'Χρήση θύρας διαφορετικής από την %s';
$w_AddListenPort = 'Προσθήκη μιας θύρας Ακρόασης για τον Apache';
$w_vhostConfig = 'Προβολή VirtualHost που εξετάστηκε από τον Apache';
$w_apacheLoadedModules = 'Προβολή φορτωμένων Επεκτάσεων του Apache';
$w_apacheLoadedIncludes = 'Προβολή φορτωμένων Ενσωματώσεων (Includes) του Apache';
$w_apacheDefineVariables = 'Προβολή μεταβλητών (Ορισμένων) του Apache';
$w_showExcludedPorts = 'Προβολή θυρών εξαιρούμενων από το σύστημα';
$w_testAliasDir = 'Έλεγχος σχέσεων ετικέτας <-> Φακέλου';
$w_verifyxDebugdll = 'Έλεγχος για μη χρησιμοποιημένων dlls του xDebug';
$w_empty = '’δειασμα';
$w_misc = 'Διάφορα';
$w_emptyAll = '’δειασμα ΌΛΩΝ';

$w_emptyLogs = '’δειασμα καταγραφών';
$w_emptyPHPlog = '’δειασμα καταγραφής σφαλμάτων PHP';
$w_emptyApaErrLog = '’δειασμα καταγραφής σφαλμάτων Apache';
$w_emptyApaAccLog = '’δειασμα καταγραφής πρόσβασης Apache';
$w_emptyMySQLog = '’δειασμα καταγραφής MySQL';
$w_emptyMariaLog = '’δειασμα καταγραφής MariaDB';
$w_emptyAllLog ='’δειασμα όλων των αρχείων καταγραφής';

$w_dnsorder = 'Έλεγχος σειράς αναζήτησης DNS';
$w_deleteVer = 'Διαγραφή μη χρησιμοποιημένων εκδόσεων';
$w_addingVer = 'Προσθήκη εκδόσεων Apache, PHP, MySQL, MariaDB, κλπ.';
$w_deleteListenPort = 'Διαγραφή μιας θύρας Ακρόασης του Apache';
$w_delete = 'Διαγραφή';
$w_defaultDBMS = 'Προεπιλογή DBMS:';
$w_invertDefault = 'Εναλλαγή προεπιλογής DBMS ';
$w_changeCLI = 'Αλλαγή έκδοσης PHP CLI';
$w_reinstallServices = 'Επανεγκατάσταση όλων των υπηρεσιών';
$w_wampReport = 'Αναφορά Ρυθμίσεων Wampserver';
$w_dowampReport = 'Δημιουργία: '.$w_wampReport;
$w_verifySymlink = 'Έλεγχος συμβολικών συνδέσμων';
$w_goto = 'Μετάβαση σε:';
$w_FileRepository = 'Σύνδεσμοι για τα αποθετήρια Wampserver αρχείων και προσθέτων';
$w_compareApache = 'Σύγκριση ρυθμίσεων Apache';
$w_versus = 'σε σχέση με';
$w_restorefile = 'Επαναφορά αρχείων που αποθηκεύτηκαν κατά την εγκατάσταση του Apache';
$w_restore = 'Επαναφορά';
$w_checkUpdates = 'Έλεγχος ενημερώσεων';
$w_apacheTools = 'Εργαλεία Apache';
$w_PHPloadedExt = 'Προβολή φορτωμένων Επεκτάσεων PHP';
$w_PHPversionsUse = 'Προβολή χρήσης των εκδόσεων της PHP';

//miscellaneous
$w_ext_spec = 'Ειδικές επεκτάσεις';
$w_ext_zend = 'Επεκτάσεις Zend';
$w_phpparam_info = 'Μόνο για πληροφόρηση';
$w_ext_nodll = 'Κανένα αρχείο dll';
$w_ext_noline = 'Κανένα «extension=»';
$w_mod_fixed = 'Μη αναστρέψιμη επέκταση';
$w_no_module = 'Κανένα αρχείο επέκτασης';
$w_no_moduleload = 'Κανένα «LoadModule»';
$w_mysql_none = 'καμία';
$w_mysql_user = 'κατάσταση χρήστη';
$w_mysql_default = 'από προεπιλογή';
$w_mysql_mode = 'Εξηγήσεις της κατάστασης sql';
$w_apache_restore = 'Προειδοποίηση επαναφοράς Apache,';
$w_apache_compare = 'Προειδοποίηση σύγκρισης ρυθμίσεων Apache';
$w_Refresh_Restart = 'Βοήθεια '.$w_refresh.' - '.$w_restartWamp;
$w_Size = 'Μέγεθος';
$w_Time = 'Χρόνος';
$w_Integer = 'Τιμή ακεραίου';
$w_phpMyAdminHelp = 'Βοήθεια PhpMyAdmin';
$w_phpNotExists = 'Η έκδοση PHP δεν υπάρχει';
$w_All_Versions = 'Όλες οι εκδόσεις';

// PromptText for Aestan Tray Menu type: prompt variables
// May have \r\n for multilines
$w_EnterInteger = 'Εισαγωγή ενός ακεραίου';
$w_enterPort = 'Εισαγωγή επιθυμητού αριθμού θύρας';
$w_EnterSize = "Εισαγωγή Μέγεθος: xxxx ακολουθούμενο από M για Mega ή G για Giga\r\nΤα σύμβολα M ή G πρέπει να είναι ενωμένα με τον αριθμό.\r\nΓια παράδειγμα: 64M , 256M , 1G";
$w_EnterTime = "Εισαγωγή χρόνου σε δευτερόλεπτα";
$w_MysqlMariaUser = "Εισαγωγή έγκυρου ονόματος χρήστη. Αν δεν γνωρίζετε, διατηρήστε το «root» από προεπιλογή.\r\nΑν έχετε ορίσει κωδικό πρόσβασης είτε για το root ή τον επιλεγμένο χρήστη, θα χρειαστεί να γράψετε αυτόν τον κωδικό χρήστη όταν σας ζητηθεί για «Εισαγωγή κωδικού πρόσβασης:» από τη Γραμμή εντολών. Χωρίς κωδικό, πλήκτρο Enter";

// Long texts
// Quotation marks " in texts must be escaped: \" - May have \r\n for multilines
$w_addingVerTxt = "Όλα τα «πρόσθετα», π.χ. όλα τα πακέτα εγκατάστασης των εκδόσεων Apache, PHP, MySQL ή MariaDB καθώς και πακέτα εγκατάστασης ενημερώσεων (Wampserver, Aestan Tray Menu, xDebug, κλπ.) βρίσκονται στο\r\n\r\n«https://sourceforge.net/projects/wampserver/»\r\n\r\nΑπλώς λάβετε τα αρχεία των πακέτων εγκατάστασης και εκτελέστε τα με δεξί κλικ και επιλογή του «Εκτέλεση ως διαχειριστής» για να προσθέσετε το πρόσθετο ή την εφαρμογή στην έκδοση του Wampserver.\r\n\r\nΜετά, η αλλαγή της έκδοσης των Apache, PHP, MySQL ή MariaDB είναι υπόθεση τριών κλικ:\r\nΚλικ -> PHP|Apache|MySQL|MariaDB -> Έκδοση -> Επιλογή έκδοσης\r\n\r\nΗ αλλαγή έκδοσης δεν περιλαμβάνει καμιά αλλαγή παραμέτρου που μπορεί να πραγματοποιήσατε, ούτε μεταφέρει βάσεις δεδομένων από την παλαιά έκδοση στη νέα.\r\n\r\nΈνα πολύ καλύτερα οργανωμένο και πάντα ενημερωμένο αποθετήριο από αυτό στη Sourceforge υπάρχει εδώ:\r\n\r\n«https://wampserver.aviatechno.net».\r\n\r\nΟι σύνδεσμοι για τα αποθετήρια είναι στο μενού δεξιού κλικ -> Βοήθεια\r\n";
$w_MySQLsqlmodeInfo = "Κατάσταση SQL των MySQL / MariaDB\r\nΟ διακομιστής SQL μπορεί να εκτελείται σε διαφορετικές καταστάσεις SQL ανάλογα της τιμής της οδηγίας της κατάστασης sql.\r\nΟρίζοντας μια ή περισσότερες καταστάσεις περιορίζει συγκεκριμένες δυνατότητες και απαιτεί μεγαλύτερη αυστηρότητα στη σύνταξη SQL και στην εγκυρότητα των δεδομένων.\r\nΗ λειτουργία της οδηγίας της κατάστασης sql στο αρχείο my.ini είναι όπως παρακάτω:\r\n\r\n- sql-mode: από προεπιλογή\r\nΗ οδηγία κατάστασης sql δεν υπάρχει ή έχει σχολιαστεί (;sql-mode=\"...\")\r\nΟι προεπιλεγμένες καταστάσεις των εκδόσεων MySQL / MariaDB εφαρμόζονται\r\n\r\n- sql-mode: κατάσταση χρήστη\r\nΗ οδηγία κατάστασης sql εφαρμόζεται με καταστάσεις ορισμένες από το χρήστη, όπως για παράδειγμα:\r\nsql-mode=\"NO_ZERO_DATE,NO_ZERO_IN_DATE,NO_AUTO_CREATE_USER\"\r\n\r\n- sql-mode: καμία\r\nΗ οδηγία κατάστασης sql είναι άδεια αλλά πρέπει να υπάρχει:\r\nsql-mode=\"\"\r\nκαμιά κατάσταση SQL δεν εφαρμόζεται.";
$w_PhpMyAdMinHelpTxt = "-- PhpMyAdmin\r\nΌταν εκκινηθεί το phpMyAdmin, θα ερωτηθείτε για όνομα χρήστη και κωδικό πρόσβασης.\r\nΜετά την εγκατάσταση του Wampserver 3, το προεπιλεγμένο όνομα χρήστη είναι το «root» (χωρίς τα εισαγωγικά) και χωρίς κωδικό πρόσβασης, που σημαίνει ότι πρέπει να αφήσετε το πλαίσιο εισαγωγής του κωδικού πρόσβασης άδειο.\r\n\r\nΤο PhpMyAdmin είναι ρυθμισμένο να επιτρέπει την πρόαβαση τόσο στην MySQL όσο και την MariaDB, ανάλογα ποιες είναι ενεργοποιημένες.\r\nΑν και τα δύο συστήματα είναι ενεργοποημένα, θα δείτε ένα μενού στην οθόνη σύνδεσης, με την ονομάσία «Επιλογή Διακομιστή» και ο προεπιλεγμένος διακομιστής θα εμφανίζεται πρώτος στη λίστα. Επιλέξτε το σύστημα βάσεων δεδομένων που επιθυμείτε ως τμήμα της διαδικασίας σύνδεσης.\r\nΥΠΕΝΘΥΜΗΣΗ: αν έχετε διαφορετικούς λογαριασμούς χρήστη, πρέπει να χρησιμοποιείτε τον σωστό για το επιλεγμένο σύστημα βάσεων δεδομένων.\r\nΕΠΙΣΗΣ: Αν έχετε τον ίδιο λογαριασμό, π.χ. «root» και στα δύο συστήματα, αν έχετε ορίσει διαφορετικούς κωδικούς, θα πρέπει να χρησιμοποιήσετε τον σωστό κωδικό πρόσβασης για το σωστό σύστημα βάσεων δεδομένων.\r\n";
$w_PhpMyAdminBigFileTxt = "\r\n-- Εισαγωγή μεγάλων αρχείων\r\nΌταν εισάγετε μεγάλα αρχεία, μπορεί να υπερβείτε τα μέγιστα όρια μνήμης ή και χρόνου.\r\nΤυχόν αλλαγές στα όρια μνήμης και χρόνου δεν πρέπει να γίνουν στο αρχείο php.ini αλλά στο αρχείο wamp(64)\\alias\\phpmyadmin.conf.\r\n";
$w_ApacheRestoreInfo = "--- Επαναφορά Αρχείων Apache\r\nΑπό τον Apache 2.4.41, στο τέλος της εγκατάστασης, τα λειτουργικά αρχεία httpd.conf και httpd-vhosts.conf αντιγράφονται σε φάκελο αντιγράφων ασφαλείας.\r\nΣε περίπτωση προβλημάτων ή ανεπιθύμητων αλλαγών στον Apache, μπορείτε να επαναφέρετε αυτά τα δύο αρχεία στην αρχική ρύθμιση του Apache.\r\nΕννοείται, ότι ΣΕ ΑΥΤΗ ΤΗΝ ΠΕΡΙΠΤΩΣΗ ΘΑ ΧΑΣΕΤΕ ΟΠΟΙΑΔΉΠΟΤΕ ΑΛΛΑΓΗ ΡΥΘΜΙΣΕΩΝ ΈΧΕΤΕ ΚΑΝΕΙ ΜΕΤΑ ΤΗΝ ΕΓΚΑΤΑΣΤΑΣΗ, όπως φορτώσεις module ή include.";
$w_ApacheCompareInfo = "--- Σύγκριση εκδόσεων Apache\r\nΑν έχετε τουλάχιστον δύο εκδόσεις Apache, έχετε την δυνατότητα να συγκρίνετε την τρέχουσα έκδοση μια προηγούμενη έκδοση.\r\nΣυγκρίνονται τα παρακάτω:\r\n- LoadModule\r\n- Include\r\n- αρχεια httpd-vhosts.conf\r\n- αρχεια httpd-ssl.conf\r\n- αρχεια openssl.cnf\r\n- Παρουσιά και περιεχόμενο του φακέλου Certs\r\nΈκετε τη δυνατότητα να αντιγράψετε τη ρύθμιση μιας παλιάς έκδοσης στην τρέχουσα.\r\n*** ΠΡΟΕΙΔΟΠΟΙΗΣΗ *** Δεν θα γίνουν αντίγραφα ασφαλείας, είναι δική σας ευθύνη να μεριμνήσετε για αντίγραφα ασφαλείας ΠΡΙΝ την αντιγραφή των ρυθμίσεων.";
$w_Refresh_Restart_Info = "--- Διαφορές μεταξύ «".$w_refresh."» και «".$w_restartWamp."»\r\n-- ".$w_refresh.":\r\n- Διενεργεί διάφορους ελέγχους,\r\n- Επαναγιγνώσκει τα αρχεία ρυθμίσεων των Wampserver, Apache, PHP, MySQL και MariaDB,\r\n- Αλλάζει το αρχείο ρυθμίσεων του Wampmanager αντίστοιχα και ενημερώνει τα μενού,\r\n- Διενεργεί μια «εκλεπτισμένη επανεκκίνηση του Apache»,\r\n- Επαναφορτώνει το μενού του Aestan Tray.\r\nΔεν υπάρχει διακοπή των συνδέσεων των Apache, PHP, MySQL και MariaDB.\r\n\r\n-- ".$w_restartWamp.":\r\n- Σταμάτημα των υπηρεσιών: ".$c_apacheService.", ".$c_mysqlService." και ".$c_mariadbService.",\r\n- ’δειασμα όλων των αρχείων καταγραφής,\r\n- ’δειασμα του φακέλου tmp,\r\n- Έξοδος από τον Wampserver,\r\n- Εκκίνηση του Wampserver «κανονικά».\r\nΈτσι, υπάρχει ένα συνολικό κόψιμο των συνδέσεων των Apache, PHP, MySQL και MariaDB και επαναφορά τους με διαφορετική ταυτότητα.";
?>