<?php require('connection.php');?>
<?php require('cek_session_login.php');?>
<?php 
if(isset($_SESSION['fullname']))
{
?>
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
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
  <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
  <link rel="stylesheet" href="css/custom.css">
	<style type="text/css">
		body {
    min-width:230px;
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
				  	<div style="text-align: right">
				  <a class="btn btn-outline-danger my-2 my-sm-0" href="menu.php">Menu Utama</a> </div>  
          <h3><th scope="col">Hai, 
         <?php echo $_SESSION['fullname'] ?></th></h3>
         <br><br>
         <a href="order_cart.php?nama=<?=$_SESSION['fullname']?>"><div style="text-align: right" class="col-md-1"><img src="cart.png" width="30" height="30"></div></a> 
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
             <div id="content">
        <div class="container">
            <div class="col-md-15">
              <h6 class="text-muted lead" style="text-align: center">Dibawah ini adalah Pilihan Menu Maknanan di Restoran Kami </h6>
              <br><br>
              <div class="row products products-big">
                <div class="col-lg-4 col-md-6">
                  <div class="product">
                    <div class="image"><alt="" class="img-fluid image1">
                    <?php
                    $query = "SELECT * FROM food where no='1'";
                    $result = mysql_query($query);
                    $i=1;
                    while ($row = mysql_fetch_array($result,MYSQL_ASSOC)) {  
                      echo "<td><img src='admin/images/".$row['foto']."' width='250' height='200'></td>" ?> <alt="" class="img-fluid image1"></a></div>
                      <h3 class="h3"><?= $row['nama']?></h3>
                      <h3 class="h4"><?= $row['ketersediaan']?></h3>
                      <p class="price">Rp. <?=$row['harga']?></p>
                      <?php if($row['ketersediaan'] == "Masih"){?>
                      <a class="btn btn-success btn-m" id=test href="order_food.php?no=<?=$row['no']?>">Pesan
                      <script>
                          document.getElementById("test").disabled = true;
                      </script>
                      </a></td>
                      <?php $i++;}?>
                  </div>
                </div>
                <?php }?>
                <div class="col-lg-4 col-md-6">
                  <div class="product">
                    <div class="image"><alt="" class="img-fluid image1">
                    <?php
                    $query = "SELECT * FROM food where no='2'";
                    $result = mysql_query($query);
                    $i=1;
                    while ($row = mysql_fetch_array($result,MYSQL_ASSOC)) {  
                      echo "<td><img src='admin/images/".$row['foto']."' width='250' height='200'></td>" ?> <alt="" class="img-fluid image1"></a></div>
                      <h3 class="h3"><?= $row['nama']?></h3>
                      <h3 class="h4"><?= $row['ketersediaan']?></h3>
                      <p class="price">Rp. <?=$row['harga']?></p>
                      <?php if($row['ketersediaan'] == "Masih"){?>
                      <a class="btn btn-success btn-m" id=test href="order_food.php?no=<?=$row['no']?>">Pesan
                      <script>
                          document.getElementById("test").disabled = true;
                      </script>
                      </a></td>
                      <?php $i++;}?>
                  </div>
                </div>
                <?php }?>
                <div class="col-lg-4 col-md-6">
                  <div class="product">
                    <div class="image"><alt="" class="img-fluid image1">
                    <?php
                    $query = "SELECT * FROM food where no='3'";
                    $result = mysql_query($query);
                    $i=1;
                    while ($row = mysql_fetch_array($result,MYSQL_ASSOC)) {  
                      echo "<td><img src='admin/images/".$row['foto']."' width='250' height='200'></td>" ?> <alt="" class="img-fluid image1"></a></div>
                      <h3 class="h3"><?= $row['nama']?></h3>
                      <h3 class="h4"><?= $row['ketersediaan']?></h3>
                      <p class="price">Rp. <?=$row['harga']?></p>
                      <?php if($row['ketersediaan'] == "Masih"){?>
                      <a class="btn btn-success btn-m" id=test href="order_food.php?no=<?=$row['no']?>">Pesan
                      <script>
                          document.getElementById("test").disabled = true;
                      </script>
                      </a></td>
                      <?php $i++;}?>
                  </div>
                </div>
                <?php }?>
                <div class="col-lg-4 col-md-6">
                  <div class="product">
                    <div class="image"><alt="" class="img-fluid image1">
                    <?php
                    $query = "SELECT * FROM food where no='4'";
                    $result = mysql_query($query);
                    $i=1;
                    while ($row = mysql_fetch_array($result,MYSQL_ASSOC)) {  
                      echo "<td><img src='admin/images/".$row['foto']."' width='250' height='200'></td>" ?> <alt="" class="img-fluid image1"></a></div>
                      <h3 class="h3"><?= $row['nama']?></h3>
                      <h3 class="h4"><?= $row['ketersediaan']?></h3>
                      <p class="price">Rp. <?=$row['harga']?></p>
                      <?php if($row['ketersediaan'] == "Masih"){?>
                      <a class="btn btn-success btn-m" id=test href="order_food.php?no=<?=$row['no']?>">Pesan
                      <script>
                          document.getElementById("test").disabled = true;
                      </script>
                      </a></td>
                      <?php $i++;}?>
                  </div>
                </div>
                <?php }?>
                <div class="col-lg-4 col-md-6">
                  <div class="product">
                    <div class="image"><alt="" class="img-fluid image1">
                    <?php
                    $query = "SELECT * FROM food where no='5'";
                    $result = mysql_query($query);
                    $i=1;
                    while ($row = mysql_fetch_array($result,MYSQL_ASSOC)) {  
                      echo "<td><img src='admin/images/".$row['foto']."' width='250' height='200'></td>" ?> <alt="" class="img-fluid image1"></a></div>
                      <h3 class="h3"><?= $row['nama']?></h3>
                      <h3 class="h4"><?= $row['ketersediaan']?></h3>
                      <p class="price">Rp. <?=$row['harga']?></p>
                      <?php if($row['ketersediaan'] == "Masih"){?>
                      <a class="btn btn-success btn-m" id=test href="order_food.php?no=<?=$row['no']?>">Pesan
                      <script>
                          document.getElementById("test").disabled = true;
                      </script>
                      </a></td>
                      <?php $i++;}?>
                  </div>
                </div>
                <?php }?>
                <div class="col-lg-4 col-md-6">
                 <div class="product">
                    <div class="image"><alt="" class="img-fluid image1">
                    <?php
                    $query = "SELECT * FROM food where no='6'";
                    $result = mysql_query($query);
                    $i=1;
                    while ($row = mysql_fetch_array($result,MYSQL_ASSOC)) {  
                      echo "<td><img src='admin/images/".$row['foto']."' width='250' height='200'></td>" ?> <alt="" class="img-fluid image1"></a></div>
                      <h3 class="h3"><?= $row['nama']?></h3>
                      <h3 class="h4"><?= $row['ketersediaan']?></h3>
                      <p class="price">Rp. <?=$row['harga']?></p>
                      <?php if($row['ketersediaan'] == "Masih"){?>
                      <a class="btn btn-success btn-m" id=test href="order_food.php?no=<?=$row['no']?>">Pesan
                      <script>
                          document.getElementById("test").disabled = true;
                      </script>
                      </a></td>
                      <?php $i++;}?>
                  </div>
                </div>
                <?php }?>
                <div class="col-lg-4 col-md-6">
                  <div class="product">
                    <div class="image"><alt="" class="img-fluid image1">
                    <?php
                    $query = "SELECT * FROM food where no='7'";
                    $result = mysql_query($query);
                    $i=1;
                    while ($row = mysql_fetch_array($result,MYSQL_ASSOC)) {  
                      echo "<td><img src='admin/images/".$row['foto']."' width='250' height='200'></td>" ?> <alt="" class="img-fluid image1"></a></div>
                      <h3 class="h3"><?= $row['nama']?></h3>
                      <h3 class="h4"><?= $row['ketersediaan']?></h3>
                      <p class="price">Rp. <?=$row['harga']?></p>
                      <?php if($row['ketersediaan'] == "Masih"){?>
                      <a class="btn btn-success btn-m" id=test href="order_food.php?no=<?=$row['no']?>">Pesan
                      <script>
                          document.getElementById("test").disabled = true;
                      </script>
                      </a></td>
                      <?php $i++;}?>
                  </div>
                </div>
                <?php }?>
                <div class="col-lg-4 col-md-6">
                  <div class="product">
                    <div class="image"><alt="" class="img-fluid image1">
                    <?php
                    $query = "SELECT * FROM food where no='8'";
                    $result = mysql_query($query);
                    $i=1;
                    while ($row = mysql_fetch_array($result,MYSQL_ASSOC)) {  
                      echo "<td><img src='admin/images/".$row['foto']."' width='250' height='200'></td>" ?> <alt="" class="img-fluid image1"></a></div>
                      <h3 class="h3"><?= $row['nama']?></h3>
                      <h3 class="h4"><?= $row['ketersediaan']?></h3>
                      <p class="price">Rp. <?=$row['harga']?></p>
                      <?php if($row['ketersediaan'] == "Masih"){?>
                      <a class="btn btn-success btn-m" id=test href="order_food.php?no=<?=$row['no']?>">Pesan
                      <script>
                          document.getElementById("test").disabled = true;
                      </script>
                      </a></td>
                      <?php $i++;}?>
                  </div>
                </div>
                <?php }?>
                <div class="col-lg-4 col-md-6">
                  <div class="product">
                    <div class="image"><alt="" class="img-fluid image1">
                    <?php
                    $query = "SELECT * FROM food where no='9'";
                    $result = mysql_query($query);
                    $i=1;
                    while ($row = mysql_fetch_array($result,MYSQL_ASSOC)) {  
                      echo "<td><img src='admin/images/".$row['foto']."' width='250' height='200'></td>" ?> <alt="" class="img-fluid image1"></a></div>
                      <h3 class="h3"><?= $row['nama']?></h3>
                      <h3 class="h4"><?= $row['ketersediaan']?></h3>
                      <p class="price">Rp. <?=$row['harga']?></p>
                      <?php if($row['ketersediaan'] == "Masih"){?>
                      <a class="btn btn-success btn-m" id=test href="order_food.php?no=<?=$row['no']?>">Pesan
                      <script>
                          document.getElementById("test").disabled = true;
                      </script>
                      </a></td>
                      <?php $i++;}?>
                  </div>
                </div>
                <?php }?>
                <div class="col-lg-4 col-md-6">
                  <div class="product">
                    <div class="image"><alt="" class="img-fluid image1">
                    <?php
                    $query = "SELECT * FROM food where no='10'";
                    $result = mysql_query($query);
                    $i=1;
                    while ($row = mysql_fetch_array($result,MYSQL_ASSOC)) {  
                      echo "<td><img src='admin/images/".$row['foto']."' width='250' height='200'></td>" ?> <alt="" class="img-fluid image1"></a></div>
                      <h3 class="h3"><?= $row['nama']?></h3>
                      <h3 class="h4"><?= $row['ketersediaan']?></h3>
                      <p class="price">Rp. <?=$row['harga']?></p>
                      <?php if($row['ketersediaan'] == "Masih"){?>
                      <a class="btn btn-success btn-m" id=test href="order_food.php?no=<?=$row['no']?>">Pesan
                      <script>
                          document.getElementById("test").disabled = true;
                      </script>
                      </a></td>
                      <?php $i++;}?>
                  </div>
                </div>
                <?php }?>
                <div class="col-lg-4 col-md-6">
                  <div class="product">
                    <div class="image"><alt="" class="img-fluid image1">
                    <?php
                    $query = "SELECT * FROM food where no='11'";
                    $result = mysql_query($query);
                    $i=1;
                    while ($row = mysql_fetch_array($result,MYSQL_ASSOC)) {  
                      echo "<td><img src='admin/images/".$row['foto']."' width='250' height='200'></td>" ?> <alt="" class="img-fluid image1"></a></div>
                      <h3 class="h3"><?= $row['nama']?></h3>
                      <h3 class="h4"><?= $row['ketersediaan']?></h3>
                      <p class="price">Rp. <?=$row['harga']?></p>
                      <?php if($row['ketersediaan'] == "Masih"){?>
                      <a class="btn btn-success btn-m" id=test href="order_food.php?no=<?=$row['no']?>">Pesan
                      <script>
                          document.getElementById("test").disabled = true;
                      </script>
                      </a></td>
                      <?php $i++;}?>
                  </div>
                </div>
                <?php }?>
                <div class="col-lg-4 col-md-6">
                 <div class="product">
                    <div class="image"><alt="" class="img-fluid image1">
                    <?php
                    $query = "SELECT * FROM food where no='12'";
                    $result = mysql_query($query);
                    $i=1;
                    while ($row = mysql_fetch_array($result,MYSQL_ASSOC)) {  
                      echo "<td><img src='admin/images/".$row['foto']."' width='250' height='200'></td>" ?> <alt="" class="img-fluid image1"></a></div>
                      <h3 class="h3"><?= $row['nama']?></h3>
                      <h3 class="h4"><?= $row['ketersediaan']?></h3>
                      <p class="price">Rp. <?=$row['harga']?></p>
                      <?php if($row['ketersediaan'] == "Masih"){?>
                      <a class="btn btn-success btn-m" id=test href="order_food.php?no=<?=$row['no']?>">Pesan
                      <script>
                          document.getElementById("test").disabled = true;
                      </script>
                      </a></td>
                      <?php $i++;}?>
                  </div>
                </div>
                <?php }?>
                <div class="col-lg-4 col-md-6">
                 <div class="product">
                    <div class="image"><alt="" class="img-fluid image1">
                    <?php
                    $query = "SELECT * FROM food where no='13'";
                    $result = mysql_query($query);
                    $i=1;
                    while ($row = mysql_fetch_array($result,MYSQL_ASSOC)) {  
                      echo "<td><img src='admin/images/".$row['foto']."' width='250' height='200'></td>" ?> <alt="" class="img-fluid image1"></a></div>
                      <h3 class="h3"><?= $row['nama']?></h3>
                      <h3 class="h4"><?= $row['ketersediaan']?></h3>
                      <p class="price">Rp. <?=$row['harga']?></p>
                      <?php if($row['ketersediaan'] == "Masih"){?>
                      <a class="btn btn-success btn-m" id=test href="order_food.php?no=<?=$row['no']?>">Pesan
                      <script>
                          document.getElementById("test").disabled = true;
                      </script>
                      </a></td>
                      <?php $i++;}?>
                  </div>
                </div>
                <?php }?>
                <div class="col-lg-4 col-md-6">
                  <div class="product">
                    <div class="image"><alt="" class="img-fluid image1">
                    <?php
                    $query = "SELECT * FROM food where no='14'";
                    $result = mysql_query($query);
                    $i=1;
                    while ($row = mysql_fetch_array($result,MYSQL_ASSOC)) {  
                      echo "<td><img src='admin/images/".$row['foto']."' width='250' height='200'></td>" ?> <alt="" class="img-fluid image1"></a></div>
                      <h3 class="h3"><?= $row['nama']?></h3>
                      <h3 class="h4"><?= $row['ketersediaan']?></h3>
                      <p class="price">Rp. <?=$row['harga']?></p>
                      <?php if($row['ketersediaan'] == "Masih"){?>
                      <a class="btn btn-success btn-m" id=test href="order_food.php?no=<?=$row['no']?>">Pesan
                      <script>
                          document.getElementById("test").disabled = true;
                      </script>
                      </a></td>
                      <?php $i++;}?>
                  </div>
                </div>
                <?php }?>
                <div class="col-lg-4 col-md-6">
                  <div class="product">
                    <div class="image"><alt="" class="img-fluid image1">
                    <?php
                    $query = "SELECT * FROM food where no='15'";
                    $result = mysql_query($query);
                    $i=1;
                    while ($row = mysql_fetch_array($result,MYSQL_ASSOC)) {  
                      echo "<td><img src='admin/images/".$row['foto']."' width='250' height='200'></td>" ?> <alt="" class="img-fluid image1"></a></div>
                      <h3 class="h3"><?= $row['nama']?></h3>
                      <h3 class="h4"><?= $row['ketersediaan']?></h3>
                      <p class="price">Rp. <?=$row['harga']?></p>
                      <?php if($row['ketersediaan'] == "Masih"){?>
                      <a class="btn btn-success btn-m" id=test href="order_food.php?no=<?=$row['no']?>">Pesan
                      <script>
                          document.getElementById("test").disabled = true;
                      </script>
                      </a></td>
                      <?php $i++;}?>
                  </div>
                </div>
                <?php }?>
                <div class="col-lg-4 col-md-6">
                  <div class="product">
                    <div class="image"><alt="" class="img-fluid image1">
                    <?php
                    $query = "SELECT * FROM food where no='16'";
                    $result = mysql_query($query);
                    $i=1;
                    while ($row = mysql_fetch_array($result,MYSQL_ASSOC)) {  
                      echo "<td><img src='admin/images/".$row['foto']."' width='250' height='200'></td>" ?> <alt="" class="img-fluid image1"></a></div>
                      <h3 class="h3"><?= $row['nama']?></h3>
                      <h3 class="h4"><?= $row['ketersediaan']?></h3>
                      <p class="price">Rp. <?=$row['harga']?></p>
                      <?php if($row['ketersediaan'] == "Masih"){?>
                      <a class="btn btn-success btn-m" id=test href="order_food.php?no=<?=$row['no']?>">Pesan
                      <script>
                          document.getElementById("test").disabled = true;
                      </script>
                      </a></td>
                      <?php $i++;}?>
                  </div>
                </div>
                <?php }?>
                <div class="col-lg-4 col-md-6">
                  <div class="product">
                    <div class="image"><alt="" class="img-fluid image1">
                    <?php
                    $query = "SELECT * FROM food where no='17'";
                    $result = mysql_query($query);
                    $i=1;
                    while ($row = mysql_fetch_array($result,MYSQL_ASSOC)) {  
                      echo "<td><img src='admin/images/".$row['foto']."' width='250' height='200'></td>" ?> <alt="" class="img-fluid image1"></a></div>
                      <h3 class="h3"><?= $row['nama']?></h3>
                      <h3 class="h4"><?= $row['ketersediaan']?></h3>
                      <p class="price">Rp. <?=$row['harga']?></p>
                      <?php if($row['ketersediaan'] == "Masih"){?>
                      <a class="btn btn-success btn-m" id=test href="order_food.php?no=<?=$row['no']?>">Pesan
                      <script>
                          document.getElementById("test").disabled = true;
                      </script>
                      </a></td>
                      <?php $i++;}?>
                  </div>
                </div>
                <?php }?>
                <div class="col-lg-4 col-md-6">
                  <div class="product">
                    <div class="image"><alt="" class="img-fluid image1">
                    <?php
                    $query = "SELECT * FROM food where no='18'";
                    $result = mysql_query($query);
                    $i=1;
                    while ($row = mysql_fetch_array($result,MYSQL_ASSOC)) {  
                      echo "<td><img src='admin/images/".$row['foto']."' width='250' height='200'></td>" ?> <alt="" class="img-fluid image1"></a></div>
                      <h3 class="h3"><?= $row['nama']?></h3>
                      <h3 class="h4"><?= $row['ketersediaan']?></h3>
                      <p class="price">Rp. <?=$row['harga']?></p>
                      <?php if($row['ketersediaan'] == "Masih"){?>
                      <a class="btn btn-success btn-m" id=test href="order_food.php?no=<?=$row['no']?>">Pesan
                      <script>
                          document.getElementById("test").disabled = true;
                      </script>
                      </a></td>
                      <?php $i++;}?>
                  </div>
                </div>
                <?php }?>
              </div>
			<div style= "text-align: center">
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