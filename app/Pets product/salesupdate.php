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
            <a class="active" href="home.html"><img src="../img/ic_add_pet.png"></a>
            <a href="sales.php">Sales details</a>
            <div class="topnav-right">
              <a href="logout.php">logout</a>
            </div>
          </div>
<form>
<button type="submit" formaction="sales.php" style="margin:15px;height: 30px;width: 100px;cursor:pointer;border-radius:15px;
border: 3px solid #e69500;background-color: rgba(249, 105, 14, 1);color:#f2f2f2;font-size:15px;">back</button>
</form>
<form method="post" action="salesupdate.php">

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
  <input type="number" name="total" min="0" style="width:100%;height:30px;
   border: 2px solid rgba(249, 105, 14, 1);border-radius:5px;" required placeholder="Enter total amount">
  <br><br>
  <input type="submit" name="submit" value="update" style="width:100%;height:30px;border-radius:5px;
  border: 2px solid rgba(249, 105, 14, 1); cursor:pointer;background-color: rgba(249, 105, 14, 1)">&ensp; 
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
  $total = $_POST["total"];
 
  $Query2="select count(*) from sales_details WHERE sd_id='$id'";
  $Execute = mysqli_query($conn,$Query2);
  $count = mysqli_fetch_row($Execute);
  if($count[0]==1)
  {
    $sql = "UPDATE salesdetails SET cs_id='$cs_id' ,date='$date' ,total='$total' where sd_ID='$id'";
    if ($conn->multi_query($sql) == TRUE) {
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
    <h1 style="color:#f2f2f2;font-size:30px; font-family: "Roboto", sans-serif;margin:auto;">Given sales_id not found</h1>
       </div>';
}




$conn->close();
}


?>