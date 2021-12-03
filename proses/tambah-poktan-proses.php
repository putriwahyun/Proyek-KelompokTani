<?php
    include '../koneksi.php';

    $kelurahan = $_POST['kelurahan'];
    $nm_poktan = $_POST['nm_poktan'];
    $alamat = $_POST['alamat'];
    $luas_lahan = $_POST['luas_lahan'];
    $jumlah_petani = $_POST['jumlah_petani'];
    $tahun_berdiri = $_POST['tahun_berdiri'];
    $nm_ketua = $_POST['nm_ketua'];
    $no_telp = $_POST['no_telp'];
    $nm_sekretaris = $_POST['nm_sekretaris'];
    $nm_bendahara = $_POST['nm_bendahara'];
    $kelas = $_POST['kelas'];
    $nm_penyuluh_wkpp = $_POST['nm_penyuluh_wkpp'];

    if(isset($_POST['Submit'])){
        extract($_POST);

        $sql = "INSERT INTO tbpoktan VALUES('$kd_poktan', '$kelurahan', '$nm_poktan', '$alamat', '$luas_lahan', '$jumlah_petani', '$tahun_berdiri', '$nm_ketua', '$no_telp', '$nm_sekretaris',
                '$nm_bendahara', '$kelas', '$nm_penyuluh_wkpp')";
        $query = mysqli_query($db, $sql);

        header("location:../index.php?p=kelompok-tani");
    }
?>