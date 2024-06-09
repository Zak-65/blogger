<?php session_start() ?>
<?php 
    if(isset($_SESSION['id'])){
        require './db/db.php';
        $db = new Database ;
        $query = "SELECT * FROM blog NATURAL JOIN utilisateur" ;
        $db -> query($query);
        $db->execute();
        $blogs = $db -> resultSet();
        require './views/accueille.view.php';
    }else{
        header('location: /');
    }
    ?>