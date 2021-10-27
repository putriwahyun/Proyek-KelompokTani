<?php
include '../koneksi.php';

$kd_penyuluhan = $_GET['kd_penyuluhan'];

mysqli_query($db, "DELETE FROM tbpenyuluhan WHERE kd_penyuluhan = '$kd_penyuluhan'") or die(mysql_error());

header("location:../index.php?p=penyuluhan");
?>