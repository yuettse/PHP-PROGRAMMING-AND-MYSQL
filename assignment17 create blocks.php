<!DOCTYPE html>
<html>
<head>
<title>Yuet Tse board</title>
</head>
<body>
<?php
	$blocksize = 20;
	$blocknum = 21;
	
	echo '<div id="container" style="width:' . $blocksize * $blocknum . 'px">';
	
	
	
	
	function create($size, $num) {
		$temp = 1;
		if ($num % 2 == 1) {
			$num--;
		}
		for ($i= 0; $i < $num; $i++) {
			echo '<hr style="visibility: hidden; margin: -3px;">';
			echo '<div>';
			for( $a = 0; $a < $num; $a++) {
				if ($temp % 2 == 0) {
					$temp++;
					echo '<div style=" display : inline-block; background-color : green; width:' . $size . 'px; height :' . $size . 'px"></div>';
				} else {
					$temp++;
					echo '<div style=" display : inline-block; background-color : blue; width:' . $size . 'px; height :' . $size . 'px"></div>';
				}
				
			}
			$temp++;
			echo '</div>';
		}
	}
	
	
	
	create($blocksize, $blocknum);
	
	echo '</div>';


?>
</body>

</html>
