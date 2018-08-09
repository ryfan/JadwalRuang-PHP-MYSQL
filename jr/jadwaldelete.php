<?php
include('config.php');
if(!isset($_SESSION['username']) and !isset($_SESSION['password'])){
header('location:login.php'); //ke halaman login
}

$id_matkul = $_GET['id_matkul'];

$query = mysql_query("DELETE FROM jadwal WHERE id_matkul='$id_matkul'") or die(mysql_error());

if ($query) {
	header('location:jadwal.php?msg=success');
} else {
	header('location:jadwal.php?msg=failed');
}
?>
