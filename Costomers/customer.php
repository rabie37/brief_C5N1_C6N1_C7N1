<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>customer</title>
<link rel="stylesheet" href="./styles/styles.css" />

    
</head>

<body>
<div class="topnav">
            <a class="active" href=""><img src="ic_add_pet.png"></a>
            <a href="">Customers</a>
            <div class="topnav-right">
              <a href="">logout</a>
            </div>
          </div>
          <div class="custombutton">         
<form>
<button   class="button1" formaction="customeradd.php">Add new customer</button>
<button    class="button2" formaction="customerupdate.php">update customer</button>
<button  class="button3"  formaction="phone.php">phone nos.</button>
</form>
</div>


<?php
   
$con = mysqli_connect("localhost","root","","Petshop");//change username and password according to your server settings
if(!$con)
{ 
die("could not connect".mysql_error());
}
$var=mysqli_query($con,"select * from customer ");
echo "<table>";
echo "<tr>
<th>cs_ID</th>
<th>cs_fname</th>
<th>cs_minit</th>
<th>cs_lname</th>
<th>cs_address</th>
</tr>";
if(mysqli_num_rows($var)>0){
    while($arr=mysqli_fetch_row($var))
    { echo "<tr>
    <td>$arr[0]</td>
    <td>$arr[1]</td>
    <td>$arr[2]</td>
    <td>$arr[3]</td>
    <td>$arr[4]</td>
    </tr>";}
    echo "</table>";
    mysqli_free_result($var);
}

mysqli_close($con);
    
    
?>
<form action="deletecustomer.php" method="post">
<input  id="dbutton" type="text" name="t1" placeholder="Enter the id to delete" required>
    <input class="dbutton" style=""type="submit" value="Delete">
</form> 

</body>
</html>



    
</body>
</html>