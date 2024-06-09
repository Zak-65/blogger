<?php 
    session_start();
    if(isset($_SESSION['id'])){
        $rawData = file_get_contents('php://input');
        require '../db/db.php';
        $db = new Database ;
        $query = "SELECT * FROM blog NATURAL JOIN utilisateur" ;
        $db -> query($query);
        $db->execute();
        $blogs = $db -> resultSet();
        $blogs = [
            'blogs' => $blogs ,
            'idSession' => $_SESSION['id']
        ];
        $blogs = json_encode($blogs);
        echo $blogs;
    }else{
        header('location: /');
    }
    ?>