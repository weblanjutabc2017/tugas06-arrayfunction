<!DOCTYPE html>
<html>
<body>

<?php
$mahasiswa = array
(
  array("Naqiya Zorahima", 09459,"B","Komsi"),
  array("Rosma Wardayunarya", 02356,"B","Komsi"),
  array("Fadhilah Herawati",08057, "B","Komsi"),
  array("Ridwan Afwan Karim",09065, "B","Komsi"),
  array("Daniel Tri Widyatmoko",04590, "A","Komsi"),
  array("Izul Fanriza",05886, "A","Komsi"),
  array("Zendry Pratama",09503,"B","Komsi"),
  array("Nabila Ardhiana",02949, "A","Komsi"),
  array( "Yulia Indah","B",02508,"Komsi"),  
  array("Zorahima",08420, "B","Komsi")

  );
for ($row = 0; $row < 10; $row++) {
  echo "<p><b> Mahasiswa  $row</b></p>";
  
  echo "<ul>";
  for ($col = 0; $col <= 3; $col++) {
  echo "<li>".$mahasiswa[$row][$col]."</li>";
  }
  sort($mahasiswa);
  echo "</ul>";
}
?>

</body>
</html>