<?php 

// Panggil file session check
require_once("session_check.php");

// Cek apakah petugas sudah login
if ( $sessionStatus == false ) {
	header("Location: latihan.php");
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Form Siswa</title> 
	<link href="style.css" rel="stylesheet"/>

	<!--Memanggil Bootstrap-->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

	<!--Bootstrap Icon-->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>
<body>
<!--Header-->	
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container-fluid bg-light">

			<!--Navbar Brand-->
			<a class="navbar-brand" href="#">
				<img src="gambar.png"/>
			</a>

			<!--Navbar Toggler-->
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-expanded="false" aria-label="Togglenavigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<!--Navbar Collapse-->
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
					<li class="nav-item">
						<a class="nav-link" aria-current="page" href="latihan.php">Daftar Barang</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<div id="form" class="pt-5">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="col col-8 p-4 bg-light">
					<form action="action.php" method="POST">

						<div class="form-group mb-2">
							<label for="id_barang">ID Barang</label>
							<input name="id_barang" id="id_barang" class="form-control" type="text" placeholder="id barang" required>
						</div>

						<div class="form-group mb-2">
							<label for="name">Nama Barang</label>
							<input name="name" id="name" class="form-control" type="text" placeholder="Nama Barang" required>
						</div>

						<div class="form-group mb-2">
							<label for="price">Harga</label>
							<input name="price" id="price" class="form-control" placeholder="Masukkan Nominal (ex: Rp 1.000)" required>
						</div>

						<input name="submit" type="submit" value="Kirim" class="btn btn-primary">
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
