 <?php
session_start();
require 'dbcinfig/config1.php'; 
?>

<?php
  if (isset($_POST['submit']))
          {
          // echo'<script type="text/javascript"> alert("Sign Up button clicked")</script>' ; 
	     $username=$_POST['username'];
		 $email=$_POST['email'];
		
		 $password=$_POST['password'];
		 $cpassword=$_POST['cpassword'];
		 $address=$_POST['address'];
		 $cellphone=$_POST['cellphone'];

		  if($password=$cpassword)
		  {
			  $query ="select* from user1 where email='$email'";
			  $query_run= mysqli_query($conn,$query);
			  if(mysqli_num_rows($query_run)>0)
			  {
				  //user exist
				  echo'<script type="text/javascript"> alert("User exists")</script>' ; 
			  }
			  else
			  {
				  $query ="insert into user1 values('$username','$email','$password','$address','$cellphone')";
				  $query_run=mysqli_query($conn,$query);
				  
				  if($query_run)
				  {
					 /*echo'<script type="text/javascript"> alert("User registered.Go to log in page")</script>' ;  */
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

 <!DOCTYPE html>
<html>
<head>
	<title>Home(online Railway reservation system)</title>
	<link rel="stylesheet" href="css/style1234.css">
	<link href="img/trai4.png" type="img/icon" rel="icon">
	</head>
	<body>
		<div  id="full">
			
         <div style=" width:100%;height:600px;">

			<div id="header">
<center><h2 style="color:green;">Bangladesh Railway</h2>
					<h3 style="color:blue;">Bangladesh Railway E-ticketing Service</h3></center>

			
			<div id="nav">
			<center>	
  <form class="myform" action="register1.php" method="post">
  	<h3 style="color:green">Personal Information</h3>

    <label for="username">Passenger Name     </label>
    <input  name="username" type="text" class="inputvalues"  placeholder="Your name"><br>

       <label for="email">Email Address      </label>
    <input  name="email" type="email" class="inputvalues"  placeholder="Email-Address.."><br>
     
                   <label>Password           </label>
	   <input name="password" type="password" class="inputvalues" placeholder=" your password"required/><br>
	
	            <label>Confirm Password      </label>
	   <input name="cpassword" type="password" class="inputvalues" placeholder="Confirm your password"required/><br>
	  
	
  <label for="address">Address               </label>
	   <input type="text" name="address" class="inputvalues" placeholder="Your Address"><br>
	

   <label for="number">Cellphone number      </label>
	   <input type="text" name="cellphone" class="inputvalues" placeholder="Cellphone number"><br>
       <input name="submit"type="Submit" id="signup_btn" value="Sign up"/><br>
      <a href="index1.php"> <input  type="button" id="back_btn" value="Back"/><br></a>
  </form>
</center>
  
   		</div>
		</div>
	</div>
		<div id="welcome" style="background-color:silver;"><center>
			<h1 style="color:green;">WE EAGERLY WAITING FOR YOUR REGISTRATION</h1>
			</center></div>
	</div>
	</body>
</html>