<?php
session_start();
include('config.php');
include_once('cek-login.php');
?>

<html>
<head>
	<title>Lihat Monitoring - Sistem Monitoring Ruangan</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" />
	<link rel="stylesheet" href="materialize/css/materialize.css" type="text/css" />
	<link rel="stylesheet" href="materialize/css/materialize.min.css" type="text/css" />
	<link href="materialicon/icon.css" rel="stylesheet">
	<script src="materialize/js/jquery-1.11.3.min.js"></script>
	<script src="materialize/js/select.js" charset="utf-8"></script>
</head>
<body>
	<nav class="blue">
			<div class="nav-wrapper container">
					<a href="http://dharmaputra.ac.id" class="brand-logo"><img src="images/stmikdharmaputra.png" alt="logo stmik" title="stmik dharma putra" width="100px" height="100px"/></a>
							<ul class="right hide-on-med-and-down">
									<li><a href="dashboard.php">Dashboard Admin</a></li>
							</ul>
				</div>
	 </nav>
</div>
	 <div style="margin:auto; padding:5px 0 5px; text-align:center">
		 <h3>Sistem Monitoring Ruangan</h3>
	 </div>
	<div style="margin:auto">
		<form action="monitoring.php" method="get" style="width:400px; margin:auto;" target="blank">
			<fieldset>
		<table>
			<tr>
				<td>Tahun Ajar</td>
				<td>
					<select name="thn_ajar">
						<option value="" disabled selected><center>Pilih Tahun Ajar</center></option>
						<option value="2015/2016">2015/2016</option>
						<option value="2016/2017">2016/2017</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Semester</td>
				<td>
				<select name="semester">
					<option value="" disabled selected><center>Pilih Semester</center></option>
					<option value="1">Gasal</option>
					<option value="2">Genap</option>
				</select>
			</td>
			</tr>
			<tr>
				<td>Hari</td>
			<td>
				<select name="hari">
					<option value="" disabled selected><center>Pilih Hari</center></option>
					<option value="senin">Senin</option>
					<option value="selasa">Selasa</option>
					<option value="rabu">Rabu</option>
					<option value="kamis">Kamis</option>
					<option value="jumat">Jum'at</option>
					<option value="sabtu">Sabtu</option>
				</select>
			</td>
			</tr>
			<tr>
				<td></td><td><button class="btn waves-effect waves-light" type="submit">Lihat Jadwal<i class="material-icons right">send</i></button>
</td>
			</tr>
		</table>
	</fieldset>
	</form>
	<br>
	<div class="row center">
<span style="color:#ffffff">Copyright 2016 - Sistem Monitoring Ruangan</span>
    </div>
</body>
<script src="materialize/js/materialize.min.js"></script>
</html>
