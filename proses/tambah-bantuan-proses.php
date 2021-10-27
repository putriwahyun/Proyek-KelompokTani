<?php
include '../koneksi.php';

$kd_bantuan = $_POST['kd_bantuan'];
$nm_bantuan = $_POST['nm_bantuan'];
$no_reg = $_POST['no_reg'];
$tahun = $_POST['tahun'];
$sumber = $_POST['sumber'];

if(isset($_POST['Submit'])){
    extract($_POST);

    $sql = "INSERT INTO tbbantuan VALUES('$kd_bantuan', '$nm_bantuan', '$no_reg', '$tahun', '$sumber')";
    $query = mysqli_query($db, $sql);

    header("location:../index.php?p=bantuan");
}
?>