<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password'])){
            require './db/db.php';
            $db->exec('USE blogger');
            $query = 'SELECT * from utilisateur where email = :email';
            $statement =  $db->prepare($query);
            $statement->execute([
                ':email' => $_POST['email']
            ]);

            $user = $statement->fetch(PDO::FETCH_ASSOC);
            if(empty($user)){
                    $db->exec('USE blogger');
                    $query = " INSERT INTO utilisateur(nomU,photoP,photoC,sexe,email,pswd) VALUES (:nom,:photoP,:photoC,:sexe,:email,:pswd)";
                    $statement = $db->prepare($query);
                    $statement->execute([
                    ':nom'=> $_POST["name"],
                    ':photoP'=> $_POST["photoP"],
                    ':photoC'=> $_POST["photoC"],
                    ':sexe'=> $_POST["sex"],
                    ':email'=> $_POST["email"],
                    ':pswd'=>$_POST["password"]  
                ]);
                $users = $statement->fetchAll(PDO::FETCH_ASSOC);
            }else{
                $errorMessage = "Adresse mail deja existe" ;
            }
        }else{
            $errorMessage = 'Remplire tous les champs';
        }
    }
    require './views/signIn.view.php';