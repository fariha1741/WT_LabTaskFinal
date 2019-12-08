<!DOCTYPE html>

<?php
require_once('function.php');
if(isset($_GET['msg'])){
		
		echo $_GET['msg'];
	}
?>

<html>
<head>
	<title>User List</title>
</head>
<body>

	<h2>User List</h2>
	<a href="home.php">Back</a> |
	<a href="logout.php">logout</a>

	<br>
	<br>

	<table border="1" >
		<tr>
			<th>AuthorName</th>
			<th>Contact</th> 
			<th>Password</th>
			
			<th>UserName</th> 
		</tr>

		<?php
		$data= userlist();
		while($result= mysqli_fetch_assoc($data))
		{
		
		?>
		<tr>
			<td> <?php echo $result['aname']?> </td>
			<td><?php echo $result['contact']?></td>
			<td><?php echo $result['password']?></td>
			<td>
		<a href="edit.php?msg=<?php echo $result['username']?>">EDIT</a> |
				<a href="delete.php?msg=<?php echo $result['username']?>">DELETE</a> |
			</td>
		</tr>
		<?php
		}
		?>
	</table>
</body>
</html>