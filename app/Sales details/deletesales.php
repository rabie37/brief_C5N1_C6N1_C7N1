<html>
<head>
        <title>Saledetails</title>
       
<body>
<div class="topnav">
            <a class="active" href="home.html"><img src="ic_add_pet.png"></a>
            <a href="sales.php">Sales details</a>
            
          </div>
<?php
 include("../INCLUD/conection.php");


$id=$_POST["t1"];
$Query2="select count(*) from salesdetails WHERE sd_ID='$id'";
$Execute = mysqli_query($conn,$Query2);
$count = mysqli_fetch_row($Execute);
if($count[0]==1)
{
  $sql = "DELETE FROM salesdetails WHERE sd_ID='$id'";
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
<button type="submit" style=" height: 50px;width: 150px;cursor:pointer;border-radius:15px;
border: 3px solid #e69500;background-color: rgba(249, 105, 14, 1);color:#f2f2f2;font-size:15px;" formaction="sales.php">back</button>
</form>
</body>
</html>