<?php require('connection.php');?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Face Food</title>
	<link rel="shortcut icon" href="icon.png">
	<!-- <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css"> -->
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<script type="text/javascript" src="assets/js/jQuery-2.1.4.min.js"></script>
	<!-- <script type="text/javascript" src="assets/js/bootstrap.js"></script> -->
	<script type="text/javascript" src="assets/js/bootstrap.js"></script>
	<style type="text/css">
		body {
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		background-image: url("assets/image/Background_home.png");
		background-size:cover;
		background-attachment: fixed;
        }
	</style>
</head>
<body>
	<div class="container-fluid">
	  <div class="row">
	    <div class="col-md-2">
	    </div>
	    <div class="col-md-8">
	    	<br><br>
	    	<div style="opacity: 0.8">
	    	<div class="card" style="margin-top:1rem;margin-bottom:1rem">
				  <div class="card-body">
				  	<div style="text-align: center">
					<img src="assets/image/icon_title.png" width="220" height="220"> </div>
					    <h4 class="card-title text-primary text-center">Selamat Datang Di Restoran Kami</h4><br>
					    <h4 class="card-title text-primary text-center"><h5>Silahkan Mendaftar Apabila Anda Baru Pertama Kali Berkunjung Kesini. </h5></h4></p>
					    <br>
					    <div class="text-center">
					    	<a class="btn btn-primary" href="signup.php" style="margin-right:1rem">Daftar</a>
					    </div>
					    <h4 class="card-title text-primary text-center"><h5>Sudah Mendaftar ? Silahkan Login. </h5></p>
					    	<div class="text-center">
					    	<a class="btn btn-success" href="signin.php" style="margin-right:1rem"> Masuk</a>
					    </div>
					    <br>
				  </div>
				  <div style= "text-align: center">
				  <div class="card-footer text-muted">
				    <small>@Copyright 2018. Interface of Food Order Powered By ArhSoftwareDevelopment</smalls></div>
				  </div>
			</div>	
	    </div>
	    <div class="col-md-2">
	    </div>
	  </div>
	</div>
</body>
</html>
