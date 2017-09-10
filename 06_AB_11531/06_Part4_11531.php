<?php
	function fpb($a,$b){
		while ($b != 0){ 
			$c = $a % $b ;
			$a = $b ;
			$b = $c;
			fpb = $a;
		echo "FPB dari ". $a . " dan " . $b . " adalah " .fpb;
		};
		
	function kpk($a, $b){ 
		$c = $a ;
		while  ($c % b != 0) ;
			$c = $c + $a ;
			kpk =  $c; 
		echo "KPK dari ". $a . " dan " . $b . " adalah " .kpk;
	};
	
	fpb(15,18);
	kpk(6,7);
?>