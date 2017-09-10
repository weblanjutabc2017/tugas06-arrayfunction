<?php
 	
	function fpb($x,$y){
 		while($y != 0){ 
 			$z = $x % $y ;
 			$x = $y ;
 			$y = $z ;
 			fpb = $x;
 		echo "Hasil FPB dari ". $x . " dan " . $y . " adalah " .fpb;
 		}
 		
 	function kpk($x,$y){ 
 		$z = $x ;
 		while($z%y != 0) ;
 			$z = $z + $x ;
 			kpk = $y; 
 		echo "Hasil KPK dari ". $x . " dan " . $y . " adalah " .kpk;
 	}
 	}
 	fpb(24,6);
 	kpk(99,30);
	
 ?> 