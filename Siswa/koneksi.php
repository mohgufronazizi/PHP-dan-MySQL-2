<?php
	$mysqli = new mysqli("localhost", "root", "", "coba_sekolah");
	// Check connection
	if ($mysqli -> connect_errno){
		echo "Gagal menyambungkan ke MySQL: " . $mysqli -> connect_error;
		exit();
	}
?>

