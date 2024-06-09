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
        $uri =parse_url($_SERVER['REQUEST_URI'])['path'];
        $routers = [
            '/dashboard' => './views/dashboard.view.php',
        
            '/accueille' => './views/accueille.view.php'
        
        
        ];
        
        if(array_key_exists($uri,$routers)){
        
            require $routers[$uri];
        
        }else{
            http_response_code(404);
            require 'controllers/404.php';
            die();
        }
    }else{
        header('location: /');
    }
    ?>