<?php
 	//FPB;
 	function fpb($a, $b) {
 	  return ( $b == 0 ) ? ($a):( fpb($b, $a % $b) );
 	}
 	//KPK;
 	function kpk($a, $b) {
 	  return ( $a / fpb($a,$b) ) * $b;
 	}
 	
 	echo "KPK dari 12 dan 40 adalah ".kpk(12,40)."<br/>";
 	echo "FPB dari 12 dan 40 adalah ".fpb(12,40)."<br/>";
 	
 ?> 