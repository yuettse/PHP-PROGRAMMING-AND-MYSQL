<?php
//Create an array that contains all the odd numbers between 1 to 20,000. Use the var_dump() at the end to display the array values without using loops.
	
	$a = array();
	$helper = 0;

	for($i = 0; $i < 20000; $i++) {
		if($i % 2 == 1) {
			$a[$helper] = $i;
			$helper++;
		}
	}

	var_dump($a);

?>
