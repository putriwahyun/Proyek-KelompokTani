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
                <button type="button" class="btn btn-primary"><a href="index.php?p=tambah-poktan" style="color:white; text-decoration: none"><i class='bx bxs-user-plus'></i>Tambah Kelompok</a></button>
            </div>
            <table id="example" class="table table-striped " style="width:100%">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Kode</th>
                        <th scope="col">Nama Kelompok Tani</th>
                        <th scope="col">Nama Ketua</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Kelas</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $nomor = 1;
                    $query = "SELECT * FROM tbpoktan";
                    $q_tampil_poktan = mysqli_query($db, $query);

                    if (mysqli_num_rows($q_tampil_poktan) > 0) {
                        while ($r_tampil_poktan = mysqli_fetch_array($q_tampil_poktan)) {
                    ?>
                            <tr>
                                <td><?php echo $nomor; ?></td>
                                <td><?php echo $r_tampil_poktan['kd_poktan']; ?></td>
                                <td><?php echo $r_tampil_poktan['nm_poktan']; ?></td>
                                <td><?php echo $r_tampil_poktan['nm_ketua']; ?></td>
                                <td><?php echo $r_tampil_poktan['alamat']; ?></td>
                                <td><?php echo $r_tampil_poktan['kelas']; ?></td>
                                <td>
                                    <a href="index.php?p=edit-poktan&kd_poktan=<?php echo $r_tampil_poktan['kd_poktan']; ?>"><button type="button" class="btn btn-warning"><i class='bx bxs-edit'></i></button></a>
                                    <button type="button" class="btn btn-danger"><a href="proses/poktan-hapus.php?kd_poktan=<?php echo $r_tampil_poktan['kd_poktan']; ?>" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')" class="tombol" style="color:white"><i class='bx bxs-trash-alt'></i></a></button>
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