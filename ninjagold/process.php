<?php
session_start();



$_SESSION['temp'] = 0;

	if( $_GET['building'] == "farm" ) {
		$_SESSION['temp'] = rand(10,20);
		$_SESSION['gold'] += $_SESSION["temp"];
	} else if ( $_GET['building'] == 'cave' ) {
		$_SESSION['temp'] = rand(5,10);
		$_SESSION['gold'] += $_SESSION["temp"];
	} else if ( $_GET['building'] == 'house' ) {
		$_SESSION['temp'] = rand(2,5);
		$_SESSION['gold'] += $_SESSION['temp'];
	} else if ( $_GET['building'] == "casino" ){
		$_SESSION['temp'] = rand(0,1);
		if ( $_SESSION['temp'] == 0 ) {
			$_SESSION['temp'] = rand(0,50);
			$_SESSION['gold'] += $_SESSION['temp'];
		} else {
			$_SESSION['temp'] = rand(0,50) * -1;
			$_SESSION['gold'] += $_SESSION['temp'];
		}
	}

	if ( $_SESSION['temp'] < 0) {
		array_push($_SESSION['blog'], "<div>You entered a casino and lost " . $_SESSION['temp'] * -1 . "gold" . date("Y-m-d") . ' ' . date("h:i:sa"). '</div>');
	} else {
		array_push($_SESSION['blog'], "<div>You entered a " . $_GET['building'] . " and earned " . $_SESSION['temp'] . "gold" . date("Y-m-d") . ' ' . date("h:i:sa"). '</div>');
	}
	
	
	
	
	header('Location: ninjagoldgame.php');
?>
