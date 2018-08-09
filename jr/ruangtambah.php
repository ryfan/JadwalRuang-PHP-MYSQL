<?php
session_start();
include('config.php');
include_once('cek-login.php');
?>

<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tambah Ruang - Sistem Monitoring Ruangan</title>
<link rel="stylesheet" href="css/style.css" type="text/css" />
<link rel="stylesheet" href="materialize/css/materialize.min.css" type="text/css" />
<link href="materialicon/icon.css" rel="stylesheet">
<script src="materialize/js/jquery-1.11.3.min.js"></script>
<script src="materialize/js/select.js"></script>
</head>
<body>
	<div class="navbar-fixed">
      <nav class="blue">
          <div class="nav-wrapper container">
              <a href="http://www.dharmaputra.ac.id/" target="_blank" class="brand-logo"><img src="images/stmikdharmaputra.png" alt="logo stmik" title="stmik dharma putra" width="100px" height="100px"/></a>
                  <ul class="right hide-on-med-and-down">
                      <li><a href="ruang.php">Lihat Data Ruang</a></li>
                      <li><a href="dashboard.php">Dashboard Admin</a></li>
                  </ul>
            </div>
       </nav>
    </div>
			 <div style="margin:auto; padding:5px 0 5px; text-align:center">
			   <h3>Sistem Monitoring Ruangan</h3>
			 </div>
<div style="margin:auto">
	<form action="ruanginsert.php" method="post" style="width:400px; margin:auto; background-color:#ffffff" class="z-depth-4">
		<fieldset>
			<legend>Tambah Ruang</legend>
			<?php
			error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
			$message = $_GET['msg'];
			if ($message == 'success') {
			?>
			<div class="info">Success</div>
			<?php } else if ($message == 'failed') {?>
			<div class="error">Data Sudah Ada</div>
			<?php } ?>

			<div class="input-field col s6">
				<select name="ruangan">
					<option value="" disabled selected><center>Pilih Ruangan</center></option>
					<option value='01'>Ruang 01</option>
					<option value='02'>Ruang 02</option>
					<option value='03'>Ruang 03</option>
					<option value='04'>Ruang 04</option>
					<option value='05'>Ruang 05</option>
					<option value='06'>Ruang 06</option>
					<option value='07'>Ruang 07</option>
					<option value='08'>Ruang 08</option>
					<option value='09'>Ruang 09</option>
					<option value='10'>Ruang 10</option>
					<option value='11'>Ruang 11</option>
					<option value='12'>Ruang 12</option>
				</select>
    </div>
			<div class="input-field col s6">
					<select name="id_matkul">
						<option value="" disabled selected><center>Pilih Mata Kuliah</center></option>
						<?php
						$query = mysql_query("select * from matkul");
						while ($data = mysql_fetch_array($query)){
					echo "<option value='$data[id_matkul]'>$data[id_matkul] - $data[nm_matkul]</option>";
					}?>
					</select>
    </div>

    		<div class="row center">
        <button class="btn waves-effect waves-light" type="submit" name="submit">Tambah<i class="material-icons right">send</i></button>
				<button class="btn waves-effect red darken-2" type="button" Value="Kembali" Onclick="window.location.href='ruang.php'">Kembali</button>
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
