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
    <h1 class="title" >Animals</h1>
    <a class="logout" href="../INCLUD/logout.php">logout</a>
            </div>

<form class="animaly">
<button class="add" formaction="animalsadd.php">Add new animal</button>

<button class="update" formaction="animalsupdate.php">update animal</button>
</form>

 
      <table border="" style="border-collapse: collapse;">
            <thead class="thead">
                <th>id</th>
                <th>petcategory</th>
                <th>breed</th>
                <th>wheight</th>
                <th>height</th>
                <th>age</th>
                <th>fur</th>
                <th>cost</th>
            </thead>
            <?php 
            $i = 1;
    $sql="SELECT * FROM animals";
    foreach ($conn->query($sql) as $row) : ?>
            <tr>
                
                <td><?php echo $row['pet_id'] ?></td>
                <td><?php echo $row['petcaetegory'] ?></td>
                <td><?php echo $row['breed'] ?></td>
                <td><?php echo $row['weight'] ?></td>
                <td><?php echo $row['height'] ?></td>
                <td><?php echo $row['age'] ?></td>
                <td><?php echo $row['fur'] ?></td>
                <td><?php echo $row['cost'] ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
    
        <form class="bot" action="animaldelet.php" method="post">
    <input class="input" type="text" name="id" placeholder="Enter the id to delete" required>
    <input class="delete" type="submit" class="delete" name="submit" value="Delete">

</body>
</html>