<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

// membuat variabel untuk menampung data dari form
$namabarang  = $_POST['namabarang'];
$hargasatuan = $_POST['hargasatuan'];
$stok        = $_POST['stok'];

// cek dulu jika ada gambar produk jalankan coding ini
$query = "INSERT INTO barang (namabarang, hargasatuan, stok) VALUES ('$namabarang', '$hargasatuan', '$stok')";
$result = mysqli_query($koneksi, $query);

// periksa query apakah ada error
if (!$result) {
    die("Query gagal dijalankan: " . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
} else {
    // tampilkan alert dan akan redirect ke halaman barang2.php
    echo "<script>alert('Data berhasil ditambah.');window.location='barang2.php';</script>";
}
?>
