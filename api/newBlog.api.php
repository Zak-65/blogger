<?php 
    session_start();
    if($_SERVER['REQUEST_METHOD'] === 'POST'){

        $rawData = file_get_contents('php://input');
        $response =  json_decode($rawData,true);
        var_dump($response);
        var_dump($_SESSION['nom']);
    }
?>
