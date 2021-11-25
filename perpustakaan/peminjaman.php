<?php 
    include "header.php";
    
?>

<div class="container">
    <div class="row">
        <div class="col-lg-12 mt-3" style="min-height: 470px;">
        <div class="card">
            <div class="card-header">
                Data Peminjaman
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <a href="tambah_penerbit.php" class="btn btn-primary">Tambah Peminjaman</a>
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
                                <th>Nama Anggota</th>
                                <th>Tanggal Pinjam</th>
                                <th>Action</th>
                            </tr>
                            <?php
                                if(isset ($_GET['cari'])){
                                    $keyword = $_GET['keyword'];
                                    $query = mysqli_query($koneksi, "select * from  where detail_peminjaman like '%$keyword%'");
                                }else{
                                    $query = mysqli_query($koneksi, "select * from detail_peminjaman");
                                }
                                require "koneksi.php";
                                $no = 1;
                                $data = mysqli_query($koneksi, "SELECT * FROM detail_peminjaman");
                                while ($d = mysqli_fetch_array($data) ) : ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $d['Id_peminjaman']; ?></td>
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