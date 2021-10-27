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
        <button type="button" class="btn btn-primary"><i class='bx bxs-user-plus'></i>Tambah Anggota</button>
        <select name="level" id="level" style="width: 20%">
            <option value="pilih" selected disabled>Pilih Desa</option>
            <option value="Ds. Gabus">Desa Gabus</option>
            <option value="Ds. Tunggorono">Desa Tunggorono</option>
            <option value="Ds. Jombang">Desa Jombang</option>
        </select>
      </div>
      <table id="example" class="table table-striped " style="width:100%">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Jumlah Anggota</th>
            <th scope="col">Bantuan Diterima</th>
            <th scope="col">Jumlah Penyuluhan</th>
            <th scope="col">Jumlah Gapoktan</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <tr>
              <td scope="col">1</td>
              <td scope="col">15</td>
              <td scope="col">Diesel</td>
              <td scope="col">1</td>
              <td scope="col">70</td>
              <td scope="col">
                <button type="button" class="btn btn-warning"><i class='bx bxs-edit'></i></button>
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