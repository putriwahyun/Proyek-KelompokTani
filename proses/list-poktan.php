<?php
// include '../koneksi.php';

$query = "SELECT * FROM tbpoktan";

$hasil = mysqli_query($db, $query);
mysqli_connect_error();
// ... menampung semua data poktan
$data_poktan = array();

// ... tiap baris dari hasil query dikumpulkan ke $data_anggota
while ($row = mysqli_fetch_assoc($hasil)) {
    $data_poktan[] = $row;
}
?>