<!DOCTYPE html>
<html lang="en">
<body>
<head>
	<meta charset="utf-8"> 
	<title>Admin Portal</title>
	<link rel="stylesheet" href="navbar.css">
	<!--<link href="https://fonts.googleapis.com/css?family=Alfa+Slab+One|Open+Sans" rel="stylesheet">-->

	<style>
body 
{
	background-color: LightBlue;
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
	<icon>
		
	</icon>
	<h1>JAI<span>BOT</span></span></h1>
	<nav>
		<ul>
		<li><a href="adminlogin.php" style="font-size:20px">Chats</a></li>
		<li><a href="qna.php" style="font-size:20px">Dataset</a></li>
		<li><a href="invalid.php" style="font-size:20px">Invalid</a></li>
		<li><a href="index.php" style="font-size:20px">Sign Out</a></li>
		</ul>
	</nav>
</header>
<br>
<br>
<br>
<br>
<br>
<body>
	<table align="center" border="3px" style="width: 900px;line-height: 20px">
	<tr>
			<th colspan="2"><h2>Invalid</h2></th>
			<h3></h3>
		
		
		<tr>
			<th align="center">id</th>
			<th align="center">Invalid query/response</th>
			</tr>
		<?php
		$conn=mysqli_connect("localhost","root","","youtube");
		if($conn-> connect_error){
			die("connection failed:".$conn-> connect_error);
		}
		$sql = "SELECT id,messages from invalid";
		$result= $conn-> query($sql);

		if($result-> num_rows >0){
			while ($row =$result ->fetch_assoc()) {
				echo "<tr><td>".$row["id"]."</td><td>".$row["messages"]."</td></tr>";
				# code...
			}
			echo "</table>";
		}
		else{
		}
		$conn-> close();
		?>

	</table>

</body>
</html>
</html>
