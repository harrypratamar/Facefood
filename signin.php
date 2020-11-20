<?php require('connection.php');?>
<?php require('cek_session_login.php');?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Face Food | Masuk</title>
	<link rel="shortcut icon" href="icon.png">
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
	    <br><br><br><br>
	    <div style="opacity: 0.9">
	  	 	<div class="card" style="margin-top:1rem;margin-bottom:1rem">
			<div class="card-body">
				<a class="btn btn-outline-danger my-2 my-sm-0" href="home.php">Home</a>
				<div style="text-align: center">
					<img src="assets/image/icon_title.png" width="220" height="220"> </div>	
				  <div class="text-center">
					    <h4 class="card-title text-success">Masuk</h4>
					    <p class="card-text">Kami Menunggu Anda</p>
				  	</div><br>
				    <form method="post" action="signin_process.php">
						  <div class="form-group">
						    <label for="username">Username</label>
						    <input name="username" type="text" class="form-control" id="username">
						  </div>
						  <div class="form-group">
						    <label for="password">Password</label>
						    <input name="password" type="password" class="form-control" id="password">
						  </div>
							<br>
				    	<button class="btn btn-success" type="submit">&nbsp;&nbsp;&nbsp;&nbsp;Masuk&nbsp;&nbsp;&nbsp;&nbsp;
				    	</button>
				    	<br><br>
				    	<h6><a href="lupapass.php">Lupa Password ?</a></h6>
				    </form>
				  </div>
				   <div style= "text-align: center">
				  <div class="card-footer text-muted">
				    <small>@Copyright 2018. Interface of Food Order Powered By ArhWebDevelopment</small></div></div>
				  </div>
				</div>
	    </div>
	  </div>
	</div>
	</div>
</body>
</html>
