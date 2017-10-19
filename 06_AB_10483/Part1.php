//Nama: Daniel Siddiq
//NIM : 16/396270/SV/10483
<?php

	echo "--------Data Mahasiswa-------"
	
	function mahasiswa($NIM, $Nama, $Kelas, $Prodi){
		echo "NIM : $NIM, Nama : $Nama, Kelas : $Kelas, Prodi : $Prodi <br />";
	}	
			mahasiswa(01,"Robeat", "B", "Komunikasi");
			mahasiswa(02,"Radkill", "AA", "Perikanan");
			mahasiswa(03,"Jmbx", "C2", "Kelautan");
			mahasiswa(04,"Alem", "C1", "Ilkomp");
			mahasiswa(05,"Aldabx", "AB", "Pariwisata");
			mahasiswa(06,"Napom", "BB", "Sosiologi");
			mahasiswa(07,"Sasuke", "D", "Filsafat");
			mahasiswa(08,"Naruto", "AD", "Pemerintahan");
			mahasiswa(09,"Sakura", "C", "Medis");
			mahasiswa(10,"Kakasi", "VIP", "Komsi");
			
	arsort($Nama);
	Print_r(mahasiswa);
	
	}
?>
