<?php

define("DB_HOST","localhost");
define("DB_NAME","mots");
define("DB_USER","root");
define("DB_PASS","");

try{
    $db = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASS);
    
    $db ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    
    //$db->query("SELECT * FROM mots");
}
catch(PDOException $e){
    die("Erreur: ".$e->getMessage());
}
