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
	<title>Main Menu | Face Food</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="icon.png">
	<!-- <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css"> -->
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<script type="text/javascript" src="assets/js/jQuery-2.1.4.min.js"></script>
	<!-- <script type="text/javascript" src="assets/js/bootstrap.js"></script> -->
	<script type="text/javascript" src="assets/js/bootstrap.js"></script>
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
<body class="bg-default" style="background-color:#fafafa">
	<div class="container-fluid">
	  <div class="row">
	  	<div class="col-md-1"></div>
	    <div class="col-md-10">
	    	<br><br>
	    <div style="opacity: 0.9">
	    	<div class="card" style="margin-top:1rem;margin-bottom:1rem">
				  <div class="card-body">
				  	<div style="text-align: right">
				  		<a class="btn my-2 my-sm-0" href="#">Hai, 
			   <?php echo $_SESSION['fullname'] ?></th></h6> 
			   <a class="btn btn-info my-2 my-sm-0" href="account.php">Kelola Akun</a> 
				  		<a class="btn btn-danger my-2 my-sm-0" href="signout_process.php">Keluar</a></div>
			   	<br><br>
			   	<a href="order_cart.php"><div style="text-align: right" class="col-md-1"><img src="cart.png" width="30" height="30"></div></a> 
				<div style="text-align: center">
					<img src="assets/image/icon_title.png" width="220" height="220"></div>
				<div style="text-align: center">
					<img src="assets/image/main_menu.png" width="300" height="50"></div> 
				<br><br>	
				<div class="text-center">
					    	<a class="btn btn-success btn-lg" href="menu_food.php" style="margin-right:1rem">Makanan</a>
					    	<a class="btn btn-info btn-lg" href="menu_drink.php" style="margin-right:1rem">Minuman</a>
					    	<a class="btn btn-warning btn-lg" href="menu_dessert.php" style="margin-right:1rem">Dessert</a>
					 </div> 
				<br><br>	   	    
				  <div style= "text-align: center">
				  <div class="card-footer text-muted">
				    <small>@Copyright 2018. Interface of Food Order Powered By ArhWebDevelopment</smalls></div>
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