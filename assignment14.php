<?php

/*Assignment: Get Min and Max

Create a function get_max_and_min() that takes an array of numbers and, then,
 returns both the minimum and the maximum number from the given array
 as an associative array. Do not use the PHP function max() or min()
 to get this to work. See if you can do this using arrays and for loops.*/

function get_max_and_min($ary1) {
	$max = 0;
	$min = 0;
	if (count($ary1) >= 2) {
		for ( $i = 0; $i < count($ary1) - 1; $i++) {
			if ( $ary1[$i] < $ary1[$i + 1] ) {
				$min = $ary[$i];
				$max = $ary[$i + 1];
			} else {
				$min = $ary[$i + 1];
				$max = $ary[$i];
			}
	
		}
		echo "Max array = " . $max . " and Min array = " .$min;
	} else {
		echo 'Sorry, your array size is less than 1';
	}
	
	
}

$sample = array( 135, 2.4, 2.67, 1.23, 332, 2, 1.02);
get_max_and_min($sample);

?>
