<?php
session_start();
include('config.php');
include_once('cek-login.php');
?>

<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Dashboard - Sistem Monitoring Ruangan</title>
<link rel="stylesheet" href="./css/style.css" type="text/css" />
<link rel="stylesheet" href="./materialize/css/materialize.css" type="text/css" />
<link rel="stylesheet" href="./materialize/css/materialize.min.css" type="text/css" />
<link href="materialicon/icon.css" rel="stylesheet">
<script src="materialize/js/jquery-1.11.3.min.js"></script>
</head>
<body>
  <div class="navbar-fixed">
      <nav class="blue">
          <div class="nav-wrapper container">
              <a href="http://dharmaputra.ac.id" class="brand-logo"><img src="images/stmikdharmaputra.png" alt="logo stmik" title="stmik dharma putra" width="100px" height="100px"/></a>
                  <ul class="right hide-on-med-and-down">
                      <li class="active"><a href="dashboard.php">Dashboard Admin</a></li>
                  </ul>
            </div>
       </nav>
    </div>
       <div style="margin:auto; padding:5px 0 5px; text-align:center">
         <h3>Sistem Monitoring Ruangan</h3>
       </div>
<div style="margin:auto" class="container">
  <span style="color:#ffffff;margin-right:50px;" class="right">Hallo Admin!</span><br>
	<form action="auth.php" method="post" style="width:900px; margin:auto;" class="z-depth-4">
		<fieldset>
			<legend>Dasboard</legend>
    		<div class="row center">
        <div class="col s2" style="margin-left:60px;"><button class="btn waves-effect waves-light btn-large" type="button" Value="Home Page" Onclick="window.location.href='dosen.php'">Dosen</button></div>
        <div class="col s2"><button class="btn waves-effect waves-light btn-large" type="button" Value="Home Page" Onclick="window.location.href='ruang.php'">Ruang</button></div>
        <div class="col s2"><button class="btn waves-effect waves-light btn-large" type="button" Value="Home Page" Onclick="window.location.href='matkul.php'">Matkul</button></div>
        <div class="col s2"><button class="btn waves-effect waves-light btn-large" type="button" Value="Home Page" Onclick="window.location.href='jadwal.php'">Jadwal</button></div>
        <div class="col s2"><button class="btn waves-effect waves-light btn-large" type="button" Value="Home Page" Onclick="window.location.href='users.php'">User</button></div>
        <div class="col s12"><br><br><button class="btn waves-effect waves-light btn-large" type="button" Value="Home Page" Onclick="window.location.href='index.php'">Monitoring</button></div>
      </div>
		</fieldset>
	</form>
  <br>
  <center><button class="btn waves-effect red darken-2" type="button" Value="Logout" Onclick="window.location.href='logout.php'">Logout</button></center>
<br>
	<div class="row center">
<span style="color:#ffffff">Copyright 2016 - Sistem Monitoring Ruangan</span>
    </div>
  </div>
</div>
<script src="./materialize/js/materialize.min.js"></script>
</body>
</html>
