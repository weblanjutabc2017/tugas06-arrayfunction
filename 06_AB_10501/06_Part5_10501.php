<?php
	$genap = array();
	$ganjil = array();
	$input = 10;
	$tmp = 0;
	$temp = 0;
	$tmp1 = 0;
	$temp1 = 0;
	
	//for genap TEMP
	for ($i = 1; $i < $input; $i++){
		if ($i % 2 == 0){
			$genap[$tmp] = $i;
			$tmp++;
		}
	}
	
	//for ganjil TEMP
	for ($i = 1; $i < $input; $i++){
		if ($i % 2 != 0){
			$ganjil[$tmp1] = $i;
			$tmp1++;
		}
	}
	
	$test = count($genap);
	$test1 = count($ganjil);
	
	//for genap TEMP
	for ($i = 0; $i < $test; $i++){
		$temp = $temp + $genap[$i];
	}
	
	//for ganjil TEMP
	for ($i = 0; $i < $test1; $i++){
		$temp1 = $temp1 + $ganjil[$i];
	}
	
	echo "Deret bilangan genap kurang dari $input = ".$temp; echo "<br/>";
	echo "Deret bilangan ganjil kurang dari $input = ".$temp1;
	
?>