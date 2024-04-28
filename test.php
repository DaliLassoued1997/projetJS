<?php
include ('config.php');


    $email=$_POST['email'];
    $mdps=$_POST['password'];
   
    $result = $con->query("SELECT * FROM employer where ");

if (isset($email) && isset($mdps)){         //on verfier si l'utlisateur a rentre des informations
    //nous allons mettres l'email et le mote de passe dans des varaiables
   

    while($data = $result->fetch()){
        if ( $data['email']== $email && $data['mdps'] == $mdps){
          //login succues
      header("Location: home.php");
      exit();
        }
  }

 header("location: failed.php");
}

