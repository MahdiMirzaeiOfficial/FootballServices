<?php
if (!defined('HOST')) {
    define('HOST', 'www.football-services.ir');
}
if (!defined('USERNAME')) {
    define('USERNAME', 'root');
}
if (!defined('PASSWORD')) {
    define('PASSWORD', '');
}
if (!defined('DATABASE_NAME')) {
    define('DATABASE_NAME', 'football_services');
}

if (!defined('CHARSET')) {
    define('CHARSET', 'utf8mb4');
}

if (!defined('COLLATE')) {
    define('COLLATE', 'utf8mb4_general_ci');
}

$host = HOST;
$username = USERNAME;
$password = PASSWORD;
$database_name = DATABASE_NAME;
$charset = CHARSET;
$collate = COLLATE;
$software_setup = false;