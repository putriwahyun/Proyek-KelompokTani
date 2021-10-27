<body>
  <div class="main-content">
    <header>
      <h4>
        Dashboard
      </h4>
      <div class="user-wrapper">
        <img src="bxs-user-circle.svg" width="30px" height="30px" alt="">
        <div>
          <h6>Admin</h6>
        </div>
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