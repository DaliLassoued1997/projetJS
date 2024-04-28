<?php

//connexion a la base de donneé
$db_name = 'gestion_pharmacie';
$utilisateur = 'root';
$mdps ='';
try{
    $con= new PDO("mysql: host=localhost;dbname=gestion_pharmacie",$utilisateur ,$mdps,array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
}
catch(PDOException $e)
    {
        die ("erreur :" . $e->getMessage());
       
    }
 


?>