<?php
include '../koneksi.php';

$kd_penyuluhan = $_POST['kd_penyuluhan'];
$nm_penyuluh = $_POST['nm_penyuluh'];
$tgl_penyuluhan = $_POST['tgl_penyuluhan'];
$tempat = $_POST['tempat'];
$tema = $_POST['tema'];

if(isset($_POST['Submit'])){
    extract($_POST);

    $sql = "INSERT INTO tbpenyuluhan VALUES('$kd_penyuluhan', '$nm_penyuluh', '$tgl_penyuluhan', $tempat, '$tema')";
    $query = mysqli_query($db, $sql);

    header("location:../index.php?p=anggota");
}
?>