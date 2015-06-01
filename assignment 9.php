<?php
//Create a function called 'print_lists' that takes any array and prints each value in the array in <li>. For example, running print_lists($A) where $A = array(2,3,'hello'); should output a html response that looks like

function print_lists($array1) {
	echo '<ul>';
	for($i = 0; $i < count($array1); $i++) {
		echo '<li>' . $array1[$i] . '</li>';
	}
	echo '</ul>';
}



$A = array();
$A = [2, 4, 10, 'hello'];
print_lists($A);


?>
