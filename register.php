<?php 
include 'koneksi.php';

?>
<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale = 1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/bootstrap.js"></script>
    <style>
        h1{
            margin-top: 5px;
        }

        img {
            width: 100px;
        }

         div.card {
            background: url(blue.jpg);
            margin-top: 0px;
            border-radius: 20px;
            border-color: black;
           margin-left: 300px;
           column-width: 300px;
           width: 400px;
           outline-width: 300px;
           column-rule-width: 300px;

        }

        input {
            background: none;
            width: 225px;
            height: 30px;
            color: black;
            border-color: black;
            border-top: 0px;
            border-right: 0px;
            border-left: 0px;
            border-bottom: 20px;
        }

        body {
            background: url('hati.jpg');

        }

        input.placeholder {
            color: black;
            margin-left: 50px

        }

        h4 {
            margin-top: 0px;
            margin-left: 300px;
        }

        input {
            margin-left: 0px;
            color: black;
        }

        button {
            margin-top: 10px;
            height: 40px;
        }
        h6 {
         margin-top: 5px;
        }
    </style>
</head>

<body>
    <div class="container">
        <form method="POST">
            <div class="card col-md-5 bg-dark">
                <div class="card-body">
                    <div class="form-group">
                    	<center><img src="register.png" width="100px" height="100px"></center>
                    	<center><h2><b><i>REGISTER DULU GUYS!!</i></b></h2></center>
                        <center>
                        <label for="">Nama</label>
                            <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama">
                </div>
                <div class="form-group">
                    <label for="">Username</label>
                    <input type="text" name="username" class="form-control" placeholder="Masukkan Username">
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" name="password1" class="form-control" placeholder="Masukkan Username">
                </div>
                <div class="form-group">
                    <label for="">Konfirmasi Password</label>
                    <input type="password" name="password2" class="form-control" placeholder="Konfirmasi Password">
                </div>
                </center>
                <center>
               <button type="submit" name="btnregister" class="btn btn-success">Register</button>
               <button type="submit" class="btn btn-danger">Reset</button>

                </center>
            </form>
        <?php 
        if (isset($_POST['btnregister'])) {
        	$nama = mysql_real_escape_string($_POST['nama']);
        	$username = mysql_real_escape_string($_POST['username']);
        	$password1 = mysql_real_escape_string($_POST['password1']);
        	$password2 = mysql_real_escape_string($_POST['password2']);

        	if ($password1 == $password2) {
        		mysqli_query($kon, "INSERT INTO login VALUES('','$nama', '$username', '$password1')");
        		echo "<script>alert('Registrasi Sukses! Silahkan Login!');window.location='login.php';</script>";
        	}else{
        		echo "<script>alert('Maaf, Password Tidak Cocok!');window.location='register.php';</script>";
        	
        	}
        }
         ?>
    </div>

</body>