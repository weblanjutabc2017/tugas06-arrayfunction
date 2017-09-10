<?php
	$a = 8;
	$b = 2;
// FPB
	if ($b !=0){
		$c = $a % $b;
		$a = $b;
		$b = $c; 
		echo "Faktor Persekutuan Terbesar : " . $c;
	} else ($b = 0){
		return "$a";
	} 

// KPK
	$max = $a * $b;
	if ($a > $b) {
		$min = a;
	} else {
		$min = $b;
	}
	for ($i = $min; $i <= $max; $i++){
		if ((($i % $a) == 0) && (($i %$b) == 0)) {
			echo " KPK dari ".$a " dan " . $b " adalah " . $i;
			echo "<br />";
		}
	}
	
?>