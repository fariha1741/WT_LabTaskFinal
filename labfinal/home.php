  
<?php
	
	if(isset($_COOKIE['username'])){
		
	
	if(isset($_GET['msg'])){
		
		echo $_GET['msg'];
	}
?>


<html>
<head>
	<title>Home page</title>
</head>
<body>

	<h1>Welcome Home! <?=$_COOKIE['username']?></h1> 
	
	<a href="userlist.php">User List</a> | 
	<a href="add.php">Add User</a> | 
	<a href="logout.php">logout</a>

</body>	
</html>
