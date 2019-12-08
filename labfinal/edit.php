<?php
require_once('function.php');
	if(isset($_POST['submit'])){
		$uname = $_POST['username'];
		$password = $_POST['password'];
		$email = $_POST['email'];
		if(empty($uname) == true || empty($password) == true || empty($email) == true){
			echo "null submission!";
		}else{
			$status = update($uname, $password, $email);
			if($status){
				header('location:home.php?msg=profile_updated');
			}else{
				header('location:userlist.php?msg=dberror');
			}
		}
	}else{
		header('location:reg.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit Profile</title>
</head>
<body>

	<h1>Edit your profile</h1> 
	
	<a href="userlist.php">Back</a> |  
	<a href="logout.php">logout</a>

	<form method="post" action="edituser.php">
		<table>
			<tr>
				<td>AuthorName:</td>
				<td><input type="text" name="username"  value= "<?php echo $user['aname']?>"></td>
			</tr>
			<tr>
				<td>Contact:</td>
				<td><input type="text" name="email" value= "<?php echo $user['contact']?>"></td>
			</tr>
			
			<tr>
				<td>Username:</td>
				<td><input type="text" name="username"  value= "<?php echo $user['username']?>"></td>
			</tr>
			<tr>
				<td>Password:</td>
				<td><input type="password" name="password" value= "<?php echo $user['password']?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Update"></td>
			</tr>
		</table>
	</form>


</body>	
</html>