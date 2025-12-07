<?php 
session_start();

// cek apakah yang mengakses halaman ini sudah login
if($_SESSION['level']==""){
	header("location:index.php?pesan=gagal");
	exit;
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Pegawai</title>
	<link rel="stylesheet" href="style.css"/>
</head>
<body class="pegawai">
	<h1>Halaman Pegawai</h1>
 
	<p>Halo <b><?php echo $_SESSION['nama']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.</p>
	<a href="logout.php" class="logout-pegawai">LOGOUT</a>
 
	<br/>
	<br/>
 
</body>
</html>