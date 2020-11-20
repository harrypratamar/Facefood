<?php
include "connection.php";

$id         = $_POST['id'];
$fullname	= $_POST['fullname'];
$username	= $_POST['username'];
$password	= $_POST['password'];
$email		= $_POST['email'];
$role 		= $_POST['role'];

$query = "INSERT INTO user VALUES ('$id','$fullname','$username','$password','$email','$role')";

$data=mysql_query($query,$conn);

if($data){
	echo"<center><b><font color='blue' size='4'><p>Data Berhasil disimpan</p></center></b>
	<meta http-equiv='refresh' content='2; url=add_user_success.php'/> ";
}else {
	echo"<center><b><font color='red' size='4'><p>Data gagal disimpan</p></center></b>
	<meta http-equiv='refresh' content='2; url=add_user_failed.php'/>";
}

//header("location:admin.php");
?>
