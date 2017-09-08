<?php
	function maximum($a, $b){
		$max = $a;
		if ($b > $max) {
			$max = $b;
		}
		echo "Nilai terbesar adalah " . $max;
	}
	maximum(18, 10);
?>