<?php
session_start();
require 'DBconfig/config.php'; 
?>

<!DOCTYPE html>
<html>
<head>
<title>Home page</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<body style="background-color:#f7f1e3">
<div id="main-wrapper">
 <center><h2>Home page</h2>
 <h3>Welcome
 <?php echo $_SESSION['username']?>
 </h3>
 <img src="img/image.png"class="image"/>
 </center>

<form class="myform" action="logout.php" method="post"><br>
     <input name ="logout" type="submit"id="logout_btn"value="Log Out"/><br>
	  </form>
	  <?php
	  if(isset($_POST['logout']))
	  {
	  session_destroy();
	  header('location:login.php');
	  }
	  ?>
</div>
</body>
</html>