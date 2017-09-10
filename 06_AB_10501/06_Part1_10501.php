<?php
	
	$mhs = array
	(
	array("001", "Ariq", "B", "Komsi"),
	array("002", "Kira", "B", "Komsi"),
	array("003", "Akira", "B", "Elins"),
	array("004", "Ann", "A", "Komsi"),
	array("005", "Yuuki", "C", "RekMed"),
	array("006", "Tango", "AB", "Mesin"),
	array("007", "Malika", "C1", "Pertanian"),
	array("008", "Bango", "A", "Pertanian"),
	array("009", "Kedelai Hitam", "C", "Komsi"),
	array("010", "Hifumin", "BB", "Komsi"),
	);
	
	for ($i = 0;$i < 10;$i++){
		echo "<p><b>Mahasiswa $i+1</p></b>";
		echo "<ul>";
		for ($j = 0;$j < 4;$j++){
			echo "<li>".$mhs[$i][$j]."</li>";
		}
		echo "</ul>";
	}
	
?>