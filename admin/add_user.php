<?php require('connection.php');?>
<?php require('cek_session_admin.php');?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Masuk</title>
	<!-- <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css"> -->
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<script type="text/javascript" src="assets/js/jQuery-2.1.4.min.js"></script>
	<!-- <script type="text/javascript" src="assets/js/bootstrap.js"></script> -->
	<script type="text/javascript" src="assets/js/bootstrap.js"></script>
</head>
<body class="bg-default" style="background-color:transparent;">
	<?php include('navbar_admin.php');?>
	<div class="container-fluid">
	  <div class="row">
	  	<div class="col-md-4"></div>
	    <div class="col-md-4">
	    	<div style="padding:1rem">
		    	<div class="card">
		    		<div class="card-body">
				    	<h3>Customer Data</h3>
					    <form method="post" action="add_user_process.php">
							  <div class="form-group">
							    <label for="nama">Nama Lengkap</label>
							    <input name="fullname" type="text" class="form-control" id="nama" required="">
							  </div>
							  
							  <div class="form-group">
							    <label for="email">Email</label>
							    <input name="email" type="email" class="form-control" id="email" required="">
								<br>
					    	<button class="btn btn-primary" type="submit">&nbsp;&nbsp;&nbsp;&nbsp;Tambah User&nbsp;&nbsp;&nbsp;&nbsp;</button>
					    </form>
		    		</div>
		    	</div>
	    	</div>
	    </div>
	  </div>
	</div>

</body>
</html>
