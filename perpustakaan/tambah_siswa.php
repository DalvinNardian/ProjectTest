<?php 
    include "header.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah siswa</title>
</head>
<body>
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
                        <form action="simpan_siswa.php" method="post">
                            <div class="form-group">
                                <label for="">NISN</label>
                                <input type="number" class="form-control" placeholder="Masukan NISN" name="nisn">
                            </div>
                            <div class="form-group">
                                <label for="">Nama Siswa</label>
                                <input type="text" class="form-control" placeholder="Nama Siswa" name="nama_siswa">
                            </div>
                            <div class="form-group">
                                <label for="jk">Jenis Kelamin</label><br>
                                <input type="radio" id="jk" name="jkel" value="L"> Laki-laki
                                <input type="radio" id="jk" name="jkel" value="P"> Perempuan
                            </div>
                            <div class="form-group">
                                <label for="">Tanggal Lahir</label>
                                <input type="date" class="form-control" placeholder="Masukan Tanggal Lahir" name="tgl_lahir">
                            </div>
                            <div class="form-group">
                                <label for="">Alamat</label>
                                <input type="text" class="form-control" placeholder="Masukan Alamat" name="alamat">
                            </div>
                            <div class="form-group">
                                <label for="">Nomor Handphone</label>
                                <input type="number" class="form-control" placeholder="Masukan No Hp" name="no_hp">
                            </div>
                            <br>
                            <input type="submit" class="btn btn-primary" value="Simpan" name="simpan">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
</body>
</html>

  <footer class="mt-4 bg-dark p-3 text-center" style="color: white; font-weight: bold">
  <p>Perpustakaan &copy; 2021</p>
</footer>