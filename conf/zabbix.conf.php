<?php
// Zabbix GUI configuration file.
global $DB;

$DB['TYPE']     = 'MYSQL';
$DB['SERVER']   = '145.170.23.28';
$DB['PORT']     = '0';
$DB['DATABASE'] = 'zabbix';
$DB['USER']     = 'zabbix';
$DB['PASSWORD'] = 'P@ssw0rd';

// Schema name. Used for IBM DB2 and PostgreSQL.
$DB['SCHEMA'] = '';

$ZBX_SERVER      = '145.170.23.28';
$ZBX_SERVER_PORT = '10051';
$ZBX_SERVER_NAME = 'whstone';

$IMAGE_FORMAT_DEFAULT = IMAGE_FORMAT_PNG;
