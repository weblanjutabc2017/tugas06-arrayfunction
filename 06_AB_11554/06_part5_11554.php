<?php
	function deret($x){
		$sum=0;

		echo "Deret bilangan Ganjil kurang dari $x <br>";
		for ($i=0;$i<$x;$i++){
			if($i%2==1 && $i!=$x-1){
				echo "$i+";
				$sum=$sum+$i;
			}elseif ($i%2==1 && $i==$x-1){
				echo"$i <br>";
				$sum=$sum+$i;
			}
		}
		echo "Jumlah=$sum <br> <br>";

		$suma=0;

		echo "Deret bilangan Genap kurang dari $x <br>";
		for ($j=0;$j<$x;$j++){
			if($j%2==0 && $j!=$x-2 && $j!=0){
				echo "$j+";
				$suma=$suma+$j;
			}elseif ($j%2==0 && $j==$x-2){
				echo"$j <br>";
				$suma=$suma+$j;
			}
		}
		echo "Jumlah=$suma";
	}

	echo deret(100);
?>