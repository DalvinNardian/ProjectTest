<?php 
    include "header.php";
?>

<div class="container">
    <div class="row">
        <div class="col-lg-12 mt-4" style="min-height: 430px;">
        <div class="card">
            <div class="card-header">
                Tambah Data Peminjaman
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <form action="simpan_penerbit.php" method="post">
                            <div class="form-group">
                                <label for="">Nama Anggota</label>
                                <input type="text" class="form-control" placeholder="Nama Penerbit" name="nama_penerbit">
                            </div>
                            <div class="form-group">
                                <label for="">Tanggal Pinjam</label>
                                <input type="text" class="form-control" placeholder="Masukan Nama Kota" name="kota">
                            </div>
                            <input type="submit" class="btn btn-primary" value="Simpan" name="simpan">
                        </form>
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