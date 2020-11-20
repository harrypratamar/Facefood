<?php require('connection.php');?>
<?php require('cek_session_admin.php');?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tambah Minuman</title>
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
				    	<h3>Data Minuman</h3>
					    <form method="post" action="add_drink_process.php" enctype="multipart/form-data">
							  <div class="form-group">
							    <label for="nomor">No</label>
							    <input name="no" type="text" class="form-control" required="">
							  </div>
							  <div class="form-group">
							    <label for="nama">Nama Minuman</label>
							    <input name="nama" type="text" class="form-control" required=""></div>
							   <div class="form-group">
							   	<td>Ketersedian</td>
							   	<br>
							    <input type="radio" name="ketersediaan" value="Habis"> Habis    
    							<input type="radio" name="ketersediaan" value="Masih"> Masih    
							  </div>
							  <div class="form-group">
							    <label for="harga">Harga</label>
							    <input name="harga" type="text" class="form-control" required=""></div>
							   <div class="form-group">
							    <label for="foto">Foto</label>
							    <input name="foto" type="file" class="form-control" required=""></div> 
								<br>
					    	<button class="btn btn-primary" type="submit">&nbsp;&nbsp;&nbsp;&nbsp;Tambah Minuman&nbsp;&nbsp;&nbsp;&nbsp;</button>
					    </form>
		    		</div>
		    	</div>
	    	</div>
	    </div>
	  </div>
	</div>

</body>
</html>
