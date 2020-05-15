<?php require_once 'header_admin.php' ?>

<h3>Daftar Anggota</h3>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary mt-3" data-toggle="modal" data-target="#exampleModal">
  Tambah Anggota
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Anggota</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="backend/anggota/add_anggota.php" method="post">
        	<input type="text" name="nim" class="form-control" placeholder="Masukan nim...">
        	<input type="text" name="nama" class="form-control mt-3" placeholder="Masukan nama...">
        	<label class="mt-3">tanggal lahir</label>
        	<input type="date" name="tanggal_lahir" class="form-control">
        	<input type="text" name="alamat" class="form-control mt-3" placeholder="Masukan alamat...">
        	<select class="form-control w-50 mt-3" name="prodi">
        		<option value="Administrasi Bisnis">Administrasi Bisnis</option>
        		<option value="Manajemen Informatika">Manajemen Informatika</option>
        		<option value="Akuntansi">Akuntansi</option>
        		<option value="Hubungan Masyarakat">Hubungan Masyarakat</option>
        	</select>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
        </form>
      </div>
    </div>
  </div>
</div>

<table class="table table-responsive w-75 mt-4">

	<tr>
		<th>No.</th>
		<th>NIM</th>
		<th>Nama</th>
		<th>Tanggal Lahir</th>
		<th>Alamat</th>
		<th>Prodi</th>
		<th>Pengaturan</th>
	</tr>

	<?php
		include 'backend/database.php';

		$query = mysqli_query($koneksi, "SELECT * FROM anggota");

		$no = 1;
		while ($a = mysqli_fetch_array($query)) {

	?>

	<tr>
		<td><?= $no++ ?></td>
		<td><?= $a['nim'] ?></td>
		<td><?= $a['nama'] ?></td>
		<td><?= $a['tanggal_lahir'] ?></td>
		<td><?= $a['alamat'] ?></td>
		<td><?= $a['prodi'] ?></td>
		<th>
			<a href="edit_anggota.php?nim=<?= $a['nim'] ?>" class="btn btn-success">edit</a>
			<a href="backend/anggota/delete_anggota.php?nim=<?= $a['nim'] ?>" class="btn btn-danger">hapus</a>
		</th>
	</tr>

	<?php
		}
	?>

</table>

<?php require_once 'footer_admin.php' ?>