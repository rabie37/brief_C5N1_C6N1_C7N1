<!doctype html>
<html>
<head>
        <title>Petproducts </title>
        <link rel="stylesheet" href="../style/sass/pages/petsproduct.css">
        <body>
<div class="topnav">
<a class="active" href="home.html"><img src="../img/ic_add_pet.png"></a>
            <a href="petsproduct.php">pets products</a>
           
          </div>
<?php
 include("../INCLUD/conection.php");

// 
//echo "  CONNECTION ESTABLISHED \r\n";
//echo "  INSERTION IN PROCESS";
$pp_id=$_POST["t1"];

$Query2="select count(*) from products where pp_id='$pp_id'";
$Execute = mysqli_query($conn,$Query2);
$count = mysqli_fetch_row($Execute);

if($count[0]==1)
{
  $sql = "DELETE FROM products WHERE pp_id='$pp_id'";
  if ($conn->query($sql) == TRUE) {
      echo '<div>
      <h1 style="color:#f2f2f2;font-size:50px; font-family: "Roboto", sans-serif;margin:auto;">Data deleted successfully</h1>
         </div>';
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }
}
else{
  echo '<div>
  <h1 style="color:#f2f2f2;font-size:40px; font-family: "Roboto", sans-serif;margin:auto;"> Data not found</h1>
     </div>';
}


$conn->close();
?>
<form>
        <button type="submit"  style=" height: 50px;width: 150px;cursor:pointer;border-radius:15px;
border: 3px solid #ff0000;background-color:#f44336;color:#f2f2f2;font-size:17px;" formaction="petsproduct.php">back</button>
</form>
</body>
</html>
