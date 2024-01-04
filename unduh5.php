<?php
include('koneksi.php'); // Hubungkan ke database jika diperlukan

// Set header untuk memberitahu browser bahwa ini adalah file CSV yang akan diunduh
header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="daftar_usaha.csv"');

// Buka output file untuk menulis data CSV
$output = fopen('php://output', 'w');

// Header CSV (nama kolom)
fputcsv($output, array('No', 'Nama Usaha', 'Jenis Usaha', 'Tanggal Didirikan', 'Lokasi', 'Gambar'));

// Ambil data usaha dari database
$data = mysqli_query($koneksi, "SELECT * FROM usaha");

// Tulis data usaha ke dalam file CSV
$no = 1;
while ($d = mysqli_fetch_array($data)) {
    fputcsv($output, array(
        $no++,
        $d['namausaha'],
        $d['jenisusaha'],
        $d['tanggaldidirikan'],
        $d['lokasi'],
        $d['gambar']
    ));
}

// Tutup file CSV
fclose($output);
?>
