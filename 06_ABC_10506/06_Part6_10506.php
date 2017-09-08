<?php

	$angka_sebelumnya=0;
	$angka_sekarang=1;

	echo "$angka_sebelumnya $angka_sekarang";
	 
	for ($i=0; $i < 40; $i++){
	  $fibo = $angka_sekarang + $angka_sebelumnya;
	  
	  echo " $fibo";

	  $angka_sebelumnya = $angka_sekarang;
	  $angka_sekarang = $fibo;
	}

?>