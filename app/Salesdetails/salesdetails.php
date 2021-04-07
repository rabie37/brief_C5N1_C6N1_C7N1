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
    <h1 class="title" >Salesdetails</h1>
    <a class="logout" href="../INCLUD/logout.php">logout</a>
            </div>

<form class="animaly">
<button class="add"  type="submit" formaction="../INCLUD/home.php">Back</button>
<button class="add" formaction="salesdetailsadd.php">Add new salesdetails</button>

<button class="update" formaction="salesdetailsupdate.php">update Salesdetails</button>
</form>

 
      <table border="" style="border-collapse: collapse;">
            <thead class="thead">
                <th>sd_ID</th>
                <th>cs_id</th>
                <th>date</th>
                <th>total</th>
            </thead>
            <?php 
    $sql="SELECT * FROM salesdetails";
    foreach ($conn->query($sql) as $row) : ?>
            <tr>
                <td><?php echo $row['sd_ID'] ?></td>
                <td><?php echo $row['cs_id'] ?></td>
                <td><?php echo $row['date'] ?></td>
                <td><?php echo $row['total'] ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
    
        <form class="bot" action="salesdetailsdelet.php" method="post">
    <input class="input" type="text" name="id" placeholder="Enter the id to delete" required>
    <input class="delete" type="submit" class="delete" name="submit" value="Delete">

</body>
</html>