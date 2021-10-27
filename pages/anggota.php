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
        <a href="pages/tambah-anggota.php"><button type="button" class="btn btn-primary"><i class='bx bxs-user-plus'></i>Tambah Anggota</button></a>
        <button type="button" class="btn btn-success"><i class='bx bxs-printer'></i></i>Cetak</button>
      </div>
      <table id="example" class="table table-striped " style="width:100%">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">NIK</th>
            <th scope="col">Alamat</th>
            <th scope="col">Luas Tanam</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <tr>
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
        </tbody>
      </table>
    </div>
  </div>
  <script>$(document).ready(function() {
    $('#example').DataTable();
      } );
  </script>
</body>