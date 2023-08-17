<?php 
//veritabanı bağlama işlemi
$vt_sunucu="localhost";
$vt_kullanici="suat";    
$vt_sifre="G6tt@0m9";
$vt_adi="suat";

$baglan=mysqli_connect($vt_sunucu, $vt_kullanici, $vt_sifre, $vt_adi);


if(!$baglan)
{
    die("Veritabanı bağlantı işlemi başarısız".mysqli_connect());
}

?>
