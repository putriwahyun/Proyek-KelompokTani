<head>
    <style>
        .dropbtn {
            background-color: white;
            border: none;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f1f1f1;
            min-width: 50px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

    .dropdown-content a:hover {background-color: #ddd;}
    .dropdown:hover .dropdown-content {display: block;}
    </style>
</head>
<body>
  <div class="main-content">
    <header>
      <h4>
        Dashboard
      </h4>
      <div class="user-wrapper">
          <div class="dropdown">
              <button class="dropbtn"><img src="bxs-user-circle.svg" width="40px" height="40px" alt=""></button>
              <div class="dropdown-content">
                  <a href="logout.php">Logout</a>
              </div>
          </div>
              <h6>Admin</h6>
      </div>
    </header>
    <div class="welcome">
      <h4>Selamat Datang di Sistem Monitoring Kelompok Tani</h4>
    </div>
    <?php
      $poktan = mysqli_query($db, "SELECT * FROM tbpoktan");
      $jml_poktan = mysqli_num_rows($poktan);
      $anggota = mysqli_query($db, "SELECT * FROM tbanggota");
      $jml_anggota = mysqli_num_rows($anggota);
    ?>
    <main>
      <div class="cards">
        <div class="cards-single">
          <div>
            <i class='bx bxs-home'></i>
            <span>Total Desa</span>
            <h1><b>15</b></h1>
            <h6>Dari Laporan Terakhir</h6>
          </div>
        </div>
        <div class="cards-single">
          <div>
            <i class='bx bxs-group'></i>
            <span>Total Kelompok Tani</span>
            <h1><b><?php echo $jml_poktan;?></b></h1>
            <h6>Dari Laporan Terakhir</h6>
          </div>
        </div>
        <div class="cards-single">
          <div>
            <i class='bx bxs-user'></i>
            <span>Total Anggota Kelompok Tani</span>
            <h1><b><?php echo $jml_anggota;?></b></h1>
            <h6>Dari Laporan Terakhir</h6>
          </div>
        </div>
      </div>
    </main>
  </div>
</body>
</html>