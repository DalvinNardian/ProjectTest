<?php 
    include "koneksi.php";

    $nisn = $_POST['nisn'];
    $nama = $_POST['nama_siswa'];
    $jkel = $_POST['jkel'];
    $tempat = $_POST['tempat_lahir'];
    $tgl = $_POST['tgl_lahir'];
    $alamt = $_POST['alamat'];
    $hp = $_POST['no_hp'];
    
    $query = mysqli_query($koneksi,"insert into siswa(`nisn`, `nama_siswa`, `jkel`, `tempat_lahir`, `tgl_lahir`, `alamat`, `no_hp`)  VALUES ('$nisn','$nama','$jkel','$tempat','$tgl', '$alamt', '$hp')");

    header('location:data_siswa.php');
?>