<?php 
	$artikel = [
		'judul' => "Belajar Pemograman PHP",
		'penulis' => "Digital Talent",
		'view' => "128" ];

	//mencetak isi array asosiatif
		echo "<h2>".$artikel['judul']."</h2>";
		echo "<p>Oleh : ".$artikel['penulis']."</p>";
		echo "<p>View : ".$artikel['view']."</p>";

	$email["subjek"] = "Ni Hao Ma ?";
	$email["pengirim"] = "GuanYu@dynastywarriors.jie";
	$email["isi"] = "Ogenki Desu Ka? Hisashiburi Dane";

	echo "<pre>";
	print_r($email);
	echo "</pre>";
 ?>