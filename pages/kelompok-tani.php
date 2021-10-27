<body>
    <div class="main-content">
        <header>
            <h4>
                Data Kelompok Tani
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
                <a href="pages/tambah-poktan.php"><button type="button" class="btn btn-primary"><i class='bx bxs-user-plus'></i>Tambah Kelompok</button></a>
            </div>
            <table id="example" class="table table-striped " style="width:100%">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Kelompok Tani</th>
                        <th scope="col">Nama Ketua</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Kelas</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td scope="col">1</td>
                        <td scope="col">Kelompok Tani Makmur</td>
                        <td scope="col">Makmur</td>
                        <td scope="col">Dsn. Gabus Ds. Gabus</th>
                        <td scope="col">Pemula</td>
                        <td scope="col">
                            <a href="/pages/edit-poktan.php"><button type="button" class="btn btn-warning"><i class='bx bxs-edit'></i></button></a>
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