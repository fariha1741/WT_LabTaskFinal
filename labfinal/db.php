<?php
	function getConnection(){
		$conn = mysqli_connect('localhost', 'root', '', 'author');
		return $conn;
	}
?>