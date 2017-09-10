<?php
// Naqiya Zh-09459
echo "Bilangin ganjil < 100 : ";
for ($i=1; $i <= 100 ; $i++) { 
	# code...
	if ($i %2 == 1) {
		# code...
		echo "$i";
		if ($i != 99) {
			echo " + ";
			# code...
		}
	}
}

			$tmp=0;
			for ($j=1; $j<=100 ; $j++) { 
				# code...
				if ($j%2 == 1) {
					# code...
					$tmp++;
				}
			}
			echo "Jumlah ganjil : ".$tmp++;

echo "Bilangin genap < 100 : ";
for ($k=1; $k <= 100 ; $k+1) { 
	# code...
	if ($k %2 == 0) {
		# code...
		echo "$k";
		if ($k != 100) {
			echo " + ";
			# code...
		}
	}
}
	$tmp1=0;
			for ($l=1; $l<=100 ; $l+1) { 
				# code...
				if ($l%2 == 1) {
					# code...
					$tmp1++;
				}
			}
			echo "Jumlah genap : ".$tmp1++;


?> 