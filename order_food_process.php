<?php
include "connection.php";

$namauser    = $_POST['namauser'];
$no          = $_POST['no'];
$nama		 = $_POST['nama'];
$harga		 = $_POST['harga'];
$jumlah		 = $_POST['jumlah'];
$total 		 = $harga*$jumlah;
$catatan	 = $_POST['catatan'];



$query = "INSERT INTO orderfood VALUES ('$id_od','$namauser','$no','$nama','$harga','$jumlah','$total','$catatan')";

$data=mysql_query($query,$conn);

if($data){
	header("location:menu_food.php");
}else {
	echo"<center><b><font color='red' size='4'><p>Pesanan gagal disimpan</p></center></b>
	<meta http-equiv='refresh' content='2; url=menu_food.php'/>";
}

//header("location:admin.php");
?>
