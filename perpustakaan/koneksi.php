<?php 

    // koneksi ke myqli
    $koneksi = mysqli_connect("localhost", "root", "", "perpus");

    // check koneksi
    if( mysqli_connect_errno() ){
        echo "Koneksi database gagal : " . mysqli_connect_errno();
    }
?>