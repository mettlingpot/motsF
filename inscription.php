<?php
session_start();
include('filters/guest_filter.php');
require('includes/fonction.php');
require('config/db.php');

    //si formulaire fournis
    if(isset($_POST["inscription"])){
        
        //si tous les champs remplis
        if(not_empty(["name", "pseudo", "email", "password", "password_confirm"])){
            
            $errors = [];
            
            extract($_POST);
            
            if(mb_strlen($pseudo)<3){
                
                $errors[] = "pseudo trop court";
            }
            
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                
                $errors[] = "adresse invalide";
            }
            
             if(mb_strlen($password)<6){
                
                $errors[] = "password trop court 6 min";
                 
            } else{
                 if($password != $password_confirm){
                     
                     $errors[] = "les deux passwords ne correspondent pas";
                 }
             }
            
            if(is_already_in_use('pseudo', $pseudo, 'users')){
                
                $errors[] = "pseudo deja utilisé";
            }
            
            if(is_already_in_use('email', $email, 'users')){
                
                $errors[] = "mail deja utilisé";
            }
            
            if(count($errors) == 0){
               
                $to = $email;
                $subject = "motFleches - activation";
                $password = bcrypt_hash_password($password);
                $token = sha1($pseudo.$email.$password);
                
                ob_start();
                require('templates/emails/activation.tmpl.php');
                $content = ob_get_clean();
                
                $headers = 'MIME-Version: 1.0'."\r\n";
                $headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";
                
                //mail($to, $subject, $content, $headers);
                
                set_flash('Mail de confirmation envoyé','success');
                
                $q = $db->prepare('INSERT INTO users(name, pseudo, email, password)
                                    VALUES(:name, :pseudo, :email, :password)');
                $q->execute([
                    'name' => $name,
                    'pseudo' => $pseudo,
                    'email' => $email,
                    'password' => $password
                ]);
                
                redirect('index.php');
            
            }
            else{
                save_input_data();
            }
            
        } else{
            
            $errors[] = "remplir tous les champs";
            save_input_data();
        }
            
            
    } else{
        clear_input_data();
    }

?>

 <?php require('views/inscription.view.php'); ?>