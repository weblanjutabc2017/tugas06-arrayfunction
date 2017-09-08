<?php 
//menyimpan dalam array 2 dimensi
$mahasiswa = array
(
array("ayu",10488,"ABC","Komsi"),
array("rendra",10034,"AA","sasnus"),
array("indra",12456,"C","ilkom"),
array("alvin",11234,"CC","kimia"),
array("kevin",12566,"BB","Biologi"),
array("arum",14564,"AC","Fisika"),
array("mery",10987,"FF","Sejarah"),
array("ita",10765,"AA","Rekmed"),
array("tia",12387,"BC","teknik kimia"),
array("fany",10865,"AC","teknik nuklir"),
array("enggar",11675,"AB","tekjar")
);
sort($mahasiswa);

for($baris = 0; $baris < 10; $baris++){
	echo "<p><b> Mahasiswa $baris </p></b><br />";
	echo "<ul>";
	for($kol = 0; $kol < 4;$kol++){
		echo "<li>" . $mahasiswa[$baris][$kol] . "</li>";
	}
	echo "</ul>";
}
?>