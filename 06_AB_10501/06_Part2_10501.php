<?php
function name($fname = "Ahmad", $lname)
{
 return $fname;
}
echo "Berikut ini nama mahasiswa yang mempunyai nama depan Ahmad: <br/>";
echo name(null, "Zakaria");
echo name(null, "Latif");
echo name(null, "Fadillah");
?>