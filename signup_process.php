<?php 
require('connection.php');
require('helper.php');
if (isset($_POST)) {
	$fullname = $_POST['fullname'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	$role = $_POST['role'];

	$query = "INSERT INTO user (`fullname`,`username`,`password`,`email`,`role`) VALUES ('".$fullname."','".$username."','".$password."','".$email."','".$role."')";
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
