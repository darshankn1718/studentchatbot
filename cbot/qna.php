<!DOCTYPE html>
<html lang="en">
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
	<h1>JAI<span>BOT</span></span></h1>
	<nav>
		<ul>
		<li><a href="adminlogin.php" style="font-size:20px">Chats</a></li>
		<li><a href="qna.php" style="font-size:20px">Dataset</a></li>
		<li><a href="insert.php" style="font-size:20px">Insert</a></li>
		<li><a href="invalid.php" style="font-size:20px">Invalid</a></li>
		<li><a href="index.php" style="font-size:20px">Sign Out</a></li>
		</ul>
	</nav>
	<?php
			if(isset($_POST['logout']))
			{
				session_destroy();
				header('location:index.php');
			}
		?>
</header>

<!--
<div id="main-wrapper">
		<center>
			<h2><strong>Admin</strong></h2>
			<div class="imgcontainer">
			<img src="imgs/dc.jpg" class="avatar"/>
		</center>
	
	</div>
-->
<style>
	
	input{
			padding: 2px;
			margin-left: 1255px;
			margin-top: 35px;
			height: 20px;
			width: 90px;
			color: #fff;
			background-color: #000;	
	}
</style>

		
<br>
<br>
<br>
<br>
<br>
<body>
	<table  cellspacing="5" align="center" border="3px" style="width: 900px;line-height: 40px">
		<tr>
			<th colspan="5"><h2>Chatbot Dataset</h2></th>
			<h3></h3>
		
		
		<tr>
			<th width="20px">id</th>
			<th align="center">Question</th>
			<th align="center">Reply</th>
			<th colspan="2" align="center" >Operation</th>
			
		</tr>
		<?php
		$conn=mysqli_connect("localhost","root","","youtube");
		if($conn-> connect_error){
			die("connection failed:".$conn-> connect_error);
		}
		$sql = "SELECT id,question,reply from chatbot_hints";
		$result= $conn-> query($sql);

		if($result-> num_rows >0){
			while ($row =$result ->fetch_assoc()) {
				echo "<tr>
				<td>".$row["id"]."</td>
				<td>".$row["question"]." </td>
				<td> ".$row["reply"]." </td>
				<td><a href='update.php?rn=$row[id]&ques=$row[question]&rep=$row[reply]' style='font-size:15px'>Edit/Update</td>
				<td><a href='delete.php?rn=$row[id] onclick='return checkdelete()' style='font-size:15px'>Delete</td></tr> ";
					
				# code...
			}
			echo "</table>";
		}
		else{
		}
		$conn-> close();
		?>

	</table>
<script>
		function checkdelete()
		 {
			return Confirm('Are you Sure you want to delete this record ?');
		}


</script>
</body>
</html>