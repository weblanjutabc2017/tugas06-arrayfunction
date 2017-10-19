<?php


	function deret_fibo($jumlah) {

		$angka_satu = 0;
 		$angka_dua = 1;

 		$hasil = "$angka_satu $angka_dua";
 
 		for ($i=2; $i < $jumlah-2; $i++){

 			$out = $angka_dua + $angka_satu;

 			$hasil = $hasil. "$out";

 			$angka_satu = $angka_dua;
 			$angka_dua = $out;
 		}
 		return $hasil;
 	}
 
 	echo deret_fibo (40);
 	echo "<br />";
?> 
