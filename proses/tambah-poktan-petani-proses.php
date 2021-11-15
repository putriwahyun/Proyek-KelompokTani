<?php
include '../koneksi.php';

$kd_poktan = $_POST['kd_poktan'];
$nm_poktan = $_POST['nm_poktan'];
$nm_ketua = $_POST['nm_ketua'];
$alamat = $_POST['alamat'];
$kelas = $_POST['kelas'];

if(isset($_POST['Submit'])){
    extract($_POST);

    $sql = "INSERT INTO tbpoktan VALUES('$kd_poktan', '$nm_poktan', '$nm_ketua', '$alamat', '$kelas')";
    $query = mysqli_query($db, $sql);

    header("location:../index-petani.php?p=kelompok-tani-petani");
}
?>