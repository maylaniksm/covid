<?php 
include '../koneksi.php';
include '../aset/header.php';
$id_prov = $_GET["id_prov"];
$query = mysqli_query($kon,"SELECT * FROM provinsi WHERE id_prov = '$id_prov'");
$provinsi = mysqli_fetch_assoc($query);
 ?>


 <div class="container">
 	<div class="row mt-4">
 		<div class="col-md">
 <center>
 <div class="card" style="width: 100%;">
 <div class="card-header" style="width: 100%;">
 	<h2 class="card-header"><i class="fas fas fa-edit"></i>EDIT DATA PROVINSI COVID-19</h2>
 </div>
 <div class="card-body">
<form action="proses-edit.php" method="post">
<table class="table">
 <input type="hidden" name="id_prov" value="<?= $provinsi['id_prov']; ?>">
 <tr>
 	<td>Provinsi</td>
    <td><input style="width:100%" type="text" name="provinsi" value="<?= $provinsi['provinsi'];?>" required></td>
</tr>
<tr>
  <td>Kasus Positif</td>
   <td><input style="width:100%" type="number" name="kasus" value="<?= $provinsi['kasus'];?>" required></td>
   </tr>
 	<td>Sembuh</td>
    <td><input style="width:100%" type="number" name="sembuh" value="<?= $provinsi['sembuh'];?>" required></td>
</tr>
 	<td>Meninggal</td>
   <td><input style="width:100%" type="number" name="meninggal" value="<?= $provinsi['meninggal'];?>" required></td>
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