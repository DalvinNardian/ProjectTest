<?php

include 'koneksi.php';
$row = mysqli_query($conn, "SELECT * FROM tbl_albm");
$no = 1;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Index</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    
    <h1>My Album</h1>
    <a href="add.php">Add New Album</a>
    <table border="1" cellpadding ="5" cellspacing ="0">
        <tr style="background-color: brown;">
            <th>No</th>
            <th>Title</th>
            <th>Artist</th>
            <th>Action</th>
        </tr>
    <?php while($show = mysqli_fetch_assoc($row)) : ?>
        <tr style ="background-color: #CCFF66;">
            <td><?=$no++?></td>
            <td><?=$show['title']?></td>
            <td><?=$show['artist']?></td>
            <td>
                <a href="delete.php?id=<?=$show['id']?>">Hapus</a> | 
                <a href="edit.php?id=<?=$show['id']?>">Edit</a>
            </td>
        </tr>
    <?php endwhile?>
    </table>

</body>
</html>