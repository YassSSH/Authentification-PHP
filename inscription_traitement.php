<?php 
    include 'config.php';
    
    if(!empty($_POST['pseudo']) && !empty($_POST['email']) && !empty($_POST['tel']) && !empty($_POST['adresse']) && !empty($_POST['naissance'])  && !empty($_POST['password']) && !empty($_POST['password_retype']))
    {
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $email = htmlspecialchars($_POST['email']);
        $tel = htmlspecialchars($_POST['tel']);
        $adresse = htmlspecialchars($_POST['adresse']);
        $naissance = htmlspecialchars($_POST['naissance']);
        $password = htmlspecialchars($_POST['password']);
        $password_retype = htmlspecialchars($_POST['password_retype']);

        $check = $bdd->prepare('SELECT pseudo, email, tel, adresse, naissance, password FROM utilisateurs WHERE email = ?');
        $check->execute(array($email));
        $data = $check->fetch();
        $row = $check->rowCount();

        if($row == 0){ 
            if(strlen($pseudo) <= 100){
                if(strlen($email) <= 100){
                    if(strlen($tel) <= 100){
                        if(strlen($adresse) <= 100){
                        if(strlen($naissance) <= 100){
                    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                        if($password === $password_retype){
                            $cost = ['cost' => 12];
                            $password = password_hash($password, PASSWORD_BCRYPT, $cost);
                            $ip = $_SERVER['REMOTE_ADDR'];

                            $insert = $bdd->prepare('INSERT INTO utilisateurs(pseudo, email, tel, adresse, naissance, password, ip) VALUES(:pseudo, :email, :tel, :adresse, :naissance, :password, :ip)');
                            $insert->execute(array(
                                'pseudo' => $pseudo,
                                'email' => $email,
                                'tel' => $tel,
                                'adresse' => $adresse,
                                'naissance' => $naissance,
                                'password' => $password,
                                'ip' => $ip
                            ));

                            header('Location:inscription.php?reg_err=success');die();
                                }else{ header('Location: inscription.php?reg_err=password'); die();}
                            }else{ header('Location: inscription.php?reg_err=email'); die();}
                        }else{header('Location: inscription.php?reg_err=naissance_length'); die();}
                        }else{ header('Location: inscription.php?reg_err=adresse_length'); die();}
                    }else{ header('Location: inscription.php?reg_err=tel_length'); die();}
                }else{ header('Location: inscription.php?reg_err=email_length'); die();}
            }else{ header('Location: inscription.php?reg_err=pseudo_length'); die();}
        }else{ header('Location: inscription.php?reg_err=already'); die();}
    }
