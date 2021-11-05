<?php 
	//buka file
	$file = fopen("welcome.txt","r");
	//baca file
	echo fgets($file);
	//tutup file
	fclose($file);
 ?>