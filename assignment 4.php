<?php
//Create a program that prints the average of the values in the array called "A". Array "A" should have the following values:
	$a = array();
	$a = [1, 2, 5, 10, 255, 3];
	$helper = 0;

	for($i = 0; $i < count($a); $i++) {
		$helper += $a[$i];
	}
	print $helper = $helper / count($a);


?>
