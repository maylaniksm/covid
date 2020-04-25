<?php  
include 'koneksi.php';
include 'aset/header.php';

session_start();

// if ( ! isset($_SESSION['username'])){
// 	header("location: login.php");


$query = "SELECT * FROM login ORDER BY username";
	$res = mysqli_query($kon, $query);

	$login = array();

	while ($data = mysqli_fetch_assoc($res)){
		$login[] = $data;
   }
   
?>

<div class="container">
	<div class="row mt-4">
		<div class="col-md">
			<h2><i class="fas fa-chart-line"></i></i>Dashboard  <a href="peta.php" class="btn btn-outline-danger mr-3">PETA <a href="statistik.php" class="btn btn-outline-danger mr-3">STATISTIK</a></i></h4></center></i></button></a>
			<hr class="bg-light">
		</div>
	</div>
 <center><h3><b><i style="font-family:arial;color:green">- DATA PASIEN COVID-19 NEGARA INDONESIA -</i></b></h3></center><br>
	<div class="row">
		<div class="col-md-4">
			<div class="card bg-info" style="width: 18rem;">
  				<div class="card-body text-white">
    				<center><h5 class="card-title">Jumlah ODP</h5></center>
    				<center><p class="card-text" style="font-size:60px">535</p></center>
<!--     				<a href="http://localhost/covid/odp/index.php" class="text-white">Lebih Detail<i class="fas fa-angle-double-right"></i></a> -->
  				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card bg-warning" style="width: 18rem;">
  				<div class="card-body text-white">
    				<center><h5 class="card-title">Jumlah PDP</h5></center>
    				<center><p class="card-text" style="font-size:60px">225</p></center>
    				<!-- <a href="http://localhost/covid/pdp/index.php" class="text-white">Lebih Detail<i class="fas fa-angle-double-right"></i></a> -->
  				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card bg-danger" style="width: 18rem;">
  					<div class="card-body text-white">
    				<center><h5 class="card-title">Jumlah POSITIF</h5></center>
    				<center><p class="card-text" style="font-size:60px">30</p></center
    				
  				</div>
			</div>
		</div>

<?php

include 'aset/footer.php';

?>