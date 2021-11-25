<?php 
    include "header.php";
?>

<?php 
    include "koneksi.php";
    $id = $_GET['id'];
    $ambilData = mysqli_query($koneksi, "SELECT * FROM siswa WHERE nisn='$id'");
    while ($data = mysqli_fetch_array($ambilData)){
?>

<div class="container">
    <div class="row">
        <div class="col-lg-12 mt-4" style="min-height: 430px;">
        <div class="card">
            <div class="card-header">
                Edit Data Siswa
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <form action="data_siswa.php" method="post">
                            <div class="form-group">
                                <label for="">Nama Siswa</label>
                                <input type="text" class="form-control" placeholder="Nama Siswa" name="nama_siswa" value="<?php echo @$data['nama_siswa'];?>">
                            </div>
                            <div class="form-group">
                                <label for="">Alamat</label>
                                <input type="text" class="form-control" placeholder="Masukan Alamat" name="alamat" value="<?php echo @$data['alamat'];?>">
                            </div>
                            <div class="form-group">
                                <label for="">Nomor Handphone</label>
                                <input type="number" class="form-control" placeholder="Masukan No Hp" name="no_hp" value="<?php echo @$data['no_hp'];?>">
                            </div>
                            <input type="submit" class="btvn btn-primary" value="Simpan" name="simpan">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>

<?php 
     }
    if(isset($_POST['simpan'])){

        $nama = $_POST['nama_siswa'];
        $alamt = $_POST['alamat'];
        $hp = $_POST['no_hp'];
        
        mysqli_query($koneksi, "UPDATE siswa SET 
        nama_siswa='$nama';
        alamat='$alamt';
        no_hp='$hp';

        WHERE nisn='$id'") or die(mysqli_error
        ($koneksi));
    }
?>

<?php 
    include "footer.html";
?>