<?php 	
	if (isset($_POST['hitung'])) {
		# code...
		$angka1 = $_POST['angka1'] == "" ? 0 : $_POST['angka1'];
		$angka2 = $_POST['angka2'] == "" ? 0 : $_POST['angka2'];
		$bangun = $_POST['bangun'];

		function persegi($ang1,$ang2)
		{
			# code...
			$luas = $ang1*$ang2;
			return $luas;
		}

		function segitiga($angka1,$angka2)
		{
			# code...
			$luas = 0.5 * $angka1 * $angka2;
			return $luas;
		}

		function belahKetupat($angka1,$angka2)
		{
			# code...
			$luas = 0.5 * $angka1 * $angka2;
			return $luas;
		}
		echo "Angka 1 : ".$angka1."<br>";
		echo "Angka 2 : ".$angka2."<br>";
		if ($bangun == 1) {
			# code...
			echo "Luas Bangun Datar Persegi adalah : ". persegi($angka1,$angka2);
		}elseif ($bangun == 2) {
			# code...
			echo "Luas Bangun Datar Segitiga adalah : ". segitiga($angka1,$angka2);
		}elseif ($bangun ==  3) {
			# code...
			echo "Luas Bangun Datar Belah Ketupat adalah : ". belahKetupat($angka1,$angka2);
		}else {
			echo "Maaf Tidak Anda Belum Memilih Rumus";
		}
	}else{
		echo "Silahkan Input Terlebih Dahulu";
	}

 ?>