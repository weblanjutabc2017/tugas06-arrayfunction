<?php

function fibonacci($index) {
	$index = (int) $index;
	if($index < 3) return 1;
	return fibonacci($index-1)+fibonacci($index-2);
}

echo fibonacci(7);

?>