<?php 
session_start();
	if($_GET['again'] == 'yes') {
		$_SESSION = array();
		header('Location: greatnumbergame.php');
	}
	
	if ( isset($_GET['number']) {
		if($_GET['number'] > $_SESSION['guessnumber']) {
			$_SESSION['answer'] = 'high';
		} else if ($_GET['number'] < $_SESSION['guessnumber']) {
			$_SESSION['answer'] = 'low';
		} else {
			$_SESSION['answer'] = 'right';
		}
	}
	header('Location: greatnumbergame.php');

?>
