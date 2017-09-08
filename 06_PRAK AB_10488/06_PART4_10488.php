<?php
	//function menentukan FPB 2 bil. maka panggil fungsi gcf atau fpb(angka1,angka2): 
	function fpb($a,$b){
		return ($b == 0) ? ($a):( fpb($b, $a % $b) );
	}
	//utk menentukan KPK 2 bil. maka panggil fungsi lcm atau kpk(angka1,angka2): 
	function kpk($a,$b){
		return ($a / fpb($a,$b)) * $b;
	}
	echo "KPK dari 12 dan 20 adalah = " .kpk(12,20). "<br />";
	echo "FPB dari 12 dan 20 adalah = " .fpb(12,20). "<br />";
	

?>