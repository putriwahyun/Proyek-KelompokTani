<?php 
    include '../koneksi.php';

    $kd_poktan = $_POST['kd_poktan'];
    $nm_poktan = $_POST['nm_poktan'];
    $nm_ketua = $_POST['nm_ketua'];
    $alamat = $_POST['alamat'];
    $luas_sppt = $_POST['luas_sppt'];
    $nm_ibu = $_POST['nm_ibu'];

    if (isset($_POST['simpan'])) {
        extract($_POST);

        mysqli_query($db, "UPDATE tbpoktan
                            SET kd_poktan='$kd_poktan', nm_poktan='$nm_poktan', nm_ketua='$nm_ketua', alamat='$alamat', kelas='$kelas'
                            WHERE kd_poktan = '$kd_poktan'");

        header("location:../index.php?p=kelompok-tani");
    }
?>