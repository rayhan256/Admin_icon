<?php require_once 'header_admin.php' ?>

<h3>Edit Anggota</h3>

<?php
	include 'backend/database.php';

	$nim = $_GET['nim'];

	$query = mysqli_query($koneksi,"SELECT * FROM anggota WHERE nim = '$nim' ");

	$fetch = mysqli_fetch_assoc($query);

	 
?>

<form action="backend/anggota/update_anggota.php" method="post">
	<input value="<?= $fetch['nim'] ?>" type="text" name="nim" class="form-control w-50" >
	<input value="<?= $fetch['nama'] ?>" type="text" name="nama" class="form-control w-50 mt-3" >
	<label class="mt-3">tanggal lahir</label>
	<input value="<?= $fetch['tanggal_lahir'] ?>" type="date" name="tanggal_lahir" class="form-control w-25">
	<input value="<?= $fetch['alamat'] ?>" type="text" name="alamat" class="form-control w-50 mt-3" >
	<select class="form-control w-25 mt-3" name="prodi">
		<option value="Administrasi Bisnis" 
		<?php if($fetch['prodi'] == "Administrasi Bisnis") { echo "selected"; } ?>>Administrasi Bisnis</option>
		<option value="Manajemen Informatika" <?php if($fetch['prodi'] == "Manajemen Informatika") { echo "selected"; } ?>>Manajemen Informatika</option>
		<option value="Akuntansi" <?php if($fetch['prodi'] == "Akuntansi") { echo "selected"; } ?>>Akuntansi</option>
		<option value="Hubungan Masyarakat" <?php if($fetch['prodi'] == "Hubungan Masyarakat") { echo "selected"; } ?>>Hubungan Masyarakat</option>
	</select>
	<button type="submit" class="btn btn-success mt-3">Update changes</button>
</form>

<?php require_once 'footer_admin.php' ?>