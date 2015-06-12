<?php
session_start();
require_once('new-connection.php');
	if($_SESSION['login'] == FALSE) {
		header('location:login.php');
	}
?>
<html>
<head>
	<meta charset="UTF-8">
	<title>Yuet Wall</title>
</head>
<body>
	<strong>Coding Wall</strong>
	<form action="process.php" method="post">
		<input type="submit" value="Logout">
		<input type="hidden" name="logout" value=TRUE>
	</form>
	<div>Welcome <?echo $_SESSION['name']?></div>
	<br>
	<hr>
	
	
	<form action="process.php" method="post">
		<input type="textarea" name="post_message" style="height:300px; width:700px;">
		<input type="hidden" name="posting" value=TRUE>
		<input type="submit" value="Post a message" >
	</form>
	<?
		
		$query = fetch("SELECT * FROM messages");
		$count = count($query);
		$query = array_reverse($query);
		foreach( $query as $temp ) {
			
			$msgid = $temp['id'];
			$temp1 = fetch("SELECT comment, users_id, created_at FROM comments WHERE messages_id = '$msgid'");
			$userid = $temp['users_id'];
			$name = fetch("SELECT name FROM users WHERE id = '$userid'");
			
			echo "<strong>". $name['name'] . " Message " . $count . "</strong><br>";
			
			$count--;
			
			echo $temp['message'] . "<br> Date: " . $temp['created_at'];
			
			if ($temp1) {
				echo "<ol>";
				if(count($temp1['comment']) == 1) {
					$commentusersid = fetch("SELECT users_id FROM comments WHERE messages_id = '$msgid'");
					$commentusersid = $commentusersid['users_id'];
					$commentname = fetch("SELECT name FROM users WHERE id ='$commentusersid'");
				
					echo "<li>" . "<strong>" . $commentname['name'] . "'s comment: </strong>" . $temp1["comment"]  . "<br><strong>Date: " . $temp1['created_at'] . "</strong><br><br>" . "</li>";
				} else {	
					
					foreach ($temp1 as $temp2) {
						$commentname = $temp2['users_id'];
						$commentname = fetch("SELECT name FROM users WHERE id = '$commentname'");
						echo "<li>" . "<strong>" . $commentname['name'] . "'s comment: </strong>" . $temp2["comment"] . "<br><strong>Date: " . $temp2['created_at'] . "</strong><br><br>"  . "</li>";
					}
				}
				echo "</ol>";
			}

			echo "<br>" . 
			"<form action='process.php' method='post'>
				<input type='hidden' name='msgid' value=$msgid>
				<input type ='textarea' name='post_comment'>
				<input type='submit' value='comment'>
				<input type='hidden' name='comment' value = 'TRUE'>
			</form>" . "<hr>";
			
		}
	
	?>
	
	
	
</body>

</html>
