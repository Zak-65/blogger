<?php session_start() ?>
<?php 
    if(isset($_SESSION['id'])){
        require './db/db.php';
        $db = new Database();
        $query = 'SELECT * FROM blog WHERE idU = :id ';
        $db -> query($query);
        $db -> bind(":id",$_SESSION['id']);
        $db -> execute();
        $blogs = $db -> resultSet();
        require './views/dashboard.view.php';
    }else{
        header('location: /');
    }
    ?>