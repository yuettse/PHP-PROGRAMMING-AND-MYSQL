<?php
session_start();
?>
<html>
<head>
	<title>Yuet Tse</title>
	<meta charset="UTF-8">
</head>
<body>
	<h1>Your Gold: <? echo $_SESSION['gold'] ?></h1>
	
	
	
	<form action="process.php" method="get">
		<input type="hidden" name="building" value="farm">
		<div>Farm <br> (earn 10-20 golds)</div>
		<input type="submit" value="Find Gold!">
		<input type="hidden" name="building" value="cave">
		<div>Cave <br> (earn 5-10 golds)</div>
		<input type="submit" value="Find Gold!">
		<input type="hidden" name="building" value="house">
		<div>House <br> (earn 2-5 golds)</div>
		<input type="submit" value="Find Gold!">
		<input type="hidden" name="building" value="casino">
		<div>Casino! <br> (earn/takes 0-50 golds)</div>
		<input type="submit" value="Find Gold!">
	</form>
	
	<div>Activities
	<?
		foreach($_SESSION['blog'] as $blog) {
			echo $blog;
		}
	?>
	
	</div>
	
</body>
</html>
