<?php
	function maks($a, $b){
		if($a>$b){
			$x = $a;
		}elseif($a<$b){
			$x=$b;
		}else{
			$x="sama";
		}
		return $x;
	}

	echo maks(100,323);

?>