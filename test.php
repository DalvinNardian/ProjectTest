<?php
class Mobil{
    public $nama, $merk, $warna, $kecepatanMaksimal;
}
    $mobilku = new Mobil();
    $mobilku->nama="Mecedes Benz C100";
    $mobilku->merk="Mercedes Benz";
    $mobilku->warna="Silver";

    echo $mobilku->nama;
    echo "<br>";
    echo "Merk : " .$mobilku->merk;
    echo "<br>";
    echo "Warna : ".$mobilku->warna;
?>