<?php
include '../koneksi.php';

$nik = $_POST['nik'];
$nm_anggota = $_POST['nm_anggota'];
$alamat = $_POST['alamat'];
$no_sppt = $_POST['no_sppt'];
$luas_sppt = $_POST['luas_sppt'];
$nm_ibu = $_POST['nm_ibu'];
$koordinat = $_POST['koordinat	'];
$no_telp = $_POST['no_telp	'];
$komoditas = $_POST['komoditas'];
$luas_tanam = $_POST['luas_tanam'];

if(isset($_POST['Submit'])){
    extract($_POST);

    $sql = "INSERT INTO tbanggota VALUES('$nik', '$nm_anggota', '$alamat', '$no_sppt', '$luas_sppt',
            '$nm_ibu', '$koordinat', '$no_telp', '$komoditas', '$luas_tanam')";
    $query = mysqli_query($db, $sql);

    header("location:../index.php?p=anggota");
}
?>