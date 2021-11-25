<?php 
    include "header.php";
?>

<div class="container">
    <div class="row">
        <div class="col-lg-12 mt-4" style="min-height: 430px;">
        <div class="card">
            <div class="card-header">
                Tambah Data Siswa
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <form action="simpan_buku.php" method="post">
                            <div class="form-group">
                                <label for="">ISBN</label>
                                <input type="text" class="form-control" placeholder="Masukan ISBN" name="isbn">
                            </div>
                            <div class="form-group">
                                <label for="">Judul</label>
                                <input type="text" class="form-control" placeholder="Judul Buku" name="judul">
                            </div>
                            <div class="form-group">
                                <label for="">Penulis</label>
                                <input type="text" class="form-control" placeholder="Penulis Buku" name="Id_penulis">
                            </div>
                            <div class="form-group">
                                <label for="">Penerbit</label>
                                <input type="text" class="form-control" placeholder="Penerbit Buku" name="Id_penerbit">
                            </div>
                            <div class="form-group">
                                <label for="">Kategori</label>
                                <input type="text" class="form-control" placeholder="Kategori Buku" name="Id_kategori">
                            </div>
                            <div class="form-group">
                                <label for="">Tahun Terbit</label>
                                <input type="text" class="form-control" placeholder="Masukan Tahun terbit" name="tahun_terbit">
                            </div>
                            <div class="form-group">
                                <label for="">Sinopsis</label>
                                <input type="text" class="form-control" placeholder="Sinopsis Buku" name="sinopsis">
                            </div>
                            <div class="form-group">
                                <label for="">Jumlah</label>
                                <input type="text" class="form-control" placeholder="Jumlah Buku" name="jumlah">
                            </div>
                            <input type="submit" class="btn btn-primary" value="Simpan">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
<footer class="mt-4 bg-dark p-1 text-center" style="color: white; font-weight: bold">
  <p>Perpustakaan &copy; 2021</p>
</footer>