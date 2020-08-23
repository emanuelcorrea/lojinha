<h1 align="center"><img alt="Lojinha logo" src="https://i.imgur.com/NBW46vP.png"></h1>

<p align="center">
  	<img alt="Repository size" src="https://img.shields.io/github/repo-size/emanuelcorrea/lojinha?labelColor=444444&color=56cfc5">
  	<a href="https://github.com/emanuelcorrea/lojinha/commits/master">
    	<img alt="GitHub last commit" src="https://img.shields.io/github/last-commit/emanuelcorrea/lojinha?labelColor=444444&color=56cfc5">
  	</a>
  	<a href="https://github.com/emanuelcorrea/lojinha/issues">
    	<img alt="Repository issues" src="https://img.shields.io/github/issues/emanuelcorrea/lojinha?labelColor=444444&color=56cfc5">
  	</a>
  	<img alt="License" src="https://img.shields.io/badge/license-MIT-brightgreen?labelColor=444444&color=56cfc5">
</p>
<br>

<a href="http://lojinha.emanuelcorrea.com.br" title="Visitar site">
  <img src="https://i.imgur.com/VYPCsw3.png">
</a>

> *"Um simples e-commerce sendo construído com amor 💙!"* 

<br>

<h1 align="center">🛠 Instalação</h1>
<br>


### Requisitos
- PHP 7.0+
- MYSQL 5.7+
- Composer

### Composer
1. Clone ou faça download do repositório;
```
git clone https://github.com/emanuelcorrea/lojinha.git lojinha && cd lojinha/
```

2. Faça a instalação dos módulos para utilização do autoload do **Composer**;
```
cd Src/ && composer install
```

### Database

1. Faça a inserção do banco de dados com o arquivo *lojinha.sql*, localizado na pasta *config/database/*;
```
mysql -u root < config/database/lojinha.sql
```

2. Edite as constantes de conexão com o banco no arquivo *config.php* com as suas credenciais do *MYSQL*.
```
vi config/config.php
-->

if (ENVIRONMENT === 'production') {
    define('DBHOST', 'localhost');
    define('DBNAME', 'lojinha');
    define('DBUSER', 'root');
    define('DBPASS', '');
    
    // Se o projeto estiver em uma pasta e não na raiz do www
    $pasta = 'lojinha/';
    define('DIRPAGE', "http://{$_SERVER['HTTP_HOST']}/$pasta");
}
```

## License
[MIT](/license)