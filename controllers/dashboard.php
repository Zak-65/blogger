<?php session_start() ?>
<?php 
    if(isset($_SESSION['id'])){
        require './views/dashboard.view.php';
    }else{
        header('location: /');
    }
    ?>
