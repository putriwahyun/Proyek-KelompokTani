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
            min-width: 150px;
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
        Data Anggota
      </h4>
      <div class="user-wrapper">
          <div class="dropdown">
              <button class="dropbtn"><img src="bxs-user-circle.svg" width="40px" height="40px" alt=""></button>
              <div class="dropdown-content">
                  <a href="logout.php">Logout</a>
              </div>
          </div>
              <h6><?php echo$_SESSION['sesi']?></h6>
      </div>
    </header>

    <div class="container">
      <div class="tambah">
        <button type="button" class="btn btn-primary"><a href="index.php?p=tambah-anggota" style="color:white; text-decoration: none"><i class='bx bxs-user-plus'></i>Tambah Anggota</a></button>
        <div class="dropdown">
        <button type="button" class="btn btn-success"><i class='bx bxs-printer'></i></i>Cetak</button>
              <div class="dropdown-content">
                  <a href="ekspor_pdf/ekspor_pdf_anggota.php">Cetak PDF</a>
                  <a href="ekspor_excel/ekspor_excel_anggota.php">Cetak Excel</a>
              </div>
          </div>
      </div>
      <table id="example" class="table table-striped " style="width:100%">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">NIK</th>
            <th scope="col">Nama</th>
            <th scope="col">Nama Poktan</th>
            <th scope="col">Alamat</th>
            <th scope="col">Luas Tanam</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $nomor = 1;
          $query = "SELECT * FROM tbanggota";
          $q_tampil_anggota = mysqli_query($db, $query);

          if (mysqli_num_rows($q_tampil_anggota) > 0) {
            while ($r_tampil_anggota = mysqli_fetch_array($q_tampil_anggota)) {
          ?>
              <tr>
                <td><?php echo $nomor; ?></td>
                <td><?php echo $r_tampil_anggota['nik']; ?></td>
                <td><?php echo $r_tampil_anggota['nm_anggota']; ?></td>
                <td><?php echo $r_tampil_anggota['nm_poktan']; ?></td>
                <td><?php echo $r_tampil_anggota['alamat']; ?></td>
                <td><?php echo $r_tampil_anggota['luas_tanam']; ?></td>
                <td>
                  <a href="index.php?p=edit-anggota&nik=<?php echo $r_tampil_anggota['nik']; ?>"><button type="button" class="btn btn-warning"><i class='bx bxs-edit'></i></button></a>
                  <button type="button" class="btn btn-danger"><a href="proses/anggota-hapus.php?nik=<?php echo $r_tampil_anggota['nik']; ?>" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')" class="tombol" style="color:white"><i class='bx bxs-trash-alt'></i></a></button>
                </td>
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
  <script>
    $(document).ready(function() {
      $('#example').DataTable();
    });
  </script>
</body>
