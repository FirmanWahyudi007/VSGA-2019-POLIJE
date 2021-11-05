<?php 
	include 'koneksi.php';
	

	function Tambah($nama,$warna,$jmlh){
		global $konek;
		mysqli_query($konek,"insert into tb_barang values('','$nama','$warna','$jmlh')");
	}

	function tampil()
	{
		# code...
		global $konek;
		$data = mysqli_query($konek,"SELECT tb_barang.id_barang,nama_merk,jumlah,tb_warna.nama_warna FROM tb_warna,tb_barang WHERE tb_barang.warna=tb_warna.id_warna");
		while ($d = mysqli_fetch_array($data)) {
			# code...
			$out[] = $d;
		}
		return $out;
	}

	if (isset($_POST['tambah'])) {
		# code...
		$nama = $_POST['nama'];
		$warna = $_POST['warna'];
		$jmlh = $_POST['jmlh'];
		Tambah($nama,$warna,$jmlh);
	}
 ?>