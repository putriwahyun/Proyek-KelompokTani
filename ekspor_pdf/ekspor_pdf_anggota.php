<?php 
    require ("vendor/autoload.php");
    require ("koneksi.php");

    use Dompdf\Dompdf;

    $query = mysqli_query($db, "SELECT * FROM tbanggota");

    $html = '<h1>Daftar Anggota Kelompok Tani</h1>';
    $html .= '<table width="100%" border="1" cellspacing="0" cellpadding="2">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NIK</th>
                            <th>Kode Kelompok Tani</th>
                            <th>Nama Anggota</th>
                            <th>Nama Kelompok Tani</th>
                            <th>Alamat</th>
                            <th>No SPPT</th>
                            <th>Luas SPPT</th>
                            <th>Nama Ibu</th>
                            <th>Koordinat</th>
                            <th>No Telp</th>
                            <th>Komoditas</th>
                            <th>Luas Tanam</th>
                        </tr>
                    </thead>
                    <tbody>';

    $nomor = 1;
    while ($val = mysqli_fetch_array($query)) {
        $html .= '<tr>
                        <td align="center">'.$nomor.'</td>
                        <td>'.$val['nik'].'</td>
                        <td>'.$val['kd_poktan'].'</td>
                        <td>'.$val['nm_anggota'].'</td>
                        <td>'.$val['nm_poktan'].'</td>
                        <td>'.$val['alamat'].'</td>
                        <td>'.$val['no_sppt'].'</td>
                        <td>'.$val['luas_sppt'].'</td>
                        <td>'.$val['nm_ibu'].'</td>
                        <td>'.$val['koordinat'].'</td>
                        <td>'.$val['no_telp'].'</td>
                        <td>'.$val['komoditas'].'</td>
                        <td>'.$val['luas_tanam'].'</td>
                    </tr>';
        $nomor++;
    }

    $html .= '</tbody></html>';

    $dompdf = new Dompdf();
    
    $dompdf->load_html($html);
    $dompdf->setPaper('a4', 'landscape');
    $dompdf->render();
    $dompdf->stream();
?>