<?php 
function name($fname = "Ahmad", $lname) 
{ 
	$name = $fname . " " . $lname;
    return $name ; 
} 
echo "Berikut ini nama mahasiswa yang mempunyai nama depan Ahmad: <br/>".  name("Ahmad", "Zakaria"). "<br/" .name("Ahmad", "Latif") . "<br/>" . name("Ahmad","Fadillah");   

?>