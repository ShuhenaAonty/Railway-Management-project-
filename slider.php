<html>
<head>
	</head>

<body>

<div id="slider">
<div id="box">

<img src="train1.jpg">


</div>



</div>



</body>

</html>

<li> <input name ="logout" type="submit" id="logout_btn"  value="Log Out"/><br>
	                  <?php
	  if(isset($_POST['logout']))
	  {
	  session_destroy();
	  header('location:login1.php');
	  }
	  ?></li>