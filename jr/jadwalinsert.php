<?php
include('config.php');
if(!isset($_SESSION['username']) and !isset($_SESSION['password'])){
header('location:login.php'); //ke halaman login
}

// terima data dari halaman jadwaltambah.php
$id_matkul  = mysql_real_escape_string($_POST['id_matkul']);
$kelompok   = mysql_real_escape_string($_POST['kelompok']);
$dosen      = mysql_real_escape_string($_POST['dosen']);
$matkul     = mysql_real_escape_string($_POST['matkul']);
$ruang      = mysql_real_escape_string($_POST['ruang']);
$jamawal    = mysql_real_escape_string($_POST['jam_awal']);
$kelas      = mysql_real_escape_string($_POST['kelas']);
$tahunajar  = mysql_real_escape_string($_POST['tahunajar']);
$semester   = mysql_real_escape_string($_POST['semester']);
$keterangan = mysql_real_escape_string($_POST['keterangan']);
$hari       = mysql_real_escape_string($_POST['hari']);
$jamakhir   = mysql_real_escape_string($_POST['jam_akhir']);

// simpan data ke database
$query = mysql_query("INSERT INTO jadwal VALUES('$id_matkul', '$kelompok', '$dosen', '$matkul', '$ruang', '$jamawal', '$kelas', '$tahunajar', '$semester', '$keterangan', '$hari', '$jamakhir')");

if ($query) {
  // jika berhasil menyimpan
  header('location: jadwal.php?msg=success');
} else {
  // jika gagal menyimpan
  header('location: jadwaltambah.php?msg=failed');
}
?>
