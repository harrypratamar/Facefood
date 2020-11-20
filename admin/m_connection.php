<?php 
/* ====================================================
 * di dalam file ini akan dilakukan koneksi ke database
 * ====================================================
 */

// inisialisasi variabel untuk melakukan koneksi ke database
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "facefood";
		
// membuat koneksi ke database dengan mysqli_connect
$connect = mysqli_connect($servername, $username, $password,$dbname);
// mengecek koneksi apakah berhasil atau tidak, 
if (!$connect) {
	// apabila koneksi gagal maka eksekusi akan dihentikan paksa
	die("Connection failed: " + mysqli_connect_error());
}
