<?php require('connection.php');?>
<?php require('cek_session_admin.php');?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Admin | FaceFood</title>
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
	  	<div class="col-md-2"></div>
	    <div class="col-md-8">
	    	<div style="padding:1rem">
		    	<div class="card">
		    		<div class="card-body">
				    	<a class="btn btn-primary float-md-right" href="add_food.php">Tambah Makanan</a>
				    	<h3>Kelola Makanan</h3>
				    	<table class="table table-striped bg-white table-hover">
							  <thead>
							    <tr class="bg-primary text-white">
							      <th scope="col">Foto</th>
							      <th scope="col">No</th>
							      <th scope="col">Nama Makanan</th>
							      <th scope="col">Ketersediaan</th>
							      <th scope="col">Harga</th>
							      <th scope="col">aksi</th>
							    </tr>
							  </thead>
							  <tbody> 
							  <?php
							  $query = "SELECT * FROM food";
							  $result = mysql_query($query);
							  $i=1;
							  while ($row = mysql_fetch_array($result,MYSQL_ASSOC)) { 
							  	echo "<td><img src='images/".$row['foto']."' width='150' height='100'></td>" ?> 
							      <td><?= $row['no']?></td>
							      <td><?= $row['nama']?></td>
							      <td><?= $row['ketersediaan']?></td>
							      <td><?= $row['harga']?></td>
							      <td>
							      	<a href="edit_food.php?no=<?=$row['no']?>">edit</a> |
							      	<a class="text-danger" href="delete_food.php?no=<?=$row['no']?>">hapus</a>
							      </td>
							    </tr>
							   <?php $i++;}?>
							  </tbody>
							</table>
						</div>
						<div class="card-body">
				    	<a class="btn btn-primary float-md-right" href="add_drink.php">Tambah Minuman</a>
				    	<h3>Kelola Minuman</h3>
				    	<table class="table table-striped bg-white table-hover">
							  <thead>
							    <tr class="bg-primary text-white">
							      <th scope="col">Foto</th>
							      <th scope="col">No</th>
							      <th scope="col">Nama Minuman</th>
							      <th scope="col">Ketersediaan</th>
							      <th scope="col">Harga</th>
							      <th scope="col">aksi</th>
							    </tr>
							  </thead>
							  <tbody>
							  <?php
							  $query = "SELECT * FROM drink";
							  $result = mysql_query($query);
							  $i=1;
							  while ($row = mysql_fetch_array($result,MYSQL_ASSOC)) { 
							  	echo "<td><img src='images/".$row['foto']."' width='150' height='100'></td>" ?>  
							      <td><?= $row['no']?></td>
							      <td><?= $row['nama']?></td>
							      <td><?= $row['ketersediaan']?></td>
							      <td><?= $row['harga']?></td>
							      <td>
							      	<a href="edit_drink.php?no=<?=$row['no']?>">edit</a> |
							      	<a class="text-danger" href="delete_drink.php?no=<?=$row['no']?>">hapus</a>
							      </td>
							    </tr>
							   <?php $i++;}?>
							  </tbody>
							</table>
						</div>
						<div class="card-body">
				    	<a class="btn btn-primary float-md-right" href="add_dessert.php">Tambah Dessert</a>
				    	<h3>Kelola Dessert</h3>
				    	<table class="table table-striped bg-white table-hover">
							  <thead>
							    <tr class="bg-primary text-white">
							      <th scope="col">Foto</th>
							      <th scope="col">No</th>
							      <th scope="col">Nama Minuman</th>
							      <th scope="col">Ketersediaan</th>
							      <th scope="col">Harga</th>
							      <th scope="col">aksi</th>
							    </tr>
							  </thead>
							  <tbody>
							  <?php
							  $query = "SELECT * FROM dessert";
							  $result = mysql_query($query);
							  $i=1;
							  while ($row = mysql_fetch_array($result,MYSQL_ASSOC)) { 
							  	echo "<td><img src='images/".$row['foto']."' width='150' height='100'></td>" ?>  
							      <td><?= $row['no']?></td>
							      <td><?= $row['nama']?></td>
							      <td><?= $row['ketersediaan']?></td>
							      <td><?= $row['harga']?></td>
							      <td>
							      	<a href="edit_dessert.php?no=<?=$row['no']?>">edit</a> |
							      	<a class="text-danger" href="delete_dessert.php?no=<?=$row['no']?>">hapus</a>
							      </td>
							    </tr>
							   <?php $i++;}?>
							  </tbody>
							</table>
						</div>
					<div class="card-body">
				    	<h3>Log Pengunjung</h3>
				    	<table class="table table-striped bg-white table-hover">
							  <thead>
							    <tr class="bg-primary text-white">
							      <th scope="col">No</th>
							      <th scope="col">Nama Lengkap</th>
							      <th scope="col">Username</th>
							      <th scope="col">Email</th>
							      <th scope="col">Status</th>
							      <th scope="col">aksi</th>
							    </tr>
							  </thead>
							  <?php
							  $query = "SELECT * FROM user";
							  $result = mysql_query($query);
							  $i=1;
							  while ($row = mysql_fetch_array($result,MYSQL_ASSOC)) {?>
							  <tbody>
							    <tr>
							      <th scope="row"><?=$i?></th>
							      <td><?= $row['fullname']?></td>
							      <td><?= $row['username']?></td>
							      <td><?= $row['email']?></td>
							      <td><?= $row['role']?></td>
							      <td>
							      	<a href="edit_user.php?id=<?=$row['id']?>">edit</a> |
							      	<a class="text-danger" href="delete_user.php?id=<?=$row['id']?>">hapus</a>
							      </td>
							    </tr>
							   <?php $i++;}?>
							  </tbody>
							</table>
						</div>
					</div>
	    		</div>
	    	</div>
	    </div>
	  </div>
	</div>
</body>
</html>