<?php
global $routes;

$routes = array();

$routes['/'] = '/home';

$routes['/dashboard/logoff'] = '/dashboard/logoff';
$routes['/dashboard/login'] = '/dashboard/login';
$routes['/dashboard'] = '/dashboard';

$routes['/{slug}'] = '/produto/slug/:slug';