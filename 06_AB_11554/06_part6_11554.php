<?php
	function fibonacci($n){
		$x=0;
		$y=1;

		$hasil = "$x $y ";

		for($i=0;$i<$n-2;$i++){
			$fibo=$x+$y;
			$hasil =$hasil . "$fibo ";
			$x=$y;
			$y=$fibo;
		}
		return $hasil;
	}

	echo fibonacci(40);
?>