<?php 
require('connection.php');
require('helper.php');


if ($_POST['username'] != '' && $_POST['password'] != '') {
	$username = $_POST['username'];
	$password = $_POST['password'];

	$query = "SELECT * FROM user WHERE `username`='".$username."'";
	$result = mysql_query($query);
	$user = mysql_fetch_array($result,MYSQL_ASSOC);
	vardump_data($username);
	vardump_data($result);
	// printr_data_ex($user);

	if ($user['password']==$password) {
		header('location: menu.php');
		session_start();
		/*session is started if you don't write this line can't use $_Session  global variable*/
		$_SESSION["username"]=$username;
		$_SESSION["fullname"]=$user['fullname'];
		$_SESSION["email"]=$user['email'];
		$_SESSION["login"]=true;
	}else {
		echo "<script type='text/javascript'>
		window.alert('Username atau Password Anda Salah')
		</script>";
		header('location: signin.php');
	}
}
?>
