<?php
include "connection.php";
$id = $_GET['id'];
$query = "DELETE FROM user WHERE id= '$id'";

$data=mysql_query($query,$conn);

if($data){
	echo"<center><b><font color='blue' size='4'><p>Data Berhasil dihapus</p></center></b>
	<meta http-equiv='refresh' content='2; url=delete_user_success.php'/> ";
}else {
	echo"<center><b><font color='red' size='4'><p>Data gagal dihapus</p></center></b>
	<meta http-equiv='refresh' content='2; url=delete_user_failed.php'/>";
}

//header("location:admin.php");
?>
