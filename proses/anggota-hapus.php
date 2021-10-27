<?php
include '../koneksi.php';

$nik = $_GET['nik'];

mysqli_query($db, "DELETE FROM tbanggota WHERE nik = '$nik'") or die(mysql_error());

header("location:../index.php?p=anggota");
?>