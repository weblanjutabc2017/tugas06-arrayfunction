<?php

/*
*
* Fungsi berikut tidak bagus karena dalam kasus ini
* parameter `$fname` tidak pernah digunakan untuk nama depan selain "Ahmad"
* selain itu fungsi berikut menggunakan method `echo` seharusnya `return`
*
* function name($fname = "Ahmad", $lname) {
* 	echo "$fname $lname <br/>";
* }
*
*/

function name($lname) {
	return "Ahmad " . $lname . "<br>";
}

echo "Berikut ini nama mahasiswa yang mempunyai nama depan Ahmad: <br>"; 
echo name("Zakaria");
echo name("Latif");
echo name("Fadillah");

?>