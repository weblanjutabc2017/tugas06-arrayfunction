<?php
// Naqiya Zh-09459
	function fibo($jum) {
		$bil1 =0;
		$bil2=1;

		$jum = "$bil1 $bil2";

		for ($i=2; $i< $jum-2 ; $i++) { 
			# code...
			$bil3 = $bil2 + $bil1;
			$hasil = $hasil."$bil3";

			$bil1 = $bil2;
			$bil2 = $bil3;
		}
		return $hasil;
	}
	
	echo fibo (40);
?> 