<?php
include('config.php');
if(!isset($_SESSION['username']) and !isset($_SESSION['password'])){
header('location:login.php'); //ke halaman login
}

// terima data dari halaman matkultambah.php
$id_matkul   = mysql_real_escape_string($_POST['id_matkul']);
$nm_matkul   = mysql_real_escape_string($_POST['nm_matkul']);

// simpan data ke database
$query = mysql_query("INSERT INTO matkul VALUES('$id_matkul', '$nm_matkul')");

if ($query) {
  // jika berhasil menyimpan
  header('location: matkul.php?msg=success');
} else {
  // jika gagal menyimpan
  header('location: matkultambah.php?msg=failed');
}
?>
