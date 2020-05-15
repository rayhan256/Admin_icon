<?php

	$nim = $_GET['nim'];

	include '../database.php';

	mysqli_query($koneksi,"DELETE FROM anggota WHERE nim='$nim'")or die(mysql_error());
	header("Location:../../daftar_anggota.php");
	
?>