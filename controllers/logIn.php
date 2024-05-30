<?php
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        if(!empty($_POST['email']) && !empty($_POST['password'])){
            require './db/db.php';
            $db->exec('USE blogger');
            $query = 'SELECT * FROM utilisateur WHERE email = :email AND pswd = :pswd';
            $statment = $db->prepare($query);
            $statment->execute([
                ':email' => $_POST['email'],
                ':pswd' => $_POST['password']
            ]);
            $user = $statment->fetch(PDO::FETCH_ASSOC);
            if(!empty($user)){
                session_start();
                $_SESSION['id'] = $user['idU'];
                $_SESSION['nom'] = $user['nomU'];
                $_SESSION['photoP'] = $user['photoP'];
                $_SESSION['photoC'] = $user['photoC'];
                $_SESSION['sexe'] = $user['sexe'];
                $_SESSION['email'] = $user['email'];
                echo '<br/>';
                var_dump($_SESSION);
                die();
            }else{
                $errorMessage = 'Verifier votre mot de passe ou votre email';
            }
        }else{
            $errorMessage = 'Remplire tous les champs';
        }
    }
    require './views/logIn.view.php';