<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/style.css">
    <!-- import boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIDEBAR</title>
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
                <a href="#">
                    <i class='bx bxs-group'></i>
                    <span class="links_name">Data Kelompok Tani</span>
                </a>
                <span class="tooltip">Data Kelompok Tani</span>
            </li>
            <li>
                <a href="#">
                    <i class='bx bxs-user'></i>
                    <span class="links_name">Data Anggota<br> Kelompok Tani</span>
                </a>
                <span class="tooltip">Data Anggota<br> Kelompok Tani</span>
            </li>
            <li>
                <a href="#">
                    <i class='bx bxs-folder'></i>
                    <span class="links_name">Data Bantuan</span>
                </a>
                <span class="tooltip">Data Bantuan</span>
            </li>
            <li>
                <a href="#">
                    <i class='bx bxs-time'></i>
                    <span class="links_name">Data Penyuluhan</span>
                </a>
                <span class="tooltip">Data Penyuluhan</span>
            </li>
            <li>
                <a href="#">
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
</body>
</html>