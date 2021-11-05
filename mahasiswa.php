<?php 
  include 'db_mhs.php';
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
	<div class="container-fluid">
    <center><h1>List Mahasiswa</h1></center>
    <hr>
    <button class="btn btn-success" name="clear" style="float: right; margin-bottom: 20px;"><a href="input-mahasiswa.php" style="color: white;">Tambah</a></button>
    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">NIM</th>
          <th scope="col">NAMA</th>
          <th scope="col">AGAMA</th>
          <th scope="col">GENDER</th>
          <th scope="col">JURUSAN</th>
          <th scope="col">ASAL SEKOLAH</th>
          <th scope="col">ALAMAT</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php 
          $mhs = mysqli_query($konek,"Select * FROM mahasiswa");
          $no = 1;
          $total =mysqli_num_rows($mhs);
          foreach ($mhs as $row) {
            # code...
            $jk = $row['jenis_kelamin']=='P'?'Perempuan':'Laki Laki';
            echo "<tr>";
            echo "<td>".$no++."</td>";
            echo "<td>".$row['nim']."</td>";
            echo "<td>".$row['nama']."</td>";
            echo "<td>".$row['agama']."</td>";
            echo "<td>".$jk."</td>";
            echo "<td>".$row['jurusan']."</td>";
            echo "<td>".$row['asal_sekolah']."</td>";
            echo "<td>".$row['alamat']."</td>";
            ?>
            <td>
              <a href="edit-mahasiswa.php?id=<?php echo $row['id_mhs']; ?>" style="color: black;">Edit</a>
              <a href="hapus.php?id=<?php echo $row['id_mhs']; ?>" style="color: black;">Hapus</a>      
            </td>
            <?php
            echo "</tr>";
          }
         ?>
      </tbody>
    </table>
    <p>Total : <?php echo $total; ?></p>
  </div>
</body>
</html>