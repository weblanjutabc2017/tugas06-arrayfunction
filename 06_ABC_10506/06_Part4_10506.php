<?php
	//untuk menentukan FPB 2 bilangan maka panggil fungsi gcf(angka1, angka2);
	function fpb($a, $b) {
	  return ( $b == 0 ) ? ($a):( fpb($b, $a % $b) );
	}
	//untuk menentukan KPK 2 bilangan maka panggil fungsi lcm(angka1, angka2);
	function kpk($a, $b) {
	  return ( $a / fpb($a,$b) ) * $b;
	}
	
	echo "KPK dari 12 dan 20 adalah ".kpk(12,20)."<br/>";
	echo "FPB dari 12 dan 20 adalah ".fpb(12,20)."<br/>";
	
?>