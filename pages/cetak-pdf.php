<?php 
include '../koneksi.php';
?>

<h3>Data Anggota Kelompok Tani</h3>
        <div id="content">
            <table border="1" id="table-tampil">
                <thead>
                <tr>
                    <th id="label-tampil-no">No</td>
                    <th>NIK</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>No SPPT</th>
                    <th>Luas SPPT</th>
                    <th>Nama Ibu</th>
                    <th>Koordinat</th>
                    <th>No Telepon</th>
                    <th>Komoditas</th>
                    <th>Luas Tanam</th>
                </tr>
                </thead>
                <tbody>
                    <?php
                        $nomor = 1;
                        $query = "SELECT * FROM tbanggota";
                        $q_tampil_pdf = mysqli_query($db, $query);

                        if(mysqli_num_rows($q_tampil_pdf) > 0){
                            while($r_tampil_pdf=mysqli_fetch_array($q_tampil_transaksi)){
                    ?>
                    <tr>
                        <td><?php echo $nomor;?></td>
                        <td><?php echo $r_tampil_pdf['nik'];?></td>
                        <td><?php echo $r_tampil_pdf['nm_anggota'];?></td>
                        <td><?php echo $r_tampil_pdf['alamat'];?></td>
                        <td><?php echo $r_tampil_pdf['no_sppt'];?></td>
                        <td><?php echo $r_tampil_pdf['luas_sppt'];?></td>
                        <td><?php echo $r_tampil_pdf['nm_ibu'];?></td>
                        <td><?php echo $r_tampil_pdf['koordinat'];?></td>
                        <td><?php echo $r_tampil_pdf['no_telp'];?></td>
                        <td><?php echo $r_tampil_pdf['komoditas'];?></td>
                        <td><?php echo $r_tampil_pdf['luas_tanam'];?></td>
                    </tr>
                        <?php
                                $nomor++;
                            }
                        }
                        ?>
                </tbody>
            </table>
        </div>
    <script>
    window.print();
    </script>