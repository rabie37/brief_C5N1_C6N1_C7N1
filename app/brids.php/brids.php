<?php
$servername = "localhost";
$usern = "root";
$password = "";

try {
  $conn = new PDO("mysql:host=$servername;dbname=animaleries", $usern, $password);
  // echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}?>
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

<form class="animaly">
<button class="add" formaction="bRIdsadd.php">Add new animal</button>

<button class="update" formaction="birdsupdate.php">update animal</button>
</form>

 
      <table border="" style="border-collapse: collapse;">
            <thead class="thead">
                <th>id</th>
                <th>petcategory</th>
                <th>type</th>
                <th>noise</th>
                <th>cast</th>
            </thead>
            <?php 
    $sql="SELECT * FROM birds";
    foreach ($conn->query($sql) as $row) : ?>
            <tr>
                
                <td><?php echo $row['pet_id'] ?></td>
                <td><?php echo $row['patcategory'] ?></td>
                <td><?php echo $row['type'] ?></td>
                <td><?php echo $row['niose'] ?></td>
                <td><?php echo $row['cost'] ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
    
        <form class="bot" action="birdsdelet.php" method="post">
    <input class="input" type="text" name="id" placeholder="Enter the id to delete" required>
    <input class="delete" type="submit" class="delete" name="submit" value="Delete">

</body>
</html>