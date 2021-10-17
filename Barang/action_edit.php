<?php 

// Pemanggilan file koneksi
require_once("koneksi.php");

// mendapatkan data Id_Barang
if (isset($_POST["id_barang"])) $id_barang = $_POST["id_barang"];
else {
	echo "ID tidak ditemukan! <a href='latihan.php'>Kembali</a>";
	exit();
}

$query = "SELECT * FROM barang WHERE id_barang = '{$id_barang}'";

$result = mysqli_query($mysqli, $query);

foreach ($result as $barang) {
	
	$id_barang = $barang["id_barang"];
	$name = $barang["nama_barang"];
	$price = $barang["harga"];
}

	if (isset($_POST['id_barang'])) $id_barang = $_POST['id_barang'];

	if (isset($_POST['name'])) $name = $_POST['name'];

	if (isset($_POST['price'])) $price = $_POST['price'];


// Menyiapkan Query MySQL untuk diskusi
$query = "
	UPDATE barang SET
		nama_barang = '{$name}',
		harga = '{$price}'
	WHERE id_barang = '{$id_barang}'";

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
