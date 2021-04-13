<?php
session_start();

include("../INCLUD/conection.php");
// include("functions.php");


if (isset($_POST["submit"])) {
  $id = $_POST["id"];
  $cs_id = $_POST["cs_id"];
  $date = $_POST["date"];
  $total = $_POST["total"];
  
    $sql = 'UPDATE salesdetails SET cs_id=:cs_id, date=:date , total=:total WHERE sd_ID=:id';
    $statement = $conn->prepare($sql);
    if ($statement->execute(
        [
          ':id' => $id,
      ':cs_id' => $cs_id,
      ':date' => $date,
      ':total' => $total
         
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
    <h1 class="title" >Sales</h1>
    <a class="logout" href="../INCLUD/logout.php">logout</a>
            </div>
            <form class="animaly">
<button class="add"  type="submit" formaction="salesdetails.php">Back</button>
 
</form>
<form class="form" method="post">  
   
<input class="with" type="text" name="id" placeholder=" Enter id" required >
    <br><br>
   <input class="with" type="text" name="cs_id" placeholder="Enter cs_id" required>
   <br><br>
  
  <input  type="date" name="date"  placeholder="Enter date" required>
  <br><br>
  <input type="number" name="total" placeholder="Enter total" required>
  <br><br>
  <input class="save" type="submit" name="submit" value="save">
 
</form> 
</body>
</html>