<?php 

// koneksi database
include 'data_kategori.php';

// menangkap data dari id yang di kirim dari url
$d = $_GET["Id"];

// menghapus data dari database
mysqli_query($koneksi,"delete from kategori where Id_kategori='$d'");
 
// mengalihkan halaman kembali ke index.php
header("location:data_kategori.php");

 ?>
