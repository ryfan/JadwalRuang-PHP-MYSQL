<?php
include('config.php');
if(!isset($_SESSION['username']) and !isset($_SESSION['password'])){
header('location:login.php'); //ke halaman login
}

//tangkap data dari form
$id_matkul = mysql_real_escape_string($_POST['id_matkul']);
$nm_matkul = mysql_real_escape_string($_POST['nm_matkul']);

//update data di database sesuai kd_matakuliah
$query = mysql_query("UPDATE matkul SET nm_matkul='$nm_matkul' WHERE id_matkul='$id_matkul'") or die(mysql_error());

if ($query) {
	header('location:matkul.php?msg=success');
} else {
	header('location:matkul.php?msg=failed');
}
?>
