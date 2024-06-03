<?php
//Wampserver https ready - Contents of openssl.cnf file
$openssl_cnf = <<<'EOF'
#============ openssl.cnf =============#
[ca]
default_ca       = CA_default

[CA_default]
dir              = ../../../Certs
cacerts_dir      = $dir/Cacerts
certificate      = $cacerts_dir/Certificat.crt
new_certs_dir    = $dir/Newcerts
private_dir      = $cacerts_dir
private_key      = $private_dir/Certificat.key
RANDFILE         = $private_dir/Certificat.rnd
other_dir        = $dir/Other
database         = $other_dir/index.txt
serial           = $other_dir/serial.txt
default_crl_days = 14610
default_days     = 14610
default_md       = sha512
x509_extensions  = usr_cert
name_opt         = ca_default
cert_opt         = ca_default
preserve         = no
policy           = policy_match

[policy_match]
countryName            = match
stateOrProvinceName    = match
localityName           = match
organizationName       = optional
organizationalUnitName = optional
commonName             = supplied
emailAddress           = optional

[usr_cert]
basicConstraints       = CA:FALSE
nsCertType             = client
keyUsage               = nonRepudiation, digitalSignature, keyEncipherment
nsComment              = "OpenSSL Generated Certificate"
subjectKeyIdentifier   = hash
authorityKeyIdentifier = keyid,issuer

[ocsp]
basicConstraints       = CA:FALSE
subjectKeyIdentifier   = hash
authorityKeyIdentifier = keyid,issuer
keyUsage               = critical, digitalSignature
extendedKeyUsage       = critical, OCSPSigning

[req]
default_bits        = 4096
default_keyfile     = ../../../Certs/Cacerts/Certificat.pem
encrypt_key         = no
default_md          = sha512
string_mask         = utf8only
prompt              = no
utf8                = yes
distinguished_name  = req_distinguished_name
req_extensions      = v3_req
x509_extensions     = v3_ca

[req_distinguished_name]
countryName_default            = FR
stateOrProvinceName_default    = Paris
localityName_default           = Paris
0.organizationName_default     = Otomatic & Cie
organizationalUnitName_default = Wampserver
commonName                     = Common Name (eg, your website’s domain name)
commonName_max                 = 64
emailAddress_default           = otomatic@aviatechno.net
emailAddress_max               = 40

[v3_req]
basicConstraints = CA:FALSE
keyUsage         = nonRepudiation, digitalSignature, keyEncipherment

[v3_ca]
# Extensions to use when signing a CA
basicConstraints       = critical, CA:true
keyUsage               = keyCertSign, cRLSign
nsCertType             = sslCA, emailCA
nsComment              = "SSL ROOT CA"
subjectKeyIdentifier   = hash
authorityKeyIdentifier = keyid:always,issuer:always
subjectAltName         = @alt_names

[alt_names]
DNS.1 = IP:127.0.0.1
DNS.2 = localhost

EOF;

?>