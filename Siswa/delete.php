<?php 

require_once("koneksi.php");

// mendapatkan data NIS
if (isset($_GET["nis"])) $nis = $_GET["nis"];
else {
	echo "NIS tidak ditemukan! <a href='latihan.php'>Kembali</a>";
	exit();
}

$query = "DELETE FROM siswa WHERE nis = '{$nis}'";

$result = mysqli_query($mysqli, $query);

if ( ! $result ) {
	exit("Gagal menghapus data!");
}

// Panggil file session check
require_once("session_check.php");

// Cek apakah petugas sudah login
if ( $sessionStatus == false ) {
	header("Location: latihan.php");
}

?>