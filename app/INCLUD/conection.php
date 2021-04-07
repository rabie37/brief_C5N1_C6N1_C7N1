<?php
$servername = "localhost";
$usern = "root";
$password = "";

try {
  $conn = new PDO("mysql:host=$servername;dbname=animaleries", $usern, $password);
  // echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}