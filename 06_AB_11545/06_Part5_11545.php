<?php
	echo "Deret angka ganjil kurang dari 100 : " . "<br/>";
	for($odd = 1 ; $odd <= 100 ; $odd++){
		if($odd % 2 != 0){
			echo $odd;
			if ($odd != 99){
				echo "+";
			}
		}
	}
	$oddnumb = 0;
	for ($i = 1 ; $i <= 100 ; $i++){
		if($i%2!=0){
			$oddnumb += $i;
		}
	}
	
	echo "<br/>" . "Jumlah : " . $oddnumb . "<br/><br/>";
	
	echo "Deret angka genap kurang dari 100 : " . "<br/>";
	for($genap = 1 ; $genap <= 100 ; $genap++){
		if($genap % 2 == 0){
			echo $genap;
			if ($genap != 100){
				echo "+";
			}
		}
	}
	$angkagenap = 0;
	for ($j = 1 ; $j <= 100 ; $j++){
		if($j%2==0){
			$angkagenap += $j;
		}
	}
	
	echo "<br/>" . "Jumlah : " . $angkagenap . "<br/><br/>";
?>
	