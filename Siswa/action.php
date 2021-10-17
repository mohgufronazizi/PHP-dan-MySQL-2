<?php 
	
	require_once("koneksi.php");

	// Status tidak error
	$error = 0;

	// Memvalidasi Inputan
	if (isset($_POST['nis'])) $nis = $_POST['nis'];
	else $error = 1;

	if (isset($_POST['name'])) $name = $_POST['name'];
	else $error = 1;

	if (isset($_POST['gender'])) $gender = $_POST['gender'];
	else $error = 1;

	if (isset($_POST['address'])) $address = $_POST['address'];
	else $error = 1;

	if (isset($_POST['placeOfBirth'])) $placeOfBirth = $_POST['placeOfBirth'];
	else $error = 1;

	if (isset($_POST['dateOfBirth'])) $dateOfBirth = $_POST['dateOfBirth'];
	else $error = 1;

	if (isset($_POST['phone'])) $phone = $_POST['phone'];
	else $error = 1;

	// Mengatasi jika terdapat error pada input
	if ( $error == 1 ) {
		echo "Terjadi kesalahan pada input data";
		exit();
	}

	// Meyiapkan Query MySQL untuk dieksekusi
	$query = "
	INSERT INTO siswa
	(nis, nama, jk, alamat, tmp_lahir, tgl_lahir, telepon)
	VALUES
	('{$nis}', '{$name}', '{$gender}', '{$address}', '{$placeOfBirth}', '{$dateOfBirth}', '{$phone}');";

	// Mengeksekusi MySQL Query
	$insert = mysqli_query($mysqli, $query);

	// Menangani katika error pada saat eksekusi query
	if ( $insert == false ) {
		echo "Error dalam menambahkan data. <a href='latihan.php'> Kembali</a>";
	}
	else{
		header("Location: latihan.php");
	}

?>