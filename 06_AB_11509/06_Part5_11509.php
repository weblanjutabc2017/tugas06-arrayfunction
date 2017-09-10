<?php
 	echo "Deret angka ganjil < 100 : <br/>";
 	for($gnjl=1;$gnjl<=100;$gnjl++){
 		if($gnjl %2 == 1){
 			echo $gnjl;
 			if($gnjl != 99){
 				echo " + " ;
 			}
 		}
 	}
 	
 	$jmlgnjl = 0;
 	for($x=1;$x<=100;$x++){
 		if($x % 2 == 1){
 			$jmlgnjl++;
 		}
 	}
 	
 	echo "<br/>";
 	echo "Jumlah = ".$jmlgnjl;
 	echo "<br/>";
 	
 	echo "Deret bilangan genap yang < 100 : <br/>";
 	for($gnp=1;$gnp<=100;$gnp++){
 		if($gnp %2 == 0){
 			echo $gnp;
 			if($gnp != 100){
 				echo " + " ;
 			}
 		}
 	}
 	
 	$jmlgnp = 0;
 	for($j=1;$j<=100;$j++){
 		if($j % 2 == 0){
 			$jmlgnp++;
 		}
 	}
 	
 	echo "<br/>";
 	echo "Jumlah = ".$jmlgnp;
 	echo "<br/>";
 ?>  