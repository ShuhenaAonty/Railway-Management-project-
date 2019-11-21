<?php
session_start();
require 'DBconfig/config.php'; 
?>

<!DOCTYPE html>
<html>
<head>
<title>Login page</title>
<link rel="stylesheet" href="css/style.css"> 
</head>
<body>
<body style="background-color:#f7f1e3">
<div id="main-wrapper">
 <center><h2>Login form</h2>
 <img src="img/image.png"class="image"/>
 </center>

<form class="myform" action="login.php" method="post"><br>
       <label>Username</label>
	   <input name="username" type="text" class="inputvalues" placeholder="Type your username"required/><br>
	    <label>Password</label>
	   <input name="password" type= "password" class="inputvalues" placeholder="Type your password"required/><br>
	  <input name="login" type="submit" id="login_btn" value="Login"/><br>
      <a href="register.php"> <input type="button" id="register_btn" value="Register"/><br></a>
	  </form>
	  
	  <?php
	  if(isset($_POST['login']))
	  {
		  $username=$_POST['username'];
		  $password=$_POST['password'];
		   $query ="select * from user where username='$username' And password='$password' ";
	
		  $query_run= mysqli_query($con,$query);
		  
        	  if(mysqli_num_rows($query_run)>0)
			  {
				 
				 $_SESSION['username']= $username;
				 header('location:logout.php');
			  }
			  else
			  {
				  //invalid
				  echo'<script type="text/javascript">alert("Invalid credentials")</script>';
			  }
	  }
	  ?>
</div>
</body>
</html>