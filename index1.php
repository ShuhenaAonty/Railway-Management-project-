<?php
session_start();
require 'dbcinfig/config1.php'; 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home(online Railway reservation system)</title>
	<link rel="stylesheet" href="css/style123.css">
	<link href="img/trai4.png" type="img/icon" rel="icon">
	</head>
	<body>
		<div  id="full">
			
         <div style="background-image: url('img/showimage.jpg'); width: 100%;height:600px;">

			<div id="header">

				<div id="logo">
	<h1><font color="black">Train Reservation</font></h1>
			</div>
			<div id="nav">
				<center><h2 style="color:green;">Bangladesh Railway</h2>
					<h3 style="color:blue;">Bangladesh Railway E-ticketing Service</h3>
					
 </center>
 
<form class="myform"; action="index1.php" method="post"><br>
	<p id="one">
       <label>E-MAIL</label>
	   <input name="email" type="text" class="inputvalues" placeholder="E-mail"required/><br>
	    <label>PASSWORD</label>
	   <input name="password" type= "password" class="inputvalues" placeholder="Your password"required/><br>
	  <input type="checkbox" name="remember" ? /> 
	  <label for="remember me"> Remember me</label><br>
	  <input name="login" type="submit" id="login_btn" value="Login"/><br>
	  <a href="passwardfixed.php">FORGOT YOUR PASSWORD</a>
      <a href="register1.php"> <input type="button" id="register_btn" value="SIGN-UP"/><br></a>
  </p>
	 
	</form>

	   <?php
	  if(isset($_POST['login']))
	  {
		  $email=$_POST['email'];
		  $password=$_POST['password'];

		   $query ="select * from user1 where email='$email' And password='$password' ";
	
		  $query_run= mysqli_query($conn,$query);
		  
        	  if(mysqli_num_rows($query_run)>0)
			  {
				 
				 $_SESSION['email']= $email;
				 header('location:login1.php');
			  }
			  else
			  {
				  //invalid
				  echo'<script type="text/javascript">alert("Invalid credentials")</script>';
			  }
	  }
	  ?>
			     </div>
			</div>
		</div>
		<div id="welcome" style="background-color:silver; "><center>
			<h1 style="color:green;">WELCOME TO OUR RAILWAY E-TICKETING SERVICE</h1>
			
<h4 style="background-color: silver;color:grey">Purchasing tickets through Internet is another convenient way to travel with Bangladesh Railway. Register yourself with your cell phone number, book online and <br>your ticket details will then be emailed to you instantly after payment through your any VISA/MASTER, DBBL Nexus/VISA/MASTER/Mobile Banking and City bank<br> Amex cards. Print it out and bring it along with your valid Identity card to the station at least 15 minutes prior to your journey. If you purchase e-ticket for other <br>persons, you have to print out hard copy of e-ticket from designated counters of any online stations. 
</h4></center>
 </div>
	</div>
	</body>
</html>