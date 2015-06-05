<?php
	define('DB_HOST', 'localhost:80');
	define('DB_USER', 'root');
	define('DB_PASS', 'root');
	define('DB_DATABASE', 'mysql');
	
	$connection = new mysqli('DB_HOST', 'DB_DATABASE', 'DB_PASS', 'DB_USER' );
	
	var_dump($connection);




?>
