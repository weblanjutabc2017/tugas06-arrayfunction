<?php
 	function fpb($bil1, $bil2) 
 	{
 		while ($bil2 != 0) {
 		 	# code...
 		 	$bil3 = $bil1 % $bil2;
 		 	$bil1 = $bil2;
 		 	$bil2 = $bil3;
 		 	fpb = $bil1;
 		 	 	echo "FPB dari".$bil1." dan".$bil2."adalah ".fpb."<br/>";
 		 } 
 		}
 		 

 	function kpk($bil1, $bil2) {
 		$bil3 = $bil1;
 		while ( $bil3 % $bil2 != 0);
 		$bil3 = $bil3 + $bil1;
 		kpk = $bil3;
 		 	echo "KPK dari".$bil1." dan".$bil2."adalah ".kpk."<br/>";

 	}


 	

 	
 	FPB(24,60);
 	KPK(24,60);
 	
 ?>