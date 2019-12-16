<?php
namespace Src\Core;

abstract class Connection
{
    final protected static function conn()
    {
        $conn = new \PDO('mysql:host='. DBHOST .';dbname='. DBNAME .'', DBUSER, DBPASS, array(\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION, \PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8" ));

        return $conn;
    }
}