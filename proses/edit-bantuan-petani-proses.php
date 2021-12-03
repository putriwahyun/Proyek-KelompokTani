<?php 
    include '../koneksi.php';

    $kd_bantuan = $_POST['kd_bantuan'];
    $alamat = $_POST['no_reg'];
    $no_sppt = $_POST['tahun'];
    $luas_sppt = $_POST['sumber'];

    $poktan = $_POST['poktan'];
    $pisah_datapoktan = explode(" ", $poktan);
    $kd_poktan = $pisah_datapoktan[0];
    $nm_poktan = $pisah_datapoktan[1].' '.$pisah_datapoktan[2].' '.$pisah_datapoktan[3].' '.$pisah_datapoktan[4].' '.$pisah_datapoktan[5];

    if (isset($_POST['simpan'])) {
        extract($_POST);

        mysqli_query($db, "UPDATE tbbantuan
                            SET kd_bantuan='$kd_bantuan', kd_poktan='$kd_poktan', nm_bantuan='$nm_bantuan', nm_poktan='$nm_poktan', no_reg='$no_reg', tahun='$tahun', sumber='$sumber'
                            WHERE kd_bantuan = '$kd_bantuan'");

        header("location:../index-petani.php?p=bantuan-petani");
    }
?>