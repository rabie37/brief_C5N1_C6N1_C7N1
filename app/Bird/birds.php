<?php
  include("../INCLUD/conection.php");
  include("../INCLUD/functions.php");
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
    <h1 class="title" >Birds</h1>
    <a class="logout" href="../INCLUD/logout.php">logout</a>
            </div>

<form class="animaly">
<button class="add"  type="submit" formaction="../INCLUD/home.php">Back</button>
<button class="add" formaction="birdsadd.php">Add new bird</button>

<button class="update" formaction="birdsupdate.php">update bird</button>
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
                <td><?php echo $row['petcategory'] ?></td>
                <td><?php echo $row['type'] ?></td>
                <td><?php echo $row['noise'] ?></td>
                <td><?php echo $row['cost'] ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
    
        <form class="bot" action="birdsdelet.php" method="post">
    <input class="input" type="text" name="id" placeholder="Enter the id to delete" required>
    <input class="delete" type="submit" class="delete" name="submit" value="Delete">

</body>
</html>