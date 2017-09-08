<?php
	echo "Deret bilangan ganjil kurang dari 100 : <br />";
	for ($ganjil = 1; $ganjil <= 100; $ganjil++) {
		if ($ganjil % 2 != 0) {
			echo $ganjil;
			if ($ganjil != 99){
				echo "+";
			}
		}
	}
	
	$bilganjil = 0;
	for ($i=1;$i<=100;$i++){
  		if ($i%2 != 0){
  			$bilganjil++;
		}
	}
	
	echo "<br />";
 	echo "Jumlah : ".$bilganjil;
	
	echo "<br />";
	echo "<br />";
	
	echo "Deret bilangan genap kurang dari 100 : <br />";
	for ($genap = 1; $genap <= 100; $genap++) {
		if ($genap % 2 == 0) {
			echo $genap;
			if ($genap != 100){
				echo "+";
			}
		 }
	}
	
	$bilgenap = 0;
	for ($i=1;$i<=100;$i++){
  		if ($i%2 == 0){
  			$bilgenap++;
		}
	}
	
	echo "<br />";
	echo "Jumlah : " . $bilgenap;

	

?>