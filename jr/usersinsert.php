<?php
include('config.php');
if(!isset($_SESSION['username']) and !isset($_SESSION['password'])){
header('location:login.php'); //ke halaman login
}


// terima data dari halaman daftar.php
$username 	= mysql_real_escape_string($_POST['username']);
$password 	= mysql_real_escape_string($_POST['password']);
$email		= mysql_real_escape_string($_POST['email']);
$fullname	= mysql_real_escape_string($_POST['fullname']);

// simpan data ke database
$query = mysql_query("insert into users values('', '$username', '$password', '$email', '$fullname')");

if ($query) {
	// jika berhasil menyimpan
	header('location: users.php?msg=success');
} else {
	// jika gagal menyimpan
	header('location: daftar.php?msg=failed');
}
?>
