<?php
include '../koneksi.php';

$nik = $_POST['nik'];
$nm_anggota = $_POST['nm_anggota'];
$alamat = $_POST['alamat'];
$no_sppt = $_POST['no_sppt'];
$luas_sppt = $_POST['luas_sppt'];
$nm_ibu = $_POST['nm_ibu'];
$koordinat = $_POST['koordinatx'].' '.$_POST['koordinaty'];
$no_telp = $_POST['no_telp	'];
$komoditas = $_POST['komoditas'];
$luas_tanam = $_POST['luas_tanam'];

$poktan = $_POST['poktan'];
$pisah_datapoktan = explode(" ", $poktan);
$kd_poktan = $pisah_datapoktan[0];
$nm_poktan = $pisah_datapoktan[1].' '.$pisah_datapoktan[2].' '.$pisah_datapoktan[3].' '.$pisah_datapoktan[4].' '.$pisah_datapoktan[5];

if(isset($_POST['Submit'])){
    extract($_POST);

    $sql = "INSERT INTO tbanggota VALUES('$nik', '$kd_poktan', '$nm_anggota', '$nm_poktan', '$alamat', '$no_sppt', '$luas_sppt',
            '$nm_ibu', '$koordinat', '$no_telp', '$komoditas', '$luas_tanam')";
    $query = mysqli_query($db, $sql);

    header("location:../index.php?p=anggota");
}
