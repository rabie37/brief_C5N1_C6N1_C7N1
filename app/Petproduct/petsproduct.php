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
    <h1 class="title" >Product</h1>
    <a class="logout" href="../INCLUD/logout.php">logout</a>
            </div>

<form class="animaly">
<button class="add"  type="submit" formaction="../INCLUD/home.php">Back</button>
<button class="add" formaction="petsproductadd.php">Add new product</button>

<button class="update" formaction="petsproductupdate.php">update product</button>
</form>

 
      <table border="" style="border-collapse: collapse;">
            <thead class="thead">
                <th>pp_id</th>
                <th>cpp_name</th>
                <th>pp_type</th>
                <th>cast</th>
                <th>belongs_to</th>
            </thead>
            <?php 
    $sql="SELECT * FROM products";
    foreach ($conn->query($sql) as $row) : ?>
            <tr>
                
                <td><?php echo $row['pp_id'] ?></td>
                <td><?php echo $row['pp_name'] ?></td>
                <td><?php echo $row['pp_type'] ?></td>
                <td><?php echo $row['cost'] ?></td>
                <td><?php echo $row['belongs_to'] ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
    
        <form class="bot" action="petsproductdelet.php" method="post">
    <input class="input" type="text" name="id" placeholder="Enter the id to delete" required>
    <input class="delete" type="submit" class="delete" name="submit" value="Delete">

</body>
</html>