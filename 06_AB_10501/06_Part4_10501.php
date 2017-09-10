<?php
	$a = 3;
	$b = 7;
	
	function kpk($a, $b){
		$end = $a;
		while ($end % $b != 0){
			$end = $end + $a;
		}
		return $end;
	}
	
	function fpb($a, $b){
		while ($b != 0){
			$c = $a % $b;
			$a = $b;
			$b = $c;
		}
	
		$fpb = $a;
		return $fpb;
	}
	
	
	echo kpk($a, $b); echo "<br/>";
	echo fpb($a, $b);
?>