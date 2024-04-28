<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>presenter base de donner</title>
    <link rel="stylesheet" href="css/Style.css" />
    <style>
      
  </style>
</head>
<body>                   
<?php include('config.php');
 
  if(isset($_POST['sign'])){
    $choisie_image= $_POST['choisie_image'];
    $Medicine_Name= $_POST['Medicine_Name'];
    $quantity= $_POST['quantity'];
    $Batch_No= $_POST['Batch_No'];
    $Expiry_Date= $_POST['Expiry_Date'];  
    $Status= $_POST['Status']; 
 
       if(!empty( $choisie_image) && !empty( $Medicine_Name) && !empty( $quantity) && !empty( $Batch_No) && !empty( $Expiry_Date) && !empty( $Status)){
        $q = "INSERT INTO produit ($choisie_image ,'$Medicine_Name','$quantity','$Batch_No','$Expiry_Date','$Status') VALUES($choisie_image ,'$Medicine_Name','$quantity','$Batch_No','$Expiry_Date','$Status')";
        
        $inserted ->exec($q);
              if($inserted) {
                echo "produit est ajouté";
              }
              }
  }
 
  ?>
  <br>
  <table >
          <tr> 
          <th> choisie_image </th>
          <th> Medicine_Name </th>
          <th> quantity </th>
          <th>Batch_No  </th>
          <th>Expiry_Date </th >
          <th> Status  </th>


          </tr><br>
     <?php

       foreach($con ->query("SELECT * FROM produit  ")as $elem){
       
      ?> 
          <tr>
          <td><?php echo $elem['choisie_image'] ?></td>
          <td><?php echo $elem['Medicine_Name'] ?></td>
          <td><?php echo $elem['quantity']?></td>
          <td><?php echo $elem ['Batch_No']?></td>
          <td><?php echo $elem ['Expiry_Date'] ?></td>
          <td><?php echo $elem['Status'] ?></td>

          <?php } ?> 
          </tr>
          
    </table  ><br>

   
     



</body>
</html>

