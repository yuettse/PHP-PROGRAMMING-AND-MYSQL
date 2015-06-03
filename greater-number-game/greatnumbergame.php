<?php session_start();
	if( !isset($_SESSION['guessnumber'])) {
		$_SESSION['guessnumber'] = rand(1, 100);
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
			echo '<div style="width: 100px; height: 100px; background-color: red; color: white;">TOO HIGH!</div>';
		} else if ( $_SESSION['answer'] == 'low' ) {
			echo '<div style="width: 100px; height: 100px; background-color: red; color: white;">TOO LOW!</div>';
		} else if ( $_SESSION['answer'] == 'right' ) {
			echo '<div style="width: 100px; height: 100px; background-color: red; color: white;">
			YOU WIN! THE CORRECT NUMBER IS ' . $_SESSION['guessnumber'] . '!</div>';
			echo '<button type="submit" formaction="number.php" name="again" value="yes" formmethod="get">Play Again!</button>';
		}
		if ( $_SESSION['answer'] == 'high' || $_SESSION['answer'] == 'low' || $_SESSION['answer'] == NULL ) {
		
			echo '<form action="number.php" method="get">
					<input type="text" name="number">
					<input type="submit">';
		}
	?>

	</form>
</body>
</html>

