<?php
	function deret($x){
		$sumGanjil=0;
		$sumGenap=0;

		//Ganjil
		echo "Deret bilangan ganjil kurang dari $x<br>";
		
		for($i=1; $i<=$x; $i++){
			if($i%2!=0 && $i!=$x){
				echo $i;
				$sumGanjil+=$i;
				if($i<($x-2)) echo "+";
			}
		}
		echo "<br>";

		echo "Jumlah=".$sumGanjil."<br>";

		//Genap
		echo "Deret bilangan genap kurang dari $x<br>";
		
		for($i=1; $i<=$x; $i++){
			if($i%2==0 && $i!=$x){
				echo $i;
				$sumGenap+=$i;
				if($i<($x-2)) echo "+";
			}
		}
		echo "<br>";

		echo "Jumlah=".$sumGenap."<br>";
	}


	echo "Input = 10<br>";
	deret(10);

	echo "<br>";

	echo "Input = 11<br>";
	deret(11);
?>