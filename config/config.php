<?php
require_once('environment.php');
require_once('../Src/vendor/autoload.php');

if (ENVIRONMENT === 'production') {
    define('DBHOST', 'localhost');
    define('DBNAME', 'lojinha');
    define('DBUSER', 'root');
    define('DBPASS', '');
    
    // Se o p rojeto estiver em uma pasta e não na raiz do www
    $pasta = 'lojinha/';
    define('DIRPAGE', "http://{$_SERVER['HTTP_HOST']}/$pasta");
} else {
    define('DBHOST', 'localhost');
    define('DBNAME', 'u126842498_lojinha');
    define('DBUSER', 'u126842498_lojinha');
    define('DBPASS', 'BoaeI`1!kH');

    // Se o p rojeto estiver em uma pasta e não na raiz do www
    $pasta = '';
    define('DIRPAGE', "https://{$_SERVER['HTTP_HOST']}/$pasta");
}

if (substr($_SERVER['DOCUMENT_ROOT'], -1) == '/') {
    define('DIRREQ', "{$_SERVER['DOCUMENT_ROOT']}$pasta");
} else {
    define('DIRREQ', "{$_SERVER['DOCUMENT_ROOT']}/$pasta");
}

define('DIRCSS', DIRPAGE.'public/assets/css/');
define('DIRIMG', DIRPAGE.'public/assets/img/');
define('DIRJVS', DIRPAGE.'public/assets/js/');
define('DIRFNT', DIRPAGE.'public/assets/fonts/');
define('DIRAUD', DIRPAGE.'public/assets/audio/');
define('DIRVID', DIRPAGE.'public/assets/video/');
