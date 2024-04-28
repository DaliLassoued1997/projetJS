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
 
<?php  include ('config.php');    

?>
  <table class="tab">
          <tr> 
          <th> id </th>
          <th> email </th>
          <th> mdps </th>
          </tr>
      <?php

      foreach( $con ->query('SELECT * FROM employer  ')as $elem){
    
      ?> 
          <tr>
         
          <td><?php echo $elem['id']?></td>
          <td><?php echo $elem['email'] ?></td>
          <td><?php echo $elem['mdps'] ?></td>

          <?php } ?> 
          </tr>
          
    </table  >

</body>
</html>
