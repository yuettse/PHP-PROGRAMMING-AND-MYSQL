<?php
//You're going to create a program that simulates throwing a coin 5,000 times. Your program should display how many times the head/tail appears.
function throwing($howmanytimes) {
	$coin = 0;
	$head = 0;
	$tail = 0;
	for($i = 0; $i < $howmanytimes; $i++) {
		$coin = rand(1,2);
		if( $coin == 1) {
			$head++;
			echo "Attempt #1: Throwing a coin... It's head!... Got " . $head . "head(s) so far and " . $tail . "(s) so far<br>";
		} else {
			$tail++;
			echo "Attempt #1: Throwing a coin... It's tail!... Got " . $head . "head(s) so far and " . $tail . "(s) so far<br>";		
		}
	}
}

throwing(5000);
?>
