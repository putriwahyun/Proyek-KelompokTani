<?php
include 'proses/list-poktan.php';
$alamat_tani = $_SESSION['alamat'];
$qr = "SELECT nm_poktan AS nmpoktan, (SELECT COUNT(*) FROM tbanggota WHERE nm_poktan=nmpoktan) AS jmlanggota, (SELECT COUNT(*) FROM tbbantuan WHERE nm_poktan=nmpoktan) AS jmlbantuan, (SELECT COUNT(*) FROM tbpenyuluhan WHERE nm_poktan=nmpoktan) AS jmlpenyuluhan FROM tbpoktan WHERE alamat LIKE '%$alamat_tani%'";
$k_tampil_poktan = mysqli_query($db, $qr);
$p_tampil_poktan = mysqli_fetch_array($k_tampil_poktan);
?>

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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
</head>
<body>
  <div class="main-content">
    <header>
      <h4>
        Data Laporan
      </h4>
      <div class="user-wrapper">
          <div class="dropdown">
              <button class="dropbtn"><img src="bxs-user-circle.svg" width="40px" height="40px" alt=""></button>
              <div class="dropdown-content">
                  <a href="logout-petani.php">Logout</a>
              </div>
          </div>
              <h6><?php echo$_SESSION['sesi']?></h6>
      </div>
    </header>

    <div class="container">
      <table id="example" class="table table-striped " style="width:100%">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Poktan</th>
            <th scope="col">Jumlah Anggota</th>
            <th scope="col">Bantuan Diterima</th>
            <th scope="col">Jumlah Penyuluhan</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $nomor = 1;
          

          $query = "SELECT nm_poktan AS nmpoktan, (SELECT COUNT(*) FROM tbanggota WHERE nm_poktan=nmpoktan) AS jmlanggota, (SELECT COUNT(*) FROM tbbantuan WHERE nm_poktan=nmpoktan) AS jmlbantuan, (SELECT COUNT(*) FROM tbpenyuluhan WHERE nm_poktan=nmpoktan) AS jmlpenyuluhan FROM tbpoktan WHERE alamat LIKE '%$alamat_tani%'";
          $q_tampil_poktan = mysqli_query($db, $query);

          if (mysqli_num_rows($q_tampil_poktan) > 0) {
              while ($r_tampil_poktan = mysqli_fetch_array($q_tampil_poktan)) {
          ?>
                  <tr>
                      <td><?php echo $nomor; ?></td>
                      <td><?php echo $r_tampil_poktan['nmpoktan']; ?></td>
                      <td><?php echo $r_tampil_poktan['jmlanggota']; ?></td>
                      <td><?php echo $r_tampil_poktan['jmlbantuan']; ?></td>
                      <td><?php echo $r_tampil_poktan['jmlpenyuluhan']; ?></td>
                  </tr>
          <?php
                  $nomor++;
              }
          } else {
              echo "";
          }
          ?>
        </tbody>
      </table>
    </div>
    <div class="container" style="margin: 0 auto; padding-top: 20px;">
      <div class="row" style="margin: 0 auto; padding-top: 20px;">
          <div class="col-md-5" style="margin: 0 auto; padding-top: 20px;">
              <div style="text-align: center; margin: 15px;"><?php echo 'Grafik '.$p_tampil_poktan['nmpoktan']; ?></div>
              <canvas id="myChart" width="100" height="50"></canvas>
          </div>
      </div>
    </div>
  </div>
  
  <script>
    var ctx = document.getElementById("myChart").getContext('2d');
    var myChart = new Chart(ctx, {
      type: 'bar',
      data: {
          labels: ["Anggota", "Bantuan", "Penyuluhan"],
          datasets: [{
              label: 'Jumlah Total',
              data: [<?php echo $p_tampil_poktan['jmlanggota']; ?>, <?php echo $p_tampil_poktan['jmlbantuan']; ?>, <?php echo $p_tampil_poktan['jmlpenyuluhan']; ?>],
              backgroundColor: [
                  'rgba(255, 99, 132)',
                  'rgba(54, 162, 235)',
                  'rgba(255, 206, 86)',
              ],
              borderColor: [
                  'rgba(255,99,132,1)',
                  'rgba(54, 162, 235, 1)',
                  'rgba(255, 206, 86, 1)',
              ],
              borderWidth: 1
          }]
      },
      options: {
          scales: {
              yAxes: [{
                  ticks: {
                      beginAtZero:true
                  }
              }]
          }
      }
    });
  </script>
</body>