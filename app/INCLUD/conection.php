<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Petshop";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// $servername = "localhost";
// $username = "root";
// $password = "";

// try {
//   $conn = new PDO("mysql:host=$servername;dbname=petshop", $username, $password);
//   // echo "Connected successfully";
// } catch(PDOException $e) {
//   echo "Connection failed: " . $e->getMessage();
// }