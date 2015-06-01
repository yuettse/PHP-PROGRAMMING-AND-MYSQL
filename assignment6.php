<?php
//Create a program that counts from 1 to 2000. As it loops through each number, have your program generate the number and whether it's an odd number or whether it's an even number.


	for($i = 1; $i <= 2000; $i++) {
		if($i % 2 == 0) {
			echo 'Number ' . $i . ' is an even number <br>'; 
		} else {
			echo 'Number ' . $i . ' is an odd <br>'; 
		}
	}

?>
