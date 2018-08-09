<?php
include('config.php');
if(!isset($_SESSION['username']) and !isset($_SESSION['password'])){
header('location:login.php'); //ke halaman login
}

$id_matkul = $_GET['id_matkul'];

$query = mysql_query("delete from matkul where id_matkul='$id_matkul'") or die(mysql_error());

if ($query) {
	header('location:matkul.php?msg=success');
} else {
	header('location:matkul.php?msg=failed');
}
?>
