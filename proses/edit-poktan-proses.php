<?php 
    include '../koneksi.php';

    $kd_poktan = $_POST['kd_poktan'];
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

    if (isset($_POST['simpan'])) {
        extract($_POST);

        mysqli_query($db, "UPDATE tbpoktan
                            SET kd_poktan='$kd_poktan', kelurahan='$kelurahan', nm_poktan='$nm_poktan', alamat='$alamat', 
                            luas_lahan='$luas_lahan', jumlah_petani='$jumlah_petani', tahun_berdiri='$tahun_berdiri', nm_ketua='$nm_ketua',
                            no_telp='$no_telp', nm_sekretaris='$nm_sekretaris', nm_bendahara='$nm_bendahara', kelas='$kelas', nm_penyuluh_wkpp='$nm_penyuluh_wkpp'
                            WHERE kd_poktan = '$kd_poktan'");

        header("location:../index.php?p=kelompok-tani");
    }
?>