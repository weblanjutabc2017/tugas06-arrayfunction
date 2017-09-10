<?php
	$gan = array(1);
	$gen = array(1);
	
	function deret_ganjil($input){
		$tmp1 = 0;
		$ins1 = 0;
		for ($i = 1;$i <= $input;$i++){
			if ($i % 2 != 0){
				$gan[$ins1] = $i;
				$ins1++;
				echo $gan[$ins1];
			}
		}
		for ($i = 0;$i < $ins1;$i++){
			$tmp1 += $gan[$i];
		}
		return $tmp1;
	}
	
	function deret_genap($input){
		$tmp2 = 0;
		$ins2 = 0;
		for ($i = 1;$i <= $ins2;$i++){
			if ($i % 2 == 0){
				$gen[$ins2] = $i;
				$ins2++;
				echo $gen[$ins2];
			}
		}
		for ($i = 0;$i < $ins2;$i++){
			$tmp2 += $gen[$i];
		}
		return $tmp2;
	}
	
	echo deret_genap(20); echo "<br/>";
	//echo deret_ganjil(20);
	
?>