<!DOCTYPE html>
<html>
<head>
	<title>Home(online Railway reservation system)</title>
	<link rel="stylesheet"  type= "text/css" href="css/styleani.css">
	<link href="img/trai4.png" type="img/icon" rel="icon">
	</head>
	<body>
		<div  id="full">
			
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
					<li> <form  action="contact.php" method="post"><input name ="logout" type="submit" id="logout_btn"  value="Log Out"/><br>
	                  <?php
	  if(isset($_POST['logout']))
	  {
	  session_destroy();
	  header('location:index1.php');
	  }
	  ?></form></li>
				</ul>
	
			     </div>
			     
			</div>




</figure>
</div>
	</div>
	</body>
</html>