<?php require('connection.php');?>
<?php require('cek_session_login.php');?>
<?php 
if(isset($_SESSION['fullname']))
{
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Menu Dessert | Face Food</title>
	<!-- <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css"> -->
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<script type="text/javascript" src="assets/js/jQuery-2.1.4.min.js"></script>
	<!-- <script type="text/javascript" src="assets/js/bootstrap.js"></script> -->
	<script type="text/javascript" src="assets/js/bootstrap.js"></script>
	<script type="text/javascript"></script>
	<style type="text/css">
		body {
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		background-image: url("assets/image/Background_home.png");
		background-size:cover;
		background-attachment: fixed;
        }
	</style>
</head>
<body class="bg-default" style="background-color:#fafafa">
	<div class="container-fluid">
	  <div class="row">
	  	<div class="col-md-3"></div>
	    <div class="col-md-6">
	    <div style="opacity: 0.9">
	    	<div class="card" style="margin-top:1rem;margin-bottom:1rem">
				  <div class="card-body">
				  	<div style="text-align: right">
				  <a class="btn btn-outline-danger my-2 my-sm-0" href="menu.php">Batal</a> </div>		  
				<div style="text-align: center">
					<img src="assets/image/icon_title.png" width="220" height="220"></div>
				<div style="text-align: center">
					<img src="assets/image/main_menu.png" width="500" height="70"></div> 
	    	<div style="padding:1rem">
		    	<div class="card">
		    		<div class="card-body">
				    	<a class="btn btn-outline-warning float-md-right" href="menu_dessert.php">Pesan Dessert Lain</a>
				    	<h3>Pesan Dessert</h3>
				    	<?php
						$no=$_GET['no'];
						$query=mysql_query("select * from dessert where no='$no'");
						?>
					    <form name="food" method="post" action="order_dessert_process.php?no=<?php echo $no; ?>">
					    <?php
						while($row=mysql_fetch_array($query)){
						?>
							<div class="form-group">
							    <label for="namauser">Nama Pemesan</label>
							    <input name="namauser" type="text" class="form-control" required="" readonly value="<?php echo $_SESSION['fullname'] ?>" >
							  </div>
							<div class="form-group">
							    <label for="nomor">No Meja</label>
							    <input name="no" type="text" class="form-control" required="">
							  </div>
							<div class="form-group">
							    <label for="nama">Nama Desert</label>
							    <td><input name="nama" type="text" class="form-control" readonly value="<?php echo $row['nama']; ?>"></div></td>
							<div class="form-group">
							    <label for="harga">Harga</label>
							    <input name="harga" type="text" class="form-control" readonly value="<?php echo $row['harga']; ?>" onFocus="startCalc();" onBlur="stopCalc();"></div>
							<div class="form-group">  
                      			<label for="nama">Jumlah</label>  
                      			<input name="jumlah" type="text" class="form-control" required="" id="jumlah" style="width:60px"></div> 
							<div class="form-group">
							    <label for="catatan">Catatan Lain (optional)</label>
							    <input name="catatan" type="text" class="form-control"></div>      
					    	<button class="btn btn-outline-warning" type="submit">&nbsp;&nbsp;&nbsp;&nbsp;Tambah Ke Daftar Pesanan&nbsp;&nbsp;&nbsp;&nbsp;</button>
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
<?php
}