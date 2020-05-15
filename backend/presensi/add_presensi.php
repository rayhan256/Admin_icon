<?php

	include '../database.php';
	date_default_timezone_set('Asia/Jakarta');
	date('d-m-Y H:i:s');

	$nim = $_POST['nim'];
	$tanggal = $_POST['tanggal'];
	$keterangan = $_POST['keterangan'];
	$jumlah_data = count($nim);

	for($x=0;$x<$jumlah_data;$x++){

		if($keterangan[$x] == "H" ){
			$point[] = 10;
		}elseif($keterangan[$x] == "I" ){
			$point[] = -1;
		}else{
			$point[] = -5;
		}

	}

	for($x=0;$x<$jumlah_data;$x++){
		mysqli_query($koneksi,"INSERT INTO presensi 

								VALUES (NULL,
										'$nim[$x]',
										'$tanggal[$x]',
										'$keterangan[$x]',
										$point[$x])

								");
	}

	header("Location:../../presensi.php");

?>