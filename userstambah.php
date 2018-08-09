<?php
session_start();
include('config.php');
include_once('cek-login.php');
?>

<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tambah Users - Sistem Monitoring Ruangan</title>
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
	<form action="usersinsert.php" method="post" style="width:400px; margin:auto;">
		<fieldset>
			<legend>Tambah Users</legend>

			<?php
			error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
			$message = $_GET['msg'];
			if ($message == 'success') {
			?>
			<div class="info">Success</div>
			<?php } else if ($message == 'failed') {?>
			<div class="error">Error</div>
			<?php } ?>

			<div class="input-field col s6">
      		<i class="material-icons prefix">account_circle</i>
          <input id="icon_prefix" type="text" class="validate" name="username" required>
          <label for="icon_prefix">Username</label>
    </div>
			<div class="input-field col s6">
      		<i class="material-icons prefix">lock</i>
          <input id="icon_prefix" type="password" class="validate" name="password" required>
          <label for="icon_prefix">Password</label>
    </div>

    <div class="input-field col s6">
      		<i class="material-icons prefix">verified_user</i>
          <input id="icon_prefix" type="email" class="validate" name="email" required>
          <label for="icon_prefix">Email</label>
    </div>
			<div class="input-field col s6">
      		<i class="material-icons prefix">perm_identity</i>
          <input id="icon_prefix" type="text" class="validate" name="fullname" required>
          <label for="icon_prefix">Full Name</label>
    </div>

    		<div class="row center">
        <button class="btn waves-effect waves-light" type="submit" name="submit">Tambah<i class="material-icons right">send</i></button>
      </div>

		</fieldset>
	</form>
<br>
	<div class="row center">
<span style="color:#ffffff">Copyright 2016 - Sistem Monitoring Ruangan</span>
    </div>
  </div>
</div>
<script src="materialize/js/materialize.min.js"></script>
</body>
</html>
