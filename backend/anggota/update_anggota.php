<?php

	include '../database.php';

	$nim = $_POST['nim'];
	$nama = $_POST['nama'];
	$tanggal_lahir = $_POST['tanggal_lahir'];
	$alamat = $_POST['alamat'];
	$prodi = $_POST['prodi'];

	mysqli_query($koneksi,"UPDATE anggota 

							SET nim='$nim',
								nama='$nama',
								tanggal_lahir='$tanggal_lahir',
								alamat='$alamat',
								prodi='$prodi'

							WHERE nim='$nim' 

							");

	header("Location:../../daftar_anggota.php");
	
?>