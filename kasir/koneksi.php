<?php 
date_default_timezone_set('Asia/Jakarta');
$koneksi = mysqli_connect("localhost","fawzya_kasir","1Teamhacker","fawzya_kasir");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
?>