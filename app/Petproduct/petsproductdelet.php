<?php
session_start();

include("../INCLUD/conection.php");


if (isset($_POST["submit"])) {
    $id = $_POST["id"];
   
  
    $sql = 'DELETE FROM products WHERE pp_id=:id';
    $statement = $conn->prepare($sql);
    if ($statement->execute(
        [
        ':id' => $id,
       
         
         ])) {
            header("location: ../Petproduct/petsproduct.php");
    }
  
  
  
  }


?>