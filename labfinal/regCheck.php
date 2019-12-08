<?php
	
	require_once('function.php');
	if(isset($_POST['submit'])){
		$aname = $_POST['aname'];
		$contact = $_POST['contact'];
		
		$uname = $_POST['uname'];
		$password = $_POST['pass'];
		
		if(empty($aname) == true || empty($contact) == true || empty($uname) == true  || empty($password) == true ){
			echo "null submission!";
		}else{
			$status = register($aname, $contact, $uname, $password);
			if($status){
				header('location:login.php?msg=success');
			}else{
				header('location:reg.php?msg=dberror');
			}
		}
	}else{
		header('location: reg.php');
	}
?>