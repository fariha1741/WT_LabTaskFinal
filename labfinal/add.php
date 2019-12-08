<?php
	//session_start();
	if(isset($_COOKIE['username'])){
	
	if(isset($_GET['msg'])){
		
		echo $_GET['msg'];
	}
?>

<!DOCTYPE html>
<html>

<body>

	<h1>Add New User</h1> 
	
	<a href="home.php">Back</a> |  
	<a href="logout.php">logout</a>

	<form method="post" action="../php/insertUser.php">
		<table>
			<tr>
				<td>AuthorName:</td>
				<td><input type="text" name="aname"></td>
			</tr>
			<tr>
				<td>Contact:</td>
				<td><input type="text" name="contact"></td>
			</tr>
			<tr>
				<td>UserName:</td>
				<td><input type="text" name="uname"></td>
			</tr>
			<tr>
				<td>Password:</td>
				<td><input type="password" name="pass"></td>
			</tr>
			
			<tr>
				<td><input type="submit" name="submit" value="Save"></td>
				<td></td>
			</tr>
		</table>
	</form>


</body>	
</html>

