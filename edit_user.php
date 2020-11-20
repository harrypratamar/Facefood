<?php require('connection.php');?>
<?php require('cek_session_login.php');?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Edit Akun</title>
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
				    	<a class="btn btn-outline-warning float-md-right" href="account.php">batal</a>
				    	<h3>Edit Akun</h3>
				    	<?php
						$fullname=$_GET['fullname'];
						$query=mysql_query("select * from user where fullname = '$_SESSION[fullname]'");
						?>
					    <form method="post" action="edit_user_process.php">
					    <?php
						while($row=mysql_fetch_array($query)){
						?>
							  <div class="form-group">
							    <label for="nama">Nama Lengkap </label> 
							    <br><small>Nama tidak dapat dirubah, Silakan Hubungi Administrator Apabila Ingin Merubah Nama</small>
							    <input name="fullname" type="text" class="form-control" id="fullname" required="" readonly="" value="<?php echo $_SESSION['fullname'] ?>">
							  </div>
							  <div class="form-group">
							    <label for="email">Email</label>
							    <input name="email" type="email" class="form-control" id="email" required="" value="<?php echo $row['email']; ?>">
							  </div>
							  <div class="form-group">
							    <label for="username">Username</label>
							    <input name="username" type="text" class="form-control" id="username" required="" value="<?php echo $row['username']; ?>">
							  </div>
							  <div class="form-group">
							    <label for="password">Password</label>
							    <input name="password" type="text" class="form-control" id="password" required="" value="<?php echo $row['password']; ?>">
							  </div>
								<br>
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
