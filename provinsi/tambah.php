<?php 

include '../koneksi.php';
include '../aset/header.php';

$query = mysqli_query($kon,"SELECT * FROM provinsi ");

?>
<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Provinsi</title>
</head>
<body>
<div class="countainer">
	<div class="row mt-4">
		<div class="col-md">
		<center>
			 <h2 class="card-title"><i class="fas fa-edit"></i> TAMBAH DATA PROVINSI COVID-19
          </h2>
			<hr class="bg-light">
			<form action="proses-tambah.php" method="post">
			<table><tr><th>
			<table class="table table-bordered">
			<tr>
				<td>provinsi</td>
				<td><input type="text" name="provinsi" required></td>
			</tr>
			<tr>
				<td>Kasus Positif</td>
				<td><input type="number" name="kasus" ></td>
			</tr>
			<tr>
				<td>Sembuh</td>
				<td><input type="number" name="sembuh" ></td>
			</tr>
			<tr>
				<td>Meninggal</td>
				<td><input type="number" name="meninggal" ></td>
			</tr>
				<td></td>
				<td><button type="submit" class="btn btn-primary" name="simpan">Save</button>&nbsp&nbsp&nbsp&nbsp<button type="submit" class="btn btn-danger" name="kembali" href="http://localhost/covid/provinsi/index.php">Kembali</button></td>
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