<!DOCTYPE html>
<html>
  <head>
    <style type="text/css">
      table, tr, td{
        border: 1px solid black;
        border-collapse: collapse;
        padding: 5px;
      }
    </style>
  </head>
  <body>
    <?php
      $mhs = array(
        array("Muhammad Rohman Irfanuddin", "16/401045/SV/11549", "AB", "Komsi"),
        array("Alif Zaini", "16/401046/SV/11548", "BB", "Komsi"),
        array("Kumala Kumal","16/401047/SV/11547", "AB", "Komsi"),
        array("Boby Saputra", "16/401048/SV/11546", "C1", "Komsi"),
        array("Zaky Darmawan", "16/401049/SV/11545", "AB", "Komsi"),
        array("Xenia Avanza", "16/401050/SV/11544", "BB", "Komsi"),
        array("Robin Roban", "16/401051/SV/11543", "AA", "Komsi"),
        array("Fahri Jahrul", "16/401052/SV/11542", "C2", "Komsi"),
        array("Kalang Kabut", "16/401053/SV/11541", "AB", "Komsi"),
        array("Muhammad Asegaf", "16/401054/SV/11540", "BB", "Komsi")
      );

      $jumlah_mahasiswa = count($mhs);

      sort($mhs);

      echo "<table style='border:1px solid black;'><tr><td><b>NIM</b></td><td><b>Nama [v]</b></td><td><b>Kelas</b></td><td><b>Jurusan</b></td></tr>";

      for($i=0; $i<$jumlah_mahasiswa; $i++){
        echo "<tr>";
          echo "<td>".$mhs[$i][1]."</td>";
          echo "<td>".$mhs[$i][0]."</td>";
          echo "<td>".$mhs[$i][2]."</td>";
          echo "<td>".$mhs[$i][3]."</td>";
        echo "</tr>";
      }

      echo "</table>";
    ?>
  </body>
</html>

