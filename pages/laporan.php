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
        Data Laporan
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

    <div class="container">
      <div class="tambah">
        <select name="level" id="level" style="width: 20%">
            <option value="pilih" selected disabled>Pilih Kelompok Tani</option>
            <option value="Ds. Gabus">Desa Gabus</option>
            <option value="Ds. Tunggorono">Desa Tunggorono</option>
            <option value="Ds. Jombang">Desa Jombang</option>
        </select>
      </div>
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
          $query = "SELECT nm_poktan, (SELECT COUNT(*) FROM tbanggota) AS jmlanggota, (SELECT nm_bantuan FROM tbbantuan) AS nmbantuan, (SELECT COUNT(*) FROM tbpenyuluhan) AS jmlpenyuluhan FROM tbpoktan";
          $q_tampil_poktan = mysqli_query($db, $query);

          if (mysqli_num_rows($q_tampil_poktan) > 0) {
              while ($r_tampil_poktan = mysqli_fetch_array($q_tampil_poktan)) {
          ?>
                  <tr>
                      <td><?php echo $nomor; ?></td>
                      <td><?php echo $r_tampil_poktan['nm_poktan']; ?></td>
                      <td><?php echo $r_tampil_poktan['jmlanggota']; ?></td>
                      <td><?php echo $r_tampil_poktan['nmbantuan']; ?></td>
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
  </div>
  <script>$(document).ready(function() {
    $('#example').DataTable();
      } );
  </script>
</body>