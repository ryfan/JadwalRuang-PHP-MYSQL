<?php
include('config.php');
if(!isset($_SESSION['username']) and !isset($_SESSION['password'])){
header('location:login.php'); //ke halaman login
}
//tangkap data dari form
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


//update data di database sesuai id_matkul
$query = mysql_query("UPDATE jadwal SET id_matkul='$id_matkul', kelompok='$kelompok', dosen='$dosen', matkul='$matkul', ruang='$ruang', jam='$jamawal', kelas='$kelas', thn_ajar='$tahunajar', semester='$semester', keterangan='$keterangan', hari='$hari', selesai='$jamakhir' WHERE id_matkul='$id_matkul'") or die(mysql_error());

if ($query) {
	header('location:jadwal.php?msg=success');
} else {
	header('location:jadwal.php?msg=failed');
}
?>
