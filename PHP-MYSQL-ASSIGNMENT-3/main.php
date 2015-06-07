<?php
require_once('connection.php');
session_start();


if($_SESSION['howmanyposts'] == false) {
	$_SESSION['howmanyposts'] = 0;
}
if($_SESSION['error']){
	echo $_SESSION['error'] . "<br>";
}

?>
<html>
<head>
	<title>Yuet Quoting Assignment</title>
	<meta charset="UTF-8">
</head>
<body>

	<strong>Welcome to MyQuoting</strong>
	
	<form action="process.php" method="get">
		Your name: <input name="name" type="text" placeholder="Enter your name here!"><br>
		Your quote: <input name="quote" type="textarea" placeholder="Enter your quote here!">
		<input type="submit">
	</form>
	<form method="link" action="main.php">
		<input type="submit" value="Read the Quotes!!!!!!!!!!!!!">
	</form>
	
	<?
		echo "Number of Your Post(s): " . $_SESSION['howmanyposts'];
	?>

</body>



</html>
