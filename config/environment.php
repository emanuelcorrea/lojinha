<?php
define('ENVIRONMENT', 'development');
// define('ENVIRONMENT', 'production');

// Caso o projeto esteja dentro de uma pasta e não na raiz do www/htdocs;
define('DIR_ROOT', 'lojinha/');
// Exemplo do projeto na raiz: define('DIR_ROOT', '');

// Dados para a formação dinâmica do caminho absoluto/relativo;
define('DIR_SERVER', $_SERVER['SERVER_NAME']);
define('DIR_PROTOCOL', ($_SERVER['SERVER_PORT'] != '80') ? 'https' : 'http');
define('DIR_PATH', DIR_PROTOCOL . '://' . DIR_SERVER . '/' . DIR_ROOT);

// Caminho absoluto
if (substr($_SERVER['DOCUMENT_ROOT'], -1) == '/') {
    define('DIR_REQ', "{$_SERVER['DOCUMENT_ROOT']}" . DIR_ROOT);
} else {
    define('DIR_REQ', "{$_SERVER['DOCUMENT_ROOT']}/" . DIR_ROOT);
}

// Caminhos relativos
define('DIR_CSS', DIR_PATH . 'public/assets/css/');
define('DIR_IMG', DIR_PATH . 'public/assets/images/');
define('DIR_JVS', DIR_PATH . 'public/assets/js/');
define('DIR_FNT', DIR_PATH . 'public/assets/fonts/');
define('DIR_AUD', DIR_PATH . 'public/assets/audios/');
define('DIR_VID', DIR_PATH . 'public/assets/videos/');
