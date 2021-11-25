<?php 
    include "header.php";
    
?>

<div class="container">
    <div class="row">
        <div class="col-lg-12 mt-3" style="min-height: 470px;">
        <div class="card">
            <div class="card-header">
                Data Penerbit
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <a href="tambah_penerbit.php" class="btn btn-primary">Tambah Data</a>
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
                                <th>Kode Penerbit</th>
                                <th>Nama Penerbit</th>
                                <th>Kota</th>
                                <th>Aksi</th>
                            </tr>
                            <?php
                                if(isset ($_GET['cari'])){
                                    $keyword = $_GET['keyword'];
                                    $query = mysqli_query($koneksi, "select * from penerbit where nama_penerbit like '%$keyword%'");
                                }else{
                                    $query = mysqli_query($koneksi, "select * from penerbit");
                                }
                                require "koneksi.php";
                                $no = 1;
                                $data = mysqli_query($koneksi, "SELECT * FROM penerbit");
                                while ($d = mysqli_fetch_array($data) ) : ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $d['Id_penerbit']; ?></td>
                                        <td><?= $d['nama_penerbit']; ?></td>
                                        <th><?= $d['kota']; ?></th>
                                        <td><a href="edit_penerbit.php?Id=<?php echo $d['Id_penerbit']; ?>" class="btn btn-warning">Edit</a>  <a href="hapus_penerbit.php?Id=<?php echo $d['Id_penerbit']; ?>" class="btn btn-danger">Hapus</a> </td>
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

<?php 
    include "footer.html";
?>