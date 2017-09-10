<?php
	echo "--------DATABASE MAHASISWA-------";
	
	function mhs($NIM, $Nama, $Kelas, $Prodi){
		echo "<br/ > NIM : $NIM, Nama : $Nama, Kelas : $Kelas, Prodi : $Prodi <br />";
	}	
			mhs(401005,"Aji", "A", "Komsi");
			mhs(401006,"Faustine", "B", "Elins");
			mhs(401007,"Anto", "C", "Metins");
			mhs(401008,"Rangga", "A", "Elektro");
			mhs(401009,"Anya", "B", "Tekjar");
			mhs(401010,"Aarin", "C", "Komsi");
			mhs(401011,"Shima", "A", "Elins");
			mhs(401012,"Kresna", "B", "Elektro");
			mhs(401013,"Nadya", "C", "Tekjar");
			mhs(401014,"Arfath", "A", "Komsi");
			
	arsort($Nama);
	Print_r(mhs);
?>