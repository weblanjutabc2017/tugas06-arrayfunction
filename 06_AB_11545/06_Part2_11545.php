<?php
	function nama($namaDepan= "Ahmad", $firstname){
		$nama = $namaDepan . " " . $firstname;
		return $nama;
	} 
	
	echo "Berikut ini merupakan nama mahasiswa yang mempunyai nama depan Ahmad : </br></br>" .
			"<li>".nama("Ahmad","Zakaria")."</li>".
			"<li>".nama("Ahmad","Latif")."</li>".
			"<li>".nama("Ahmad","Fadillah")."</li>";
			
?>