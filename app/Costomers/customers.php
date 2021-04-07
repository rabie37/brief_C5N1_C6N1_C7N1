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
    <h1 class="title" >Customers</h1>
    <a class="logout" href="../INCLUD/logout.php">logout</a>
            </div>

<form class="animaly">
<button class="add"  type="submit" formaction="../INCLUD/home.php">Back</button>
<button class="add" formaction="customersadd.php">Add new customer</button>

<button class="update" formaction="customersupdate.php">update customer</button>
</form>

 
      <table border="" style="border-collapse: collapse;">
            <thead class="thead">
                <th>cs_id</th>
                <th>cs_fname</th>
                <th>cs_lname</th>
                <th>cs_minit</th>
                <th>cs_address</th>
            </thead>
            <?php 
    $sql="SELECT * FROM customer";
    foreach ($conn->query($sql) as $row) : ?>
            <tr>
                
                <td><?php echo $row['cs_id'] ?></td>
                <td><?php echo $row['cs_fname'] ?></td>
                <td><?php echo $row['cs_lname'] ?></td>
                <td><?php echo $row['cs_minit'] ?></td>
                <td><?php echo $row['cs_address'] ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
    
        <form class="bot" action="customersdelet.php" method="post">
    <input class="input" type="text" name="id" placeholder="Enter the id to delete" required>
    <input class="delete" type="submit" class="delete" name="submit" value="Delete">

</body>
</html>