<?php
include "connection.php";
$nama = $_GET['nama'];
$query = "DELETE FROM orderfood WHERE nama= '$nama'";

$data=mysql_query($query,$conn);

if($data){
	echo"<center><b><font color='blue' size='4'><p>Data Berhasil dihapus</p></center></b>
	<meta http-equiv='refresh' content='2; url=order_cart.php'/> ";
}else {
	echo"<center><b><font color='red' size='4'><p>Data gagal dihapus</p></center></b>
	<meta http-equiv='refresh' content='2; url=edit_order_food.php'/>";
}

//header("location:admin.php");
?>
