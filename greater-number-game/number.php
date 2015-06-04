<?php 
session_start();
	if($_GET['again'] == 'yes') {
		$_SESSION = array();
		$_GET['again'] = 'no';
		header('Location: greatnumbergame.php');
	}
	
	if ( $_GET['number'] == TRUE ) {
		if($_GET['number'] > $_SESSION['guessnumber']) {
			$_SESSION['answer'] = 'high';
			$_SESSION['times']++;
			unset($_SESSION['number']);
		} else if ($_GET['number'] < $_SESSION['guessnumber']) {
			$_SESSION['answer'] = 'low';
			$_SESSION['times']++;
			unset($_SESSION['number']);
		} else {
			$_SESSION['answer'] = 'right';
			$_SESSION['times']++;
		}
	}
	header('Location: greatnumbergame.php');

?>
