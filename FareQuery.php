<!DOCTYPE html>
<html>
<head>
	<title>Home(online Railway reservation system)</title>
	<link rel="stylesheet" href="css/style123.css">
	<link href="img/trai4.png" type="img/icon" rel="icon">
	 <script src="SpryAssets/SpryValidationSelect.js" type="text/javascript"></script>
    <link href="SpryAssets/SpryValidationSelect.css" rel="stylesheet" type="text/css">
<style>
.frmDronpDown {border: 1px solid #7ddaff;background-color:#C8EEFD;margin: 2px 0px;padding:40px;border-radius:4px;}
.demoInputBox {padding: 10px;border: #bdbdbd 1px solid;border-radius: 4px;background-color: #FFF;width: 50%;}
.row{padding-bottom:15px;}
</style>
<script src="jquery-3.2.1.min.js" type="text/javascript"></script>
<script>
function getPlaces(val) {
	$.ajax({
	type: "POST",
	url: "getPlaces.php",
	data:'place_id='+val,
	success: function(data){
		$("#places-list").html(data);
		getClass();
	}
	});
}


function getClass(val) {
	$.ajax({
	type: "POST",
	url: "getClass.php",
	data:'places_id='+val,
	success: function(data){
		$("#class-list").html(data);
	}
	});
}

</script>

	

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
					<li> <form  action="trainroute.php" method="post"><input name ="logout" type="submit" id="logout_btn"  value="Log Out"/><br>
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
               <center>
						<div class="frmDronpDown">
				<table>

<tr><td>Check in date</td>
<td>
<input type="date" name="date" placeholder="Check in" title="Check In"></td></tr>

<tr>					
<td><label>Station From:</label></td>
<td><select name="coutry" id="country-list" class="demoInputBox" onChange="getPlaces(this.value);">
<option value disabled selected>==Select Station==</option>
<?php
foreach($results as $country) {
?>
<option value="<?php echo $country["id"]; ?>"><?php echo $country["place_name"]; ?></option>
<?php
}
?>
</select></td>
</tr>

<tr><td>
<label>Station to:</label></td>
<td>
<select name="state" id="places-list" class="demoInputBox" onChange="getClass(this.value);">
<option value="">Select Station first</option>
</select><td>
</tr>


<tr><td>
<label>Class:</label></td>
<td>
<select name="city" id="class-list" class="demoInputBox">
<option value="">Select Class</option>
</select>
</td></tr>

<tr>
<td><center><input style="width:120px;height:30px; border-radius:20px;opacity:0.7;background-color: green;" type="submit" name="submit" value="submit"></td></center>
</tr>

</div>

</table>
				</ul>
	
			     </div>
			     
			</div>
			
		<div id="welcome"> </div>
	</div>
<h1 align="center">Welcome to my project</h1>
	</body>
</html>