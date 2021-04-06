<?php
session_start();

include("../INCLUD/conection.php");
// include("functions.php");


if (isset($_POST["submit"])) {
    $id = $_POST["id"];
  $category = $_POST["category"];
  $breed = $_POST["breed"];
  $weight = $_POST["weight"];
  $height = $_POST["height"];
  $age = $_POST["age"];
  $fur= $_POST["fur"];
  $cost = $_POST["cost"];

    $sql = 'INSERT INTO animals(pet_id,petcaetegory,breed,weight,height,age,fur,cost) VALUES(:id,:category,:breed,:weight,:height,:age,:fur,:cost)';
    $statement = $conn->prepare($sql);
    if ($statement->execute(
        [
        ':id' => $id,
        ':category' => $category,
        ':breed' => $breed,
        ':weight' => $weight,
        ':height' => $height,
        ':age' => $age,
        ':fur' => $fur,
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
    <title>Document</title>
</head>
<body>
<form method="post">  
   <input type="text" name="id" placeholder=" Enter pet_id" required >
    <br><br>
   <input type="text" name="category" placeholder="Enter pet_category" required>
   <br><br>
  
  <input type="text" name="breed"  placeholder="Enter breed" required>
  <br><br>
  <input type="number" step=any name="weight"  placeholder="Enter weight" min="1" required>
  
 <input type="number" step=any name="height"  placeholder="Enter height" min="15" required>
  <br><br>
  <input type="number" name="age"  placeholder="Enter age" min="1" required>
 
  <input type="text" name="fur"  placeholder="Enter fur" required>
  <br><br>
  <input type="number" name="cost"  placeholder="Enter cost" min="0" required>
  <br><br>
  <input type="submit" name="submit" value="save">
</form> 
</body>
</html>