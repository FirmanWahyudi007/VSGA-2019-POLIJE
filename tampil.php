<?php 	
		if (isset($_POST['tambah'])) {
			# code...
			$nama = $_POST['nama'];
			$tempat = $_POST['tempat'];
			$tgl = $_POST['tgl'];
			$jk = $_POST['jk'];
			$alt = $_POST['alamat'];

			function tampil($nama,$tempat,$tgl,$jk,$alt)
			{
				# code...
				echo "Nama: ".$nama."<br>";
				echo "Tempat : ".$tempat."<br>";
				echo "Tanggal Lahir : ".$tgl."<br>";
				echo "Jenis Kelamin : ".$jk."<br>";
				echo "Alamat : ".$alt."<br>";
			}

			tampil($nama,$tempat,$tgl,$jk,$alt);
		}
 ?>