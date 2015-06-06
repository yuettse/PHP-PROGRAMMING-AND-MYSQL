<?php
require_once('new-connection.php');

	$email = $_GET['useremail'];
	$query = "INSERT INTO user (email, time) VALUES ('$email', now())";
	
	
	
	
	run_mysql_query($query);
	
	header('Location:assignment2.php');
	
	
	
?>
