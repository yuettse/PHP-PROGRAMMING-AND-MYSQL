<?php
//Create a function called 'print_lists' that takes any array and prints each value in the array in <li>. For example, running print_lists($A) where $A = array(2,3,'hello'); should output a html response that looks like

function printuser($array1) {
	echo 'There are ' . count($array1) . ' keys in this array: ';
	for( $i = 0; $i < count($array1); $i++) {
		echo key($array1);
		if ( $i + 1 < count($array1)) {
			echo ', ';
		}
		next($array1);
	}
	echo '<br>';
	foreach( $array1 as $keys => $value) {
		echo 'The value in the key ' . $keys . ' is ' . $value . '<br>';
	}
}




$users = array();
$users['first_name'] = "Michael";
$users['last_name'] = "Choi";
$users['age'] = 13;
$users['address'] = "Earth";

printuser($users);

?>
