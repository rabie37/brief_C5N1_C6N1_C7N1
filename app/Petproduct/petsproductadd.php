<?php
session_start();

include("../INCLUD/conection.php");
// include("functions.php");


if (isset($_POST["submit"])) {
    $id = $_POST["pp_id"];
  $pp_name = $_POST["pp_name"];
  $pp_type = $_POST["pp_type"];
  $cost = $_POST["cost"];
  $belongs_to = $_POST["belongs_to"];
  

    
  $sql = 'INSERT INTO products(pp_id,pp_name,pp_type,cost,belongs_to) VALUES(:id,:pp_name,:pp_type,:cost,:belongs_to)';
  $statement = $conn->prepare($sql);
  if ($statement->execute(
      [
      ':id' => $id,
      ':pp_name' => $pp_name,
      ':pp_type' => $pp_type,
      ':cost' => $cost,
      ':belongs_to' => $belongs_to
       
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
    <h1 class="title" >Product</h1>
    <a class="logout" href="../INCLUD/logout.php">logout</a>
            </div>
            <form class="animaly">
<button class="add"  type="submit" formaction="petsproduct.php">Back</button>
 
</form>

<form class="form" method="post">  
   
<input class="with" type="text" name="pp_id" placeholder=" Enter pp_id" required >
    <br><br>
   <input class="with" type="text" name="pp_name" placeholder="Enter pp_name" required>
   <br><br>
  
  <input class="with" type="text" name="pp_type"  placeholder="Enter pp_type" required>
  <br><br>
  <input type="number" step=any name="cost"  placeholder="Enter cost" min="15" required>
  <input type="text" name="belongs_to" placeholder="Enter belongs_to" required>
  
 
  <br><br>
  <input class="save" type="submit" name="submit" value="save">
</form> 
</body>
</html>