<?php 
    require ("vendor/autoload.php");
    require ("koneksi.php");

    use PhpOffice\PhpSpreadsheet\Spreadsheet;
    use PhpOffice\PhpSpreadsheet\IOFactory;

    $query = mysqli_query($db, "SELECT * FROM tbanggota");

    $spreadsheet = new Spreadsheet();
    $spreadsheet->setActiveSheetIndex(0)
                ->setCellValue('A1', 'Daftar Anggota Kelompok Tani')
                ->setCellValue('A3', 'No')
                ->setCellValue('B3', 'NIK')
                ->setCellValue('C3', 'Kode Kelompok Tani')
                ->setCellValue('D3', 'Nama Anggota')
                ->setCellValue('E3', 'Nama Kelompok Tani')
                ->setCellValue('F3', 'Alamat')
                ->setCellValue('G3', 'No SPPT')
                ->setCellValue('H3', 'Luas SPPT')
                ->setCellValue('I3', 'Nama Ibu')
                ->setCellValue('J3', 'Koordinat')
                ->setCellValue('K3', 'No Telp')
                ->setCellValue('L3', 'Komoditas')
                ->setCellValue('M3', 'Luas Tanam');

    $sheet = $spreadsheet->getActiveSheet();

    $nomor = 1;
    $index = 4;
    while ($val = mysqli_fetch_array($query)) {
        $sheet->setCellValue('A'.$index, $nomor++);
        $sheet->setCellValue('B'.$index, $val['nik']);
        $sheet->setCellValue('C'.$index, $val['kd_poktan']);
        $sheet->setCellValue('D'.$index, $val['nm_anggota']);
        $sheet->setCellValue('E'.$index, $val['nm_poktan']);
        $sheet->setCellValue('F'.$index, $val['alamat']);
        $sheet->setCellValue('G'.$index, $val['no_sppt']);
        $sheet->setCellValue('H'.$index, $val['luas_sppt']);
        $sheet->setCellValue('I'.$index, $val['nm_ibu']);
        $sheet->setCellValue('J'.$index, $val['koordinat']);
        $sheet->setCellValue('K'.$index, $val['no_telp']);
        $sheet->setCellValue('L'.$index, $val['komoditas']);
        $sheet->setCellValue('M'.$index, $val['luas_tanam']);
        $index++;
    }

    $sheet->setTitle('Daftar Anggota Kelompok Tani');
    $spreadsheet->setActiveSheetIndex(0);

    $filename = 'Daftar-Anggota-Kelompok-Tani.xlsx';

    ob_end_clean();

    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment; filename="' . $filename . '"');
    header('Cache-Control: max-age=0');
    header('Cache-Control: max-age=1');
    header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
    header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT');
    header('Cache-Control: cache, must-revalidate');
    header('Pragma: public');

    $writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
    $writer->save('php://output');
    exit();
?>