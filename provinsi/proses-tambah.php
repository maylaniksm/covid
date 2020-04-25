<?php 

include '../koneksi.php';

if(isset($_POST["simpan"])){

	$provinsi = $_POST['provinsi'];
	$kasus = $_POST['kasus'];
	$sembuh = $_POST['sembuh'];
	$meninggal = $_POST['meninggal'];

	$sql = "INSERT INTO provinsi (provinsi, kasus, sembuh, meninggal) VALUES ('$provinsi', '$kasus', '$sembuh', '$meninggal')";

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
