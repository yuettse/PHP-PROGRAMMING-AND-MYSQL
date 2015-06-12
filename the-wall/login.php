<?php
session_start();
	if( $_SESSION['login'] == TRUE) {
		header('location:main.php');
	}
?>


<html>
<head>
	<title>Yuet Wall</title>
	<meta charset="UTF-8">
</head>
<body>
	<strong>Coding Wall</strong>
	<br>
	<hr>
	<strong>Resgister Here!</strong>
	<? 
		
	
		foreach( $_SESSION['error'] as $errors ){
			echo $errors;
		}
		$_SESSION['error'] = array();
		
		if( $_SESSION['register'] == true) {
			echo $_SESSION['register'];
			unset($_SESSION['register']);
		}
			
	?>
	
	<div class="reg">
		<form action="process.php" method="post">
			<input type="hidden" name="register" value="TRUE">
			User Name: <input type="text" name="user">
			password: <input type="password" name="passwords">
			confirm-password: <input type="password" name="passwords1">
			E-mail: <input type="email" name="email">
			<input type="submit">
		</form>	
	</div>
	<hr>
	<strong>Login Here!</strong>
	<?
		if($_SESSION['error1'] == true) {
			echo $_SESSION['error1'];
			unset($_SESSION['error1']);
		}
	?>
	
	<div class="login">
		<form action="process.php" method="post">
			<input type="hidden" name="login" value="TRUE">
			User Name: <input type="text" name="user2">
			Password: <input type="password" name="password2">
			<input type="submit" value="Login">
		</form>
	</div>
	
	
	
	
	
	
</body>
</html>
