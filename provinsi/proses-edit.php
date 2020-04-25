<?php 

include '../koneksi.php';

if(isset($_POST["simpan"])){

	$id_prov = $_POST['id_prov'];
	$provinsi = $_POST['provinsi'];
	$kasus = $_POST['kasus'];
	$sembuh = $_POST['sembuh'];
	$meninggal = $_POST['meninggal'];
	
	$sql = "UPDATE provinsi SET provinsi='$provinsi', kasus='$kasus', sembuh='$sembuh', meninggal='$meninggal' WHERE id_prov = '$id_prov'";

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
