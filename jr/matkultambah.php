<?php
session_start();
include('config.php');
include_once('cek-login.php');
?>

<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tambah Mata Kuliah - Sistem Monitoring Ruangan</title>
<link rel="stylesheet" href="css/style.css" type="text/css" />
<link rel="stylesheet" href="materialize/css/materialize.min.css" type="text/css" />
<link href="materialicon/icon.css" rel="stylesheet">
<script src="materialize/js/jquery-1.11.3.min.js"></script>
</head>
<body>
	<div class="navbar-fixed">
      <nav class="blue">
          <div class="nav-wrapper container">
              <a href="http://www.dharmaputra.ac.id/" class="brand-logo" target="_blank"><img src="images/stmikdharmaputra.png" alt="logo stmik" title="stmik dharma putra" width="100px" height="100px"/></a>
                  <ul class="right hide-on-med-and-down">
                      <li><a href="matkul.php">Lihat Data Mata Kuliah</a></li>
                      <li><a href="dashboard.php">Dashboard Admin</a></li>
                  </ul>
            </div>
       </nav>
    </div>
		<div style="margin:auto; padding:5px 0 5px; text-align:center">
			<h3>Sistem Monitoring Ruangan</h3>
		</div>
<div style="margin:auto">
	<form action="matkulinsert.php" method="post" style="width:400px; margin:auto; background-color: #ffffff;" class="z-depth-4">
		<fieldset>
			<legend>Tambah Mata Kuliah</legend>
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
          <input id="icon_prefix" type="text" class="validate" name="kd_matakuliah" value="Otomatis Terisi" readonly>
					<label for="icon_prefix">Kode Mata Kuliah</label>
				</div>

			<div class="input-field col s6">
      		<i class="material-icons prefix">bookmark</i>
          <input id="icon_prefix" type="text" class="validate" name="nm_matkul" required>
          <label for="icon_prefix">Nama Mata Kuliah</label>
    </div>

    		<div class="row center">
        <button class="btn waves-effect waves-light" type="submit" name="submit">Tambah Matkul<i class="material-icons right">send</i></button>
				<button class="btn waves-effect red darken-2" type="button" Value="Kembali" Onclick="window.location.href='matkul.php'">Kembali</button>
			</div>
		</fieldset>
	</form>
<br>
	<div class="row center">
<span style="color:#ffffff">Copyright 2016 - Sistem Monitoring Ruangan</span>
    </div>
  </div>
<script src="materialize/js/materialize.min.js"></script>
</body>
</html>
