<?php
session_start();
require_once('new-connection.php');

	

	if( $_POST['register'] == TRUE) {
		
		if ( $_POST['user'] == false ) {
			array_push($_SESSION['error'], "<div><strong>User name is empty</strong></div>");
		} else {
			$name = $_POST['user'];
			$query = "SELECT name FROM users WHERE name = '$name'";
			if(fetch($query)) {
				array_push($_SESSION['error'], "<div><Strong>Sorry, user name has been taken</strong></div>");
			}
		}
		
		
		
		if ( $_POST['passwords'] == false ) {
			array_push($_SESSION['error'], "<div><strong>Password is empty</strong></div>");
		}
		if ( $_POST['passwords1'] == false ) {
			array_push($_SESSION['error'], "<div><strong>Confirm-password is empty</strong></div>");
		}
		if ( $_POST['email'] == false ) {
			array_push($_SESSION['error'], "<div><strong>E-mail is empty</strong></div>");
		}
		if ( $_POST['passwords'] !== $_POST['passwords1'] ) {
			array_push($_SESSION['error'], "<div><strong>Password doesn't match</strong></div>");
		}
		
		if ($_SESSION['error'] == false) {
			$name = $_POST['user'];
			$password = $_POST['passwords'];
			$email = $_POST['email'];
			$_SESSION['register'] = "<div><strong>Success!</strong></div>";
			$query = "INSERT INTO users (name, password, email, created_at, updated_at) VALUES ('$name', '$password', '$email', now(), now())";
			run_mysql_query($query);
		}
		
		
		header('location: login.php');
	}
	
	if( $_POST['login'] == true ) {
		
		
		
		if ( $_POST['user2'] == TRUE ) {
			$name = $_POST['user2'];
			$password = $_POST['password2'];
			$query = "SELECT name FROM users WHERE name ='$name' AND password='$password'";
			if(fetch($query)) {
				$_SESSION['login'] = TRUE;
				$_SESSION['name'] = $name;
				header('location: main.php');
				
			} else {
				$_SESSION['error1'] = "<div><strong>Wrong User name or Password</strong></div>";
				header('location: login.php');
			}
			
		} else {
	
			$_SESSION['error1'] = "<div><strong>Wrong User name or Password</strong></div>";
			header('location: login.php');
		}
		
	}
	
	if( $_POST['logout'] ) {
		unset($_SESSION['login']) ;
		header('location:main.php');
	}
	
	if ($_POST['posting']) {
		if($_POST['post_message']) {
			$name = $_SESSION['name'];
			$message = $_POST['post_message'];
			$query = "INSERT INTO messages (users_id, message, created_at, updated_at) VALUES ( (SELECT id FROM users WHERE name = '$name'), '$message', now(), now())";
			run_mysql_query($query);
			
		}
		header('location:main.php');
	}
	
	if ($_POST['comment'] == TRUE) {
		$name = $_SESSION['name'];
		$msgid = $_POST['msgid'];
		$comment = $_POST['post_comment'];
		if($_POST['post_comment'] == true) {
			$query = "INSERT INTO comments (users_id, messages_id, comment, created_at, updated_at) VALUES ( (SELECT id FROM users WHERE name = '$name'), (SELECT id FROM messages WHERE id = '$msgid'), '$comment', now(), now() )";
			run_mysql_query($query);
		}
		header('location:main.php');
	}




?>
