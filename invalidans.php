
<?php
		$conn=mysqli_connect("localhost","root","","youtube");
		if($conn-> connect_error){
			die("connection failed:".$conn-> connect_error);
		}	
	

?>

<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
<style >
	input{
		font-size: 1vw;
	}

	table{
		color: black;
		border-radius: 19px;
		
		background:linear-gradient(lightblue,lightblue,white);
	}
	#button 
	{
		background-color:rgba(0,0,0,0.6);
		color: white;
		height: 32px;
		width: 145px;
		border-radius: 25px;
		font-size: 16px;
	}
	body{
		background:linear-gradient(black,black);

		background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;


	}
</style>


</head>
<br><br><br><br><br><br>
<br>
<br>
<form action="" method="POST">
	<table border="0" bgcolor="black" align="center" cellspacing="50">
			<div id="main-wrapper">
				<center>
			
			<div class="imgcontainer">
			<!--<img src="image/bot_avatar.png" class="avatar"/>-->
		</center>
	</div>
	
	<tr>
			<td>Report Invalid Response</td>
			<td><textarea type="text" value="" name="messages" placeholder="Type your query here..."required></textarea></td>
			
		</tr>
	<tr>
	<td  colspan="3" align="center"><input type="submit" id="button" name="submit" value="Report as Invalid"/></td>
	</tr>


</table>
	</form>


</body>
</html>


<?php
if(isset($_POST['submit']))
{
	$id=$_POST['id'];
	$messages=$_POST['messages'];


$query="insert into invalid values('','$messages')";
$query_run = mysqli_query($conn,$query);
						if($query_run)
						{
							echo "<script>alert('Reported Successfully!')</script>";
							echo '<script type="text/javascript">'; 
							echo 'window.location.href = "homepage.php";';
							echo '</script>';					
						}
						else
						{
							echo '<script type="text/javascript"> alert("'.mysqli_error($conn).'") </script>';
							exit();
						
					}
					?>

<META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost:7882/homepage.php">
<?php

}
?>
	