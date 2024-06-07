<?php
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        if(!empty($_POST['email']) && !empty($_POST['password'])){
            require './db/db.php';
            $db = new Database ;
            $query = 'SELECT * FROM utilisateur WHERE email = :email AND pswd = :pswd';
            $db->query($query);
            $db -> bind(":email",$_POST['email']);
            $db -> bind(":pswd",$_POST['password']);
            $db->execute();
            $user = $db -> single();
            if(!empty($user)){
                session_start();
                $_SESSION['id'] = $user['idU'];
                $_SESSION['nom'] = $user['nomU'];
                $_SESSION['photoP'] = $user['photoP'];
                $_SESSION['photoC'] = $user['photoC'];
                $_SESSION['sexe'] = $user['sexe'];
                $_SESSION['email'] = $user['email'];
                header('location: /dashboard');
                die();
            }else{
                $errorMessage = 'Verifier votre mot de passe ou votre email';
            }
        }else{
            $errorMessage = 'Remplire tous les champs';
        }
    }
    require './views/logIn.view.php';