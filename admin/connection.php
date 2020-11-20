<?php 
/* ====================================================
 * di dalam file ini akan dilakukan koneksi ke database
 * ====================================================
 */

// inisialisasi variabel untuk melakukan koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "facefood";
		
// membuat koneksi ke database dengan mysqli_connect
$conn = mysql_connect($servername, $username, $password);

// select database
mysql_select_db($dbname);

// mengecek koneksi apakah berhasil atau tidak, 
if (!$conn) {
	// apabila koneksi gagal maka eksekusi akan dihentikan paksa
	die("Connection failed: " + mysql_connect_error());
}
