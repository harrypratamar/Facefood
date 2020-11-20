<?php require('connection.php');?>
<?php require('cek_session_admin.php');?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv='refresh' content='10; admin_kitchen.php'/>"
	<title>Admin Dapur | FaceFood</title>
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
	  	<div class="col-md-1"></div>
	    <div class="col-md-12">
	    	<div style="padding:1rem">
		    	<div class="card">
		    		<div class="card-body">
				    	<h3>Daftar Pesanan Makanan</h3>
				    	<table class="table table-striped bg-white table-hover">
							  <thead>
							    <tr class="bg-primary text-white">
							      <th scope="col">No Meja</th>
							      <th scope="col">Nama Pemesan</th>
							      <th scope="col">Nama Makanan</th>
							      <th scope="col">Jumlah Pesanan</th>
							      <th scope="col">Catatan</th>
							      <th scope="col">Hapus Apabila Pesanan Sudah Selesai</th>
							    </tr>
							  </thead>
							  <?php
							  $query = "SELECT * FROM orderfood";
							  $result = mysql_query($query);
							  $i=1;
							  while ($row = mysql_fetch_array($result,MYSQL_ASSOC)) {?>
							  <tbody>
							    <tr>
							      <td><?= $row['no']?></td>
							      <td><?= $row['namauser']?></td>
							      <td><?= $row['nama']?></td>
							      <td><?= $row['jumlah']?></td>
							      <td><?= $row['catatan']?></td>
							      <td>
							      	<a class="text-danger" href="delete_order_food.php?namauser=<?=$row['namauser']?>">Hapus Pesanan</a>
							      </td>
							    </tr>
							</td>
							   <?php $i++;}?>
							  </tbody>
							</table>
						</div>
						<div class="card-body">
				    	<h3>Daftar Pesanan Makanan</h3>
				    	<table class="table table-striped bg-white table-hover">
							  <thead>
							    <tr class="bg-primary text-white">
							      <th scope="col">No Meja</th>
							      <th scope="col">Nama Pemesan</th>
							      <th scope="col">Nama Makanan</th>
							      <th scope="col">Jumlah Pesanan</th>
							      <th scope="col">Catatan</th>
							      <th scope="col">Hapus Apabila Pesanan Sudah Selesai</th>
							    </tr>
							  </thead>
							  <?php
							  $query = "SELECT * FROM orderdrink";
							  $result = mysql_query($query);
							  $i=1;
							  while ($row = mysql_fetch_array($result,MYSQL_ASSOC)) {?>
							  <tbody>
							    <tr>
							      <td><?= $row['no']?></td>
							      <td><?= $row['namauser']?></td>
							      <td><?= $row['nama']?></td>
							      <td><?= $row['jumlah']?></td>
							      <td><?= $row['catatan']?></td>
							      <td>
							      	<a class="text-danger" href="delete_order_drink.php?namauser=<?=$row['namauser']?>">Hapus Pesanan</a>
							      </td>
							    </tr>
							   <?php $i++;}?>
							  </tbody>
							</table>
						</div>
						<div class="card-body">
				    	<h3>Daftar Pesanan Makanan</h3>
				    	<table class="table table-striped bg-white table-hover">
							  <thead>
							    <tr class="bg-primary text-white">
							      <th scope="col">No Meja</th>
							      <th scope="col">Nama Pemesan</th>
							      <th scope="col">Nama Makanan</th>
							      <th scope="col">Jumlah Pesanan</th>
							      <th scope="col">Catatan</th>
							      <th scope="col">Hapus Apabila Pesanan Sudah Selesai</th>
							    </tr>
							  </thead>
							  <?php
							  $query = "SELECT * FROM orderdessert";
							  $result = mysql_query($query);
							  $i=1;
							  while ($row = mysql_fetch_array($result,MYSQL_ASSOC)) {?>
							  <tbody>
							    <tr>
							      <td><?= $row['no']?></td>
							      <td><?= $row['namauser']?></td>
							      <td><?= $row['nama']?></td>
							      <td><?= $row['jumlah']?></td>
							      <td><?= $row['catatan']?></td>
							      <td>
							      	<a class="text-danger" href="delete_order_dessert.php?namauser=<?=$row['namauser']?>">Hapus Pesanan</a>
							      </td>
							    </tr>
							   <?php $i++;}?>
							  </tbody>
							</table>
					<div class="card-body">
						</div>
					</div>
	    		</div>
	    	</div>
	    </div>
	  </div>
	</div>
</body>
</html>