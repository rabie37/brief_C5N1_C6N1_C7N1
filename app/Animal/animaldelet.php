<?php
session_start();

include("../INCLUD/conection.php");


if (isset($_POST["submit"])) {
    $id = $_POST["id"];
   
  
    $sql = 'DELETE FROM animals WHERE pet_id=:id';
    $statement = $conn->prepare($sql);
    if ($statement->execute(
        [
        ':id' => $id,
       
         
         ])) {
            header("location: ../Animal/animals.php");
    }
  
  
  
  }


?>