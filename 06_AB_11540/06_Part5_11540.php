<?php
	$sum=0;
 	echo "Deret bilangan ganjil kurang dari 100 : <br/>";
 	for($ganjil=1;$ganjil<=100;$ganjil++){
 		if($ganjil %2 == 1){
 			echo $ganjil;
 			if($ganjil != 99){
 				echo " + " ;
 			}
 		}
 	}
 	
 	$jumlahganjil = 0;
 	for($a=1;$a<=100;$a++){
 		if($a % 2 == 1){
 			$jumlahganjil++;
			$jumlahganjil=$jumlahganjil+$a;
 		}
 	}
 	
 	echo "<br/>";
 	echo "Jumlah = ".$jumlahganjil=$jumlahganjil+$a;
 	echo "<br/>";
	
	
 	echo "Deret bilangan genap kurang dari 100 : <br/>";
 	for($genap=1;$genap<=100;$genap++){
 		if($genap %2 == 0){
 			echo $genap;
 		if($genap != 100){
 				echo " + " ;
 			}
 		}
 	}
 	
 	$jumlahgenap = 0;
 	for($b=1;$b<=100;$b++){
 		if($b % 2 == 0){
			$jumlahgenap++;
			$jumlahgenap=$jumlahgenap+$b;
 		}
 	}
 	
 	echo "<br/>";
 	echo "Jumlah = ".$jumlahgenap=$jumlahgenap+$b;
 	echo "<br/>";
 ?>  