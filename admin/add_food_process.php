<?php
include "connection.php";

$no          = $_POST['no'];
$nama		 = $_POST['nama'];
$ketersediaan= $_POST['ketersediaan'];
$harga		 = $_POST['harga'];
$foto		 = $_FILES['foto']['name'];
$tmp		 = $_FILES['foto']['tmp_name'];

$fotobaru = date('dmYHis').$foto;
$path	     = "images/".$fotobaru;

if (move_uploaded_file($tmp, $path)){
	$query = "INSERT INTO food VALUES ('$no','$nama','$ketersediaan','$harga','$fotobaru')";
	$data=mysql_query($query,$conn);
}

if($data){
	echo"<center><b><font color='blue' size='4'><p>Data Berhasil disimpan</p></center></b>
	<meta http-equiv='refresh' content='2; url=add_food_success.php'/> ";
}else {
	echo"<center><b><font color='red' size='4'><p>Data gagal disimpan</p></center></b>
	<meta http-equiv='refresh' content='2; url=add_food_failed.php'/>";
}

//header("location:admin.php");
?>
