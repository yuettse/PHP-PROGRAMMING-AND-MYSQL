<?php
require_once('connection.php');
session_start();

	if($_GET['name'] == false || $_GET['quote'] == false) {
		$_SESSION['error'] = "You are missing a name/quote. Please try again";
		header('Location:index.php');
	} else if ($_GET['name'] == true || $_GET['quote'] == true) {
		$temp1 = $_GET['name'];
		$temp2 = $_GET['quote'];
		$query = "INSERT INTO quotes (time, name, quote) VALUES (now(), '$temp1', '$temp2' )";
		run_mysql_query($query);
		$_SESSION['howmanyposts']++;
		unset($_SESSION['error']);
		header('Location:index.php');
		
	}
?>
