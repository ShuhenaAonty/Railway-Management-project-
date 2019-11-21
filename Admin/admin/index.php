<?php
require 'connection.php'; 
?>
<!Doctype html>
<html>
<head>
	<title>RAILWAY</title>
	<link  rel ="stylesheet" type="text/css" href="css/style.css">
	<link href="img/image.png" type="img/icon" rel="icon">
</head>
<body>
	<div id="full">
		<div style="background-image: url('img/image.png');background-size:100% 700px;width: 100% 6;height:710px; ">
		<div id="header">
			<div id="logo">
				<h1><font color="green">My project</font></h1>
			</div>
	<div id	="nav">
		<ul>
			<li><a href="#">Home</a></li>
			<li><a href="#">Seat Update</a></li>
			<li><a href="#">Book</a></li>
			<li><a href="#">Book My Stay</a></li>
			<li><a href="#">Help</a></li>
		</ul>
	</div>
	</div>
	<div id="banner">
<center>
<div style="background: rgba(255,255,255,.5);width:80%;">
<form action=" "method="post">
	
		<table>
		<tr>
		<td width="50%" height="50px">Username</td>
		<td width="50%" height="50px"><input type="text" name="un" placeholder="Enter Username" titles="Enter Username"></td>
		</tr>
		<tr>
		<td width="50%" height="50px">Password</td>
		<td width="50%" height="50px"><input type="password" name="ps" placeholder="Enter Password" titles="Enter Password"></td>
		</tr>
		<tr>
		<td colspan="2"><input type="submit" name="sub" value="Login" style="width:150px;height:50px;border-radius:30px;opicity;0.5"></td>
		</tr>
		</table>
		</form>
		<?php
	  if(isset($_POST['sub']))
	  {
		  $un=$_POST['un'];
		  $ps=$_POST['ps'];
		   $query ="select * from login where un='$un' And ps='$ps' ";
	
		  $query_run= mysqli_query($con,$query);
		  
        	  if(mysqli_num_rows($query_run)>0)
			  {
				 
				 //$_SESSION['username']= $username;//
				 header('location:ahome.php');
			  }
			  else
			  {
				  //invalid
				  echo'<script type="text/javascript">alert("Invalid credentials")</script>';
			  }
	  }
  ?>
		  
</div>
</center>



</div>
</div>
	</body>
	</html>