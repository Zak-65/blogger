<?php 
$uri =parse_url($_SERVER['REQUEST_URI'])['path'];

$routers = [
    '/' => 'controllers/index.php',

    '/signIn' => 'controllers/singIn.php',
    
    '/logIn' => 'controllers/logIn.php'
];

if(array_key_exists($uri,$routers)){

    require $routers[$uri];

}else{
    http_response_code(404);
    require 'controllers/404.php';
    die();
}
 