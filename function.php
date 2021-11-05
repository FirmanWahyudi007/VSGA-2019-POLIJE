<?php 
	$jumlah = 20;
	echo "Tek Kotek Kotek Kotek <br>";
	echo "Anak ayam berkotek <br><br>";

	$anak = " Anak Ayam Turunnya ";
	$induk = " Mati Satu Induknya ";
	for ($i=$jumlah; $i>=1 ; $i--) { 
		# code...
		echo $anak.$i."<br>";
		$n = $i-1;
		if ($n == 0) {
			# code...
			echo "Mati Satu Tinggal Induknya";
		}else{
			echo $induk.$n."<br><br>";
		}

	}
 ?>