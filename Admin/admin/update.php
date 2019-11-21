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
			<li><a href="">Book</a></li>
			<li><a href="#">Book My Stay</a></li>
			<li><a href="#">Help</a></li>
		</ul>
	</div>
	</div>
	<div id="banner">
<center>
<div style="background: rgba(255,255,255,.5);width:80%;">
<h1 style="color:blue">Welcome admin</h1>
		 <table>
<tr>
<th width="10%" height="50px">Seat No</th>
<th width="10%" height="50px">Seat type</th>
<th width="10%" height="50px">Price</th>
<th width="10%" height="50px">Status</th>

</tr>
<?php
 $sql="select* from seat";
 $records=mysqli_query($con,$sql);
 while($row=mysqli_fetch_array($records)){
	$no=$row['no'];
	$type=$row['type'];
	$price=$row['price'];
	$status=$row['status'];
	
 
 
 ?>
<tr>
<td width="10%" height="50px"><center><?php echo $no;?></center</td>
<td width="10%" height="50px"><center><?php echo $type;?></center></td>
<td width="10%" height="50px"><center><?php echo $price;?></center></td>
<td width="10%" height="50px"><center><?php echo $status;?></center></td>

</tr>
<?php
 }
 ?>
 
</table> 

</div>
</center>



</div>
</div>
	</body>
	</html>