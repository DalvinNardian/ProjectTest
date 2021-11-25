<?php 
    include "koneksi.php";


    $isbn = $_POST['isbn'];
    $judul = $_POST['judul'];
    $idpenulis = $_POST['Id_penulis'];
    $idpenerbit = $_POST['Id_penerbit'];    
    $idkategori = $_POST['Id_kategori'];
    $thnterbit = $_POST['tahun_terbit'];
    $sinopsis = $_POST['sinopsis'];
    $jumlah = $_POST['jumlah'];
    
    $query = mysqli_query($koneksi,"insert into buku(`isbn`, `judul`, `Id_penulis`, `Id_penerbit`, `Id_kategori`, `tahun_terbit`, `sinopsis`, `jumlah`) 
                            values ('$isbn','$judul','$idpenulis','$idpenerbit','$idkategori', '$thnterbit', '$sinopsis', '$jumlah')");
    header('location:data_buku.php');
?>