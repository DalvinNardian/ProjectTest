<?php
@session_start();

include '../config/database.php';
include '../library/controllers.php';

$perintah = new oop();

$perintah->tampil("tbl_siswa WHERE nis = '$_SESSION[username]'");

if (empty($_SESSION['username'])) {
  echo "<script>alert('Silakan login terlebih dahulu'); document.location.href='index.php'</script>";
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SIM ABSEN HAL PESERTA DIDIK</title>
  <link rel="stylesheet" href="../css/style.css">
</head>
<body>
  <div id="utama">
    <ul class="menu">
      <li><a href="?menu=home">Home</a></li>
      <li><a href="#">Data Diri</a>
        <ul>
          <li><a href="?menu=lihat_data">Lihat</a></li>
          <li><a href="?menu=edit_data&nis=<?php echo $_SESSION['username'] ?>">Edit</a></li>
        </ul>
      </li>
      <li><a href="#">Laporan</a>
        <ul>
          <li><a href="laporan_today.php?menu=laporan&nis=<?php echo $_SESSION['username'] ?>" target="_blank" rel="noopener noreferrer">Lihat</a></li>
        </ul>
      </li>
      <li><a href="logout.php" onClick="return confirm('Anda Yakin Ingin Keluar?')">Keluar</a></li>
    </ul>

    <div class="konten">
      <?php
      switch ($_GET['menu']) {
        case 'home':
          include 'home.php';
          break;
        
        case 'lihat_data':
          include 'lihat_data.php';
          break;

        case 'edit_data';
          include 'edit_data_diri.php';
          break;
      }
      ?>
    </div>
  </div>
</body>
</html>