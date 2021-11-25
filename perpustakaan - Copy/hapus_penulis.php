<?php 

// koneksi database
include 'data_penulis.php';

// menangkap data dari id yang di kirim dari url
$d = $_GET["Id"];

// menghapus data dari database
mysqli_query($koneksi,"delete from penulis where Id_penulis='$d'");
 
// mengalihkan halaman kembali ke index.php
header("location:data_penulis.php");

 ?>
