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
		<div id="bg" style="background-image:url('img/image.png');width:100%; height:1200px;">
		<div id="header">
			<div id="logo">
				<h1><font color="green">My project</font></h1>
			</div>
	<div id	="nav">
		<ul>
			<li><a href="#">Home</a></li>
			<li><a href="#">Seat update</a></li>
			<li><a href="#">Booking</a></li>
			<li><a href="#">Help</a></li>
		</ul>
	</div>
</div>

<div id="banner">
	<div id="form">
		<form action="seat.php" method="post">
		<table style="color:yellow;">
		<tr>
			
			<tr>
				<td>Seat No</td>
				<td><input type="text" name="no" placeholder="Enter Seat" title="Seat"></td>
				</tr>
				<td>Seat type </td>
				<td><input type="text" name="type" placeholder="Enter Seat type" title="Enter Seat type"></td>
				</tr>
				

				

			<tr>
				<td>Price</td>
				<td><input type="text" name="price" placeholder="Enter price" title="price"</td>
			</tr>
			<tr>
				<td><input style="width:120px;height:30px; border-radius:20px;opacity:0.7" type="submit" name="submit" value="submit"</td>
			</tr>
				
		</table>
	</form>
	<?php
 if(isset($_POST['submit']))
{
	
	$no=$_POST['no'];
	$type=$_POST['type'];
	$price=$_POST['price'];
	
	
 $query ="insert into seat values('1','$no','$type','$price')";
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

	?>
		
	</div>
</div>

</div>
</div>

</div>
	</body>
	</html>