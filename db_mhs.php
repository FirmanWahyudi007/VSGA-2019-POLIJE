<?php 
	$server = "localhost";
	$user = "root";
	$pass = "";
	$db = "db_mhs";

	$konek = mysqli_connect($server, $user, $pass, $db);
	if ($konek) {
		# code...
		//echo "Koneksi Berhasil";
	}else{
		die("Koneksi Gagal Terhubung ".mysqli_connect_error($konek));
	}
 ?>