<?php
//Wampserver https ready - Contents of https-ssl.conf file
$httpd_ssl_conf = <<<'EOF'
#
# This is the Apache server configuration file providing SSL support.
# When we also provide SSL we have to listen to the
# standard HTTP port and to the HTTPS port
#
Listen 0.0.0.0:443 https
Listen [::0]:443 https

# Where the certificates are
Define CERTIFS ${INSTALL_DIR}/bin/Certs

Protocols h2 h2c http/1.1
<IfModule mod_headers.c>
  Header always set Strict-Transport-Security "max-age=31536000; preload"
</IfModule>
SSLSessionCache shmcb:${INSTALL_DIR}/tmp/ssl_gcache_data(512000)
SSLOptions +StrictRequire +StdEnvVars -ExportCertData
# SSL Protocol support:
SSLProtocol -all +TLSv1.2 +TLSv1.3
SSLCompression Off
SSLHonorCipherOrder On
# SSL Cipher Suite:
SSLCipherSuite SSL ECDHE-ECDSA-CHACHA20-POLY1305:ECDHE-ECDSA-AES256-GCM-SHA384:ECDHE-RSA-CHACHA20-POLY1305:ECDHE-RSA-AES256-GCM-SHA384
# Encryptions TLSv1.3
SSLCipherSuite TLSv1.3 TLS_CHACHA20_POLY1305_SHA256:TLS_AES_256_GCM_SHA384
SSLOpenSSLConfCmd ECDHParameters secp521r1
SSLOpenSSLConfCmd Curves sect571r1:sect571k1:secp521r1:sect409k1:sect409r1:secp384r1

## Never modify these four lines
## BEGIN OF SSL VIRTUAL HOST CONTEXT
## END OF SSL VIRTUAL HOST CONTEXT
## To be repeated for another SSL VirtualHost

# Do not remove these lines UnDefine
UnDefine SERVERNAMEVHOSTSSL
UnDefine DOCUMENTROOTVHOSTSSL

EOF;

?>