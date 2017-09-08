<?php
 
 	$angka_pertama=0;
 	$angka_lanjut=1;
 
 	echo "$angka_pertama $angka_lanjut";
 	 
 	for ($i=0; $i < 40; $i++){
 	  $fibo = $angka_pertama + $angka_lanjut;
 	  
 	  echo " $fibo";
 
 	  $angka_pertama = $angka_lanjut;
 	  $angka_pertama = $fibo;
 	}
 
 ?> 