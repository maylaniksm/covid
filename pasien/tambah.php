<?php 

include '../koneksi.php';
include '../aset/header.php';

$query = mysqli_query($kon,"SELECT * FROM pasien ");

?>
<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Pasien</title>
</head>
<body>
<div class="countainer">
	<div class="row mt-4">
		<div class="col-md">
		<center>
			 <h2 class="card-title"><i class="fas fa-edit"></i> TAMBAH DATA PASIEN COVID-19
          </h2>
			<hr class="bg-light">
			<form action="proses-tambah.php" method="post">
			<table><tr><th>
			<table class="table table-bordered">
			<tr>
				<td>Nama Pasien</td>
				<td><input type="text" name="nama" required></td>
			</tr>
			<tr>
				<td>Suhu Tubuh</td>
				<td><input type="number" name="suhu" ></td>
			</tr>
			<tr>
				<td>Status Pasien</td>
				<td>
					<select name="status">
						<option>-0- Pilih Status -0-</option>
					<option>ODP</option>
					<option>PDP</option>
					<option>POSITIF</option>
				</select>
				</td>
			</tr>
			<tr>
				<td>Umur Pasien</td>
				<td><input type="text" name="umur" ></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>
					<select name="jenis">
						<option>-0- Pilih Jenis Kelamin -0-</option>
					<option>Perempuan</option>
					<option>Laki-Laki</option>
				</select>
				</td>
			</tr>
			<tr>
				<td>Alamat Pasien</td>
				<td><input type="text" name="alamat" ></td>
			</tr>
			
			<tr>
				<td>Petugas Yang Memeriksa</td>
				<td><input type="text" name="petugas" ></td>
			</tr>
			<tr>
				<td>Rumah Sakit Yang Menangani</td>
				<td><input type="text" name="rs" ></td>
			</tr>
			<tr>
				<td>Tanggal Check Up</td>
				<td><input type="date" name="tgl" ></td>
			</tr>
			<tr>
				<td></td>
				<td><button type="submit" class="btn btn-primary" name="simpan">Save</button>&nbsp&nbsp&nbsp&nbsp<button type="submit" class="btn btn-danger" name="kembali" href="http://localhost/covid/pasien/index.php">Kembali</button></td>
			</tr>
		</table>
		</th></tr></table>
		</form>
		</div>
	</div>
</div>

</body>
</html>

<?php 
include '../aset/footer.php';
?>