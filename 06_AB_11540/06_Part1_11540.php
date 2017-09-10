<?php
//menyimpan dalam array 2 dimensi
$mahasiswa = array(
array (11540,"Indra Wirawan Adhi Kusuma","ABC","KOMSI"),
array (11141,"Paska Anugrah A","ABC","KOMSI"),
array (11342,"Lana Nurona","ABC","KOMSI"),
array (11243,"Muh Rohman Irfanuddin","ABC","KOMSI"),
array (11344,"Devian Ramadhan","ABC","KOMSI"),
array (11443,"Ridwan Syahirul","ABC","KOMSI"),
array (11640,"Dimas H","ABC","KOMSI"),
array (11548,"Daniel Shiddiq","ABC","KOMSI"),
array (11540,"Salim Romadhon","ABC","KOMSI"),
array (11740,"Ariq Srihadi","ABC","KOMSI"),
array (11340,"Aji Setyo","ABC","KOMSI"),
array (11040,"Hafidz Taqiuddin","ABC","KOMSI")

);

for ($baris = 0; $baris <12; $baris++){
	echo "<p><b>  Data Mahasiswa ". $baris."</p></b>";
	echo "<ul>";
	for ($kol = 0; $kol <4; $kol++){
		echo "<li>" .$mahasiswa[$baris][$kol]."</li>";
	}
	echo "</ul>";
}
?>