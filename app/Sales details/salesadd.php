
<?php
 include("../INCLUD/conection.php");
 session_start();
 if(isset($_SESSION['user']))
 
?>
<!doctype html>
<html>
  <head>
  <title>
  Salesdetails
  </title>
  

  </head>
<body>
  <div class="topnav">
  <link rel="stylesheet" href="../style/sass/pages/petsproducts.css">
            <a class="active" href="home.html"><img src="../img/ic_add_pet.png"></a>
            <a href="sales.php">Sales details</a>
            <div class="topnav-right">
              <a href="logout.php">logout</a>
            </div>
          </div>

<form>
<button type="submit" formaction="sales.php" style="margin:15px;height: 30px;width: 100px;cursor:pointer;
border-radius:15px;
border: 3px solid #e69500;background-color: rgba(249, 105, 14, 1);color:#f2f2f2;font-size:15px;">back</button>
</form>
<form method="post" action="salesadd.php">

  <fieldset>
  
    <input type="text"  id ="sd" name="id" placeholder="Enter the sales id" style="width:100%;height:30px;
    border: 2px solid rgba(249, 105, 14, 1); border-radius:5px;" required>
   <br><br>
   <input type="text" name="csid" placeholder="Enter the customer id" style="width:100%;height:30px;
    border: 2px solid rgba(249, 105, 14, 1);border-radius:5px; " required>
  <br><br>
   <input type="date" name="date" style="width:100%;height:30px;
   border: 2px solid rgba(249, 105, 14, 1);border-radius:5px;" required>
  <br><br>
  <input type="submit" name="submit" value="save" style="width:100%;height:30px;border-radius:5px;
  border: 2px solid rgba(249, 105, 14, 1); cursor:pointer;background-color: rgba(249, 105, 14, 1)"> 
</fieldset> 

</form> 
</body>
</html>
<?php
if(isset($_POST["submit"]))
{
$id = $_POST["id"];
  $cs_id = $_POST["csid"];
  $date= $_POST["date"];
//  $total = $_POST["total"];

$sql = "INSERT INTO salesdetails( sd_ID,cs_id,date)
VALUES ('$id','$cs_id','$date')";
if ($conn->multi_query($sql) == TRUE) {
  echo'<div>
      <h1 style="color:#f2f2f2;font-size:20px; font-family: "Roboto", sans-serif;margin:auto;">New record of id='
      .$id. ' inserted successfully</h1>
         </div>';
} 
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}


?>