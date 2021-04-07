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
   
  
    $sql = 'DELETE FROM birds WHERE pet_id=:id';
    $statement = $conn->prepare($sql);
    if ($statement->execute(
        [
        ':id' => $id,
       
         
         ])) {
            header("location: brids.php");
    }
  
  
  
  }


?>