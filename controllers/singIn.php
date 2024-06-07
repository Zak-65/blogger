<?php
    session_start();
    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password'])){
            require './db/db.php';
            $db = new Database;
            $query = 'SELECT * from utilisateur where email = :email';
            $db->query($query);
            $db->bind(":email",$_POST['email']);
            $db->execute();
            $user = $db -> single();
            if(empty($user)){
                    $query = " INSERT INTO utilisateur(nomU,photoP,photoC,sexe,email,pswd) VALUES (:nom,:photoP,:photoC,:sexe,:email,:pswd)";
                    $db->query($query);
                    $db -> bind(":nom",$_POST["name"]);
                    $db -> bind(":photoP",$_POST["photoP"]);
                    $db -> bind(":photoC",$_POST["photoC"]);
                    $db -> bind(":sexe",$_POST["sex"]);
                    $db -> bind(":email",$_POST["email"]);
                    $db -> bind(":pswd",$_POST["password"]);
                    $db -> execute();
                    // part creation folders
                    $query = $query = 'SELECT * FROM utilisateur WHERE email = :email AND pswd = :pswd';
                    $db->query($query);
                    $db->bind(":email",$_POST['email']);
                    $db->bind(":pswd",$_POST['password']);
                    $db->execute();
                    $user = $db -> single();
                    // creation folders
                    $directoryName = "./allAssets/$user[idU]";
                    // Check if the directory already exists
                    if (!is_dir($directoryName)) {
                        // Create the directory
                        if (mkdir($directoryName, 0755, true)) {
                            
                        } else {
                            echo "Failed to create directory.";
                        }
                    } else {
                        echo "Directory already exists.";
                    }

                    // creation folders 2
                    $directoryNameP = "./allAssets/$user[idU]/profile";
                    // Check if the directory already exists
                    if (!is_dir($directoryNameP)) {
                        // Create the directory
                        if (mkdir($directoryNameP, 0755, true)) {
                            
                        } else {
                            echo "Failed to create directory.";
                        }
                    } else {
                        echo "Directory already exists.";
                    }

                    // creation folders 3
                    $directoryNameB = "./allAssets/$user[idU]/blogs";
                    // Check if the directory already exists
                    if (!is_dir($directoryNameB)) {
                        // Create the directory
                        if (mkdir($directoryNameB, 0755, true)) {
                            
                        } else {
                            echo "Failed to create directory.";
                        }
                    } else {
                        echo "Directory already exists.";
                    }
                     header("location: /");
            }else{
                $errorMessage = "Adresse mail deja existe" ;
            }
        };
    }
    require './views/signIn.view.php';