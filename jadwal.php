<?php
session_start();
include('config.php');
include_once('cek-login.php');
?>

<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Jadwal - Sistem Monitoring Ruangan</title>
<link rel="stylesheet" href="css/style.css" type="text/css" />
<link rel="stylesheet" href="datatables/jquery.dataTables.min.css" type="text/css" />
<link rel="stylesheet" href="materialize/css/materialize.min.css" type="text/css" />
<link href="materialicon/icon.css" rel="stylesheet">
<script src="materialize/js/jquery-1.11.3.min.js"></script>
<script src="datatables/jquery.dataTables.min.js"></script>
<style type="text/css">
	th,td {
		text-align:center;
	}
</style>
<script type="text/javascript">
$(document).ready(function() {
$('#jadwal').dataTable({
    "bPaginate": true,
    "bLengthChange": false,
    "bFilter": true,
    "bInfo": true,
    "bAutoWidth": true });
});
</script>
</head>
<body>
	<div class="navbar-fixed">
			<nav class="blue">
					<div class="nav-wrapper container">
							<a href="http://www.dharmaputra.ac.id/" class="brand-logo" target="_blank"><img src="images/stmikdharmaputra.png" alt="logo stmik" title="stmik dharma putra" width="100px" height="100px"/></a>
									<ul class="right hide-on-med-and-down">
											<li class="active"><a href="jadwal.php">Data Jadwal</a></li>
											<li><a href="dashboard.php">Dashboard Admin</a></li>
									</ul>
						</div>
			 </nav>
		</div>
			 <div style="margin:auto; padding:5px 0 5px; text-align:center">
				 <h3>Sistem Monitoring Ruangan</h3>
			 </div>
<div style="margin:auto">
	<div class="content z-depth-4">
	<?php
	error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
	$message = $_GET['msg'];

	if ($message == 'success') {
	?>
	<div class="info">Success</div>
	<?php } else if ($message == 'failed') {?>
	<div class="error">Error</div>
	<?php } ?>
	<table  class="highlight responsive-table bordered z-depth-4 display" id="jadwal">
		<thead>
			<tr>
				<th>Matkul</th>
				<th>Kelompok</th>
				<th>Dosen</th>
				<th>Hari</th>
				<th>Jam</th>
				<th>Tahun Ajar</th>
        <th>Semester</th>
        <th>Keterangan</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tfoot>
			<tr>
				<th>Matkul</th>
				<th>Kelompok</th>
				<th>Dosen</th>
				<th>Hari</th>
				<th>Jam</th>
				<th>Tahun Ajar</th>
				<th>Semester</th>
				<th>Keterangan</th>
				<th>Aksi</th>
			</tr>
		</tfoot>
		<tbody>
			<?php
			$query = mysql_query("select * from jadwal");
			while ($data = mysql_fetch_array($query)) {
			?>
			<tr>
				<td><?php echo $data['matkul'];?></td>
				<td><?php echo $data['kelompok']; ?></td>
				<td><?php echo $data['dosen']; ?></td>
				<td><?php echo $data['hari']; ?></td>
        <td><?php echo $data['jam']; ?>-<?php echo $data['selesai']; ?></td>
        <td><?php echo $data['thn_ajar']; ?></td>
        <td><?php echo $data['semester']; ?></td>
				<td><span style="color:red"><?php echo $data['keterangan']; ?></span></td>
				<td><a href="jadwaledit.php?id_matkul=<?php echo $data['id_matkul'];?>">Ubah</a> | <a href="jadwaldelete.php?id_matkul=<?php echo $data['id_matkul'];?>" class="delete" onclick="javascript: return confirm('Anda yakin hapus ?')">Hapus</a>

			</tr>
			<?php } ?>
		</tbody>
	</table>
<div class="row center">
							<button class="btn waves-effect red darken-2" type="button" Value="Kembali" Onclick="window.location.href='jadwaltambah.php'">Tambah Jadwal</button>
<button class="btn waves-effect red darken-2" type="button" Value="Kembali" Onclick="window.location.href='dashboard.php'">Kembali</button>
</div>
	</div>
</div><br>
	<div class="row center">
<span style="color:#ffffff">Copyright 2016 - Sistem Monitoring Ruangan</span>
    </div>
<div class="clear"></div>
<div style="padding-bottom:50px;"></div>
</body>
</html>
