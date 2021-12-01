<?php 
    include '../koneksi.php';

    $nik = $_POST['nik'];
    $nm_anggota = $_POST['nm_anggota'];
    $alamat = $_POST['alamat'];
    $no_sppt = $_POST['no_sppt'];
    $luas_sppt = $_POST['luas_sppt'];
    $nm_ibu = $_POST['nm_ibu'];
    $koordinat = $_POST['koordinatx']. ' , ' .$_POST['koordinaty'];
    $no_telp = $_POST['no_telp'];
    $komoditas = $_POST['komoditas'];
    $luas_tanam = $_POST['luas_tanam'];

    $poktan = $_POST['poktan'];
    $pisah_datapoktan = explode(" ", $poktan);
    $kd_poktan = $pisah_datapoktan[0];
    $nm_poktan = $pisah_datapoktan[1].' '.$pisah_datapoktan[2].' '.$pisah_datapoktan[3].' '.$pisah_datapoktan[4].' '.$pisah_datapoktan[5];

    if (isset($_POST['simpan'])) {
        extract($_POST);

        mysqli_query($db, "UPDATE tbanggota
                            SET nik='$nik', kd_poktan='$kd_poktan', nm_anggota='$nm_anggota', nm_poktan='$nm_poktan', alamat='$alamat', no_sppt='$no_sppt', luas_sppt='$luas_sppt', nm_ibu='$nm_ibu', koordinat='$koordinat', no_telp='$no_telp', komoditas='$komoditas', luas_tanam='$luas_tanam'
                            WHERE nik = '$nik'");

        header("location:../index-petani.php?p=anggota-petani");
    }
?>