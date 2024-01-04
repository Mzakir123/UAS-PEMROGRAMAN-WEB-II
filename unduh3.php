<?php
include('koneksi.php'); // Hubungkan ke database jika diperlukan

// Set header untuk memberitahu browser bahwa ini adalah file CSV yang akan diunduh
header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="daftar_barang.csv"');

// Buka output file untuk menulis data CSV
$output = fopen('php://output', 'w');

// Header CSV (nama kolom)
fputcsv($output, array('No', 'Nama Barang', 'Harga Satuan', 'Stok'));

// Ambil data barang dari database
$data = mysqli_query($koneksi, "SELECT * FROM barang");

// Tulis data barang ke dalam file CSV
$no = 1;
while ($d = mysqli_fetch_array($data)) {
    fputcsv($output, array(
        $no++,
        $d['namabarang'],
        $d['hargasatuan'],
        $d['stok']
    ));
}

// Tutup file CSV
fclose($output);
?>
