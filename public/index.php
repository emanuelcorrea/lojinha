<?php
if (session_status() !== PHP_SESSION_ACTIVE) {
    session_cache_expire(60);
    session_start();
}

ob_start();

require_once('../config/config.php');
header('Content-type: text/html; charset=utf-8');

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

new App\Dispatch();
