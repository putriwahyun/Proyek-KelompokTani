<?php 
    include '../koneksi.php';

    $kd_bantuan = $_POST['kd_bantuan'];
    $nm_bantuan = $_POST['nm_bantuan'];
    $alamat = $_POST['no_reg'];
    $no_sppt = $_POST['tahun'];
    $luas_sppt = $_POST['sumber'];

    if (isset($_POST['simpan'])) {
        extract($_POST);

        mysqli_query($db, "UPDATE tbbantuan
                            SET kd_bantuan='$kd_bantuan', nm_bantuan='$nm_bantuan', no_reg='$no_reg', tahun='$tahun', sumber='$sumber'
                            WHERE kd_bantuan = '$kd_bantuan'");

        header("location:../index.php?p=bantuan");
    }
?>