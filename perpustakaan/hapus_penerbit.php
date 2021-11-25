<?php 

// koneksi database
include 'data_penerbit.php';

// menangkap data dari id yang di kirim dari url
$d = $_GET["Id"];

// menghapus data dari database
mysqli_query($koneksi,"delete from penerbit where Id_penerbit='$d'");
 
// mengalihkan halaman kembali ke index.php
@header('location:data_penerbit.php');

 ?>
