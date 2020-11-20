<?php
include "connection.php";

$nama		= $_POST['nama'];
$jumlah		= $_POST['jumlah'];
$catatan	= $_POST['catatan'];


$query = "UPDATE orderdrink SET nama='$nama',jumlah='$jumlah',catatan='$catatan' WHERE nama='$nama'";
$data=mysql_query($query,$conn) or die(mysql_error());


if($data){
	echo"<center><b><font color='green' size='4'><p>Data Berhasil diperbaharui</p></center></b>
	<meta http-equiv='refresh' content='2; url=order_cart.php'/> ";
}else {
	echo"<center><b><font color='red' size='4'><p>Data gagal diperbaharui</p></center></b>
	<meta http-equiv='refresh' content='2; url=edit_order_food.php'/>";
}

//header("location:admin.php");
?>