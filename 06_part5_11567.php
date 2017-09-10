<?php
 
 	$ganjil = 0;
 
 	for ($ganjil = 0; $ganjil <= 100; $ganjil++){
 		if ($ganjil % 2 == 1){
 			$ganjil++;
 			echo "$ganjil";
 			echo "<br />";
		}
 	}
 	for ($ganjil = 1; $ganjil <= 100; $ganjil++){
 		$ganjil +=$ganjil;
 		
 	}
 	echo "Bilangan genap < 100 = " .$ganjil;
 
 	$genap = 0;
 	
 	for ($genap = 1; $genap < 100; $genap++){
 		if ($genap % 2 == 0){
 			$genap++;
 			echo "$genap";
 			echo "<br />";
 		}
 	}
 	for ($genap = 1; $genap < 100; $genap++){
 		$genap += $genap;
 		
 	}
 	echo "Bilangan ganjil < 100 = " .$genap;
 ?> 