<?php
	$namaMahasiswa = array(
	
		array("13345", "Adnan Saleh Latukau", "C", "Pariwisata"),
		array("13545", "Faza Hadiyan", "A", "Teknik Mesin"),
		array("11345", "Jaka Satria", "A", "Teknik Industri"),
		array("11545", "Muhamad Devian Ramadhan", "A", "Komsi"),
		array("11535", "Muhammad Alfin Nur Rahman", "C", "PJSIG"),
		array("12545", "Raihan Azzahra", "B", "Hukum"),
		array("11515", "Rifal Ahmad", "A", "Komsi"),
		array("11525", "Salsabila Rizky Septinia Sari", "B", "Manajemen"),
		array("11645", "Tia Tri Septira", "C", "Arsitektur"),
		array("11945", "Tubagus Muhammad Ricky Ikhsan", "B", "Ilmu Komunikasi")
	);
	
	asort($namaMahasiswa);
	
	for($bar = 0 ; $bar < 10 ; $bar++){
		echo "<p><b>" . "Mahasiswa " . $bar . "</p></br>";
		echo "<ul>";
		for($kol = 0 ; $kol < 4 ; $kol++){
			echo "<li>" . $namaMahasiswa[$bar][$kol] . "</li>";
		}
		echo "</ul>";
	}
?>