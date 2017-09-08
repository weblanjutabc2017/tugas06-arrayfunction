<?php
function name($fname = "Ahmad", $lname){
	$name = $fname . " " . $lname;
	return $name;
}

echo "Daftar nama mahasiswa dengan nama depan Ahmad: <br />" . name("Ahmad","Zakaria") . "<br />" . name("Ahmad","Latif") . "<br />" 
. name("Ahmad","Fadillah");

?>
