<?php
    session_start();
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        // enregistrement photo
        $profile = $_FILES["photoB"]["name"];
        if(!empty($profile)){
            $profile = str_replace(" ","_",$profile);
            $profileTempPath = $_FILES["photoB"]["tmp_name"];
            $profileTargetPath = dirname(__DIR__) . "/allAssets/$_SESSION[id]/blogs/" . basename($profile);
            $picData = "/allAssets/$_SESSION[id]/blogs/" . basename($profile);
            move_uploaded_file($profileTempPath, $profileTargetPath);
        }else{
            $picData = "/allAssets/default/blogF.jpg";
        }
        // send to dataBase
        require '../db/db.php';
        $db = new Database;
        $query = "INSERT INTO `blog`(`titre`, `contenu`, `photoBlog`, `idU`) VALUES (:titre,:contenu,:photoBlog,:idU)";
        $db->query($query);
        $db->bind(":titre",$_POST["titleB"]);
        $db->bind(":contenu",$_POST["content"]);
        $db->bind(":photoBlog",$picData);
        $db->bind(":idU",$_SESSION['id']);
        $db->execute();
    }
    header("location: /dashboard");