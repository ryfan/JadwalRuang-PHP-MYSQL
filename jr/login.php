<?php
session_start();
include('config.php');
?>

<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login - Sistem Monitoring Ruangan</title>
<link rel="stylesheet" href="css/style.css" type="text/css" />
<link rel="stylesheet" href="materialize/css/materialize.css" type="text/css" />
<link rel="stylesheet" href="materialize/css/materialize.min.css" type="text/css" />
<link href="materialicon/icon.css" rel="stylesheet">
<script src="materialize/js/jquery-1.11.3.min.js"></script>
</head>
<body>
	<nav class="blue">
			<div class="nav-wrapper container">
					<a href="http://dharmaputra.ac.id" class="brand-logo"><img src="images/stmikdharmaputra.png" alt="logo stmik" title="stmik dharma putra" width="100px" height="100px"/></a>
							<ul class="right hide-on-med-and-down">
									<li class="active"><a href="login.php">Login</a></li>
							</ul>
				</div>
	 </nav>
	</div>
	 <div style="margin:auto; padding:5px 0 5px; text-align:center">
		 <h3>Sistem Monitoring Ruangan</h3>
	 </div>
<div style="margin:auto">
	<form action="auth.php" method="post" style="width:400px; margin:auto;" class="zepth-z 3">
		<fieldset>
			<legend>Login</legend>
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
    		<div class="row center">
        <button class="btn waves-effect waves-light" type="submit" name="login">Masuk Sistem<i class="material-icons right">send</i></button>
      </div>
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
