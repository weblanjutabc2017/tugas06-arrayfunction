<?php
	function name($lname){
		$fname = "Ahmad";

		$namaLengkap = $fname." ".$lname."<br>";

		return $namaLengkap;
	}

	echo "Berikut ini nama mahasiswa yang mempunyai nama depan Ahmad: <br/>";
	echo name("Zakaria");
	echo name("Latif");
	echo name("Fadillah");
?>