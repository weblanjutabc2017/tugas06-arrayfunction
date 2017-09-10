<?php
	
	/*array("0", "1");

	for ($i=2; $i <100; $i++){
		$x[$i] = $x [$i-1] + [$i-2];
	}
	for ($i = 0; $i < n; $i++){
		echo "Bilangan Fibonacci : ". $x[$i]
	} */

	function deret_fibo($jumlah) {
		// membuat angka awal
		$angka_satu = 0;
		$angka_dua = 1;
		// menyimpan string angka
		$hasil = "$angka_satu $angka_dua";

		for ($i=2; $i < $jumlah-2; $i++){
			//menghitung angka fibonacci
			$out = $angka_dua + $angka_satu;
			// hasilnya ditambahkan ke $hasil
			$hasil = $hasil. "$out";
			//menyiapkan angka untuk perhitungan selanjutnya
			$angka_satu = $angka_dua;
			$angka_dua = $out;
		}
		return $hasil;
	}

	echo deret_fibo (40);
	echo "<br />";
?>