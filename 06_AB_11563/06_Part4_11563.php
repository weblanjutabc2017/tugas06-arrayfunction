<?php

function kpk($a, $b) {
	$a = (int) $a;
	$b = (int) $b;
	(int) $c = $a;
	
	while($c%$b !== 0) $c+=$a;
	
	return $c;
}

function fpb($a, $b) {
	$a = (int) $a;
	$b = (int) $b;
	
	while($b !== 0) {
		$c = $a%$b;
		$a = $b;
		$b = $c;		
	}
	
	return $a;
}

echo "KPK dari 3 dan 4 = " . kpk(3, 4);
echo "<br>";
echo "FPB dari 18 dan 45 = " . fpb(18, 45);


?>