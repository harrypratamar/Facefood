<?php require('connection.php');?>
<?php require('cek_session_login.php');?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Edit Pesanan Minuman</title>
	<!-- <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css"> -->
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<script type="text/javascript" src="assets/js/jQuery-2.1.4.min.js"></script>
	<!-- <script type="text/javascript" src="assets/js/bootstrap.js"></script> -->
	<script type="text/javascript" src="assets/js/bootstrap.js"></script>
</head>
<body class="bg-default" style="background-color:#fafafa">
	<div class="container-fluid">
	  <div class="row">
	  	<div class="col-md-4"></div>
	    <div class="col-md-4">
	    	<div style="padding:1rem">
		    	<div class="card">
		    		<div class="card-body">
				    	<h3>Edit Pesanan Minuman</h3>
				    	<?php
						$nama=$_GET['nama'];
						$query=mysql_query("select * from orderdrink where nama='$nama'");
						?>
					    <form method="post" action="edit_order_drink_process.php">
					    <?php
						while($row=mysql_fetch_array($query)){
						?>
							  <div class="form-group">
							    <label for="nama">Nama Minuman </label> 
							    <input name="nama" type="text" class="form-control" id="nama" required="" readonly="" value="<?php echo $row['nama'] ?>">
							  </div>
							  <div class="form-group">
							    <label for="jumlah">Jumlah</label>
							    <input name="jumlah" type="text" class="form-control" id="jumlah" required="" value="<?php echo $row['jumlah']; ?>">
							  </div>
							  <div class="form-group">
							    <label for="catatan">Catatan</label>
							    <input name="catatan" type="text" class="form-control" id="catatan" value="<?php echo $row['catatan']; ?>">
							  </div>
								<br>
					    	<button class="btn btn-primary" type="submit">&nbsp;&nbsp;&nbsp;&nbsp;Update&nbsp;&nbsp;&nbsp;&nbsp;</button>
					    	<a class="btn btn-outline-danger" href="delete_order_drink.php?nama=<?=$row['nama']?>">Hapus Pesanan</a>
					    	<?php
								}
							  ?>
					    </form>
		    		</div>
		    	</div>
	    	</div>
	    </div>
	  </div>
	</div>
</body>
</html>
