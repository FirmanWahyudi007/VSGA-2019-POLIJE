<?php 
	$nama = $_POST['nama'];
			if ($nama == "") {
				# code..
				header("location:validasi.php?validasi=kosong");
			}else{
				echo "Nama Anda adalah". $nama;
			}
 ?>