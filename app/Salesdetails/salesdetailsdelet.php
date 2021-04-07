<?php
session_start();

include("../INCLUD/conection.php");


if (isset($_POST["submit"])) {
    $id = $_POST["id"];
   
  
    $sql = 'DELETE FROM salesdetails WHERE sd_ID=:id';
    $statement = $conn->prepare($sql);
    if ($statement->execute(
        [
        ':id' => $id,
       
         
         ])) {
            header("location: ../Salesdetails/salesdetails.php");
    }
  
  
  
  }


?>