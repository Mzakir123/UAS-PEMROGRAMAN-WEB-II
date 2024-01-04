<?php
include('koneksi.php'); // Hubungkan ke database jika diperlukan

// Set header untuk memberitahu browser bahwa ini adalah file CSV yang akan diunduh
header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="daftar_pegawai.csv"');

// Buka output file untuk menulis data CSV
$output = fopen('php://output', 'w');

// Header CSV (nama kolom)
fputcsv($output, array('No', 'Nama', 'NIM', 'Jenis Kelamin', 'Alamat', 'Jurusan', 'Fakultas', 'Email', 'Posisi', 'Gambar'));

// Ambil data pegawai dari database
$data = mysqli_query($koneksi, "SELECT * FROM pegawai");

// Tulis data pegawai ke dalam file CSV
$no = 1;
while ($d = mysqli_fetch_array($data)) {
    fputcsv($output, array(
        $no++,
        $d['nama'],
        $d['nim'],
        $d['jeniskelamin'],
        $d['alamat'],
        $d['jurusan'],
        $d['fakultas'],
        $d['email'],
        $d['posisi'],
        $d['gambar']
    ));
}

// Tutup file CSV
fclose($output);
?>
