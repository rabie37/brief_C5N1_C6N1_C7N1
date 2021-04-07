<?php
session_start();

include("../INCLUD/conection.php");
// include("functions.php");


if (isset($_POST["submit"])) {
  $id = $_POST["id"];
  $cs_fname = $_POST["cs_fname"];
  $cs_lname = $_POST["cs_lname"];
  $cs_minit = $_POST["cs_minit"];
  $cs_address	 = $_POST["cs_address"];
  
    $sql = 'UPDATE customer SET cs_fname=:cs_fname, cs_lname=:cs_lname , cs_minit=:cs_minit, cs_address=:cs_address WHERE cs_id=:id';
    $statement = $conn->prepare($sql);
    if ($statement->execute(
        [
          ':id' => $id,
          ':cs_fname' => $cs_fname,
          ':cs_lname' => $cs_lname,
          ':cs_minit' => $cs_minit,
          ':cs_address' => $cs_address	
         
         ])) {
      $message = 'data inserted successfully';
    }
  
  
  
  }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style.css">
    
    <title>Document</title>
</head>
<body>
<div class="nav">
    <img src="../logo.png" alt="">
    <h1 class="title" >Birds</h1>
    <a class="logout" href="../INCLUD/logout.php">logout</a>
            </div>

<form class="form" method="post">  
   
<input class="with" type="text" name="id" placeholder=" Enter id" required >
    <br><br>
   <input class="with" type="text" name="cs_fname" placeholder="Enter first name" required>
   <br><br>
  
  <input  type="text" name="cs_lname"  placeholder="Enter last name" required>
  
  <input type="text" name="cs_minit" placeholder="Enter minit" required>
  <br><br>
 <input class="with" type="text" name="cs_address"  placeholder="Enter address" required>
  <br><br>
  <input class="save" type="submit" name="submit" value="save">
</form> 
</body>
</html>