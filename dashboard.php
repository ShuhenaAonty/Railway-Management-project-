 <?php
session_start();
require 'dbcinfig/config1.php'; 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home(online Railway reservation system)</title>
	<link rel="stylesheet" href="css/styledash.css">
	<link href="img/trai4.png" type="img/icon" rel="icon">
	</head>
	<body>
		<div  id="full">
			
         <div style="background-color:white; width: 100%;height:600px; ">

			<div id="header">

				<div id="logo">
	<h1><font color="light blue">Train Reservation</font></h1>
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
					<li> <form  action="dashboard.php" method="post"><input name ="logout" type="submit" id="logout_btn"  value="Log Out"/><br>
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
			<div id="di">
			</div>  
			     	<center>
			     	<form class="myform1" action="dashboard.php" method="post">
			     	<label>E-MAIL</label>
			     	<input name="email" type="text" class="inputvalues1" placeholder="E-mail"required/><br>
	              <input name="login" type="submit" id="login_btn1" value="view profile"/><br>
			       <table width="528" height="433" border="2" cellspacing="1">
               
               </form>


			     	<table>
			     		<tr>
			     		<th>User</th>
			     		<th>E-mail</th>
			     		<th>Address</th>
			     		<th>Cellphone</th>
			     	</tr>
			     	<?php
                   if(isset($_POST['login']))
	  {
		  $email=$_POST['email'];
                   $sql ="select username,email,address,cellphone from user1 where email='$email' ";
                   $result=$conn-> query($sql);
                   if($result->num_rows>0){
                   while($row=$result-> fetch_assoc()){
                   echo"<tr><td>".$row["username"]."</td><td>".$row["email"]."</td><td>".$row["address"]."</td><td>".$row["cellphone"]."</td></tr>";
               }
           echo "</table>";
               }
               else{
               echo "There is no information about you";
           }}
                $conn->close();

			     	?>
			     	</table>
			     </center>

			    

			
		<div id="welcome">
		 </div>
	</div>
<h1 align="center">Welcome to my project</h1>
	</body>
</html>