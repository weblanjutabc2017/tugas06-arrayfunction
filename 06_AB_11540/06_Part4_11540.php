<?php
  	//FPB;
  	function fpb($a, $b) {
  	  return ( $b == 0 ) ? ($a):( fpb($b, $a % $b) );
  	}
  	//KPK;
  	function kpk($a, $b) {
  	  return ( $a / fpb($a,$b) ) * $b;
  	}
  	
  	echo "hasil KPK  adalah ".kpk(60,36)."<br/>";
  	echo "hasil FPB  adalah ".fpb(60,36)."<br/>";
  	
  ?>  