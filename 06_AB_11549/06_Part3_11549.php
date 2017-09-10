<?php
	function maks($a, $b){
		if($a>$b){
			echo $a;
		}
		else if($a==$b){
			echo "Angka sama.";
		}
		else{
			echo $b;
		}

		echo "<br>";
	}

	echo "Antara angka 3 dan 5, yang paling besar adalah: ";
	maks(3, 5);

	echo "Antara angka 7 dan 1, yang paling besar adalah: ";
	maks(7, 1);

	echo "Antara angka 6 dan 6, yang paling besar adalah: ";
	maks(6, 6);


?>