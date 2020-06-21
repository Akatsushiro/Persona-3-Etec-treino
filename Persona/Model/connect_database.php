<?php

abstract class Database{
    protected $pdo;

    function conectar($db_name = "Persona", $db_host = "localhost", $db_user = "root", $db_password = "Ptrck1999"){
        global $pdo; 
        $pdo = new PDO("mysql:dbname=" . $db_name . "; host=" . $db_host, $db_user, $db_password, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''));
    }

    function desconectar(){
        global $pdo;
        $pdo = null;
    }
}