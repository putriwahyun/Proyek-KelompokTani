<?php
include '../koneksi.php';

$kd_bantuan = $_GET['kd_bantuan'];

mysqli_query($db, "DELETE FROM tbbantuan WHERE kd_bantuan = '$kd_bantuan'");

header("location:../index-petani.php?p=bantuan-petani");
?>