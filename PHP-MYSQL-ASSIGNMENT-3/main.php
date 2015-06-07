<?php
require_once('connection.php');
?>

<html>
<head>
	<title>Quoting Yuet</title>
	<meta charset="UTF-8">
</head>

<body>
	<?
		$temp = $connection->query('SELECT * FROM quotes');
		foreach( $temp as $temp1) {
			echo '"' . $temp1['quote'] .'"' . "<br>"
				. "     " . $temp1['name'] . " at " . $temp1['time'] . "<hr><br>";
			}
	?>
</body>
</html>
