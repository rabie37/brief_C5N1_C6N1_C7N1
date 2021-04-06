<?php
  include("../INCLUD/conection.php");
  include("../INCLUD/functions.php");
  include("../INCLUD/header.php");
  include("../INCLUD/logout.php")
  
?>
<?php
 session_start();
 if(isset($_SESSION['user']))
 {

 }
//  else{
//   echo"<script>location.href='login.html'</script>";
//  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/sass/pages/petsproducts.css">
    
</head>
<body>
<div class="topnav">
            <a class="active" href="home.html"><img src="../img/ic_add_pet.png"></a>
            <a href="petproducts.php">pets products</a>
            <div class="topnav-right">
              <a href="logout.php">logout</a>
            </div>
          </div>
          <div class="custombutton">          
<form>
<button  style="height: 50px;width: 150px;cursor:pointer;border-radius:15px;
border: 3px solid #ff0000;background-color:#f44336;color:#f2f2f2;font-size:17px;" formaction="productsadd.php">Add new product</button>
<button  style="margin-left:900px; height: 50px;width: 150px;cursor:pointer;border-radius:15px;
border: 3px solid #ff0000;background-color:#f44336;color:#f2f2f2;font-size:17px;" formaction="productupdate.php">update product</button>
</form>
</div>

      <table border="" style="border-collapse: collapse;">
            <thead>
                <th>id</th>
                <th>pp-name</th>
                <th>pp_type</th>
                <th>cost</th>
                <th>belongs_to</th>
            
            </thead>
            <?php 
            $i = 1;
    $sql="SELECT * FROM products";
    foreach ($conn->query($sql) as $row) : ?>
            <tr>

                <td><?php echo $row['pp_id'] ?></td>
                <td><?php echo $row['pp-name'] ?></td>
                <td><?php echo $row['pp_type'] ?></td>
                <td><?php echo $row['cost'] ?></td>
                <td><?php echo $row['belongs_to'] ?></td>
               
            </tr>
            <!-- <h1>Enter the pets</h1>
        <form action="pet.php" method="post">
            pet_id:<input type="text" name="t1">
            <br>
            pet_category:<input type="text" name="t2"><br>
            cost:<input type="number" name="t3">
            <br>
            <input type="submit" name="t4"> -->
            <?php endforeach; ?>
        </table>
        <form action="deleteproducts.php" method="post">
    <input type="text" name="t1" placeholder="Enter the id to delete" required >
    <input  style="width:75px;height:44px;cursor:pointer;border-radius:15px;
border: 3px solid #ff0000;background-color:#f44336;color:#f2f2f2;font-size:17px;" type="submit" value="delete">
</body>
</html>