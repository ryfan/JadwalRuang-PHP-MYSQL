<?php
session_start();
include('config.php');
include_once('cek-login.php');
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Monitoring - Sistem Monitoring Ruangan</title>
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <link rel="stylesheet" href="materialize/css/materialize.min.css" type="text/css" />
    <link href="materialicon/icon.css" rel="stylesheet">
    <script src="materialize/js/jquery-1.11.3.min.js"></script>
    <script src="materialize/js/cycle.js" charset="utf-8"></script>
    <script type="text/javascript">
    $('#slideshow').cycle({
});
         </script>

    <style media="screen">
      .foot {
        position:fixed;
        left:0px;
        bottom:0px;
        height:5px;
        width:100%;
      }

      .fullWidth {
   width: 100%;
   margin-left: auto;
   margin-right: auto;
   max-width: initial;
}

    </style>
  </head>
  <body>
    <div class="navbar-fixed">
        <nav class="blue">
            <div class="nav-wrapper container">
                <a href="http://www.dharmaputra.ac.id/" class="brand-logo" target="_blank"><img src="images/stmikdharmaputra.png" alt="logo stmik" title="stmik dharma putra" width="100px" height="100px"/></a>
                    <ul class="right hide-on-med-and-down">
                        <li class="active"><a href="monitoring.php">Live Monitoring</a></li>
                    </ul>
              </div>
         </nav>
      </div>
    <?php
  			echo"<pre>";
        echo"<br>";
  		  echo "</pre>";
  	?>
    <div id="slideshow" class="fullwidth">
    <div >
    <table border="1" width="100%" class="responsive-table">
            <tr class="dark purple" height="100px">
                <th style="font-size:20pt;text-align:center;width:20%">MATA KULIAH</th>
                <th style="font-size:20pt;text-align:center;width:20%">KELOMPOK</th>
                <th style="font-size:20pt;text-align:center;width:20%">RUANGAN</th>
                <th style="font-size:20pt;text-align:center;width:20%">WAKTU</th>
                <th style="font-size:20pt;text-align:center;width:20%">DOSEN</th>
                <th style="font-size:20pt;text-align:center;width:20%">KETERANGAN</th>
            </tr>
            <?php
            error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
            $thn_ajar = $_GET['thn_ajar'];
            $semester = $_GET['semester'];
            $hari     = $_GET['hari'];

            $query_select = "SELECT * FROM jadwal WHERE thn_ajar='$thn_ajar' AND semester='$semester' AND hari='$hari' ORDER BY jam";
            $result_select = mysql_query($query_select) or die(mysql_error());
            $rows = array();
            while($row = mysql_fetch_array($result_select))
            $rows[] = $row;
            $no = 1;
            foreach ($rows as $data){ ?>
            <tr style="background : <?=($no % 2 == 0)?"#FFFFFF":"";?>;">
            <th style="font-size:20pt;text-align:center;width:20%"><?php echo $data['matkul']; ?></th>
                  <th style="font-size:20pt;text-align:center;width:20%"><?php echo $data['kelompok']; ?></th>
                  <th style="font-size:20pt;text-align:center;width:20%"><?php echo $data['ruang']; ?></th>
                  <th style="font-size:20pt;text-align:center;width:20%"><?php echo $data['jam'] .'-'. $data['selesai']; ?></th>
                  <th style="font-size:20pt;text-align:center;width:20%"><?php echo $data['dosen']; ?></th>
                  <th style="font-size:20pt;text-align:center;width:20%"><span class="red-text"><?php echo $data['keterangan']; $no++?></span></th>
              </tr>
       <?php if($no > 4){?>
        </table>
    </div>
    <div>
        <table border="1" width="100%" class="responsive-table">
          <tr class="dark purple" height="100px">
            <th style="font-size:20pt;text-align:center;width:20%">MATA KULIAH</th>
            <th style="font-size:20pt;text-align:center;width:20%">KELOMPOK</th>
            <th style="font-size:20pt;text-align:center;width:20%">RUANGAN</th>
            <th style="font-size:20pt;text-align:center;width:20%">WAKTU</th>
            <th style="font-size:20pt;text-align:center;width:20%">DOSEN</th>
            <th style="font-size:20pt;text-align:center;width:20%">KETERANGAN</th>
          </tr>
        <?php $no = 1;} ?>
        <?php }?>
       </table>
     </div>
   </div>
   <br>
     <div class="row center foot">
   <span style="color:#ffffff">Copyright 2016 - Sistem Monitoring Ruangan</span>
       </div>
  </body>
</html>
