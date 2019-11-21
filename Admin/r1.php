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
			<li><a href="#">Contact us</a></li>
			<li><a href="#">Booking </a></li>
			<li><a href="#">Help</a></li>
		</ul>
	</div>
</div>

<div id="banner">
<center>
	<div id="form">
		<form action="r1.php" method="post">
		<table style="color:yellow;">
		<tr>
			<td>Status</td>
			<td><input type="text" name="Status" placeholder="Status" title="student"></td>
			</tr>
			<tr>
				<td>Name</td>
				<td><input type="text" name="name" placeholder="Enter name" title="name"></td>
				</tr>
				<tr>
				<td>Station from</td>
				<td><input type="text" name="sf"placeholder="Enter station" title="Id"></td>
			</tr>
		     <tr>
				<td>Station to</td>
                <td><input type="text" name="st" placeholder="Enter station" title="Address"></td>
			</tr>
			<tr>
						<tr>
				<td>Class</td>
                <td><select name="class">
                	<option>--select--</option>
                 	<option>Ac</option> 
                	<option>Non Ac</option>
                	<option>Shovon</option>
                </select></td>
			</tr>
				<td>Seat</td>
                <td><select name="seat">
                	<option>--select--</option>
                 	<option>1</option>
                	<option>2</option>
                	<option>3</option>
                </select></td>
			</tr>

			<tr>
				<td>Price</td>
				<td><input type="double" name="price" placeholder="Enter price" title="price"</td>
			</tr>
			<tr>
				<td>Date</td>
				<td><input type="date" name="date" placeholder="date" title="date"</td>

			</tr>

			<tr>
				<td><input style="width:120px;height:30px; border-radius:20px;opacity:0.7" type="submit" name="submit" value="submit"</td>
			</tr>
		</table>
	</form>
	
	<?php
 if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$sf=$_POST['sf'];
	$st=$_POST['st'];
	$class=$_POST['class'];
	$seat=$_POST['seat'];
	$price=$_POST['price'];
	$date=$_POST['date'];
	
 $query ="insert into registration values('$name','$sf','$st','$class','$seat','$price','$date')";
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
	</center>
</div>

</div>
</div>

</div>
	</body>
	</html>