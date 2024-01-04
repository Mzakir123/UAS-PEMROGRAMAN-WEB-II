<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

// membuat variabel untuk menampung data dari form
$tanggaltransaksi  = $_POST['tanggaltransaksi'];
$akun              = $_POST['akun'];
$keterangan        = $_POST['keterangan'];
$debet             = $_POST['debet'];
$kredit            = $_POST['kredit'];

// cek dulu jika ada gambar produk jalankan coding ini
$query = "INSERT INTO transaksi (tanggaltransaksi, akun, keterangan, debet, kredit) VALUES ('$tanggaltransaksi', '$akun', '$keterangan', '$debet', '$kredit')";
$result = mysqli_query($koneksi, $query);

// periksa query apakah ada error
if (!$result) {
    die("Query gagal dijalankan: " . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
} else {
    // tampilkan alert dan akan redirect ke halaman barang2.php
    echo "<script>alert('Data berhasil ditambah.');window.location='transaksi2.php';</script>";
}
?>
