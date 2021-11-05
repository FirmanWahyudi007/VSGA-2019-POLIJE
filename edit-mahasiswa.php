<?php 
	include 'db_mhs.php';
	$id = $_GET['id'];
	$mhs = mysqli_query($konek,"select * from mahasiswa where id_mhs='$id'");
	$row = mysqli_fetch_array($mhs);

	$jurusan = array('TEKNIK INFORMATIKA','TEKNIK MESIN','TEKNIK FISIKA');
	$agama = array('Islam','Kristen','Hindu','Budha','Khonghucu');

	function active_radio_button($value,$input){
		$result = $value==$input?'checked':'';
		return $result;
	}
	if (isset($_POST['update'])) {
		# code...
		// menyimpan data kedalam variabel
		$id_mhs   = $_POST['id_mhs'];
		$nim            = $_POST['nim'];
		$nama           = $_POST['nama'];
		$agama 			= $_POST['agama'];
		$jurusan        = $_POST['jurusan'];
		$asal = $_POST['asal_sekolah'];
		$jenis_kelamin  = $_POST['jk'];
		$alamat         = $_POST['alamat'];
		// query SQL untuk insert data
		$update=mysqli_query($konek,"UPDATE mahasiswa SET nim='$nim',nama='$nama',agama='$agama',jurusan='$jurusan',jenis_kelamin='$jenis_kelamin',asal_sekolah='$asal',alamat='$alamat' where id_mhs='$id_mhs'");
		if ($update) {
			# code...
			header("location:mahasiswa.php");
		}else{
			 die('Koneksi Error : '.mysqli_connect_errno() 
   			 .' - '.mysqli_error($konek));
		}

	}
 ?>
 <!DOCTYPE html>
<html>
<head>
	<title>Design UI</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="#">Digital Talent</a>
  		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    		<span class="navbar-toggler-icon"></span>
    	</button>
    	<div class="collapse navbar-collapse" id="navbarSupportedContent">
    		<ul class="navbar-nav mr-auto">
      			<li class="nav-item">
        			<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      			</li>
      			<li class="nav-item">
        			<a class="nav-link" href="#">About <span class="sr-only">(current)</span></a>
      			</li>
      			<li class="nav-item dropdown">
        			<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
     					Programming
        			</a>
        			<div class="dropdown-menu" aria-labelledby="navbarDropdown">
          				<a class="dropdown-item" href="#PHP">PHP</a>
          				<a class="dropdown-item" href="#ASP">ASP</a>
          				<a class="dropdown-item" href="#Ajax">Ajax</a>
          				<a class="dropdown-item" href="#jQuery">jQuery</a>
          				<a class="dropdown-item" href="#Mysql">Mysql</a>
          				<a class="dropdown-item" href="#CSS">CSS</a>
        			</div>
      			</li>
      			<li class="nav-item dropdown">
        			<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
     					Sofware
        			</a>
        			<div class="dropdown-menu" aria-labelledby="navbarDropdown">
          				<a class="dropdown-item" href="#Xampp">Xampp</a>
          				<a class="dropdown-item" href="#Xampp">Sublime Text 3</a>
          				<a class="dropdown-item" href="#GIT">GIT</a>
        			</div>
      			</li>
      			<li class="nav-item">
        			<a class="nav-link" href="#">Contact Us <span class="sr-only">(current)</span></a>
      			</li>
    		</ul>
  		</div>
	</nav><br>
	<div class="container">
		<div class="alert alert-dark">
			<center><h1>Update Data Mahasiswa</h1></center>
			<hr>
			<form method="post">
				<input type="hidden" name="id_mhs" value="<?php echo $row['id_mhs'] ?>">
				<div class="form-group row" autocomplete="off">
					<label class="col-sm-2 col-form-label">Nim</label>
					<div class="col-sm-10">
						<input type="text" name="nim" class="form-control" value="<?php echo $row['nim'] ?>">
					</div>
				</div>
				<div class="form-group row" autocomplete="off">
					<label class="col-sm-2 col-form-label">Nama</label>
					<div class="col-sm-10">
						<input type="text" name="nama" class="form-control" value="<?php echo $row['nama'] ?>">
					</div>
				</div>
				<div class="form-group row" autocomplete="off">
					<label class="col-sm-2 col-form-label">Agama</label>
					<div class="col-sm-10">
						<select name="agama" class="form-control">
							<?php
                            foreach ($agama as $a){
                                echo "<option value='$a' ";
                                echo $row['agama']==$a?'selected="selected"':'';
                                echo ">$a</option>";
                            }
                            ?>

						</select>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Jenis Kelamin</label>
					<div class="col-sm-10">
						<div class="form-check">
							<input type="radio" name="jk" class="form-check-input" value="L" <?php echo active_radio_button("L", $row['jenis_kelamin'])?>>
							<label class="form-check-label">Laki - Laki</label >
						</div>
						<div class="form-check">
							<input type="radio" name="jk" class="form-check-input" value="P" <?php echo active_radio_button("P", $row['jenis_kelamin'])?>>
							<label class="form-check-label">Perempuan</label>
						</div>
					</div>
				</div>
				<div class="form-group row" autocomplete="off">
					<label class="col-sm-2 col-form-label">Jurusan</label>
					<div class="col-sm-10">
						<select name="jurusan" class="form-control">
							<?php
                            foreach ($jurusan as $j){
                                echo "<option value='$j' ";
                                echo $row['jurusan']==$j?'selected="selected"':'';
                                echo ">$j</option>";
                            }
                            ?>

						</select>
					</div>
				</div>
				<div class="form-group row" autocomplete="off">
					<label class="col-sm-2 col-form-label">Asal Sekolah</label>
					<div class="col-sm-10">
						<input type="text" name="asal_sekolah" class="form-control" value="<?php echo $row['asal_sekolah'] ?>">
					</div>
				</div>
				<div class="form-group row" autocomplete="off">
					<label class="col-sm-2 col-form-label">Alamat</label>
					<div class="col-sm-10">
						<textarea class="form-control" name="alamat"><?php echo $row['alamat'] ?></textarea>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-2 col-form-label"></label>
    				<div class="col-sm-10">
      					<button type="submit" class="btn btn-primary" name="update">Update</button>
      					<button class="btn btn-warning" name="clear"><a href="mahasiswa.php" style="color: black;">Back</a></button>
    				</div>
  				</div>
			</form>
		</div>
	</div>
</body>
<script type="text/javascript" src="js/jquery-3.3.1.slim.min.js"></script>
<script type="text/javascript" src="js/popper.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
<script src="jquery.textarea_autosize.min.js"></script>
<script>
$('textarea.js-auto-size').textareaAutoSize();
</script>
</html>
