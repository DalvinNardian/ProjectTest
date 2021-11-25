<?php 
$conn = mysqli_connect("localhost","root","","db_album");
//$koneksi = mysql_connect("localhost", "root", "", "Nama_dbnya");
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
?>