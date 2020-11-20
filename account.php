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
	<meta charset="utf-8">
  <link rel="shortcut icon" href="icon.png">
	<title>Akun Saya | Face Food</title>
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
				  <a class="btn btn-outline-danger my-2 my-sm-0" href="menu.php">Kembali Ke Menu</a> </div>  
          <h6><th scope="col">Hai, 
			   <?php echo $_SESSION['fullname'] ?></th></h6>
	<div style="text-align: left">
					<h4><img src="assets/image/icon_title.png" width="100" height="100">Akun Saya</h4></div> 		
	<div id="all">
      <div class="container-fluid">
    <div class="row">
      <div class="col-md-0"></div>
      <div class="col-md-12">
        <div style="padding:1rem">
          <div class="card">
            <div class="card-body">
            	<div style="font-size: 15px">
                <?php
                $query = ("SELECT * FROM user WHERE fullname = '$_SESSION[fullname]'");
                $result = mysql_query($query);
                $i=1;
               while ($row = mysql_fetch_array($result,MYSQL_ASSOC)) {?>
                <ul>
      				<li>Nama Lengkap : <?= $row['fullname']?></li>
      				<br><br>
      				<li>Email : <?= $row['email']?> </li>
      				<br><br>
      				<li>Password Saat ini : <?= $row['password']?> </li>
      				<br><br>
      				<li>Username : <?= $row['username']?> </li>
      				<br><br>
                 <div class="col-md-0"></div>
      			<div class="col-md-12" style="text-align: right;">
                 <a class="btn btn-outline-danger my-2 my-sm-0" href="edit_user.php?fullname=<?=$_SESSION['fullname']?>">Edit Data</a> </div>
                 <?php $i++;}?> 
             </ul>
         </tbody>
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