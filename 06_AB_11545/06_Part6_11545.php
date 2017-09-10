<?php
	$angka1 = 0;
	$angka2 = 1;

	for ($i=0; $i<40; $i++){
		$output = $angka2 + $angka1;
		echo " $output";
  
		$angka1= $angka2;
		$angka2 = $output;
	}
?>