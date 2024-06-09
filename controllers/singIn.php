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
                    $query = " INSERT INTO utilisateur(nomU,sexe,email,pswd) VALUES (:nom,:sexe,:email,:pswd)";
                    $db->query($query);
                    $db -> bind(":nom",$_POST["name"]);
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
                            // enregistrement profile photo
                            $profileP = $_FILES["photoP"]["name"];
                            if(!empty($profileP)){
                                $profileP = str_replace(" ","_",$profileP);
                                $profileTempPath = $_FILES["photoP"]["tmp_name"];
                                echo $profileTempPath . '1';
                                echo '<br>';
                                $profileTargetPath = dirname(__DIR__) . "/allAssets/$user[idU]/profile/" . basename($profileP);
                                echo $profileTargetPath  . '2' ;
                                $picData = "/allAssets/$user[idU]/profile/" . basename($profileP);
                                move_uploaded_file($profileTempPath, $profileTargetPath);
                            }else{
                                $picData = "/allAssets/default/profileP.jpg";
                            }
                            // envoi path de photo ou base de donnes
                            $query = "UPDATE `utilisateur` SET `photoP`= :photoP  WHERE `idU` = $user[idU]";
                            $db->query($query);
                            $db->bind(":photoP",$picData);
                            $db->execute();
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
                            $profileC = $_FILES["photoC"]["name"];
                            // enregistrement photo coverture
                            if(!empty($profileC)){
                                $profileC = str_replace(" ","_",$profileC);
                                $profileTempPath = $_FILES["photoC"]["tmp_name"];
                                $profileTargetPath = dirname(__DIR__) . "/allAssets/$user[idU]/profile/" . basename($profileC);
                                $picData = "/allAssets/$user[idU]/profile/" . basename($profileC);
                                move_uploaded_file($profileTempPath, $profileTargetPath);
                            }else{
                                $picData = "/allAssets/default/profileC.jpg";
                            }
                            // envoi path de photo ou base de donnes
                            $query = "UPDATE `utilisateur` SET `photoC`= :photoC  WHERE `idU` = $user[idU]";
                            $db->query($query);
                            $db->bind(":photoC",$picData);
                            $db->execute();
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