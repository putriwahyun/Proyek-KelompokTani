<?php
include '../koneksi.php';

$nm_penyuluh = $_POST['nm_penyuluh'];
$tgl_penyuluhan = $_POST['tgl_penyuluhan'];
$tempat = $_POST['tempat'];
$tema = $_POST['tema'];

$poktan = $_POST['poktan'];
$pisah_datapoktan = explode(" ", $poktan);
$kd_poktan = $pisah_datapoktan[0];
$nm_poktan = $pisah_datapoktan[1].' '.$pisah_datapoktan[2].' '.$pisah_datapoktan[3].' '.$pisah_datapoktan[4].' '.$pisah_datapoktan[5];
if(isset($_POST['Submit'])){
    extract($_POST);

    $sql = "INSERT INTO tbpenyuluhan VALUES('$kd_penyuluhan', '$kd_poktan', '$nm_penyuluh', '$nm_poktan', '$tgl_penyuluhan', '$tempat', '$tema')";
    $query = mysqli_query($db, $sql);

    header("location:../index-petani.php?p=penyuluhan-petani");
}
?>