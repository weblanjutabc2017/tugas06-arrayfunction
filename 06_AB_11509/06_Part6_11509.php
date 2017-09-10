<?php
	function fibo($jml) {

		$satu = 0;
 		$dua = 1;

 		$hasil = "$satu $dua";
 
 		for ($x=2; $x < $jml-2; $x++){

 			$out = $dua + $satu;

 			$hasil = $hasil. "$out";

 			$satu = $dua;
 			$dua = $out;
 		}
 		return $hasil;
 	}
 	echo fibo (40);
 	echo "<br />";
?> 