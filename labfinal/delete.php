<?php
require_once('function.php');
if(isset($_GET['msg'])){
		
    $id= $_GET['msg'];
	
	}
	$data= deleteuser($id);
	if($data)
	{
	header('location:home.php?msg=profile_deleted');}
			else{
				header('location:userlist.php?msg=dberror');
			}
?>
