<?php
include 'proses/list-poktan.php';
?>

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
        Data Laporan
      </h4>
      <div class="user-wrapper">
          <div class="dropdown">
              <button class="dropbtn"><img src="bxs-user-circle.svg" width="40px" height="40px" alt=""></button>
              <div class="dropdown-content">
                  <a href="logout.php">Logout</a>
              </div>
          </div>
              <h6><?php echo$_SESSION['sesi']?></h6>
      </div>
    </header>

    <div class="container">
      <div class="tambah">
        <form method="post">
          <select name="filter" id="level" style="width: 20%" onchange="test()">
            <option value="pilih" selected>Semua Kelompok Tani</option>
            <?php foreach ($data_poktan as $poktan): ?>
              <option value="<?=$poktan['nm_poktan'];?>"> <?php echo $poktan['nm_poktan']; ?></option>	
            <?php endforeach ?>
          </select>
          <input type="submit" name="search" value="Filter" class="tombol" style="padding-right: 5px; padding-left: 5px;">
        </form>
        
      </div>
      <table id="example" class="table table-striped " style="width:100%">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Poktan</th>
            <th scope="col">Jumlah Anggota</th>
            <th scope="col">Jumlah Bantuan</th>
            <th scope="col">Jumlah Penyuluhan</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $nomor = 1;
          if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $filter = trim(mysqli_real_escape_string($db, $_POST['filter']));
            if ($filter != 'pilih') {
              $sql = "SELECT nm_poktan AS nmpoktan, (SELECT COUNT(*) FROM tbanggota WHERE nm_poktan=nmpoktan) AS jmlanggota, (SELECT COUNT(*) FROM tbbantuan WHERE nm_poktan=nmpoktan) AS jmlbantuan, (SELECT COUNT(*) FROM tbpenyuluhan WHERE nm_poktan=nmpoktan) AS jmlpenyuluhan FROM tbpoktan WHERE nm_poktan LIKE '%$filter%'";
              $query = $sql;
            }else{
              $query = "SELECT nm_poktan AS nmpoktan, (SELECT COUNT(*) FROM tbanggota WHERE nm_poktan=nmpoktan) AS jmlanggota, (SELECT COUNT(*) FROM tbbantuan WHERE nm_poktan=nmpoktan) AS jmlbantuan, (SELECT COUNT(*) FROM tbpenyuluhan WHERE nm_poktan=nmpoktan) AS jmlpenyuluhan FROM tbpoktan";
            }
          } else {
            $query = "SELECT nm_poktan AS nmpoktan, (SELECT COUNT(*) FROM tbanggota WHERE nm_poktan=nmpoktan) AS jmlanggota, (SELECT COUNT(*) FROM tbbantuan WHERE nm_poktan=nmpoktan) AS jmlbantuan, (SELECT COUNT(*) FROM tbpenyuluhan WHERE nm_poktan=nmpoktan) AS jmlpenyuluhan FROM tbpoktan";
          }

          
          $q_tampil_poktan = mysqli_query($db, $query);

          if (mysqli_num_rows($q_tampil_poktan) > 0) {
              while ($r_tampil_poktan = mysqli_fetch_array($q_tampil_poktan)) {
          ?>
                  <tr>
                      <td><?php echo $nomor; ?></td>
                      <td><?php echo $r_tampil_poktan['nmpoktan']; ?></td>
                      <td><?php echo $r_tampil_poktan['jmlanggota']; ?></td>
                      <td><?php echo $r_tampil_poktan['jmlbantuan']; ?></td>
                      <td><?php echo $r_tampil_poktan['jmlpenyuluhan']; ?></td>
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
    } ); 
  </script>
</body>