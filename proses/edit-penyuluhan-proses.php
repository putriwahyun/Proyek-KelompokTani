<?php 
    include '../koneksi.php';

    $kd_penyuluhan = $_POST['kd_penyuluhan'];
    $nm_penyuluh = $_POST['nm_penyuluh'];
    $tgl_penyuluhan = $_POST['tgl_penyuluhan'];
    $tempat = $_POST['tempat'];
    $tema = $_POST['tema'];

    $poktan = $_POST['poktan'];
    $pisah_datapoktan = explode(" ", $poktan);
    $kd_poktan = $pisah_datapoktan[0];
    $nm_poktan = $pisah_datapoktan[1].' '.$pisah_datapoktan[2].' '.$pisah_datapoktan[3].' '.$pisah_datapoktan[4].' '.$pisah_datapoktan[5];

    if (isset($_POST['simpan'])) {
        extract($_POST);

        mysqli_query($db, "UPDATE tbpenyuluhan
                            SET kd_penyuluhan='$kd_penyuluhan', kd_poktan='$kd_poktan', nm_penyuluh='$nm_penyuluh', nm_poktan='$nm_poktan', tgl_penyuluhan='$tgl_penyuluhan', tempat='$tempat', tema='$tema'
                            WHERE kd_penyuluhan = '$kd_penyuluhan'");

        header("location:../index.php?p=penyuluhan");
    }
?>