<?php 
	$mahasiswa = array
	(
	array("Paska",23343,"A","TekInformasi"),
	array("Vicky",24356,"A","Kimia"),
	array("Indra",12456,"C","ilkom"),
	array("Hana",23111,"B","Geofisika"),
	array("Kukup",22343,"BB","Biologi"),
	array("Arum",43213,"E","Fisika"),
	array("Jaka",21187,"F","Sejarah"),
	array("Nedin",23765,"AA","Rekmed"),
	array("Hanifa",45655,"BC","Filsafat"),
	array("Didid",25865,"AC","Elektro"),
	array("Lintang",31675,"AB","BahasaJepang")
	);

	sort($mahasiswa);

	for($i = 1; $i <= 10; $i++){
		echo "<b> Mahasiswa $i </b>";
		for($j = 0; $j < 4;$j++){
			echo "<li>" . $mahasiswa[$i][$j] . "</li>";
		}
	}
?>