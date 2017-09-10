<?php
	$a = 10;
	$fibo = array(1,1);
	
	for($i = 2;$i < $a;$i++){
		$fibo[$i] = $fibo[$i-1] + $fibo[$i-2];
	}
	
	echo $fibo[$a-1];
?>