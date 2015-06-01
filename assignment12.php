<?php

$states = array('CA', 'WA', 'VA', 'UT', 'AZ', 'NJ', 'NY', 'DE');

function forloop($ary1) {
	echo '<select>';
	for (i = 0;i < count($ary1); i++) {
		echo "<option value='ary1($i)'>" . $ary1 . '</option>';
	}
	echo '</select>';
}

function foreachloop($ary1) {
	echo '<select>';
	foreach($array as $value) {
		echo "<option value='$value'>" . $value . '</option>';
	}
	echo '</select>;
}

forloop($states);
foreachloop($states);



?>
