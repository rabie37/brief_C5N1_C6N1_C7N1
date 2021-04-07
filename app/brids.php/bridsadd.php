<?php
session_start();

 
$servername = "localhost";
$usern = "root";
$password = "";

try {
  $conn = new PDO("mysql:host=$servername;dbname=animaleries", $usern, $password);
  // echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}


if (isset($_POST["submit"])) {
    $id = $_POST["id"];
  $category = $_POST["category"];
  $type = $_POST["type"];
  $niose = $_POST["niose"];
  $cost = $_POST["cost"];
  

    
  $sql = 'INSERT INTO birds(pet_id,patcategory,type,niose,cost) VALUES(:id,:category,:type,:niose,:cost)';
  $statement = $conn->prepare($sql);
  if ($statement->execute(
      [
      ':id' => $id,
      ':category' => $category,
      ':type' => $type,
      ':niose' => $niose,
      ':cost' => $cost
       
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
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<div class="nav">
    <img src="../logo.png" alt="">
    <h1 class="title" >Birds</h1>
    <a class="logout" href="../INCLUD/logout.php">logout</a>
            </div>

<form class="form" method="post">  
   
<input class="with" type="text" name="id" placeholder=" Enter pet_id" required >
    <br><br>
   <input class="with" type="text" name="category" placeholder="Enter pet_category" required>
   <br><br>
  
  <input class="with" type="text" name="type"  placeholder="Enter breed" required>
  <br><br>
  <input type="text" name="niose" placeholder="Enter pet_category" required>
  
 <input type="number" step=any name="cost"  placeholder="Enter height" min="15" required>
  <br><br>
  <input class="save" type="submit" name="submit" value="save">
</form> 
</body>
</html>