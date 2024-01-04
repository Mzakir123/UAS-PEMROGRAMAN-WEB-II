<?php
include('koneksi.php'); // Hubungkan ke database jika diperlukan

// Set header untuk memberitahu browser bahwa ini adalah file CSV yang akan diunduh
header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="daftar_transaksi.csv"');

// Buka output file untuk menulis data CSV
$output = fopen('php://output', 'w');

// Header CSV (nama kolom)
fputcsv($output, array('No', 'Tanggaltransaksi', 'Akun', 'Keterangan', 'Debet', 'Kredit'));

// Ambil data transaksi dari database
$data = mysqli_query($koneksi, "SELECT * FROM transaksi");

// Tulis data transaksi ke dalam file CSV
$no = 1;
while ($d = mysqli_fetch_array($data)) {
    fputcsv($output, array(
        $no++,
        $d['tanggaltransaksi'],
        $d['akun'],
        $d['keterangan'],
        $d['debet'],
        $d['kredit']
    ));
}

// Tutup file CSV
fclose($output);
?>
