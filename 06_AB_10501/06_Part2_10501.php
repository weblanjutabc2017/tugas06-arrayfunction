<?php
function name($lname, $fname = "Ahmad")
{
 return "$fname $lname";
}
echo "Berikut ini nama mahasiswa yang mempunyai nama depan Ahmad: <br/>";
echo name("Zakaria"); echo "<br/>";
echo name("Latif"); echo "<br/>";
echo name("Fadillah");  echo "<br/>";
?>