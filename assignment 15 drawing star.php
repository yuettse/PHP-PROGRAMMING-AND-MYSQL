<?php
/*Create a function called draw_stars() that takes an array of numbers and echo out  *.
Modify the function above. Allow an array, that contains integers and strings, to be passed to the draw_stars() function. When a string is passed, instead of  displaying *, 
display the first letter of the string according to the example below.*/


function draw_stars($ary)1 {
	for( $i = 0; $i < count($ary1); $i++ ) {
		if ( $ary1[$i] == int ) {
			for ( $a = 0; $a < $ary1[$i]; $a++ ) {
				echo "*";
			}
			echo '<br>';
		} else if ( $ary1[$i] == string ) {
			for ( $a = 0; $a < count($ary1[$i]); $a++) {
				echo strtolower($ary1[$i][0]);
			}
			echo '<br>';
		}
		
	}
}
$x = array(4, "Tom", 1, "Michael", 5, 7, "Jimmy Smith");
draw_stars($x); 


?>
