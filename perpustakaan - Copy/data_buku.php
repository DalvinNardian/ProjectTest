
<?php 
    include "header.php";
    
?>

<div class="container">
    <div class="row">
        <div class="col-lg-12 mt-3" style="min-height: 470px;">
        <div class="card">
            <div class="card-header">
                Data Buku
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <a href="tambah_buku.php" class="btn btn-primary">Tambah Data</a>
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
                                <th>ISBN</th>
                                <th>Judul</th>
                                <th>Penulis</th>
                                <th>Penerbit</th>
                                <th>Kategori</th>
                                <th>Tahun Terbit</th>
                                <th>Sinopsis</th>
                                <th>Jumlah</th>
                            </tr>
                            <?php
                                if(isset ($_GET['cari'])){
                                    $keyword = $_GET['keyword'];
                                    $query = mysqli_query($koneksi, "select * from buku where judul like '%$keyword%'");
                                }else{
                                    $query = mysqli_query($koneksi, "select * from buku");
                                }
                                require "koneksi.php";
                                $no = 1;
                                $data = mysqli_query($koneksi, "SELECT * FROM buku");
                                while ($d = mysqli_fetch_array($data) ) : ?>
                                    <tr>
                                        <td><?= $no++;; ?></td>
                                        <td><?= $d['isbn']; ?></td>
                                        <td><?= $d['judul']; ?></td>
                                        <td><?= $d['Id_penulis']; ?></td>
                                        <td><?= $d['Id_penerbit']; ?></td>
                                        <td><?= $d['Id_kategori']; ?></td>
                                        <td><?= $d['tahun_terbit']; ?></td>
                                        <td><?= $d['sinopsis']; ?></td>
                                        <td><?= $d['jumlah']; ?></td>      
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