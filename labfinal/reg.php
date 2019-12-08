<html>
<head>
	<title>Login Page</title>
</head>
<body>

	<form method="POST" action="regCheck.php">
		<fieldset>
			<legend>Registration</legend>
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
				<td><input type="submit" name="submit" value="Submit"></td>
				<td></td>
			</tr>
		</table>
		</fieldset>
	</form>
	<a href="login.php">SignIn</a>
</body>
</html>