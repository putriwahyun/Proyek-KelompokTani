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
                Data Penyuluhan
            </h4>
            <div class="user-wrapper">
                <div class="dropdown">
                    <button class="dropbtn"><img src="bxs-user-circle.svg" width="40px" height="40px" alt=""></button>
                    <div class="dropdown-content">
                        <a href="logout-petani.php">Logout</a>
                    </div>
                </div>
                    <h6><?php echo$_SESSION['sesi']?></h6>
            </div>
        </header>

        <div class="container">
            <div class="tambah">
                <button type="button" class="btn btn-primary"><a href="index-petani.php?p=tambah-penyuluhan-petani" style="color:white; text-decoration: none"><i class='bx bxs-user-plus'></i>Tambah Penyuluhan</a></button>
            </div>
            <table id="example" class="table table-striped " style="width:100%">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Penyuluh</th>
                        <th scope="col">Nama Poktan</th>
                        <th scope="col">Tanggal Penyuluhan</th>
                        <th scope="col">Tempat</th>
                        <th scope="col">Tema</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $nomor = 1;
                    $nama_tani = $_SESSION['nm_poktan'];
                    $query = "SELECT * FROM tbpenyuluhan WHERE nm_poktan LIKE '%$nama_tani%'";
                    $q_tampil_penyuluhan = mysqli_query($db, $query);

                    if (mysqli_num_rows($q_tampil_penyuluhan) > 0) {
                        while ($r_tampil_penyuluhan = mysqli_fetch_array($q_tampil_penyuluhan)) {
                    ?>
                            <tr>
                                <td><?php echo $nomor; ?></td>
                                <td><?php echo $r_tampil_penyuluhan['nm_penyuluh']; ?></td>
                                <td><?php echo $r_tampil_penyuluhan['nm_poktan']; ?></td>
                                <td><?php echo $r_tampil_penyuluhan['tgl_penyuluhan']; ?></td>
                                <td><?php echo $r_tampil_penyuluhan['tempat']; ?></td>
                                <td><?php echo $r_tampil_penyuluhan['tema']; ?></td>
                                <td>
                                    <a href="index-petani.php?p=edit-penyuluhan-petani&kd_penyuluhan=<?php echo $r_tampil_penyuluhan['kd_penyuluhan']; ?>"><button type="button" class="btn btn-warning"><i class='bx bxs-edit'></i></button></a>
                                    <button type="button" class="btn btn-danger"><a href="proses/penyuluhan-petani-hapus.php?kd_penyuluhan=<?php echo $r_tampil_penyuluhan['kd_penyuluhan']; ?>" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')" class="tombol" style="color:white"><i class='bx bxs-trash-alt'></i></a></button>
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