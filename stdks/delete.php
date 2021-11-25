<?php

include 'koneksi.php';
mysqli_query($conn, "DELETE FROM tbl_albm WHERE id = '$_GET[id]'");
if(mysqli_affected_rows($conn) > 0){
    if(mysqli_affected_rows($conn) > 0){
        echo "<script>
            alert('Album Sucsessful Removed');
            document.location.href='index.php'
        </script>";
    }else{
        echo "<script>
            alert('Album Failed To Remove');
            document.location.href='index.php'
        </script>";
    }
}

?>