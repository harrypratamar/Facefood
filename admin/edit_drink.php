<?php require('connection.php');?>
<?php require('cek_session_admin.php');?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Edit Minuman | Admin</title>
	<!-- <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css"> -->
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<script type="text/javascript" src="assets/js/jQuery-2.1.4.min.js"></script>
	<!-- <script type="text/javascript" src="assets/js/bootstrap.js"></script> -->
	<script type="text/javascript" src="assets/js/bootstrap.js"></script>
</head>
<body class="bg-default" style="background-color:#fafafa">
	<?php include('navbar_admin.php');?>
	<div class="container-fluid">
	  <div class="row">
	  	<div class="col-md-4"></div>
	    <div class="col-md-4">
	    	<div style="padding:1rem">
		    	<div class="card">
		    		<div class="card-body">
				    	<a class="btn btn-outline-warning float-md-right" href="admin.php">batal</a>
				    	<h3>Edit Minuman</h3>
				    	<?php
						$no=$_GET['no'];
						$query=mysql_query("select * from drink where no='$no'");
						?>
					    <form method="post" action="edit_drink_process.php?no=<?php echo $no; ?>">
					    <?php
						while($row=mysql_fetch_array($query)){
						?>
							   <div class="form-group">
							    <label for="nomor">No</label>
							    <input name="no" type="text" class="form-control" required="" value="<?php echo $row['no']; ?>">
							  </div>
							  <div class="form-group">
							    <label for="nama">Nama Minuman</label>
							    <input name="nama" type="text" class="form-control" required="" value="<?php echo $row['nama']; ?>"></div>
							   	<td>Ketersedian</td>
							   	<br>
							   	<?php if($row['ketersediaan'] == "Masih"){
							    	echo "<input type='radio' name='ketersediaan' value='Masih' checked='checked'> Masih";    
    								echo "<input type='radio' name='ketersediaan' value='Habis'> Habis";
    							}else{
    								echo "<input type='radio' name='ketersediaan' value='Masih' checked='checked'> Masih";    
    								echo "<input type='radio' name='ketersediaan' value='Habis'> Habis";
    							}
    							?> 
							  <div class="form-group">
							    <label for="harga">Harga</label>
							    <input name="harga" type="text" class="form-control" required="" value="<?php echo $row['harga']; ?>"></div>
					    	<button class="btn btn-primary" type="submit">&nbsp;&nbsp;&nbsp;&nbsp;Update&nbsp;&nbsp;&nbsp;&nbsp;</button>
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
