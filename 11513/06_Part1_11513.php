<?php

	echo "--------Data Mahasiswa-------"
	
	function mahasiswa($NIM, $Nama, $Kelas, $Prodi){
		echo "NIM : $NIM, Nama : $Nama, Kelas : $Kelas, Prodi : $Prodi <br />";
	}	
			mahasiswa(01,"Lana", "AB", "Komsi");
			mahasiswa(02,"LanLan", "A", "Elins");
			mahasiswa(03,"Niko", "C", "Elins");
			mahasiswa(04,"Dimas", "B", "Komsi");
			mahasiswa(05,"Harya", "B", "Metins");
			mahasiswa(06,"Herry", "BB", "Elins");
			mahasiswa(07,"Susanto", "D", "Elektro");
			mahasiswa(08,"Nita", "D", "Elektro");
			mahasiswa(09,"Lina", "C", "Jaringan");
			mahasiswa(10,"Lukman", "D", "Elektro");
			
	arsort($Nama);
	Print_r(mahasiswa);
	
	}
?>