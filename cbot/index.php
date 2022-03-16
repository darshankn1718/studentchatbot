<?php
	session_start();
	$conn=mysqli_connect("localhost","root","","authentication");
	if($conn-> connect_error){
		die("connection failed:".$conn-> connect_error);
	}
?>
<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="navbar.css">
<title>Login Page</title>
<link rel="stylesheet" href="css/stylex.css">

<style>
body 
{
  /*background-image: url('https://png.pngtree.com/thumb_back/fw800/background/20190223/ourmid/pngtree-smart-robot-arm-advertising-background-backgroundrobotblue-backgrounddark-backgroundlightlight-image_68405.jpg' );*/
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
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<body style="background-image: url('image/123.png');"> 
		<br>
		<br>
		<br>
		<br>
		<form class="myform" action="index.php" method="post">
			<div class="inner_container">
			<h3 style="color:White;">WELCOME TO DAYANANDA SAGAR</h3>
			<label><b id="un">Username:</b></label><br>
			<input name="username" id="us" type="text" class="inputvalues" placeholder="Enter Username here..." required/><br>
			<label><b id="pas">Password:</b></label><br>
			<input name="password" id="pass" type="password" class="inputvalues" placeholder="Your Password..." required/><br>
			
			<input name="login" type="submit" id="login_btn" value="Login"/><br>
			
			<a href="register.php"><input type="button" id="register_btn" value="Register"/></a> <br>
			
			<a href="admin.php"><input type="button" id="admin_btn" value=" Login as Admin"/></a>
		
		</div>

		</form>
		<?php
		if(isset($_POST['login']))
		{
			$username=$_POST['username'];
			$password=$_POST['password'];


		/*if($username=="jai" && $password=="dsce")
		{
			header('location:homepage.php');
		}
		else
		{
			// invalid
			echo '<script type="text/javascript"> alert("Invalid credentials") </script>';
		}*/
		
		$query="SELECT * from users WHERE username='$username' AND password='$password'";
			
			$query_run = mysqli_query($conn,$query);
			if(mysqli_num_rows($query_run)>0)
			{
				// valid
				$_SESSION['username']= $username;
				header('location:homepage.php');
			}
			else
			{
				// invalid
				echo '<script type="text/javascript"> alert("Invalid credentials") </script>';
			}
			
		}
		
		
		?>
		
	</div>
</body>
</html>