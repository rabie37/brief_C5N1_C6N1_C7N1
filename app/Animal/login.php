<?php 

session_start();

	include("conection.php");
	include("functions.php");


  if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    // check for empty data
    if(empty($username) || empty($password)){
      echo "<script>alert('Email or password is empty!');</script>";
      die();
    }
  

    $sql = $conn->prepare("SELECT * FROM login WHERE username = :username");
    $sql->bindParam(":username",$username,PDO::PARAM_STR);
    if($sql->execute()){
      $result= $sql->fetchAll(PDO::FETCH_OBJ);
      header("location: ../Animal/animals.php");
      if(count($result) == 0){
        echo "user not found!";
        die;
      }
      }
   else{
        echo "<script>alert('password is incorrect!');</script>";
      }
    }
 

?>

<html>
<head>
<title>
	petshop
</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <div class="topnav">
            <a class="active" href="login.html"><img src="ic_add_pet.png"></a>
             
          </div>
    <div class="login-page">
  <div class="form">
    <form class="login-form" method="POST">
      <h1>Login</h1>
      <input type="text" name="username" placeholder="username" required/>
      <input type="password"  name="password" placeholder="password" required/>
      <button type="submit"  name="login" >login</button>
    </form>
  </div>
</div>
        

     
       
</body>	

</html>