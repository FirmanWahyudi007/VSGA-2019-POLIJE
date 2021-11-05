<?php 
	//membuat array kosong
	$buah = array();
	$hobi = [
		"Membaca",
		"Menulis",
		"Ngeblog"
			];

	//membuat array sekaligus mengisinya
	$minuman = array("Kopi","Teh","Jus Jeruk");
	$makanan = ["Nasi Goreng","Soto","Bubur"];

	//membuat array dengan mengisi indeks tertentu
	$anggota[1] = "Komang";
	$anggota[2] = "Medi";
	$anggota[3] = "Usman";

	echo "<hr>";
	echo "<pre>";
	print_r($buah);
	echo "</pre>";
	echo "<hr>";
	echo "<pre>";
	print_r($hobi);
	echo "</pre>";
	echo "<hr>";
	echo "<pre>";
	print_r($minuman);
	echo "</pre>";
	echo "<hr>";
	echo "<pre>";
	print_r($makanan);
	echo "</pre>";
	echo "<hr>";
	echo "<pre>";
	print_r($anggota);
	echo "</pre>";
	echo "<hr>";
	$barang = ["Buku Tulis","Penghapus","Spidol"];

	for ($i=0; $i <count($barang) ; $i++) { 
		# code...
		echo $barang[$i]."<br>";
	}
	echo "<hr>";
	foreach ($barang as $isi) {
		# code...
		echo $isi."<br>";
	}
	echo "<hr>";
	$i = 0;
	while ($i < count($barang)) {
		# code...
		echo $barang[$i]."<br>";
		$i++;
	}		
	echo "<hr>";
	//Menghapus isi Array
	unset($minuman[1]);
	echo $minuman[0]."<br>";
	echo $minuman[1]."<br>";
	echo $minuman[2]."<br>";
	echo "<hr>";
	echo "<pre>";
	print_r($minuman);
	echo "</pre>";
	echo "<hr>";
	//Menambahkan isi Array
	$hobi[3] = "Ngoding";

	$hobi[] = "Olahraga";

	foreach ($hobi as $key) {
		# code...
		echo $key."<br>";
	}
	echo "<hr>";
 ?>