<?php
	function maximum($x, $y){
		$max = 0;
		if ($y > $x){
			$max = $y;
			echo "Nilai maksimumnya adalah : ".$max;
		}
		else if ($y < $x){
			$max = $x;
			echo "Nilai maksimumnya adalah : ".$max;	
		}
		else if ($y == $max){
			echo "Keduanya maksimum karena bernilai sama";
		}
	}
	
	maximum(120,100);
?>