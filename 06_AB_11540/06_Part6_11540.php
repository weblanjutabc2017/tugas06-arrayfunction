<?php
 $angka_sebelumnya=0;
 $angka_setelahnya=1;
   
 echo "Deret Fibonaccinya adalah ";
 echo "<br />";
 echo "$angka_sebelumnya $angka_setelahnya";
  
 for ($i=0; $i<40; $i++){
   $fibonacci = $angka_setelahnya + $angka_sebelumnya;
   

   echo " $fibonacci";
   
    
    $angka_sebelumnya = $angka_setelahnya;
	$angka_setelahnya = $fibonacci;
 }
  
 
 ?> 