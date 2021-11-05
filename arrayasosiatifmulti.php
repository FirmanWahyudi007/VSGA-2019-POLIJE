<?php 
	$artikel = [
		[
			"judul" => "Belajar PHP & MySQL Untuk Pemula",
			"penulis" => "Digital Talent"
		],
		[
			"judul" => "Belajar PHP dari Nol hingga Mahir",
			"penulis" => "Digital Talent"
		],
		[
			"judul" => "Membuat Aplikasi Web dengan PHP",
			"penulis" => "Digital Talent"
		]
	];

	//menampilkan array
	foreach ($artikel as $isi) {
		# code...
		echo "<h2>".$isi['judul']."</h2>";
		echo "<p>".$isi['penulis']."</p>";
		echo "<hr>";
	}
 ?>