<?php
include "connection.php";

$no          = $_GET['no'];
$nama		 = $_POST['nama'];
$ketersediaan= $_POST['ketersediaan'];
$harga		 = $_POST['harga'];

$query = "UPDATE drink SET nama='$nama',ketersediaan='$ketersediaan',harga='$harga' WHERE no='$no'";
$data=mysql_query($query,$conn) or die(mysql_error());


if($data){
    echo"<center><b><font color='green' size='4'><p>Data Berhasil diperbaharui</p></center></b>
    <meta http-equiv='refresh' content='2; url=edit_drink_success.php'/> ";
}else {
    echo"<center><b><font color='red' size='4'><p>Data gagal diperbaharui</p></center></b>
    <meta http-equiv='refresh' content='2; url=edit_drink_failed.php'/>";
}

//header("location:admin.php");
?>