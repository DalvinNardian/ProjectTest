<?php 
    include "koneksi.php";

    $isbn = $_POST['isbn'];
    $judul = $_POST['judul'];
    $penulis = $_POST['penulis'];
    $penerbit = $_POST['penerbit'];    
    $kategori = $_POST['kategori'];
    $thnterbit = $_POST['tahun_terbit'];
    $sinopsis = $_POST['sinopsis'];
    $jumlah = $_POST['jumlah'];
    
    $query = mysqli_query($koneksi,"insert into buku(`isbn`, `judul`, `penulis`, `penerbit`, `kategori`, `tahun_terbit`, `sinopsis`, `jumlah`)  
                    VALUES ('$isbn','$judul','$penulis','$penerbit','$kategori', '$thnterbit', '$sinopsis', '$jumlah')");

    header('location:data_buku.php');
?>