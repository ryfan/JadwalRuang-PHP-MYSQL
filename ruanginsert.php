<?php
include('config.php');
if(!isset($_SESSION['username']) and !isset($_SESSION['password'])){
header('location:login.php'); //ke halaman login
}

// terima data dari halaman daftar.php
$ruangan   = mysql_real_escape_string($_POST['ruangan']);
$id_matkul   = mysql_real_escape_string($_POST['id_matkul']);

// simpan data ke database
$query = mysql_query("INSERT INTO detil_ruang VALUES('$ruangan', '$id_matkul')");

if ($query) {
  // jika berhasil menyimpan
  header('location: ruang.php?msg=success');
} else {
  // jika gagal menyimpan
  header('location: ruangtambah.php?msg=failed');
}
?>
