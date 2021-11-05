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
			<center><h1>Data Siswa</h1></center>
			<hr>
			<form method="post" action="#">
				<div class="form-group row" autocomplete="off">
					<label class="col-sm-2 col-form-label">Nama</label>
					<div class="col-sm-10">
						<input type="text" name="nama" class="form-control">
					</div>
				</div>
				<div class="form-group row" autocomplete="off">
					<label class="col-sm-2 col-form-label">Tempat</label>
					<div class="col-sm-10">
						<input type="text" name="tempat" class="form-control">
					</div>
				</div>
				<div class="form-group row" autocomplete="off">
					<label class="col-sm-2 col-form-label">Tanggal Lahir</label>
					<div class="col-sm-10">
						<input type="date" name="tgl" class="form-control">
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Jenis Kelamin</label>
					<div class="col-sm-10">
						<div class="form-check">
							<input type="radio" name="jk" class="form-check-input" value="Laki - Laki">
							<label class="form-check-label">Laki - Laki</label>
						</div>
						<div class="form-check">
							<input type="radio" name="jk" class="form-check-input" value="Perempuan">
							<label class="form-check-label">Perempuan</label>
						</div>
					</div>
				</div>
				<div class="form-group row" autocomplete="off">
					<label class="col-sm-2 col-form-label">Alamat</label>
					<div class="col-sm-10">
						<textarea class="form-control" name="alamat" value=""></textarea>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-2 col-form-label"></label>
    				<div class="col-sm-10">
      					<button type="submit" class="btn btn-primary" name="tambah">Tambah</button>
      					<button class="btn btn-warning" name="clear">Cancel</button>
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