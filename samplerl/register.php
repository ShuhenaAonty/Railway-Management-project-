<?php
require 'DBconfig/config.php'; 
?>

<!DOCTYPE html>
<html>
<head>
<title>Registration Page</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body style="background-color:#f7f1e3">
<div id="main-wrapper">
 <center><h2>Register form</h2>
 <img src="img/image.png"class="image"/>
 </center>

<form class="myform" action="register.php" method="post"><br>
       <label>Username </label>
	   <input name="username" type="text" class="inputvalues" placeholder="Type your username"required/><br>
	    <label>Password</label>
	   <input name="password" type="password" class="inputvalues" placeholder=" your password"required/><br>
	  <label><b>Confirm Password</b></label>
	   <input name="cpassword" type="password" class="inputvalues" placeholder="Confirm your password"required/><br>
	  <input name="submit_btn"type="Submit" id="signup_btn" value="Sign up"/><br>
      <a href="login.php"> <input  type="button" id="back_btn" value="Back"/><br></a>
	  </form>
	  
       <?php
          if (isset($_POST['submit_btn']))
          {
          // echo'<script type="text/javascript"> alert("Sign Up button clicked")</script>' ; 
		  $username=$_POST['username'];
		  $password=$_POST['password'];
		  $cpassword=$_POST['cpassword'];
		  if($password=$cpassword)
		  {
			  $query ="select* from user where username='$username'";
			  $query_run= mysqli_query($con,$query); 
			  if(mysqli_num_rows($query_run)>0)
			  {
				  //user exist
				  echo'<script type="text/javascript"> alert("User exists")</script>' ; 
			  }
			  else
			  {
				  $query ="insert into user values('$username','$password')";
				  $query_run=mysqli_query($con,$query);
				  
				  if($query_run)
				  {
					 echo'<script type="text/javascript"> alert("User registered.Go to log in page")</script>' ;  
				  }
				  else
				  {
					 echo'<script type="text/javascript"> alert("Error")</script>' ;  
				  }
			  }
		  }
		  }
          ?>		  
</div>
</body>
</html>