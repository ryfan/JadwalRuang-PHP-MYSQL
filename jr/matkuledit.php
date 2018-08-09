<?php
session_start();
include('config.php');
include_once('cek-login.php');
?>

<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Edit Mata Kuliah - Sistem Monitoring Ruangan</title>
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
	<form action="matkulupdate.php" method="post" style="width:400px; margin:auto; background-color: #ffffff;" class="z-depth-4">
		<fieldset>
			<legend>Mata Kuliah</legend>

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
      // terima nip dari halaman dosen
      $id_matkul = $_GET['id_matkul'];
      $query = mysql_query("select * from matkul where id_matkul='$id_matkul'");
      $data = mysql_fetch_array($query);
      ?>

			<div class="input-field col s6">
      		<i class="material-icons prefix">vpn_key</i>
          <input id="icon_prefix" type="text" class="validate" name="id_matkul" required value="<?php echo $data['id_matkul']; ?>" disabled>
          <label for="icon_prefix">Kode Mata Kuliah</label>
    </div>
			<div class="input-field col s6">
      		<i class="material-icons prefix">subtitles</i>
          <input id="icon_prefix" type="text" class="validate" name="nm_matkul" required value="<?php echo $data['nm_matkul']; ?>">
          <label for="icon_prefix">Nama Mata Kuliah</label>
    </div>

    		<div class="row center">
        <button class="btn waves-effect waves-light" type="submit" name="submit">Update Matkul<i class="material-icons right">send</i></button>
				<button class="btn waves-effect red darken-2" type="button" Value="Kembali" Onclick="window.location.href='matkul.php'">Kembali</button>
			</div>
<input type="hidden" name="id_matkul" value="<?php echo $data['id_matkul']; ?>" />
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
