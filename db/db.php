<?php

    $hostName = 'localhost';
    $dbName = 'blogger';
    $userName = 'root';
    $password = '';

    try{
        $db = new PDO("mysql:host=$hostName;dbName=$dbName",$userName,$password);
    }catch(PDOException $e){

        echo $e->getMessage();

    }