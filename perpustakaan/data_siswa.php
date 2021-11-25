<?php 
    include "header.php";
    
?>

<!DOCTYPE html>
<html>
<head>
    <title>Perpustakaan | Data Buku</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-lg-12 mt-3" style="min-height: 470px;">
        <div class="card">
            <div class="card-header">
                Data Siswa
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <a href="tambah_siswa.php" class="btn btn-primary">Tambah Data</a>
                    </div>
                    <div class="col">
                        <form action="" class="form-inline float-right" method="get">
                            <input type="text" class="form-control" name="keyword">
                            <input type="submit" class="btn btn-primary ml-2" value="Cari" name="cari">
                        </form>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                        <table class="table table-bordered table-striped">
                            <tr>
                                <th>No</th>
                                <th>NISN</th>
                                <th>Nama Siswa</th>
                                <th>Jenis Kelamin</th>
                                <th>Tanggal Lahir</th>
                                <th>Alamat</th>
                                <th>No Hp</th>
                                <th>Aksi</th>
                            </tr>
                            <?php
                                if(isset ($_GET['cari'])){
                                    $keyword = $_GET['keyword'];
                                    $query = mysqli_query($koneksi, "select * from siswa where nama_siswa like '%$keyword%'");
                                }else{
                                    $query = mysqli_query($koneksi, "select * from siswa");
                                }
                                require "koneksi.php";
                                $no = 1;
                                $data = mysqli_query($koneksi, "SELECT * FROM siswa");
                                while ($d = mysqli_fetch_array($data) ) : ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $d['nisn']; ?></td>
                                        <td><?= $d['nama_siswa']; ?></td>
                                        <th><?= $d['jkel']; ?></th>
                                        <th><?= $d['tgl_lahir']; ?></th>
                                        <th><?= $d['alamat']; ?></th>
                                        <th><?= $d['no_hp']; ?></th>
                                        <td><a href="edit_siswa.php?Id=<?php echo $d['nisn']; ?>" class="btn btn-warning">Edit</a>  <a href="hapus_siswa.php?Id=<?php echo $d['nisn']; ?>" class="btn btn-danger">Hapus</a> </td>      
                                    </tr>
                                <?php endwhile; ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
</body>
</html>

<?php 
    include "footer.html";
?>
