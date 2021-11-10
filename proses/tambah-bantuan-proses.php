<?php
include '../koneksi.php';

$kd_bantuan = $_POST['kd_bantuan'];
$nm_bantuan = $_POST['nm_bantuan'];
$no_reg = $_POST['no_reg'];
$tahun = $_POST['tahun'];
$sumber = $_POST['sumber'];

$poktan = $_POST['poktan'];
$pisah_datapoktan = explode(" ", $poktan);
$kd_poktan = $pisah_datapoktan[0];
$nm_poktan = $pisah_datapoktan[1].' '.$pisah_datapoktan[2].' '.$pisah_datapoktan[3].' '.$pisah_datapoktan[4].' '.$pisah_datapoktan[5];

if(isset($_POST['Submit'])){
    extract($_POST);

    $sql = "INSERT INTO tbbantuan VALUES('$kd_bantuan', '$kd_poktan', '$nm_bantuan', '$nm_poktan', '$no_reg', '$tahun', '$sumber')";
    $query = mysqli_query($db, $sql);

    header("location:../index.php?p=bantuan");
}
?>