<?php
session_start();
ob_start();

require_once('../config/config.php');
header('Content-type: text/html; charset=utf-8');

new App\Dispatch();