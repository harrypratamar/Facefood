<?php 
require('connection.php');
require('helper.php');
if (isset($_POST)) {
	$fullname = $_POST['fullname'];
	$adminname= $_POST['adminname'];
	$password = $_POST['password'];

	$query = "INSERT INTO admin (`fullname`,`adminname`,`password`) VALUES ('".$fullname."','".$adminname."','".$password."')";
	$result = mysql_query($query);
	if ($result) {
		header('location: signup_success.php');
	}else{
		header('location: signup_failed.php');
	}
}else{
	header('location: signup.php');
}
?>
