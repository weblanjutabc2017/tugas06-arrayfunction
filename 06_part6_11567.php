<?php
	function deret_fibo($x) {
 		$p = 0;
 		$q = 1;
 		$hasil = "$p $q";
 
 		for ($i=2; $i < $x-2; $i++){
 			$out = $q + $p;
 			$hasil = $hasil. "$out";
 			$p = $q;
 			$q = $out;
 		}
 		return $hasil;
 	}
 
 	echo deret_fibo (60);
 	echo "<br />";
 ?> 