<?php
session_start();
include('config.php');
include_once('cek-login.php');
?>

<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Edit Users - Sistem Monitoring Ruangan</title>
<link rel="stylesheet" href="css/style.css" type="text/css" />
<link rel="stylesheet" href="materialize/css/materialize.css" type="text/css" />
<link rel="stylesheet" href="materialize/css/materialize.min.css" type="text/css" />
<link href="materialicon/icon.css" rel="stylesheet">
<script src="materialize/js/jquery-1.11.3.min.js"></script>
</head>

<body>
<div style="margin:auto; padding:50px 0 30px; text-align:center">
	<h2 style="color:26a69a">Sistem Monitoring Ruangan</h2>
</div>
<div style="margin:auto">
	<form action="usersupdate.php" method="post" style="width:400px; margin:auto;">
		<fieldset class="rounded_3">
			<legend>Edit Users</legend>
			<?php
			error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
			$message = $_GET['msg'];

			if ($message == 'success') {
			?>
			<div class="info">Success</div>
			<?php } else if ($message == 'failed') {?>
			<div class="error">Error</div>
			<?php } ?>


			<?php
			// terima id_user dari halaman users
			$user_id = $_GET['uid'];

			$query = mysql_query("select * from users where id_user='$user_id'");

			$data = mysql_fetch_array($query);
			?>


			<div class="input-field col s6">
      		<i class="material-icons prefix">account_circle</i>
          <input id="icon_prefix" type="text" class="validate" name="username" required value="<?php echo $data['username']; ?>" disabled>
          <label for="icon_prefix">Username</label>
    </div>
			<div class="input-field col s6">
      		<i class="material-icons prefix">lock</i>
          <input id="icon_prefix" type="password" class="validate" name="password" required value="<?php echo $data['password']; ?>">
          <label for="icon_prefix">Password</label>
    </div>

    <div class="input-field col s6">
      		<i class="material-icons prefix">verified_user</i>
          <input id="icon_prefix" type="email" class="validate" name="email" required value="<?php echo $data['email']; ?>">
          <label for="icon_prefix">Email</label>
    </div>
			<div class="input-field col s6">
      		<i class="material-icons prefix">perm_identity</i>
          <input id="icon_prefix" type="text" class="validate" name="fullname" required value="<?php echo $data['fullname']; ?>">
          <label for="icon_prefix">Full Name</label>
    </div>


			<?php
			// jika user yang login memiliki role sebagai admin, maka tampilkan opsi ini
			if ($_SESSION['role'] == 'admin') {
				if ($data['username'] != 'admin') {
			?>
			<div>
			<select class="browser-default" name="role">
      <option value="member">Member</option>
      <option value="admin">Admin</option>
    </select>
    </div>
			<?php
				}
			}
			?>
			<div class="row center">
				<?php if ($logged_in) { ?>
				<button class="btn waves-effect waves-light" type="submit" name="submit">Update User<i class="material-icons right">send</i></button>
				<br><br>
				<?php } else {?>
				<span class="left"><a href="login.php">Login</a></span>
				<?php } ?>
				<button class="btn waves-effect waves-light" type="button" Value="lihat data" Onclick="window.location.href='users.php'">Lihat Data<i class="material-icons right">subject</i></button>
			</div>
			<input type="hidden" name="user_id" value="<?php echo $data['id_user']; ?>" />
		</fieldset>
	</form>
	<br><br>
	<div class="row center">
<span style="color:#ffffff">Copyright 2016 - Sistem Monitoring Ruangan</span>
    </div>
  </div>
</div>
<script src="materialize/js/materialize.min.js"></script>
</body>
</html>
