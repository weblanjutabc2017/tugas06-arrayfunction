<?php
	
	$mhs = array
	(
	"Ariq" => array("001", "B", "Komsi"),
	"Kira" => array("002", "B", "Komsi"),
	"Akira" => array("003", "B", "Elins"),
	"An" => array("004", "A", "Komsi"),
	"Yuuki" => array("005", "C", "RekMed"),
	"Tango" => array("006", "AB", "Mesin"),
	"Malika" => array("007", "C1", "Pertanian"),
	"Bango" => array("008", "A", "Pertanian"),
	"Kedelai Hitam" => array("009", "C", "Komsi"),
	"TEST" => array("010", "BB", "Komsi"),
	);
	
	ksort($mhs);
	
	/*
	for ($i = 0;$i < 10;$i++){
		echo "<p><b>Mahasiswa $i+1</p></b>";
		echo "<ul>";
		for ($j = 0;$j < 4;$j++){
			echo "<li>".$mhs[$i][$j]."</li>";
		}
		echo "</ul>";
	}
	*/
	foreach ($mhs as $i => $i_value){
		echo $i."<br/>";
		for ($z = 0;$z < 3;$z++){
			echo $i_value[$z]."<br/>";
		}
		echo "<br/>";
	}
	
?>