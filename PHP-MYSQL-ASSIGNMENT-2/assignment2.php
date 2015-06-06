<?php
require_once('new-connection.php');
?>

<style>
.tab {
    padding-left: 25px;
}

</style>


<html>
<head>
	<title>Yuet email assingnment</title>
	<meta charset="UTF-8">
</head>
<body>
	<form action="process.php" method="get">
		<input type="email" name="useremail" placeholder="Please Enter a VALID email here">
		<input type="submit">
	
	</form>
	
	<div>
		<strong>Email Addresses Entered:</strong>
		<?
			$temp = fetch('SELECT * FROM user');
			echo "<table>";
			FOREACH($temp as $temp1) {
				echo "<tr>" . "<td>" . $temp1['email']. "</td>" . "<td>" . $temp1['time'] . "</td>" . "</td>";
			}
			echo "</table>";
		?>
	</div>

</body>



</html>
