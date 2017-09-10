<?php
	echo "Data Mahasiswa sebelum diurutkan : <br>";

	function mahasiswa($NIM, $Nama, $Kelas, $Prodi){
		echo "NIM : $NIM, Nama : $Nama, Kelas : $Kelas, Prodi :$Prodi <br ?> ";
	}
	
		mahasiswa(01,"Ana","A","Komsi");
		mahasiswa(02,"Ani","A","Elins");
		mahasiswa(03,"Beni","A","Metins");
		mahasiswa(04,"Candra","A", "Elektro");
		mahasiswa(05,"Deni","A", "Jaringan");
		mahasiswa(06,"Egi","B","Komsi");
		mahasiswa(07,"Fani","B","Elins");
		mahasiswa(08,"Gilang","B","Metins");
		mahasiswa(09,"Hilman","B","Elektro");
		mahasiswa(10,"Joni","B", "Jaringan");

	arsort($Nama);
	print_r(mahasiswa);
	}
?>