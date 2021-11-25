<?php 
    include "header.php";
?>

<?php 
    include "koneksi.php";
    @$id = @$_GET['Id'];
    $ambilData = mysqli_query($koneksi, "SELECT * FROM penulis WHERE Id_penulis='$id'");
    $data = mysqli_fetch_array($ambilData);
?>

<div class="container">
    <div class="row">
        <div class="col-lg-12 mt-4" style="min-height: 430px;">
        <div class="card">
            <div class="card-header">
                Edit Data Penulis
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <form action="data_penulis.php" method="post">
                            <div class="form-group">
                                <label for="">Nama Penulis</label>
                                <input type="text" class="form-control" placeholder="Nama Penulis" name="nama_penulis" value="<?php echo $data['nama_penulis'];?>">
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
    if(isset($_POST['simpan'])){
        $nama_penulis = $_POST['nama_penulis'];

        mysqli_query($koneksi, "UPDATE penulis
        SET nama_penulis='$nama_penulis'
        WHERE Id='$id'") or die(mysqli_error
        ($koneksi));
    }
?>

<?php 
    include "footer.html";
?>