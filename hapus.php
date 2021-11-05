<?php 
	include 'db_mhs.php';
	$id_mhs = $_GET['id'];
	$hapus = mysqli_query($konek,"DELETE FROM mahasiswa WHERE id_mhs='$id_mhs'");
	if ($hapus) {
		# code...
		header("location:mahasiswa.php");
	}else{
		die('Koneksi Error : '.mysqli_connect_errno() 
   		.' - '.mysqli_connect_error());
	}
 ?>