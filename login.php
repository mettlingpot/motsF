<?php
session_start();
include('filters/guest_filter.php');
require('includes/fonction.php');
require('config/db.php');

    //si formulaire fournis
    if(isset($_POST["login"])){
        
        //si tous les champs remplis
        if(not_empty(["identifiant", "password"])){
           extract($_POST);
            $q = $db->prepare("SELECT id, pseudo, password AS hashed_password, email FROM users WHERE (pseudo = :identifiant OR email = :identifiant) AND active='0'");
            $q->execute([
                'identifiant'=> $identifiant,
            ]);
            $user = $q->fetch(PDO::FETCH_OBJ);
            
            if($user && bcrypt_verify_password($password, $user->hashed_password)){
                
                $_SESSION['user_id'] = $user->id;
                $_SESSION['pseudo'] = $user->pseudo;
                         
                redirect('profile.php');
                
            } else{
                set_flash('Combinaison identifiant/password incorrecte');
                save_input_data();
            }
        }
     } else{
        clear_input_data();
    }

?>

 <?php require('views/login.view.php'); ?>