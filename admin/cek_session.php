<?php
if (isset($_SESSION['login'])) {
	if (!$_SESSION['login']) {
		header('location: admin.php');
	}
}
?>
