<?php
include "connection.php";
$namauser = $_GET['namauser'];
$query = "DELETE FROM orderdrink WHERE namauser= '$namauser'";

$data=mysql_query($query,$conn);

if($data){
	echo"<center><b><font color='blue' size='4'><p>Data Berhasil dihapus</p></center></b>
	<meta http-equiv='refresh' content='2; url=admin_kitchen.php'/> ";
}else {
	echo"<center><b><font color='red' size='4'><p>Data gagal dihapus</p></center></b>
	<meta http-equiv='refresh' content='2; url=admin_kitchen.php'/>";
}

//header("location:admin.php");
?>
