<?php
 include("../INCLUD/conection.php");
 session_start();
 if(isset($_SESSION['user']))
 {

 }
//  else{
//   echo"<script>location.href='login.html'</script>";
//  }
?>
<!doctype html>
<html>
<head>
<link rel="stylesheet" href="../style/sass/pages/petsproducts.css">
        <title>Petproducts </title>
        </head>
<body>
<div class="topnav">
<a class="active" href="home.html"><img src="../img/ic_add_pet.png"></a>
<a href="petsproduct.php">pets products</a>
            <div class="topnav-right">
              <a href="logout.php">logout</a>
            </div>
          </div>
    <form>
        <button type="submit" formaction="petsproduct.php" style="margin:15px;height: 30px;width: 100px;
        cursor:pointer;border-radius:15px;
border: 3px solid #ff0000;background-color:#f44336;color:#f2f2f2;font-size:17px;">back</button>
</form>
<form method="post" action="productsadd.php"> 
<fieldset> 
   <input type="text" name="id" placeholder=" Enter product_id" style="width:100%;height:30px;
   border: 2px solid  #f44336; border-radius:3px;  background:transparent;" required>
  <br><br>
  <input type="text" name="name" placeholder=" Enter product name" style="width:100%;height:30px;
   border: 2px solid  #f44336; border-radius:3px;  background:transparent;" required>
  <br><br>
   <input type="text" name="type" placeholder=" Enter product type" style="width:100%;height:30px;
   border: 2px solid  #f44336; border-radius:3px;  background:transparent;" required>
  <br><br>
  <input type="number" name="cost" placeholder=" Enter cost" style="width:100%;height:30px;
   border: 2px solid  #f44336; border-radius:3px;  background:transparent;" min="0" required>
  <br><br>
  <input type="text" name="belong" placeholder=" which pet category it belongs to" style="width:100%;height:30px;
   border: 2px solid  #f44336; border-radius:3px;  background:transparent;" required>
  <br><br>
  <input type="submit" name="submit" value="save"  placeholder=" which pet category it belongs to" style="width:100%;height:30px;
   border: 2px solid  #f44336; border-radius:3px; cursor:pointer;background-color:#f44336">&ensp; 
</fieldset>
</form> 
</body>
</html>
<?php
if(isset($_POST["submit"]))
{
//    
//echo "  CONNECTION ESTABLISHED \r\n";
//echo "  INSERTION IN PROCESS";
$id = $_POST["id"];
  $name = $_POST["name"];
  $type= $_POST["type"];
  $belongs = $_POST["belong"];
  $cost = $_POST["cost"];




$sql = "INSERT INTO products( pp_id,pp_name,pp_type,cost,belongs_to)
VALUES ('$id','$name','$type','$cost','$belongs')";
if ($conn->query($sql) == TRUE) {
  echo'<div>
  <h1 style="color:#f2f2f2;font-size:20px; font-family: "Roboto", sans-serif;margin:auto;">New record of id='
  .$id. ' inserted successfully</h1>
     </div>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
?>