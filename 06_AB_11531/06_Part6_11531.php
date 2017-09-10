<?php
$angka_sebelum=0;
$angka_sekarang=1;
  
echo "$angka_sebelum $angka_sekarang";
 
for ($i=0; $i<40; $i++){
  $fibonacci = $angka_sekarang + $angka_sebelum;
  echo " $fibonacci";
  
  $angka_sebelum = $angka_sekarang;
  $angka_sekarang = $fibonacci;
}
 

?>