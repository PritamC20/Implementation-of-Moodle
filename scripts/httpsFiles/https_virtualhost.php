<?php
//Wampserver https ready - Contents of one https VirtualHost
$https_virtualhost_fgci = <<<'EOF'
  <IfModule fcgid_module>
    Define FCGIPHPVERSION "VERSIONPHPFCGI"
    FcgidInitialEnv PHPRC ${PHPROOT}${FCGIPHPVERSION}
    <Files ~ "\.php$">
      Options +Indexes +Includes +FollowSymLinks +MultiViews +ExecCGI
      AddHandler fcgid-script .php
      FcgidWrapper "${PHPROOT}${FCGIPHPVERSION}/php-cgi.exe" .php
    </Files>
  </IfModule>

EOF;
$https_virtualhost = <<<'EOF'
Define SERVERNAMEVHOSTSSL HTTPSSERVERNAME
Define DOCUMENTROOTVHOSTSSL HTTPSDOCUMENTROOT
<VirtualHost HTTPSIP:443>
	ServerName ${SERVERNAMEVHOSTSSL}
  DocumentRoot "${DOCUMENTROOTVHOSTSSL}"
	SSLEngine on
	SSLCertificateFile      "${CERTIFS}/Site/${SERVERNAMEVHOSTSSL}.crt"
	SSLCertificateKeyFile   "${CERTIFS}/Site/${SERVERNAMEVHOSTSSL}.key"
	<Directory "${DOCUMENTROOTVHOSTSSL}/">
		Options +Indexes +Includes +FollowSymLinks +MultiViews
		AllowOverride all
		Require local
	</Directory>
	CustomLog "${INSTALL_DIR}/logs/custom.log" "%t %h %{SSL_PROTOCOL}x %{SSL_CIPHER}x \"%r\" %b"
</VirtualHost>
EOF;

?>