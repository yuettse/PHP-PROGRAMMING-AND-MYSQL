<?php
/*Create a function called 'multiply()' that reads each value in the array (e.g. $A = array(2, 4, 10, 16)) and returns an array where each value has been multiplied by 5.

Modify this function so that you can pass an additional argument to this function. The function should multiply each value in the array by this additional argument (call this additional argument 'factor' inside the function). For example say $A = array(2,4,10,16). When you say*/

function multiply($array1) {
	for($i = 0; $i < count($array1); $i++) {
		$array1[$i] *= 5;
	}
	return $array1;
}



$A = array();
$A = [2, 4, 10, 16];
$B = multiply($A);

var_dump($B);

?>
