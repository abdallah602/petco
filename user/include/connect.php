<?php

    $dsn = "mysql:host=localhost;dbname=homes";
    $user = "root";
    $pass_1 = "root";
    $option = [pdo::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8"];
    try{
        $db = new PDO($dsn , $user , $pass_1, $option);
        $db->setAttribute(pdo::ATTR_ERRMODE, pdo::ERRMODE_EXCEPTION);
    }catch(PDOException $n){
        echo $n->getMessage();
    }

?>