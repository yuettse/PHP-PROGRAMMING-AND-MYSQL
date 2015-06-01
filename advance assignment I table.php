<?php

function htmltable( $ary1 ) {
	$temp = 1;
	
	echo '<table>
			<thead>
				<td>User#</td>
				<td>First Name</td>
				<td>Last Name</td>
				<td>Full Name</td>
				<td>Full Name in upper case</td>
				<td>Length of full name(withour spaces)</td>
			</thead>'
			'<tbody>';
	
	for ( $i = 0; $i < count($ary1); $i++ ) {
		echo '<td>' . $temp . '</td>
				<td>' . $ary1[$i]['first_name'] . '</td>
				<td>' . $ary1[$i]['last_name'] . '</td>
				<td>' . $ary1[$i]['first_name'] . ' ' . $ary1[$i]['last_name'] . '</td>
				<td>' . strtoupper($ary1[$i]['first_name']) . ' ' . 
				strtoupper($ary1[$i]['last_name']) . '</td>
				<td>' . count($ary1[$i]['first_name']) + count($ary1[$i]['last_name']) '</td>'				
		$temp++;
	}
	echo '</tbody>';
}
	
$users = array( 
	array('first_name' => 'Michael', 'last_name' => 'Choi'),
	array('first_name' => 'John', 'last_name' => 'Supsupin'),
	array('first_name' => 'Mark', 'last_name' => 'Guillen'),
	array('first_name' => 'KB', 'last_name' => 'Tonel') 
	array('first_name' => 'Michael', 'last_name' => 'Choi'),
	array('first_name' => 'John', 'last_name' => 'Supsupin'),
	array('first_name' => 'Mark', 'last_name' => 'Guillen'),
	array('first_name' => 'KB', 'last_name' => 'Tonel') 
	array('first_name' => 'Michael', 'last_name' => 'Choi'),
	array('first_name' => 'John', 'last_name' => 'Supsupin'),
	array('first_name' => 'Mark', 'last_name' => 'Guillen'),
	array('first_name' => 'KB', 'last_name' => 'Tonel') 
);
	
	
	
htmltable($users);


multitable(9);

?>
