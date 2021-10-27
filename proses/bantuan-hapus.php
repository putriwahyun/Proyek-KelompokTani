<?php
include '../koneksi.php';

$kd_bantuan = $_GET['kd_bantuan'];

mysqli_query($db, "DELETE FROM tbbantuan WHERE kd_bantuan = '$kd_bantuan'") or die(mysql_error());

header("location:../index.php?p=bantuan");
?>