<body>
  <div class="main-content">
    <header>
      <h4>
        Data Laporan
      </h4>
      <div class="user-wrapper">
        <img src="bxs-user-circle.svg" width="40px" height="40px" alt="">
        <div>
          <h6>Admin</h6>
        </div>
      </div>
    </header>

    <div class="container">
      <div class="tambah">
        <select name="level" id="level" style="width: 20%">
            <option value="pilih" selected disabled>Pilih Kelompok Tani</option>
            <option value="Ds. Gabus"></option>
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