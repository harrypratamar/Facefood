<?php require('connection.php');?>
<?php require('cek_session_login.php');?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Face Food | Pendaftaran</title>
	<link rel="shortcut icon" href="icon.png">
	<!-- <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css"> -->
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="assets/css/styles.css">
	<script type="text/javascript" src="assets/js/jquery-3.2.1.min.js"></script>
	<script src="script.js"></script>
	<!-- <script type="text/javascript" src="assets/js/bootstrap.js"></script> -->
	<script type="text/javascript" src="assets/js/bootstrap.js"></script>
	<style type="text/css">
		body {
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		background-image: url("assets/image/Background_home.png");
		background-size:cover;
		background-attachment: fixed;
	</style>
</head>
<body>
	    <div class="container-fluid">
	    	<div class="row">
	    	<div class="col-md-4">
	    	</div>
	    	<div class="col-md-4">
	    	<br><br><br><br><br><br>
	    	<div style="opacity: 0.8">
	    	<div class="card" style="margin-top:1rem;margin-bottom:1rem">
				  <div class="card-body">
				  	<a class="btn btn-outline-danger my-2 my-sm-0" href="home.php">Home</a>
				  	<div style="text-align: center">
					<img src="assets/image/icon_title.png" width="220" height="220"> </div>
				  	<div class="text-center">
					    <h4 class="card-title text-primary">Buat Akun Baru</h4>
					    <p class="card-text">Silakan Buat Akun Baru Disini</p>
				  	</div><br>
				    <form method="post" action="signup_process.php">
						  <div class="form-group">
						    <label for="nama">Nama Lengkap</label>
						    <input name="fullname" type="text" class="form-control" id="nama" required="">
						  </div>
						  <div class="form-group">
						    <label for="email">Email</label>
						    <input name="email" type="email" class="form-control" id="email" required="">
						  </div>
						  <div class="form-group">
						    <label for="username">Username</label>
						    <input name="username" type="text" class="form-control" id="username" required="">
						  </div>
						  <div class="form-group">
						    <label for="password">Password</label>
						    <input name="password" type="password" class="form-control" id="password" required="">
						  </div>
						  <div class="form-check">
							  <input class="form-check-input" type="checkbox" value="" id="sdkb" required="">
							  <label class="form-check-label" for="sdkb">
							    Dengan ini saya menyetujui <a href="sk.php">syarat dan ketentuan</a> yang berlaku
							  </label>
							</div>
							<br>
				    	<button class="btn btn-primary" type="submit">&nbsp;&nbsp;&nbsp;&nbsp;Buat Akun&nbsp;&nbsp;&nbsp;&nbsp;</button>
				    </form>
				  </div>
				  <div style= "text-align: center">
				  <div class="card-footer text-muted">
				    <small>@Copyright 2018. Interface of Food Order Powered By ArhSoftwareDevelopment</small></div></div>
				  </div>
				</div>
	    </div>
	  </div>
	</div>
	</div>
</body>
</html>
