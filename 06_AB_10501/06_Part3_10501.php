<?php
	function maks($a, $b){
		if ($a > $b){
			return "$a <br/>";
		}
		else if ($a < $b){
			return "$b <br/>";
		}
		else {
			return "Sama <br/>";
		}
	}
	
	echo maks(4, 4);
	echo maks(5, 6);
?>