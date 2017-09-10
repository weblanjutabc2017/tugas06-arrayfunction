<?php
	function fibo($x){
		$a=0;
		$b=1;
		$sum=0;

		for($i=1; $i<=$x; $i++){
			$c = $a+$b;
			echo $a."<br>";

			$sum+=$b;

			$a=$b;
			$b=$c;
		}

		echo "Dengan jumlah = ".($sum-$a);
	}

	echo "Deret Fibonacci dari 40 adalah:<br>";

	fibo(6);
?>