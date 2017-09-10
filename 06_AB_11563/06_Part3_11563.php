<?php

function maks($a, $b) {
	if($a > $b) return $a;
	return $b;
}

echo maks(6, 10) 		. " &ndash; maks(6, 10);<br>";
echo maks(11, 11) 		. " &ndash; maks(11, 11);<br>";
echo maks(-10, -11) 	. " &ndash; maks(-10, -11);<br>";
echo maks(10, 9) 		. " &ndash; maks(10, 9);<br>";
echo maks(100, 100.5) 	. " &ndash; maks(100, 100.5);<br>";

?>