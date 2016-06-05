<?php
define('ZONA_HORARIA', 'Mexico/general');
define('PATHAPP', '/var/www/html/bakery/');
define('LIB', 'lib/');
define('TEMPLATES', 'templates/');
define('TEMPLATES_C', 'templates_c/');
define('CACHE', 'cache/');
define('CONFIGS', 'configs/');
#motor de bases de datos
define('DB_DBMS','mysql');
define('DB_HOST', 'localhost');
define('DB_NAME', 'panaderia');
define('DB_USER','panadero');
define('DB_PASS', '1234');
#variables de envio de correos
//define('MAIL_HOST', true);
define('MAIL_SMTPAUTH', true);
define('MAIL_SMTPSECURE', 'ssl');
define('MAIL_SMTPDEBUG', 0);
define('MAIL_HOST', 'smtp.gmail.com');
define('MAIL_USSERNAME', 'beto.tellez19@gmail.com');
define('MAIL_PASSWORD', '');
define('MAIL_PORT', 465);

?>
