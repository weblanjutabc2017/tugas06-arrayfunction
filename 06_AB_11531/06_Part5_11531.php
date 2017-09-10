<?php
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
	for($j=1;$j<=100;$j++){
		if($j % 2 == 1){
			$jumlahganjil++;
		}
	}
	
	echo "<br/>";
	echo "Jumlah = ".$jumlahganjil;
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
	for($n=1;$n<=100;$n++){
		if($n % 2 == 0){
			$jumlahgenap++;
		}
	}
	
	echo "<br/>";
	echo "Jumlah = ".$jumlahgenap;
	echo "<br/>";
?> 