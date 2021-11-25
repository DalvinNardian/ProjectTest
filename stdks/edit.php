<?php

include 'koneksi.php';

$query = mysqli_query($conn, "SELECT * FROM tbl_albm WHERE id = '$_GET[id]'");
$show = mysqli_fetch_assoc($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Album</title>
    <link href="add.css" type="text/css" rel="stylesheet">
</head>
<body>
    
<form action="" method="post">
<font face="tahoma" color="green" sizq="3">Update Album</font>

<table>
    <tr>
        <td>Title</td>
        <td>:</td>
        <td>
            <input type="text" name="title" size="30" autocomplete="off" required value="<?=$show['title']?>">
        </td>
    </tr>
    <tr>
        <td>Artist</td>
        <td>:</td>
        <td>
            <input type="text" name="artist" size="30" autocomplete="off" required value="<?=$show['artist']?>">
        </td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td>
            <input type="submit" name="submit" value="Update">
            <a href="index.php" style="text-decoration: none;">Back</a>
        </td>
    </tr>
</table>
</form>

</body>
</html>

<?php

if(isset($_POST['submit'])){
    $title = $_POST['title'];
    $artist = $_POST['artist'];
    $query = mysqli_query($conn, "UPDATE tbl_albm SET title = '$title', artist = '$artist' WHERE id='$_GET[id]'");
    
        if(mysqli_affected_rows($conn) > 0){
            echo "<script>
                alert('Album Editted Sucsessful');
                document.location.href='index.php'
            </script>";
        }else{
            echo "<script>
                alert('Album Failed to Edit');
            </script>";
        }
}


?>