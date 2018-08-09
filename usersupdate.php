<?php
include('config.php');
if(!isset($_SESSION['username']) and !isset($_SESSION['password'])){
header('location:login.php'); //ke halaman login
}

//tangkap data dari form
$id = $_POST['user_id'];
$password = $_POST['password'];
$fullname = $_POST['fullname'];
$email = $_POST['email'];

//update data di database sesuai user_id
$query = mysql_query("update users set password='$password', fullname='$fullname', email='$email' where id_user='$id'") or die(mysql_error());

if ($query) {
	header('location:users.php?msg=success');
} else {
	header('location:users.php?msg=failed');
}
?>
