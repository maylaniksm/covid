<?php 
include '../koneksi.php';

$id_prov = $_GET['id_prov'];

mysqli_query($kon,"DELETE FROM provinsi WHERE id_prov = '$id_prov'");

echo "<script> alert('Data have deleted!');document.location='index.php'</script>"
 ?>