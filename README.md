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

3. Altere as constantes de ambiente no arquivo *environment.php* localizado na pasta *config/* da raiz;
```
vi config/environments.php
-->

1. <?php>
2. define('ENVIRONMENT', 'development');
3. // define('ENVIRONMENT', 'production');
4.
5. // Caso o projeto esteja dentro de uma pasta e não na raiz do www/htdocs;
6. define('DIR_ROOT', 'lojinha/');
7. // Exemplo do projeto na raiz: define('DIR_ROOT', '');

```

### Database

1. Faça a inserção do banco de dados com o arquivo *lojinha.sql*, localizado na pasta *config/database/*;
```
mysql -u root < config/database/lojinha.sql
```

2. Altere as constantes de conexão com o banco de dados no arquivo *config.php* com as suas credenciais do *MYSQL*.
```
vi config/config.php
-->

// Constantes de conexão com o banco de dados
if (ENVIRONMENT === 'development') {
    define('DB_HOST', 'localhost');
    define('DB_NAME', 'lojinha');
    define('DB_USER', 'lojinha');
    define('DB_PASS', 'lojinha');
}
```

## License
[MIT](/license)