<?php

$conn = mysqli_connect('localhost', 'root', '', 'db_album');

if(isset($_POST['submit'])){
    $title = $_POST['title'];
    $artist = $_POST['artist'];
    $query = mysqli_query($conn, "INSERT INTO tbl_albm VALUES
        ('','$title','$artist')
    ");
        if(mysqli_affected_rows($conn) > 0){
            echo "<script>
                alert('New Album Sucsessful Added');
                document.location.href='index.php'
            </script>";
        }else{
            echo "<script>
                alert('New Album Failed To Add');
                document.location.href='add.php'
            </script>";
        }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Album</title>
    <link href="add.css" type="text/css" rel="stylesheet">
</head>
<body>
    
<form action="" method="post">
<font face="tahoma" color="green" sizq="3">Add New Album</font>

<table>
    <tr>
        <td>Title</td>
        <td>:</td>
        <td>
            <input type="text" name="title" size="30" autocomplete="off" required>
        </td>
    </tr>
    <tr>
        <td>Artist</td>
        <td>:</td>
        <td>
            <input type="text" name="artist" size="30" autocomplete="off" required>
        </td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td>
            <input type="submit" name="submit" value="Add">
            <a href="index.php" style="text-decoration: none;">Back</a>
        </td>
    </tr>
</table>
</form>

</body>
</html>