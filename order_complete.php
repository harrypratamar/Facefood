<?php require('connection.php');?>
<?php require('cek_session_login.php');?>
<?php 
if(isset($_SESSION['fullname']))
{
?>
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta charset="utf-8">
  <link rel="shortcut icon" href="icon.png">
  <title>Menu Makanan | Face Food</title>
  <!-- <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css"> -->
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
  <script type="text/javascript" src="assets/js/jQuery-2.1.4.min.js"></script>
  <!-- <script type="text/javascript" src="assets/js/bootstrap.js"></script> -->
  <script type="text/javascript" src="assets/js/bootstrap.js"></script>
  <link rel="stylesheet" href="assets/css/main.css" />
  <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
  <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- Google fonts - Roboto-->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,700">
    <!-- Bootstrap Select-->
  <link rel="stylesheet" href="vendor/bootstrap-select/css/bootstrap-select.min.css">
    <!-- owl carousel-->
  <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.css">
  <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.css">
    <!-- theme stylesheet-->
  <style type="text/css">
		body {
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		background-image: url("assets/image/Background_home.png");
		background-size:cover;
		background-attachment: fixed;
        }
	</style>
</head>
<body class="subpage">
<body class="bg-default" style="background-color:#fafafa">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-1"></div>
      <div class="col-md-10">
      <div style="opacity: 0.9">
        <div class="card" style="margin-top:1rem;margin-bottom:1rem">
          <div class="card-body">
            <a class="btn btn-outline-danger my-2 my-sm-0" href="order_cart.php"><= Kembali Ke Daftar Pesanan</a>
            <a class="btn btn-danger my-2 my-sm-0" href="signout_process.php">Keluar</a></div>
            <br><br>
				  	<div style="text-align: center"> 
          <h6><th scope="col">Terima Kasih Kepada Tn / Nn, <?php echo $_SESSION['fullname'] ?> Atas Pesanan Menu di Restoran Kami</th></h6>
        <a href='javascript:;'' onClick='window.print()'><div style="text-align: right" class="col-md-12"><p></p><img src="print.png" width="30" height="30"></div></a>
	<div style="text-align: center;">
					<h4><img src="assets/image/icon_title.png" width="100" height="100">Daftar Pesanan</h4></div> </div>		
	<div id="all">
      <div class="container-fluid">
    <div class="row">
      <div class="col-md-0"></div>
      <div class="col-md-12">
        <div style="padding:1rem">
          <div class="card">
            <div class="card-body">
              <h5>Pesanan</h5>
                 <table class="table table-striped bg-white table-hover">
                <thead>
                  <tr class="text-black">
                    <th scope="col">Nama Menu</th>
                    <th scope="col">Harga Satuan</th>
                    <th scope="col">Jumlah Porsi</th>
                    <th scope="col">Total Harga</th>
                  </tr>
                </thead>
                <tbody> 
                <?php
                $query = ("SELECT * FROM orderfood WHERE namauser = '$_SESSION[fullname]'");
                $result = mysql_query($query);
                $i=1;
               while ($row = mysql_fetch_array($result,MYSQL_ASSOC)) {?> 
                    <td><?= $row['nama']?></td>
                    <td><?= $row['harga']?></td>
                    <td><?= $row['jumlah']?></td>
                    <td><?= $row['totalharga']?></td>
                  </td>
                </tr>
                 <?php $i++;}?>
              </tbody>
              </table>
              <table class="table table-striped bg-white table-hover">
                <thead>
                  <tr class="text-black">
                    <th scope="col">Nama Menu</th>
                    <th scope="col">Harga Satuan</th>
                    <th scope="col">Jumlah Porsi</th>
                    <th scope="col">Total Harga</th>
                  </tr>
                </thead>
                <tbody> 
              <?php
                $query = ("SELECT * FROM orderdrink WHERE namauser = '$_SESSION[fullname]'");
                $result = mysql_query($query);
                $i=1;
               while ($row = mysql_fetch_array($result,MYSQL_ASSOC)) {?> 
                    <td><?= $row['nama']?></td>
                    <td><?= $row['harga']?></td>
                    <td><?= $row['jumlah']?></td>
                    <td><?= $row['totalharga']?></td>
                </td>
                </tr>
                 <?php $i++;}?>
              </tbody>
              </table>
              <table class="table table-striped bg-white table-hover">
                <thead>
                  <tr class="text-black">
                    <th scope="col">Nama Menu</th>
                    <th scope="col">Harga Satuan</th>
                    <th scope="col">Jumlah Porsi</th>
                    <th scope="col">Total Harga</th>
                  </tr>
                </thead>
                <tbody> 
              <?php
                $query = ("SELECT * FROM orderdessert WHERE namauser = '$_SESSION[fullname]'");
                $result = mysql_query($query);
                $i=1;
               while ($row = mysql_fetch_array($result,MYSQL_ASSOC)) {?> 
                    <td><?= $row['nama']?></td>
                    <td><?= $row['harga']?></td>
                    <td><?= $row['jumlah']?></td>
                    <td><?= $row['totalharga']?></td>
                </td>
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