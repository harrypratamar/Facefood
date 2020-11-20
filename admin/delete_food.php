<?php
include "connection.php";
$no = $_GET['no'];
$query = "DELETE FROM food WHERE no= '$no'";

$data=mysql_query($query,$conn);

if($data){
	echo"<center><b><font color='blue' size='4'><p>Data Berhasil dihapus</p></center></b>
	<meta http-equiv='refresh' content='2; url=delete_food_success.php'/> ";
}else {
	echo"<center><b><font color='red' size='4'><p>Data gagal dihapus</p></center></b>
	<meta http-equiv='refresh' content='2; url=delete_food_failed.php'/>";
}

//header("location:admin.php");
?>
