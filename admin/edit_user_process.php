<?php
include "connection.php";

$id         = $_POST['id'];
$fullname	= $_POST['fullname'];
$username	= $_POST['username'];
$password	= $_POST['password'];
$email		= $_POST['email'];
$role 		= $_POST['role'];


$query = "UPDATE user SET fullname='$fullname',username='$username',password='$password', email='$email',role='$role' WHERE id='$id'";
$data=mysql_query($query,$conn) or die(mysql_error());


if($data){
	echo"<center><b><font color='green' size='4'><p>Data Berhasil diperbaharui</p></center></b>
	<meta http-equiv='refresh' content='2; url=edit_user_success.php'/> ";
}else {
	echo"<center><b><font color='red' size='4'><p>Data gagal diperbaharui</p></center></b>
	<meta http-equiv='refresh' content='2; url=edit_user_failed.php'/>";
}

//header("location:admin.php");
?>