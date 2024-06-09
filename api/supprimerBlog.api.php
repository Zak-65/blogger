<?php 
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $rawData = file_get_contents('php://input');
        $response =  json_decode($rawData,true);
        require '../db/db.php';
        $db = new Database;
        $query = "DELETE FROM `blog` WHERE idBlog = :idBlog";
        $db -> query($query);
        $db->bind(':idBlog',$response['blogId']);
        $db->execute();
        echo 'blog supprimer';
    }

?>