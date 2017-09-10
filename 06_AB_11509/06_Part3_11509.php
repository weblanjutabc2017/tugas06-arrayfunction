<?php

	function maks($a, $b){
		$max = $a;
		if ($b > $max){
			$max = $b;
		}
		echo "Nilai Terbesar Adalah : ".$max;
	}
	maks(7,10);
?>