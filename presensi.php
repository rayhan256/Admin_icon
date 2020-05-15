<?php require_once 'header_admin.php' ?>

<h3>Presensi</h3>

<form action="backend/presensi/add_presensi.php" method="post">

		<table class="table table-responsive mt-3">
			<tr>
				<th>Nim</th>
				<th>Nama</th>
				<th>Tanggal</th>
				<th>Keterangan</th>
			</tr>
			<?php

			include 'backend/database.php';

			$query = mysqli_query($koneksi,"SELECT * FROM anggota");

			while ($a = mysqli_fetch_array($query)){
			?>
			<tr>
				<td><?= $a['nim'] ?><input type="text" name="nim[]" value="<?= $a['nim'] ?>" hidden></td>
				<td><?= $a['nama']?></td>
				<td><?= date('Y-m-d') ?><input type="text" name="tanggal[]" 
					value="<?php date_default_timezone_set('Asia/Jakarta'); echo date('Y-m-d H:i:s'); ?>" hidden>
				</td>
				<td>
					<select name="keterangan[]" class="form-control">
						<option value="H">hadir</option>
						<option value="I">izin </option>
						<option value="A">alpha</option>
					</select>
				</td>
			</tr>
			<?php } ?>
		</table>
		<input type="submit" name="submit" value="submit" class="btn btn-primary btn-lg">
	</form>

<?php require_once 'footer_admin.php' ?>