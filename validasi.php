<!DOCTYPE html>
<html>
<head>
	<title>Form Validasi</title>
</head>
<body>
	<?php 
		if (isset($_GET['validasi'])) {
			# code...
			if ($_GET['validasi'] == "kosong") {
				# code...
				echo "<h4 style='color:red'>Tolong Masukkan Nama</h4>";
			}
			
		}
	 ?>
	<form method="post" action="cek.php">
		<table>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
				<td><input type="submit" name="cek" value="cek"></td>
			</tr>
		</table>
	</form>
</body>
</html>