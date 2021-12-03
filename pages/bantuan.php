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
                Data Bantuan
            </h4>
            <div class="user-wrapper">
                <div class="dropdown">
                    <button class="dropbtn"><img src="bxs-user-circle.svg" width="40px" height="40px" alt=""></button>
                    <div class="dropdown-content">
                        <a href="logout.php">Logout</a>
                    </div>
                </div>
                    <h6><?php echo $_SESSION['sesi']?></h6>
            </div>
        </header>

        <div class="container">
            <div class="tambah">
                <button type="button" class="btn btn-primary"><a href="index.php?p=tambah-bantuan" style="color:white; text-decoration: none"><i class='bx bxs-user-plus'></i>Tambah Bantuan</a></button>
            </div>
            <table id="example" class="table table-striped " style="width:100%">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Bantuan</th>
                        <th scope="col">Nama Poktan</th>
                        <th scope="col">No Registrasi</th>
                        <th scope="col">Tahun Pembuatan</th>
                        <th scope="col">Sumber Anggaran</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $nomor = 1;
                    $query = "SELECT * FROM tbbantuan";
                    $q_tampil_bantuan = mysqli_query($db, $query);

                    if (mysqli_num_rows($q_tampil_bantuan) > 0) {
                        while ($r_tampil_bantuan = mysqli_fetch_array($q_tampil_bantuan)) {
                    ?>
                            <tr>
                                <td><?php echo $nomor; ?></td>
                                <td><?php echo $r_tampil_bantuan['nm_bantuan']; ?></td>
                                <td><?php echo $r_tampil_bantuan['nm_poktan']; ?></td>
                                <td><?php echo $r_tampil_bantuan['no_reg']; ?></td>
                                <td><?php echo $r_tampil_bantuan['tahun']; ?></td>
                                <td><?php echo $r_tampil_bantuan['sumber']; ?></td>
                                <td>
                                    <a href="index.php?p=edit-bantuan&kd_bantuan=<?php echo $r_tampil_bantuan['kd_bantuan']; ?>"><button type="button" class="btn btn-warning"><i class='bx bxs-edit'></i></button></a>
                                    <button type="button" class="btn btn-danger"><a href="proses/bantuan-hapus.php?kd_bantuan=<?php echo $r_tampil_bantuan['kd_bantuan']; ?>" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')" class="tombol" style="color:white"><i class='bx bxs-trash-alt'></i></a></button>
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