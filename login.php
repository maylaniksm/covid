<?php  
include 'koneksi.php';
session_start();

if (isset($_SESSION['username'])) {
	header("location: dashboard.php");

}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
</head>
<body>
	<div class="login">
		 <form action="proses-login" method="post">
		<div class="avatar">
			<i class="fa fa-user"></i>
		</div>
		<h2>LOGIN FORM</h2>
		
		<div class="box-login">
			<i class="fas fa-envelope"></i>
			<input type="text" name="username" placeholder="Username" required>
		</div>
		<div class="box-login">
			<i class="fas fa-lock"></i>
			<input type="password" name="password" placeholder="Password" required>
		</div>
		<a href="dashboard.php" type="submit" name="btnlogin" class="btn-login">LOGIN</a>
		<div>	
			</div>
		  <div class="col-lg-6">
              <a href="register.php" class="btn btn-info" >Register</a>
          </div>
		</div>
		<!-- <?php
			if (isset($_POST['btnlogin'])){
				$username = $_POST['username'];
				$password = $_POST['password'];

				$ceklogin = mysql_query("SELECT * FROM login WHERE username='$username' AND password='$password'");

				if(mysql_num_rows($ceklogin) == 1){
					$_SESSION['username'] = $username;
					echo "<script>alert('Login Sukses!');window.location='dashboard.php';</script>";
				}else{
					echo "<script>alert('Login Gagal!');window.location='login.php';</script>";
				}
			}
		?> -->
	</div>
  <script src="bootstrap/js/jquery.min.js"></script>
  <script src="bootstrap/bootstrap.min.js"></script>
</body>
</html>