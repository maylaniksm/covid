<?php 
include '../koneksi.php';
include '../aset/header.php';
$id_pasien = $_GET["id_pasien"];
$query = mysqli_query($kon,"SELECT * FROM pasien WHERE id_pasien = '$id_pasien'");
$pasien = mysqli_fetch_assoc($query);
 ?>


 <div class="container">
 	<div class="row mt-4">
 		<div class="col-md">
 <center>
 <div class="card" style="width: 100%;">
 <div class="card-header" style="width: 100%;">
 	<h2 class="card-header"><i class="fas fas fa-edit"></i>EDIT DATA PASIEN</h2>
 </div>
 <div class="card-body">
<form action="proses-edit.php" method="post">
<table class="table">
 <input type="hidden" name="id_pasien" value="<?= $pasien['id_pasien']; ?>">
 <tr>
 	<td>Nama Pasien</td>
    <td><input style="width:100%" type="text" name="nama" value="<?= $pasien['nama'];?>" required></td>
</tr>
<tr>
  <td>Suhu Pasien</td>
   <td><input style="width:100%" type="number" name="suhu" value="<?= $pasien['suhu'];?>" required></td>
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
    <td><input style="width:100%" type="text" name="umur" value="<?= $pasien['umur'];?>" required></td>
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
   <td><input style="width:100%" type="text" name="alamat" value="<?= $pasien['alamat'];?>" required></td>
</tr>

   <tr>
 	<td>Petugas Yang Memeriksa</td>
   <td><input style="width:100%" type="text" name="petugas" value="<?= $pasien['petugas'];?>" required></td>
   </tr>
   <tr>
 	<td>Rumah Sakit Yang Menangani</td>
   <td><input style="width:100%" type="text" name="rs" value="<?= $pasien['rs'];?>" required></td>
   </tr>
   <tr>
 	<td>Tanggal Check Up</td>
   <td><input style="width:100%" type="date" name="tgl" value="<?= $pasien['tgl'];?>" required></td>
   </tr>
   
        <tr>
 	         <th></th>
             <th><button style="width:100px; height: 50px" type="submit" class="btn btn-primary" name="simpan">Edit</button>
             <button style="width:100px; height: 50px" type="submit" class="btn btn-danger" name="kembali">Kembali</button></th>
       </tr>
       
</table>
</form>
</div>
</div>
</div>
</div>
</div> 
</center>

 <?php 
include '../aset/footer.php';
  ?>