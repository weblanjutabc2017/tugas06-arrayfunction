<?php
	function fpb($x,$y){
		return ( $y == 0 ) ? ($x):( fpb($y, $x % $y) );
	};
	
	function kpk($a,$b){
		return ( $a / fpb($a,$b) ) * $b;
	}
	
	echo "Hasil FPB : " . fpb(27,9) . "<br/>";
	echo "Hasil KPK : " . kpk(21,7);
?>