<?php
	
	$mhs = array(
	array(11567, "Tomy", "ABC", "KOMSI"),
	array(11568, "Reza", "BB", "ELINS"),
	array(11569, "Bagas", "AB", "METINS"),
	array(11570, "Danang", "C", "ELEKTRO")
	);
	sort ($mhs);
	
	for($baris = 0; $baris < 4; $baris++){
		echo "<p><b> Mahasiswa $baris </p></b>";
		echo "<ul>";
		for($kol = 0; $kol < 4; $kol++){
			echo "<li>" . $mhs[$baris][$kol] . "</li>";
		}
		echo "</ul>";
	}
?>