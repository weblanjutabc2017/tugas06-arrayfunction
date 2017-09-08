<?php

	$mahasiswa = array(
		array("Regyta",10506,"ABC","Komsi"),
		array("Dhea",10304,"AB","Komsi"),
		array("Effendi",10392,"A","Elins"),
		array("Nanda",10323,"AA","Metins"),
		array("Sheena",10210,"BB","Tekjar"),
		array("Mulan",10230,"C1","Elektro"),
		array("Yayas",10328,"B","Elins"),
		array("Putri",10231,"C2","Elins"),
		array("Mangi",10312,"C","Komsi"),
		array("Clara",12032,"AC","Metins")
	);
	sort ($mahasiswa);
	
	for($baris = 0; $baris < 10; $baris++){
		echo "<p><b> Mahasiswa $baris </p></br>";
		echo "<ul>";
		for($kol = 0; $kol < 4; $kol++){
			echo "<li>" . $mahasiswa[$baris][$kol] . "</li>";
		}
		echo "</ul>";
	}
	
?>