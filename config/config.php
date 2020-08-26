<?php
require_once('../Src/vendor/autoload.php');
require_once('environment.php');

// Constantes de conexão com o banco de dados

if (ENVIRONMENT == 'development') {
    define('DB_HOST', 'localhost');
    define('DB_PORT', 3306);
    define('DB_NAME', 'lojinha');
    define('DB_USER', 'root');
    define('DB_PASS', '');
} else {
    define('DB_HOST', 'localhost');
    define('DB_PORT', 3306);
    define('DB_NAME', 'lojinha');
    define('DB_USER', 'root');
    define('DB_PASS', '');
}
