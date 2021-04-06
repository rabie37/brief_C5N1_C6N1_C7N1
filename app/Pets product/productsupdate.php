<?php
 session_start();
 if(isset($_SESSION['user']))


?>
<!doctype html>
<html>
<head>
<title>Petproducts </title>
<link rel="stylesheet" href="../style/sass/pages/petsproducts.css">
    
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
        border-radius:15px;
border: 3px solid #ff0000;background-color:#f44336;color:#f2f2f2;font-size:17px;cursor:pointer;">back</button>
</form>
<form method="post" action="productsupdate.php">  
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
  <input type="submit" name="submit" value="update"  placeholder=" which pet category it belongs to" style="width:100%;height:30px;
   border: 2px solid  #f44336; border-radius:3px; cursor:pointer;background-color:#f44336">&ensp; 
</fieldset>
</form> 
</body>
</html>
<?php
if(isset($_POST["submit"]))
{
// define variables and set to empty values
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
//echo "  CONNECTION ESTABLISHED \r\n";
//echo "  INSERTION IN PROCESS";
$id = $_POST["id"];
  $name = $_POST["name"];
  $type= $_POST["type"];
  $belongs = $_POST["belong"];
  $cost = $_POST["cost"];

  $Query2="select count(*) from products where pp_id='$id'";
  $Execute = mysqli_query($conn,$Query2);
  $count = mysqli_fetch_row($Execute);
  if($count[0]==1)
  {
    $sql = "UPDATE  products SET pp_name='$name' ,pp_type= '$type',cost='$cost' ,belongs_to='$belongs' 
    WHERE pp_id='$id'";
    if ($conn->query($sql) == TRUE) {
      echo'<div>
      <h1 style="color:#f2f2f2;font-size:20px; font-family: "Roboto", sans-serif;margin:auto;">'
      .$id. ' updated successfully</h1>
         </div>';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
  }
  else{
    echo '<div>
    <h1 style="color:#f2f2f2;font-size:30px; font-family: "Roboto", sans-serif;margin:auto;">Given pp_id not found</h1>
       </div>';
}


$conn->close();
}
?>