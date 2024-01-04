<?php
include('koneksi.php'); // Hubungkan ke database jika diperlukan

// Set header untuk memberitahu browser bahwa ini adalah file CSV yang akan diunduh
header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="daftar_kegiatan.csv"');

// Buka output file untuk menulis data CSV
$output = fopen('php://output', 'w');

// Header CSV (nama kolom)
fputcsv($output, array('No', 'Jenis Kegiatan', 'Tanggal Kegiatan', 'Penanggung Jawab Kegiatan', 'Gambar'));

// Ambil data kegiatan dari database
$data = mysqli_query($koneksi, "SELECT * FROM kegiatan");

// Tulis data kegiatan ke dalam file CSV
$no = 1;
while ($d = mysqli_fetch_array($data)) {
    fputcsv($output, array(
        $no++,
        $d['jeniskegiatan'],
        $d['tanggalkegiatan'],
        $d['pjkegiatan'],
        $d['gambar']
    ));
}

// Tutup file CSV
fclose($output);
?>
