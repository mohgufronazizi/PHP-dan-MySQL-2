<?php
	require_once("koneksi.php");

	$query = "SELECT * FROM barang";

	$result = mysqli_query($mysqli, $query);

	//Mengecek dan mendapatkan data session
	require_once("session_check.php");

?>

<!-- Html -->
<!DOCTYPE html>
<html>
<head>
	<title>PHP dan MySQL</title> 
	<link href="style.css" rel="stylesheet"/>

	<!--Memanggil Bootstrap-->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

	<!--Bootstrap Icon-->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

	<!-- Javascript -->
	<script type="text/javascript">
		function confirm_delete(){
			return confirm("Anda yakin?");
		}
	</script>
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

					<?php if ($sessionStatus == false) : ?>

					<li class="nav-item">
						<a class="nav-link" aria-current="page" href="login.php">Login</a>
					</li>

					<?php else : ?>

					<li class="nav-item">
						<a class="nav-link" aria-current="page" href="logout.php">Logout</a>
					</li>
					<?php endif ; ?>
				</ul>
			</div>
		</div>
	</nav>

	<div id="student-list">
		<div class="container">
			<?php if ($sessionStatus) : ?>
			<div class="row mb-4">
				<div class="col">

					<h2> Daftar Barang</h2>

				</div>

				<div class="col text-end">
					<a class="btn btn-primary" href="form_barang.php" role="button">Tambah Barang</a>
				</div>
			</div>

			<div class="row">
				<div class="col">
					<table class="table">
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">Nama Barang</th>
								<th scope="col">Harga</th>
								<th scope="col">Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php

							$i = 1;

							foreach ($result as $barang) {
							echo '<tr>
								<th scope="row">' . $i++ . '</th>
								<td>' . $barang ["nama_barang"] . '</td>
								<td>' . $barang ["harga"] . '</td>
								<td>
									<a href="form_edit.php?id_barang=' . $barang["id_barang"] . '">Edit</a>
									<a href="delete.php?id_barang=' . $barang["id_barang"] . '" onclick="return confirm_delete()">Dalete</a>
								</td>
							</tr>';
							}

							?>
						</tbody>
					</table>
				</div>
			</div>

			<?php else : ?>
			<div class="row">
				<div class="col">
					<h2>Login terlebih dahulu!</h2>
				</div>
			</div>

		<?php endif; ?>

	</div>
</div>



