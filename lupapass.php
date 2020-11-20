<html>
<head>
<title>Reset Password</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
<style>
body {background-color: white:; padding:0px; margin:0px}
h3 {color:black; text-align:center; font-family:Arial, Helvetica, sans-serif; font-size:20px; margin:20px;}
.wrapper-f{width:300px; margin:auto; padding:40px 20px 20px 20px; background:#E84C3D; margin-top:5%; min-height:120px;}
.wrapper-f label {color:#ffffff;}
.wrapper-f input {padding:5px; background:#eeeeee; border:0px; color:#333; width:98%; margin-bottom:10px;}
.wrapper-f input:focus{ background:#ccc;}
.wrapper-f .button {padding:10px 20px 10px 20px; color:#ffffff; background:#C1392B; margin-top:10px; cursor:pointer}
.wrapper-f .button:hover {background:#333;}
.warning {background:#FF9900; color:#ffffff; padding:10px; border-radius:5px; border:1px; text-align:center;margin:auto;
 width:400px; margin-top:20px; position: relative;}
</style>
</head>
<h3>LUPA PASSWORD</h3>
<div style="text-align: center">
					<img src="assets/image/icon_title.png" width="220" height="220"> </div>	
<div class="wrapper-f">
<form action="" method="post">
<label>Masukkan Username anda</label>
<input name="username" type="text" placeholder="Masukkan Username" required oninvalid="this.setCustomValidity('Masukkan User Name Yang Valid')">
<input class="button" name="act_resset" type="submit" value="Submit">
</form>
<div class="text-right">
		<a class="btn btn-danger" href="signin.php" style="margin-right:1rem">Login</a>
	</div>

</div>
<div style="width:600px; margin:auto">
<?PHP 
$server = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'facefood';
$x = mysql_connect($server,$dbuser,$dbpass) or die(mysql_error());
mysql_select_db($dbname,$x);
///////////////////////////////////////////////////////////////////////
if (isset($_POST['act_resset']))  {
date_default_timezone_set("Asia/Jakarta");
$pass="1A2B4HTjsk5kwhadbwlff"; $panjang='8'; $len=strlen($pass); 
$start=$len-$panjang; $xx=rand('0',$start); 
$yy=str_shuffle($pass); 
$passwordbaru=substr($yy, $xx, $panjang);

$username = trim(strip_tags($_POST['username']));
$password = mysql_real_escape_string(htmlentities((md5($passwordbaru))));
$datetime=date("h:i:s-j-M-Y");

$query = "SELECT * FROM user WHERE username ='$username'";
$hasil = mysql_query($query);
$data  = mysql_fetch_array($hasil);
$cek = mysql_num_rows($hasil);
$id = strip_tags($data['id']);
$email = strip_tags($data['email']);
$fullname = strip_tags($data['fullname']);
$username =trim(strip_tags($data['username']));
if ($cek == 1) {

$pesan  = "DETAIL AKUN ANDA : \n 
<br><br>Nama Penguna : ".$username." \n 
<br><br>Kata sandi Generate: ".$password."\n\n 
<br><br>Silakan Copy & Paste Generate Password Diatas ke Form Login";

$data=mysql_query($query,$x);
if ($data) { 

    $query = "UPDATE user SET password='$password' WHERE id = '$id'";
    $hasil = mysql_query($query);

    if ($hasil) 
	echo'<div class="warning">Kata sandi baru telah direset untuk username "'.$username.'" </div><br><br><hr><h3> Masukkan Generate Password tersebut pada Form Login<hr><br>
	'.$pesan.'<hr>';
    }
	else {
echo'<div class="warning">Perubahan Kata sandi baru gagal</div>';
}
}
else{

echo'<div class="warning">User tidak ditemukan</div>';
}}


?>

</div>

<body>
</body>
</html>
