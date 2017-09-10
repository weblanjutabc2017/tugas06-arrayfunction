<?php
	//function menentukan FPB 2 bil.
	function fpb($a,$b){
		return ($b == 0) ? ($a):( fpb($b, $a % $b) );
	}
	//utk menentukan KPK 2 bil. : 
	function kpk($a,$b){
		return ($a / fpb($a,$b)) * $b;
	}

	$x=36;
	$y=60;
	
	echo "KPK dari $x dan $y adalah = " .kpk($x,$y). "<br />";
	echo "FPB dari $x dan $y adalah = " .fpb($x,$y). "<br />";
	
?>