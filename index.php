<?php
    session_start();

    include 'koneksi.php';

    $tgl = date('Y-m-d');

    if(isset($_SESSION['sesi']) && !empty($_SESSION['sesi'])){
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/style.css">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- import boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- datatables -->
    <!-- <link rel="stylesheet" type="text/css" media="screen" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css"> -->
    <link rel="stylesheet" type="text/css" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GAPOKTAN</title>
</head>

<body>
    <div class="sidebar">
        <div class="logo-details">
            <i class='bx bxs-tree icon'></i>
            <div class="logo_name">GAPOKTAN</div>
            <i class='bx bx-menu' id="btn"></i>
        </div>
        <ul class="nav_list">
            <li>
                <a href="index.php?p=dashboard">
                    <i class='bx bxs-home'></i>
                    <span class="links_name">Dashboard</span>
                </a>
                <span class="tooltip">Dashboard</span>
            </li>
            <li>
                <a href="index.php?p=kelompok-tani">
                    <i class='bx bxs-group'></i>
                    <span class="links_name">Data Kelompok Tani</span>
                </a>
                <span class="tooltip">Data Kelompok Tani</span>
            </li>
            <li>
                <a href="index.php?p=anggota">
                    <i class='bx bxs-user'></i>
                    <span class="links_name">Data Anggota<br> Kelompok Tani</span>
                </a>
                <span class="tooltip">Data Anggota<br> Kelompok Tani</span>
            </li>
            <li>
                <a href="index.php?p=bantuan">
                    <i class='bx bxs-folder'></i>
                    <span class="links_name">Data Bantuan</span>
                </a>
                <span class="tooltip">Data Bantuan</span>
            </li>
            <li>
                <a href="index.php?p=penyuluhan">
                    <i class='bx bxs-time'></i>
                    <span class="links_name">Data Penyuluhan</span>
                </a>
                <span class="tooltip">Data Penyuluhan</span>
            </li>
            <li>
                <a href="index.php?p=laporan">
                    <i class='bx bxs-book-alt'></i>
                    <span class="links_name">Data Laporan</span>
                </a>
                <span class="tooltip">Data Laporan</span>
            </li>
        </ul>
    </div>

    <section class="home-section">
    <?php
        $pages_dir = 'pages';
        if(!empty($_GET['p'])){
            $pages = scandir($pages_dir,0);
            unset($pages[0], $pages[1]);

            $p = $_GET['p'];
            if(in_array($p.'.php',$pages)){
                include($pages_dir.'/'.$p.'.php');
            }else{
                echo'Halaman Tidak Ditemukan';
            }
        }else{
            include($pages_dir.'/dashboard.php');
        }
    ?>
    </section>

    <script src="js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        } );
    </script>
</body>

<?php
} else{
    echo "<script>aler('Anda Harus Login Dahulu!');</script>";
    header('location:login-admin.php');
}
?>