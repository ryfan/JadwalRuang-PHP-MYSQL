<?php
include('config.php');
if(!isset($_SESSION['username']) and !isset($_SESSION['password'])){
header('location:login.php'); //ke halaman login
}

//tangkap data dari form
$id_dosen = mysql_real_escape_string($_POST['id_dosen']);
$nm_dosen = mysql_real_escape_string($_POST['nm_dosen']);
$alamat = mysql_real_escape_string($_POST['alamat']);
$tlp = mysql_real_escape_string($_POST['tlp']);

//update data di database sesuai nip
$query = mysql_query("UPDATE dosen SET nm_dosen='$nm_dosen', alamat='$alamat', tlp='$tlp' WHERE id_dosen='$id_dosen'") or die(mysql_error());

if ($query) {
	header('location:dosen.php?msg=success');
} else {
	header('location:dosenedit.php?msg=failed');
}
?>
