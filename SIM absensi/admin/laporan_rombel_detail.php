<?php

include '../config/database.php';
include '../library/controllers.php';

$perintah = new oop();

?>

<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LAPORAN KEHADIRAN DETAIL</title>
  <style>
    .utama{
      margin: 0 auto;
      border: thin solid #000;
      width: 700px;
    }
    .print{
      margin: 0 auto;
      width: 700px;
    }
    a{
      text-decoration: none;
    }
  </style>
</head>
<body>
  <div class="print">
  <a href="#" onClick="document.getElementById('print').style.display='none'; window.print();">
    <img src="../images/print-icon.png" id="print" width="30" height="30" border="0"></a>
  </div>
  <div class="utama">
    <table width="98%" border="0" cellspacing="0" cellpadding="0" align="center" style="margin-top: 10px;">
      <tr>
        <td width="7%" rowspan="3" align="center" valign="top">
          <img src="../images/logo.png" alt="logo" width="55" height="55">
        </td>
        <td width="93%" valign="top"><strong>&nbsp;LAPORAN KEHADIRAN</strong></td>
      </tr>
      <tr>
        <td valign="top">&nbsp;SMK Wikrama Kota Bogor</td>
      </tr>
      <tr>
        <td valign="top">&nbsp;Ilmu yang Amaliah, Amal yang Ilmiah, Akhlakul Karimah</td>
      </tr>
    </table>
    <table width="100%">
      <tr><td><hr></td></tr>
    </table>
    <table cellspacing="1" align="center" border="1">
    <tr align="center">
        <td rowspan="2">No</td>
        <td rowspan="2" width="100">NIS</td>
        <td rowspan="2" width="150">Nama</td>
        <td rowspan="2" width="100">Rombel</td>
        <td colspan="4">Keterangan</td>
        <td rowspan="2" width="100">Tanggal</td>
      </tr>
      <tr align="center">
        <td width="25">H</td>
        <td width="25">S</td>
        <td width="25">I</td>
        <td width="25">A</td>
      </tr>

      <?php
      $a = $perintah->tampil("query_absen WHERE nis = '$_GET[nis]'");
      $no = 0;
      if ($a == "") {
        echo "<table><tr><td colspan='9'>NO RECORDS</td></tr></table>";
      } else {
        foreach ($a as $r) {
          $no++;
          ?>

      <tr align="center">
          <td><?php echo $no; ?></td>
          <td><?php echo $r['nis']; ?></td>
          <td><?php echo $r['nama']; ?></td>
          <td><?php echo $r['rombel']; ?></td>
          <td><?php echo $r['hadir']; ?></td>
          <td><?php echo $r['sakit']; ?></td>
          <td><?php echo $r['ijin']; ?></td>
          <td><?php echo $r['alpa']; ?></td>
          <td><?php echo $r['tgl_absen']; ?></td>
      </tr>

      <?php
        }
      }
      ?>
    </table>
    <br>
  </div>
  <center><p>&copy; <?php echo date('Y'); ?> SMK WIKRAMA BOGOR</p></center>
</body>
</html>