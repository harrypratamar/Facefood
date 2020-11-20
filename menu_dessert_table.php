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
  <link rel="shortcut icon" href="icon.png">
	<title>Menu Dessert | Face Food</title>
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
<body class="bg-default" style="background-color:#fafafa">
	<div class="container-fluid">
	  <div class="row">
	  	<div class="col-md-1"></div>
	    <div class="col-md-10">
	    <div style="opacity: 0.9">
	    	<div class="card" style="margin-top:1rem;margin-bottom:1rem">
				  <div class="card-body">
				  	<div style="text-align: right">
				  <a class="btn btn-outline-danger my-2 my-sm-0" href="menu.php">Menu Utama</a> </div>
         <h6><th scope="col">Hai, 
         <?php echo $_SESSION['fullname'] ?></th></h6>
         <br><br>
          <a href="order_cart.php"><div style="text-align: right" class="col-md-1"><img src="cart.png" width="30" height="30"></div></a> 		  
	<div style="text-align: center">
					<img src="assets/image/icon_title.png" width="220" height="220"></div>
				<div style="text-align: center">
					<img src="assets/image/main_menu.png" width="500" height="70"></div> 		
	<div id="all">
      <div class="container-fluid">
    <div class="row">
      <div class="col-md-0"></div>
      <div class="col-md-12">
        <div style="padding:1rem">
          <div class="card">
            <div class="card-body">
              <h3>Menu Dessert</h3>
              <table class="table table-striped bg-white table-hover">
                <thead>
                  <tr class="bg-warning text-white">
                    <th scope="col">Foto</th>
                    <th scope="col">No</th>
                    <th scope="col">Nama Makanan</th>
                    <th scope="col">Ketersediaan</th>
                    <th scope="col">Harga</th>
                    <th scope="col">    </th>
                  </tr>
                </thead>
                <tbody> 
                <?php
                $query = "SELECT * FROM dessert";
                $result = mysql_query($query);
                $i=1;
                while ($row = mysql_fetch_array($result,MYSQL_ASSOC)) { 
                  echo "<td><img src='admin/images/".$row['foto']."' width='150' height='100'></td>" ?> 
                    <td><?= $row['no']?></td>
                    <td><?= $row['nama']?></td>
                    <td><?= $row['ketersediaan']?></td>
                    <td><?= $row['harga']?></td>
                    <td>
                      <?php if($row['ketersediaan'] == "Masih"){?>
                      <a class="btn btn-warning btn-m" id=test href="order_dessert.php?no=<?=$row['no']?>">Pesan
                      <script>
                          document.getElementById("test").disabled = true;
                      </script>
                      </a></td>
                      <?php $i++;}?>
                  </tr>
                 <?php $i++;}?>
                </tbody>
              </table>
            </div>
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
<?php
}