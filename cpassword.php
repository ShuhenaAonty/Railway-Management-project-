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
			
         <div style="background-image: url('img/showimage.jpg'); width: 100%;height:600px; ">

			<div id="header">

				<div id="logo">
	<h1><font color="white">Train Reservation</font></h1>
			</div>
			<div id="nav">
			
				<ul>
					<li><a href="dashboard.php">Dashboard</a></li>
					<li><a href="FareQuery.php">Fare Query</a></li>
					<li><a href="trainroute.php">Train Route</a></li>
					<li><a href="purchagetic.php">Purchase Ticket</a></li>
					<li><a href="purchagehis.php">Purchase History</a></li>
					<li><a href="cpassword.php">Change password</a></li>
					<li><a href="contact.php">Contact Us</a></li>
					<li> <form  action="cpassword.php" method="post"><input name ="logout" type="submit" id="logout_btn"  value="Log Out"/><br>
	                  <?php
	  if(isset($_POST['logout']))
	  {
	  session_destroy();
	  header('location:index1.php');
	  }
	  ?></form></li>
				</ul>
	
			     </div>

 <center>
<form class="myform"; action="cpassword.php" method="post"><br>
	<p id="one">

       <label>E-mail</label>
	   <input name="email" type="text" class="inputvalues" placeholder="E-mail"required/><br>
       <label>New Password</label>
	   <input name="npassward" type="password" class="inputvalues" placeholder="  new password     "required/><br>
	    <label>Re-Enter Password</label>
	   <input name="cpassword" type= "password" class="inputvalues" placeholder=" re-enter password"required/><br>
	  <input name="submit" type="submit" id="login_btn" value="CHANGE PASSWORD"/><br>
  </p>
	 
	</form>
</center>
         <?php
           if (isset($_POST['submit']))
          {
          // echo'<script type="text/javascript"> alert("Sign Up button clicked")</script>' ; 
	    
		$email=$_POST['email'];
		 $npassword=$_POST['npassword'];
		 $cpassword=$_POST['cpassword'];

		  if($npassword=$cpassword)
		  {
			  $query ="update user1 set password='$npassword' where email='$email'";
			  $query_run= mysqli_query($conn,$query);
			  
				  if($query_run)
				  {
					  echo'<script type="text/javascript"> alert("User succesfully changed password")</script>' ;  
				  }
				  else
				  {
					 echo'<script type="text/javascript"> alert("Error")</script>' ;  
				  }
			  }
           }
		
          ?>
			     
			</div>
			
		<div id="welcome"> </div>
	</div>
<h1 align="center">Welcome to my project</h1>
	</body>
</html>