<?php 
    include '../koneksi.php';

    $kd_penyuluhan = $_POST['kd_penyuluhan'];
    $nm_penyuluh = $_POST['nm_penyuluh'];
    $tgl_penyuluhan = $_POST['tgl_penyuluhan'];
    $tempat = $_POST['tempat'];
    $tema = $_POST['tema'];

    if (isset($_POST['simpan'])) {
        extract($_POST);

        mysqli_query($db, "UPDATE tbpenyuluhan
                            SET kd_penyuluhan='$kd_penyuluhan', nm_penyuluh='$nm_penyuluh', tgl_penyuluhan='$tgl_penyuluhan', tempat='$tempat', tema='$tema'
                            WHERE kd_penyuluhan = '$kd_penyuluhan'");

        header("location:../index.php?p=penyuluhan");
    }
?>