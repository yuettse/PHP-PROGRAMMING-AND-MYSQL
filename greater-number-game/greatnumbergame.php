<?php session_start();
	if( !isset($_SESSION['guessnumber'])) {
		$_SESSION['guessnumber'] = rand(1, 100);
		$_SESSION['times'] = 0;
	}
?>
<html>
<head>
	<title>Yuet Great Number Game</title>
	<meta charset="UTF-8">
</head>
<body>
	<h1>Welcome to the Great Number Game!</h1>
	<p> I am thinking a number between 1 and 100</p>
	<p>Take a guess!</p>
	<? 
		if ( $_SESSION['answer'] == 'high' ) {
			echo '<div style="width: 200px; height: 200px; background-color: red; color: white;">TOO HIGH!</div>';
			unset($_SESSION['answer']);
		} else if ( $_SESSION['answer'] == 'low' ) {
			echo '<div style="width: 200px; text-align: center; height: 200px; background-color: red; color: white;">TOO LOW!</div>';
			unset($_SESSION['answer']);
		} else if ( $_SESSION['answer'] == 'right' ) {
			echo '<div style="width: 200px; height: 200px; background-color: red; color: white;">
			YOU WIN! THE CORRECT NUMBER IS ' . $_SESSION['guessnumber'] . 
			'!<br><form action="number.php" method="get">
					<input type="hidden" name="again" value="yes">
					<input type="submit" value="Play Again!"></form></div>';
			
		}
		if ( $_SESSION['answer'] != 'right') {
		
			echo '<form action="number.php" method="get">
					<input type="text" name="number">
					<input type="submit">
					</form>';
		} else {
				echo '<p>You tried ' . $_SESSION['times'] . 'to win</p>';		
		}
		
	?>
	
	
</body>
</html>
