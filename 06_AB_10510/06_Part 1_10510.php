<?php
	
	//$mahasiswa = array ($nim, $nama, $kelas, $prodi = "Komsi")

	sort ($mahasiswa);
	$mahasiswa = array 
	(
	array ("423523" , "Qian", "B", "KOMSI"),
	array ("423856" , "Shin", "B", "KOMSI"),
	array ("423890" , "Beam", "B", "ELINS"),
	array("423123" , "Bass", "B", "ELINS"),
	array ("423865" , "Kim", "B", "ELINS" ),
	array ("423865" , "Kim", "B", "ELINS" ),
	array ("423564" , "Linlin", "B","KOMSI"),
	array ("423032" , "Puff", "B", "ELINS"),
	array ("423319" , "Naul", "B", "ELINS"),
	array ("423563" , "Nath", "B","KOMSI" ),
	array ("423809" , "Phana", "B", "ELINS"),
	array ("423756" , "Kit", "B", "ELINS"),
	array ("423724" , "Longguo", "B", "KOMSI")
	);

	for ($baris = 0; $baris <14; $baris++){
		echo "<p><b> Data mahasiswa : $baris </p></b>";
		echo "<ul>";
		for ($col = 0; $col <5; $col++){
		echo "<li>" . $mahasiswa [$baris][$col];."</li>"; 
		}
			echo "</ul>";
	}

	
?>