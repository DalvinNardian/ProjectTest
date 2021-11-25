<?php 
    include "koneksi.php";
    $nama_penerbit = $_POST['nama_penerbit'];
    $nama_kota = $_POST['kota'];
    $query = mysqli_query($koneksi, "insert into penerbit values (null, '$nama_penerbit', '$nama_kota')");
    header('location:data_penerbit.php');
?>