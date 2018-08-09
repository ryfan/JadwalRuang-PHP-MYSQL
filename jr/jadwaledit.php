<?php
session_start();
include('config.php');
include_once('cek-login.php');
?>

<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Edit Jadwal - Sistem Monitoring Ruangan</title>
<link rel="stylesheet" href="css/style.css" type="text/css" />
<link rel="stylesheet" href="materialize/css/materialize.min.css" type="text/css" />
<link href="materialicon/icon.css" rel="stylesheet">
<script src="materialize/js/jquery-1.11.3.min.js"></script>
<script src="materialize/js/select.js" charset="utf-8"></script>
</head>

<body>
	<div class="navbar-fixed">
			<nav class="blue">
					<div class="nav-wrapper container">
							<a href="http://www.dharmaputra.ac.id/" class="brand-logo" target="_blank"><img src="images/stmikdharmaputra.png" alt="logo stmik" title="stmik dharma putra" width="100px" height="100px"/></a>
									<ul class="right hide-on-med-and-down">
											<li><a href="jadwal.php">Lihat Data Jadwal</a></li>
											<li><a href="dashboard.php">Dashboard Admin</a></li>
									</ul>
						</div>
			 </nav>
		</div>
		<div style="margin:auto; padding:5px 0 5px; text-align:center">
			<h3>Sistem Monitoring Ruangan</h3>
		</div>
<div style="margin:auto">
	<form action="jadwalupdate.php" method="post" style="width:400px; margin:auto; background-color: #ffffff;" class="z-depth-4">
		<fieldset>
			<legend>Update Jadwal</legend>
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
      // terima id_matkul dari halaman jadwal
      $id_matkul = $_GET['id_matkul'];
      $query = mysql_query("SELECT * FROM jadwal WHERE id_matkul='$id_matkul'");
      $result = mysql_fetch_array($query);
      ?>
			<div class="input-field col s6">
					<input id="icon_prefix" type="hidden" class="validate" name="id_matkul" value="<?php echo $result['id_matkul']; ?>">
		</div>
			<div class="input-field col s6">
					<select name="matkul">
						<option value="<?php echo $result['matkul']; ?>" selected><center><?php echo $result['matkul']; ?></center></option>
						<?php
						$query = mysql_query("select * from matkul");
						while ($data = mysql_fetch_array($query)){
					echo "<option value='$data[nm_matkul]'>$data[nm_matkul]</option>";
					}?>
					</select>
					<label for="icon_prefix">Mata Kuliah</label>
		</div>
			<div class="input-field col s6">
					<input id="icon_prefix" type="text" class="validate" name="kelompok" value="<?php echo $result['kelompok']; ?>" required>
			<label for="icon_prefix">Kelompok</label>
		</div>
		<div class="input-field col s6">
				<select name="dosen">
					<option value="<?php echo $result['dosen']; ?>" selected><?php echo $result['dosen']; ?></option>
					<?php
					$query = mysql_query("select * from dosen");
					while ($data = mysql_fetch_array($query)){
				echo "<option value='$data[nm_dosen]'>$data[nm_dosen]</option>";
				}?>
				</select>
				<label for="icon_prefix">Dosen</label>
	</div>
	<div class="input-field col s6">
		<select name="hari">
			<option value="<?php echo $result['hari']; ?>" selected><?php echo $result['hari']; ?></option>
			<option value='senin'>Senin</option>
			<option value='selasa'>Selasa</option>
			<option value='rabu'>Rabu</option>
			<option value='kamis'>Kamis</option>
			<option value='jumat'>Jum'at</option>
			<option value='sabtu'>Sabtu</option>
		</select>
		<label for="icon_prefix">Hari</label>
</div>
	<div class="input-field col s6">
		<select name="jam_awal">
			<option value="<?php echo $result['jam']; ?>" selected><?php echo $result['jam']; ?></option>
			<option value='08.00'>08.00</option>
			<option value='08.55'>08.55</option>
			<option value='09.45'>09.45</option>
			<option value='10.40'>10.40</option>
			<option value='11.35'>11.35</option>
			<option value='12.30'>12.30</option>
			<option value='13.25'>13.25</option>
			<option value='14.20'>14.20</option>
			<option value='15.15'>15.15</option>
			<option value='16.10'>16.10</option>
			<option value='17.05'>17.05</option>
			<option value='18.00'>18.00</option>
			<option value='18.55'>18.55</option>
		</select>
		<label for="icon_prefix">Jam Mulai</label>
</div>
<div class="input-field col s6">
	<select name="jam_akhir">
		<option value="<?php echo $result['selesai']; ?>" selected><?php echo $result['selesai']; ?></option>
		<option value='09.40'>09.40</option>
		<option value='10.35'>10.35</option>
		<option value='11.30'>11.30</option>
		<option value='12.25'>12.25</option>
		<option value='13.20'>13.20</option>
		<option value='14.15'>14.15</option>
		<option value='15.10'>15.10</option>
		<option value='16.05'>16.05</option>
		<option value='17.00'>17.00</option>
		<option value='17.55'>17.55</option>
		<option value='18.50'>18.50</option>
		<option value='21.00'>21.00</option>
	</select>
	<label for="icon_prefix">Jam Selesai</label>
</div>
<div class="input-field col s6">
		<input id="icon_prefix" type="text" class="validate" name="tahunajar" value="<?php echo $result['thn_ajar']; ?>"required>
<label for="icon_prefix">Tahun Ajar</label>
</div>
<div class="input-field col s6">
	<select name="semester">
		<option value="" disabled selected>Pilih Semester</option>
		<option value='1'>Gasal</option>
		<option value='2'>Genap</option>
	</select>
	<label for="icon_prefix">Semester</label>
</div>
<div class="input-field col s6">
	<select name="keterangan">
		<option value="<?php echo $result['keterangan']; ?>" selected><?php echo $result['keterangan']; ?></option>
		<option value='Hadir'>Hadir</option>
		<option value='Tidak Hadir'>Tidak Hadir</option>
		<option value='Pengganti'>Pengganti</option>
	</select>
	<label for="icon_prefix">Keterangan</label>
</div>
	<div class="input-field col s6">
			<select name="ruang">
				<option value="<?php echo $result['ruang']; ?>" selected><?php echo $result['ruang']; ?></option>
				<?php
				$query = mysql_query("select * from detil_ruang");
				while ($data = mysql_fetch_array($query)){
			echo "<option value='$data[ruang]'>$data[ruang]</option>";
			}?>
			</select>
			<label for="icon_prefix">Ruang</label>
</div>
<div class="input-field col s6">
	<select name="kelas">
		<option value="" disabled selected><center>Pilih Kelas</center></option>
		<option value='1'>Reguler</option>
		<option value='2'>Karyawan</option>
	</select>
	<label for="icon_prefix">Kelas</label>
</div>
<div class="row center">
<button class="btn waves-effect waves-light" type="submit" name="submit">Update Jadwal<i class="material-icons right">send</i></button>
<button class="btn waves-effect red darken-2" type="button" Value="Kembali" Onclick="window.location.href='dosen.php'">Kembali</button>
</div>
<input type="hidden" name="id_matkul" value="<?php echo $result['id_matkul']; ?>" />
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
