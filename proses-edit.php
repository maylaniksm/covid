<?php 

include '../koneksi.php';

if(isset($_POST["simpan"])){

	$id_pasien = $_POST['id_pasien'];
	$nama = $_POST['nama'];
	$suhu = $_POST['suhu'];
	$status = $_POST['status'];
	$umur = $_POST['umur'];
	$jenis = $_POST['jenis'];
	$alamat = $_POST['alamat'];
	$petugas = $_POST['petugas'];
	$rs = $_POST['rs'];
	$tgl = $_POST['tgl'];
	
	$sql = "UPDATE pasien SET nama='$nama', suhu='$suhu', status='$status', umur='$umur', jenis='$jenis', alamat='$alamat', petugas='$petugas', rs='$rs', tgl='$tgl' WHERE id_pasien = '$id_pasien'";

	$res = mysqli_query($kon, $sql);

	$count = mysqli_affected_rows($kon);

	if($count){
		echo "<script>alert('Data berhasil Diganti!');window.location='index.php';</script>";
	 }

	
}else{
	header("location: edit.php");
}
if(isset($_POST["kembali"])){
	header("location: index.php");
}
?>
