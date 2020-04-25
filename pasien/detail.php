<?php 
include '../aset/header.php';
include '../koneksi.php';

$id_pasien = $_GET['id_pasien'];

$sql = "SELECT * FROM pasien ORDER BY nama";
$res = mysqli_query($kon,$sql);
$detail = mysqli_fetch_assoc($res);

?>

<div class="countainer">
	<div class="row mt-4">
		<div class="col-md">
		<center>
 <h2 class="card-title"><img src="nurse.png" width="50px" height="50px"></i> DETAIL DATA PASIEN COVID-19 <img src="nurse.png" width="50px" height="50px"></h2>
			<hr class="bg-light">
			<table><tr><th>
				<table class="table table-bordered">
					<tr>
						<td width="200"><strong>Nama Pasien</strong></td>
						<td width="500"><?= $detail['nama'] ?></td>
					</tr>
					<tr>
						<td width="200"><strong>Suhu Tubuh Pasien</strong></td>
						<td width="500"><?= $detail['suhu'] ?></td>
					</tr>
					<tr>
						<td width="200"><strong>Status Pasien</strong></td>
						<td width="500"><?= $detail['status'] ?></td>
					</tr>
					
					<tr>
						<td width="200"><strong>Umur Pasien</strong></td>
						<td width="500"><?= $detail['umur'] ?></td>
					</tr>
					<tr>
						<td width="200"><strong>Jenis Kelamin</strong></td>
						<td width="500"><?= $detail['jenis'] ?></td>
					</tr>
					<tr>
						<td width="200"><strong>Alamat Pasien</strong></td>
						<td width="500"><?= $detail['alamat'] ?></td>
					</tr>
					
					<tr>
						<td width="200"><strong>Petugas Yang Memeriksa</strong></td>
						<td width="500"><?= $detail['petugas'] ?></td>
					</tr>
					<tr>
						<td width="200"><strong>Rumah Sakit Yang Menangani</strong></td>
						<td width="500"><?= $detail['rs'] ?></td>
					</tr>
					<tr>
						<td width="200"><strong>Tanggal Check Up</strong></td>
						<td width="500"><?= $detail['tgl'] ?></td>
					</tr>
					
				</table>
				</th></tr></table>
				
		</div>
	</div>
</div>

<?php
include '../aset/footer.php';
?>