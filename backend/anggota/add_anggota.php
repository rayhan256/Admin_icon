<?php

	include '../database.php';

	$nim = $_POST['nim'];
	$nama = $_POST['nama'];
	$tanggal_lahir = $_POST['tanggal_lahir'];
	$alamat = $_POST['alamat'];
	$prodi = $_POST['prodi'];

	mysqli_query($koneksi,"INSERT INTO anggota 
										VALUES ('$nim',
												'$nama',
												'$tanggal_lahir',
												'$alamat',
												'$prodi')
							");

	header("Location:../../daftar_anggota.php");

?>