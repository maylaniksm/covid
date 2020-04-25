<?php 

include '../koneksi.php';

if(isset($_POST["simpan"])){

	$nama = $_POST['nama'];
	$suhu = $_POST['suhu'];
	$status = $_POST['status'];
	$umur = $_POST['umur'];
	$jenis = $_POST['jenis'];
	$alamat = $_POST['alamat'];
	$petugas = $_POST['petugas'];
	$rs = $_POST['rs'];
	$tgl = $_POST['tgl'];
	

	$sql = "INSERT INTO pasien (nama, suhu, status, umur, jenis, alamat, petugas, rs, tgl) VALUES ('$nama', '$suhu', '$status', '$umur', '$jenis', '$alamat',  '$petugas', '$rs', '$tgl')";

	$res = mysqli_query($kon, $sql);

	$count = mysqli_affected_rows($kon);
	 if($count){
	echo "<script>alert('Data berhasil Ditambahkan!');window.location='index.php';</script>";
	 }

	
}else{
	header("location: tambah.php");
}
if(isset($_POST["kembali"])){
	header("location: index.php");
}
?>
