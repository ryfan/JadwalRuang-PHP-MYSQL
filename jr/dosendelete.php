<?php
include('config.php');
if(!isset($_SESSION['username']) and !isset($_SESSION['password'])){
header('location:login.php'); //ke halaman login
}

$id_dosen = $_GET['id_dosen'];
$query = mysql_query("delete from dosen where id_dosen='$id_dosen'") or die(mysql_error());

if ($query) {
	header('location:dosen.php?msg=success');
} else {
	header('location:dosen.php?msg=failed');
}
?>
