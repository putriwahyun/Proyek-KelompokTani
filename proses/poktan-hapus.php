<?php
include '../koneksi.php';

$kd_poktan = $_GET['kd_poktan'];

mysqli_query($db, "DELETE FROM tbpoktan WHERE kd_poktan = '$kd_poktan'");

header("location:../index.php?p=kelompok-tani");
?>