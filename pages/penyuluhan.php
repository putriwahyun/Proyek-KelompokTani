<body>
    <div class="main-content">
        <header>
            <h4>
                Data Penyuluhan
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
                <button type="button" class="btn btn-primary"><i class='bx bxs-user-plus'></i>Tambah Penyuluhan</button>
            </div>
            <table id="example" class="table table-striped " style="width:100%">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Penyuluh</th>
                        <th scope="col">Tanggal Penyuluhan</th>
                        <th scope="col">Tempat</th>
                        <th scope="col">Tema</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td scope="col">No</th>
                        <td scope="col">ID Anggota</th>
                        <td scope="col">No</th>
                        <td scope="col">ID Anggota</th>
                        <td scope="col">No</th>
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