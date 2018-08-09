<?php
session_start();
include('config.php');
include_once('cek-login.php');
?>

<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Users - Sistem Monitoring Ruangan</title>
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
  $('#users').DataTable();
} );
</script>
</head>

<body>
  <div class="navbar-fixed">
      <nav class="blue">
          <div class="nav-wrapper container">
              <a href="dosentambah.php" class="brand-logo"><img src="images/stmikdharmaputra.png" alt="logo stmik" title="stmik dharma putra" width="100px" height="100px"/></a>
                  <ul class="right hide-on-med-and-down">
                      <li class="active"><a href="users.php">Data Users</a></li>
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
	    <div>
	<table  class="highlight responsive-table bordered z-depth-4 display" id="users">
		<thead>
			<tr>
				<th>No.</th>
				<th>Username</th>
				<th>Fullname</th>
				<th>Email</th>
        <th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$query = mysql_query("select * from users");
			$i = 1;
			while ($data = mysql_fetch_array($query)) {
			?>
			<tr class="<?php if ($i % 2 == 0) { echo "odd"; } else { echo "even"; } ?>">
				<td><?php echo $i; ?></td>
				<td>
					<?php
					echo $data['username'];?>
				</td>
				<td><?php echo $data['fullname']; ?></td>
				<td><?php echo $data['email']; ?></td>
        <td><a href="usersedit.php?uid=<?php echo $data['id_user'];?>">Ubah</a></td>
			</tr>
			<?php
				$i++;
			}
			?>
		</tbody>
	</table>
<br>
    <div class="row center">
				<button class="btn waves-effect red darken-2" type="button" Value="tambah" Onclick="window.location.href='userstambah.php'">Tambah User</button>
        <button class="btn waves-effect red darken-2" type="button" Value="kembali" Onclick="window.location.href='dashboard.php'">Kembali</button>
          </div>
        </div>
      </div><br>
    	<div class="row center" style="color:#26a69a"><span style="color:#ffffff">Copyright 2016 - Sistem Monitoring Ruangan</span></div>
    <div class="clear"></div>
    <div style="padding-bottom:50px;"></div>
    </body>
    </html>
