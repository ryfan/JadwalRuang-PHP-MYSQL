<?php
include('config.php');
if(!isset($_SESSION['username']) and !isset($_SESSION['password'])){
header('location:login.php'); //ke halaman login
}

// terima data dari halaman daftar.php
$id_dosen   = mysql_real_escape_string($_POST['id_dosen']);
$nm_dosen   = mysql_real_escape_string($_POST['nm_dosen']);
$alamat    = mysql_real_escape_string($_POST['alamat']);
$tlp = mysql_real_escape_string($_POST['tlp']);

// simpan data ke database
$query = mysql_query("insert into dosen values('$id_dosen', '$nm_dosen', '$alamat', '$tlp')");

if ($query) {
  // jika berhasil menyimpan
  header('location: dosen.php?msg=success');
} else {
  // jika gagal menyimpan
  header('location: dosentambah.php?msg=failed');
}
?>
