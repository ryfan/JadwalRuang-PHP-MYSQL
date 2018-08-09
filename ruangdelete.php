<?php
include('config.php');
if(!isset($_SESSION['username']) and !isset($_SESSION['password'])){
header('location:login.php'); //ke halaman login
}

$ruang = $_GET['ruang'];
$id_matkul = $_GET['id_matkul'];

$query = mysql_query("DELETE FROM detil_ruang WHERE ruang='$ruang' AND id_matkul='$id_matkul'") or die(mysql_error());

if ($query) {
	header('location:ruang.php?msg=success');
} else {
	header('location:ruang.php?msg=failed');
}
?>
