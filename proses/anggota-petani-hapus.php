<?php
include '../koneksi.php';

$nik = $_GET['nik'];

mysqli_query($db, "DELETE FROM tbanggota WHERE nik = '$nik'");

header("location:../index-petani.php?p=anggota-petani");
?>