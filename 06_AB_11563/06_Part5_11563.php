<?php

function deretGanjil($limit) {
	if($limit < 2) $limit = 2;
	$count = 1;
	$output = "Deret bilangan ganjil kurang dari " . $limit . "<br>";
	$output .= "1";
	for($i=3; $i<$limit; $i+=2) {
		$count+=$i;
		$output .= "+" . $i;
	}
	$output .= "<br>";
	$output .= "Jumlah = " . $count . "<br>";
	return $output;
}

function deretGenap($limit) {
	if($limit < 3) $limit = 3;
	$count = 2;
	$output = "Deret bilangan genap kurang dari " . $limit . "<br>";
	$output .= "2";
	for($i=4; $i<$limit; $i+=2) {
		$count+=$i;
		$output .= "+" . $i;
	}
	$output .= "<br>";
	$output .= "Jumlah = " . $count . "<br>";
	return $output;
}

echo deretGanjil(10);
echo "<br>";
echo deretGenap(10);

?>