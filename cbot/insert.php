
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
		color: black	;
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
		</center>
	</div>
		<!--<tr>
			<td>Id</td>
			<td><input type="text" value="" name="id" placeholder="Type Id here..."required></td>	
		</tr>-->
		

		<tr>
			<td>Question</td>
			<td><input type="text" value="" name="question" placeholder="Type your query here..."required></td>
			
		</tr>
		<tr>
			<td>Reply</td>
			<td><input type="text" value="" name="reply" placeholder="Type your response here..."required></td>
			
		</tr>
		
		</tr>
	<tr>
	<td  colspan="3" align="center"><input type="button" id="button" onclick="msg()" value="Back"/></td>
	<td  colspan="3" align="center"><input type="submit" id="button" name="submit" value="Add query"/></td>
	</tr>


</table>
	</form>
	<script>
function msg() {
	window.location.href = "qna.php";
	}
</script>

</body>
</html>


<?php
if(isset($_POST['submit']))
{
	//$id="null";
	$_POST['id'];
	$question=$_POST['question'];
	$reply=$_POST['reply'];

//$query="SELECT id, question, reply FROM chatbot_hints WHERE id=$id";
$query="insert into chatbot_hints values('$id','$question','$reply')";
$query_run = mysqli_query($conn,$query);


						
						if($query_run)
						{
							echo '<script type="text/javascript"> alert("Success!") </script>';
							$id=$_POST['id'];
							//$query2="DELETE FROM CHATBOT_HINTS WHERE ID ='$id'";
							echo '<script type="text/javascript">'; 
							//echo 'alert("'.mysqli_error($conn).'");'; 
							echo 'window.location.href = "qna.php";';
							echo '</script>';
							exit();
						}
						else
						{
							//echo '<script type="text/javascript"> alert("'.mysqli_error($conn).'") window.location.href = "qna.php";</script>';
							echo '<script type="text/javascript">'; 
							echo 'alert("'.mysqli_error($conn).'");'; 
							echo 'window.location.href = "qna.php";';
							echo '</script>';
							exit();
					}
					?>

<META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost:7882/qna.php">
<?php

}
?>
	