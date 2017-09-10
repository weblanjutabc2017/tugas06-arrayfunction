<?php
	function kpk($a, $b) {
	 	$c = $a;
	 	while($c%$b !== 0) {
	 		$c+=$a;
	 	}
	 	return $c;
	}
 
	function fpb($a, $b) {
	 	while($b !== 0) {
	 		$c = $a%$b;
	 		$a = $b;
	 		$b = $c;		
		}	 	
		return $a;
	}
 
	echo "KPK dari 7 dan 10 = " . kpk(7, 10);
	echo "<br>";
	echo "FPB dari 81 dan 900 = " . fpb(81, 900);
?>