<?php 

// Pemanggilan file koneksi
require_once("koneksi.php");

// mendapatkan data NIS
if (isset($_POST["nis"])) $nis = $_POST["nis"];
else {
	echo "NIS tidak ditemukan! <a href='latihan.php'>Kembali</a>";
	exit();
}

$query = "SELECT * FROM siswa WHERE nis = '{$nis}'";

$result = mysqli_query($mysqli, $query);

foreach ($result as $siswa) {
	
	$nis = $siswa["nis"];
	$name = $siswa["nama"];
	$address = $siswa["alamat"];
	$placeOfBirth = $siswa["tmp_lahir"];
	$dateOfBirth = $siswa["tgl_lahir"];
	$phone = $siswa["telepon"];

	$maleChecked = "";
	$femaleChecked = "";
}

	if (isset($_POST['nis'])) $nis = $_POST['nis'];

	if (isset($_POST['name'])) $name = $_POST['name'];

	if (isset($_POST['gender'])) $gender = $_POST['gender'];

	if (isset($_POST['address'])) $address = $_POST['address'];

	if (isset($_POST['placeOfBirth'])) $placeOfBirth = $_POST['placeOfBirth'];

	if (isset($_POST['dateOfBirth'])) $dateOfBirth = $_POST['dateOfBirth'];

	if (isset($_POST['phone'])) $phone = $_POST['phone'];

// Menyiapkan Query MySQL untuk diskusi
$query = "
	UPDATE siswa SET
		nama = '{$name}',
		jk = '{$gender}',
		alamat = '{$address}',
		tmp_lahir = '{$placeOfBirth}',
		tgl_lahir = '{$dateOfBirth}',
		telepon = '{$phone}'
	WHERE nis = '{$nis}'";

// Mengeksekusi MySQL Query
$insert = mysqli_query($mysqli, $query);

// Menangani ketika error pada saat eksekusi query
	if ( $insert == false ) {
		echo "Error dalam mengubah data. <a href='latihan.php'> Kembali</a>";
	}
	else{
		header("Location: latihan.php");
	}

?>
