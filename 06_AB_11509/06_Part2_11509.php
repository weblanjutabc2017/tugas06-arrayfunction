<?php

	function name($fname= "Ahmad", $firstname){
	
	$name = $fname." ".$firstname;
	
	return $name;
}

echo "Berikut ini nama mahasiswa yang mempunyai nama depan Ahmad : <br />".name("Ahmad","Zakaria")."<br />".name("Ahmad","Latif")."<br />".name("Ahmad","Fadillah")."<br />";

?>