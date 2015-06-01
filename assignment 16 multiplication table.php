<?php
//Create a program that displays a multiplication table that looks like the table below.

function multitable( $rows ) {
	$firstrows = 0;
	echo '<table>';
	for( $i = 0; $i <= $rows; $i++ ) {
		if ( $firstrows == 0 ) {
			echo '<tr>
					<td></td>';
			for ( $a = 0; $a < $rows; $a++ ) {
				echo '<td>' . $a + 1 . '</td>';
			}
			echo '</tr>';
		} else {
			echo '<tr>';
			echo '<td>' . $firstrows . '</td>';
			for ( $a = 0; $a < $rows; $a++ ) {
				echo '<td>' . $firstrows * ($a + 1) . '</td>';
			}
			echo '</tr>';
		}
		$firstrows++;
	}
	echo '</table>';	
}


multitable(9);

?>
