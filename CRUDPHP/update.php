<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$rombel = $_POST['rombel'];
$rayon = $_POST['rayon'];
 
// update data ke database
mysqli_query($koneksi,"update siswa set nama='$nama', rombel='$rombel', rayon ='$rayon' where nis='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>