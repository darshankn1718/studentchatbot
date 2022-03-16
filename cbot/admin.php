<?php
	session_start();
	require 'dbconfig/config.php';
?>
<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="navbar.css">
<title>Login Page</title>
<link rel="stylesheet" href="css/stylex.css">

<script>  
function validateform(){  
//var name=document.myform.name.value;  
var password=document.adminjai.password.value;  
 
 if(password!="Admin"){  
  alert("Incorrect password. Try again...!");  
  return false;  
  }  
}  
</script>  


<title>Login as Admin</title>
<link rel="stylesheet" href="css/stylex.css">
<style>
body 
{
   background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
header {
  background-color: Black;
  opacity: 0.5;
  position: fixed;
  width: 100%;
}
</style>
</head>
<header>

	<h1>JAI<span>BOT</span></span></h1>
	
</header>
<body style="background-image: url('image/123.png');">
	
	<!--<div id="main-wrapper">
		<center>
		<h3 style="color:White;">ADMIN LOGIN</h3>
		</center>
		-->
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		<form class="myform" name="adminjai" action="adminlogin.php"  method="post" onsubmit="return validateform()">

			<div class="inner_container">
			<h3 style="color:White;">ADMIN LOGIN</h3>
			<label><b id="adminp">Password:</b></label><br>
			<input name="password" type="password" class="inputvalues" id="adminpass" placeholder="Type your password" required/><br>
			
		

				<a href="adminlogin.php">
				<input  type="button" id="admin_btn" value="LogIn" onclick="return validateform()"/><br>
				<a href="index.php"><input type="button" id="back_btn" value="Back"/></a>
			</div>

		</form>
	</div>
</body>
</html>