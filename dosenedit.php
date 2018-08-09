<?php
session_start();
include('config.php');
include_once('cek-login.php');
?>

<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Edit Dosen - Sistem Monitoring Ruangan</title>
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
                      <li><a href="dosen.php">Lihat Data Dosen</a></li>
                      <li><a href="dashboard.php">Dashboard Admin</a></li>
                  </ul>
            </div>
       </nav>
    </div>
			 <div style="margin:auto; padding:5px 0 5px; text-align:center">
			   <h3>Sistem Monitoring Ruangan</h3>
			 </div>
<div style="margin:auto">
	<form action="dosenupdate.php" method="post" style="width:400px; margin:auto; background-color: #ffffff;" class="z-depth-4">
		<fieldset>
			<legend>Data Dosen</legend>

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
      $id_dosen = $_GET['id_dosen'];

      $query = mysql_query("select * from dosen where id_dosen='$id_dosen'");

      $data = mysql_fetch_array($query);
      ?>

		<div class="input-field col s6">
				<i class="material-icons prefix">account_circle</i>
				<input id="icon_prefix" type="text" class="validate" name="id_dosen" value="<?php echo $data['id_dosen']; ?>" readonly>
				<label for="icon_prefix">NIP</label>
	</div>
		<div class="input-field col s6">
				<i class="material-icons prefix">lock</i>
				<input id="icon_prefix" type="text" class="validate" name="nm_dosen" value="<?php echo $data['nm_dosen']; ?>">
				<label for="icon_prefix">Nama Dosen</label>
	</div>

	<div class="input-field col s6">
				<i class="material-icons prefix">verified_user</i>
				<textarea id="textarea1" class="materialize-textarea" name="alamat"><?php echo $data['alamat']; ?></textarea>
				<label for="textarea1">Alamat Dosen</label>
	</div>
	<div class="input-field col s6">
			<i class="material-icons prefix">call</i>
			<input id="icon_prefix" type="number" class="validate" name="tlp" length="12" value="<?php echo $data['tlp']; ?>">
			<label for="icon_prefix">No Telp</label>
	</div>
    		<div class="row center">
        <button class="btn waves-effect waves-light" type="submit" name="submit">Update Data<i class="material-icons right">send</i></button>
				<button class="btn waves-effect red darken-2" type="button" Value="Kembali" Onclick="window.location.href='dosen.php'">Kembali</button>
      </div>
<input type="hidden" name="nip" value="<?php echo $data['id_dosen']; ?>" />
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
