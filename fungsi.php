<?php 
	//Prosedur
	function perkenalan()
	{
		# code...
		echo "Selamat Datang, ";
		echo "Pada Acara Digitalent ";
		echo  "2019 <br>";
	}

	perkenalan();

	function perkenalan1($nama,$salam)
	{
		# code...
		echo $salam.", ";
		echo "Perkenalkan, Nama Saya ".$nama."<br>";
		echo "Umur saya adalah ".hitungUmur(2019,2001)." Tahun <br>";
		echo "Selamat berkenalan dengan anda";
	}

	$aku = "Firman";
	$ucapanSalam = "Haloo";
	perkenalan1($aku,$ucapanSalam);
	echo "<hr>";
	//fungsi yang mengambalikan nilai
	function hitungUmur($thnSkrg,$thnLhr)
	{
		# code...
		$umur =  $thnSkrg - $thnLhr;
		return $umur;
	}

	$phi = 22.7;
	function lingkaran($r)
	{
		# code...
		global $phi;
		$luas = $phi*$r*$r;
		return $luas;
	}
	echo "Luas : ".lingkaran(7);


?>