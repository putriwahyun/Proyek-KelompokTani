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
                <button type="button" class="btn btn-primary"><a href="index.php?p=tambah-penyuluhan" style="color:white; text-decoration: none"><i class='bx bxs-user-plus'></i>Tambah Penyuluhan</a></button>
            </div>
            <table id="example" class="table table-striped " style="width:100%">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Kode</th>
                        <th scope="col">Nama Penyuluh</th>
                        <th scope="col">Tanggal Penyuluhan</th>
                        <th scope="col">Tempat</th>
                        <th scope="col">Tema</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $nomor = 1;
                    $query = "SELECT * FROM tbpenyuluhan";
                    $q_tampil_penyuluhan = mysqli_query($db, $query);

                    if (mysqli_num_rows($q_tampil_penyuluhan) > 0) {
                        while ($r_tampil_penyuluhan = mysqli_fetch_array($q_tampil_penyuluhan)) {
                    ?>
                            <tr>
                                <td><?php echo $nomor; ?></td>
                                <td><?php echo $r_tampil_penyuluhan['kd_penyuluhan']; ?></td>
                                <td><?php echo $r_tampil_penyuluhan['nm_penyuluh']; ?></td>
                                <td><?php echo $r_tampil_penyuluhan['tgl_penyuluhan']; ?></td>
                                <td><?php echo $r_tampil_penyuluhan['tempat']; ?></td>
                                <td><?php echo $r_tampil_penyuluhan['tema']; ?></td>
                                <td>
                                    <a href="index.php?p=edit-penyuluhan&kd_penyuluhan=<?php echo $r_tampil_penyuluhan['kd_penyuluhan']; ?>"><button type="button" class="btn btn-warning"><i class='bx bxs-edit'></i></button></a>
                                    <button type="button" class="btn btn-danger"><a href="proses/penyuluhan-hapus.php?kd_penyuluhan=<?php echo $r_tampil_penyuluhan['kd_penyuluhan']; ?>" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')" class="tombol" style="color:white"><i class='bx bxs-trash-alt'></i></a></button>
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