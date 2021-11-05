<?php 
  include 'sidu.php';
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
    <center><h1>List Data Barang</h1></center>
    <hr>
    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nama Merk</th>
          <th scope="col">Warna</th>
          <th scope="col">Jumlah</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php 
          $no = 1;
          foreach (tampil() as $x) {
            # code...
          ?>
          <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $x['nama_merk']; ?></td>
            <td><?php echo $x['nama_warna']; ?></td>
            <td><?php echo $x['jumlah']; ?></td>
            <td>
              <a href="edit.php?id=<?php echo $x['id']; ?>&aksi=edit">Edit</a>
              <a href="proses.php?id=<?php echo $x['id']; ?>&aksi=hapus">Hapus</a>      
            </td>
          </tr>
          <?php
          }
         ?>
      </tbody>
    </table>
  </div>
</body>
</html>