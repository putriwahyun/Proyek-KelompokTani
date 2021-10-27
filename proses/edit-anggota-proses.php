<?php 
    include '../koneksi.php';

    $nik = $_POST['nik'];
    $nm_anggota = $_POST['nm_anggota'];
    $alamat = $_POST['alamat'];
    $no_sppt = $_POST['no_sppt'];
    $luas_sppt = $_POST['luas_sppt'];
    $nm_ibu = $_POST['nm_ibu'];
    $koordinat = $_POST['koordinat'];
    $no_telp = $_POST['no_telp'];
    $komoditas = $_POST['komoditas'];
    $luas_tanam = $_POST['luas_tanam'];

    if (isset($_POST['simpan'])) {
        extract($_POST);

        mysqli_query($db, "UPDATE tbanggota
                            SET nik='$nik', nm_anggota='$nm_anggota', alamat='$alamat', no_sppt='$no_sppt', luas_sppt='$luas_sppt', nm_ibu='$nm_ibu', koordinat='$koordinat', no_telp='$no_telp', komoditas='$komoditas', luas_tanam='$luas_tanam'
                            WHERE nik = '$nik'");

        header("location:../index.php?p=anggota");
    }
?>