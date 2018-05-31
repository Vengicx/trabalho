<?php
    $root = "root";
    $rootpassword = "";
    $dbname = "trabalho";
    $localhost = "127.0.0.1";


    try {
        $pdo = new PDO("mysql:host=$localhost;dbname=$dbname;charset=utf8",$root,$rootpassword);
        // echo "conectado!";
    } catch (PDOException $error){
        echo $error->getMessage();
        exit;
    }

?>
