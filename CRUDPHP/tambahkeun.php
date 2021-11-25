<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$nis = $_POST['nis'];
$jk = $_POST['jk'];
$agama = $_POST['agama'];
$tgl = $_POST['tgl_lahir'];
$rombel = $_POST['rombel'];
$rayon = $_POST['rayon'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into siswa(nis, nama, jk, agama, tgl_lahir,rombel,rayon) values('$nis','$nama','$jk','$agama', '$tgl', '$rombel', '$rayon')");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>