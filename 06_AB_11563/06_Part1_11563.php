<style>
	table, tr, th, td {
		border: 1px solid;
		border-collapse: collapse;
		text-align: inherit;
	}
</style>
<?php

$mahasiswa = [
	"Salim"		=> ["11563", "A", "Komsi"],
	"Romadhon"	=> ["36511", "A", "Ilkom"],
	"Anisa"		=> ["12345", "B", "Manajemen"],
	"Nurul"		=> ["54321", "C", "Ekonomi"],
	"Hanum"		=> ["11111", "A", "Sastra Indonesia"],
	"Ihya"		=> ["22222", "B", "Hukum"],
	"Restia"	=> ["33333", "C", "Ekonomi"],
	"Endah"		=> ["55555", "B", "Geografi"],
	"Ino"		=> ["10101", "A", "Akuntansi"],
	"Elsa"		=> ["35422", "A", "Manajemen"]
];

function toTable($array) {
	if(is_array($array)) {
		ksort($array);
		$output = "<table>";
		$output .= "<tr>";
		$output .= "<th>Nama</th>";
		$output .= "<th>NIM</th>";
		$output .= "<th>Kelas</th>";
		$output .= "<th>Prodi</th>";
		$output .= "</tr>";
		foreach($array as $key => $value) {
			$output .= "<tr>";
			$output .= "<td>" . $key . "</td>";
			$output .= "<td>" . $value[0] . "</td>";
			$output .= "<td>" . $value[1] . "</td>";
			$output .= "<td>" . $value[2] . "</td>";
			$output .= "</tr>";
		}
		$output .= "</table>";
		return $output;
	}
}

echo toTable($mahasiswa);

?>