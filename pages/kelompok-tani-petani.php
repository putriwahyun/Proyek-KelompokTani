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
                Data Kelompok Tani
            </h4>
            <div class="user-wrapper">
                <div class="dropdown">
                    <button class="dropbtn"><img src="bxs-user-circle.svg" width="40px" height="40px" alt=""></button>
                    <div class="dropdown-content">
                        <a href="logout-petani.php">Logout</a>
                    </div>
                </div>
                    <h6>Petani</h6>
            </div>
        </header>

        <div class="container">
            <table id="example" class="table table-striped " style="width:100%">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Kode</th>
                        <th scope="col">Nama Kelompok Tani</th>
                        <th scope="col">Nama Ketua</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Kelas</th>
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