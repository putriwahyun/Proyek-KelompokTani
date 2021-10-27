<body>
  <div class="main-content">
    <header>
      <h4>
        Data Anggota
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
        <button type="button" class="btn btn-primary"><a href="index.php?p=tambah-anggota" style="color:white; text-decoration: none"><i class='bx bxs-user-plus'></i>Tambah Anggota</a></button>
        <button type="button" class="btn btn-success"><i class='bx bxs-printer'></i></i>Cetak</button>
      </div>
      <table id="example" class="table table-striped " style="width:100%">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">NIK</th>
            <th scope="col">Nama</th>
            <th scope="col">Alamat</th>
            <th scope="col">Luas Tanam</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <tr>
<<<<<<< HEAD
              <td scope="col">1</td>
              <td scope="col">Suwarno</td>
              <td scope="col">350611151110001</td>
              <td scope="col">Dsn. Gabus</td>
              <td scope="col">78239</td>
              <td scope="col">
                <a href="/pages/edit-anggota.php"><button type="button" class="btn btn-warning"><i class='bx bxs-edit'></i></button></a>
                <button type="button" class="btn btn-danger"><i class='bx bxs-trash-alt'></i></button>
              </td>
          </tr>
=======
            <?php
              $nomor = 1;
              $query = "SELECT *FROM tbanggota";
              $q_tampil_anggota = mysqli_query($db, $query);
              if(mysqli_num_rows($q_tampil_anggota)>0){
                  while($r_tampil_anggota=mysqli_fetch_array($q_tampil_anggota)){
            ?>
                <td><?php echo $nomor;?></td>
                <td><?php echo $r_tampil_anggota['nik'];?></td>
                <td><?php echo $r_tampil_anggota['nm_anggota'];?></td>
                <td><?php echo $r_tampil_anggota['alamat'];?></td>
                <td><?php echo $r_tampil_anggota['luas_tanam'];?></td>
                <td scope="col">
                  <button type="button" class="btn btn-warning"><i class='bx bxs-edit'></i></button>
                  <button type="button" class="btn btn-danger"><a href="proses/anggota-hapus.php?nik=<?php echo $r_tampil_anggota['nik'];?>" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')" class="tombol" style="color:white"><i class='bx bxs-trash-alt'></i></a></button>
                </td>
            </tr>
            <?php
            $nomor++;
                  }
                }
            ?>
>>>>>>> 8937ffc2874a66b97cd7b49610e78177dff83320
        </tbody>
      </table>
    </div>
  </div>
  <script>$(document).ready(function() {
    $('#example').DataTable();
      } );
  </script>
</body>