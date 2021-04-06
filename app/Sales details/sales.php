<?php
 include("../INCLUD/conection.php");
 session_start();
 if(isset($_SESSION['user']))
 
?>
<html>
    <head>
        <title>Saledetails</title>
        </head>
<body>
<div class="topnav">
            <a class="active" href="home.html"><img src="../img/ic_add_pet.png"></a>
            <link rel="stylesheet" href="../style/sass/pages/petsproducts.css">
            <a href="sales.php">Sales details</a>
            <div class="topnav-right">
              <a href="logout.php">logout</a>
            </div>
          </div>
          <div class="custombutton">           
<form>
<button style=" height: 50px;width: 120px;cursor:pointer;border-radius:15px;
border: 3px solid #e69500;background-color: rgba(249, 105, 14, 1);color:#f2f2f2;font-size:14px; " formaction="salesadd.php">Add new details</button>
<button  style="height: 50px;width: 110px;cursor:pointer;border-radius:15px;
border: 3px solid #e69500;background-color: rgba(249, 105, 14, 1);color:#f2f2f2;font-size:14px;" formaction="salesupdate.php">update details</button>

</form>
</div>
<?php
   

$var=mysqli_query($conn,"select * from salesdetails ");
echo "<table border size=10>";
echo "<tr>
<th>sd_ID</th>
<th>cs_id</th>
<th>date</th>
<th>total</th>
</tr>";
if(mysqli_num_rows($var)>0){
    while($arr=mysqli_fetch_row($var))
    { echo "<tr>
    <td>$arr[0]</td>
    <td>$arr[1]</td>
    <td>$arr[2]</td>
    <td>$arr[3]</td>
    </tr>";}
    echo "</table>";
    mysqli_free_result($var);
}

mysqli_close($conn);
    
    
?>
<form action="deletesales.php" method="post">
<input  id="dbutton" type="text" name="t1" placeholder="Enter the id to delete" required >
<input  style="width:75px;height:44px;cursor:pointer;border-radius:15px;
border: 3px solid #e69500;background-color: rgba(249, 105, 14, 1);color:#f2f2f2;font-size:15px;"type="submit" value="Delete">
</form> 

</body>
</html> 