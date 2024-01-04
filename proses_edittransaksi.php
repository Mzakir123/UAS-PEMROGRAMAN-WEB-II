<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

// membuat variabel untuk menampung data dari form
$id = $_POST['id'];
$tanggaltransaksi  = $_POST['tanggaltransaksi'];
$akun              = $_POST['akun'];
$keterangan        = $_POST['keterangan'];
$debet             = $_POST['debet'];
$kredit            = $_POST['kredit'];

// jalankan query UPDATE berdasarkan ID yang produknya kita edit
$query  = "UPDATE transaksi SET tanggaltransaksi = '$tanggaltransaksi', akun = '$akun', keterangan = '$keterangan', debet = '$debet', kredit = '$kredit'";
$query .= " WHERE id = '$id'";
$result = mysqli_query($koneksi, $query);

// periksa query apakah ada error
if (!$result) {
    die("Query gagal dijalankan: " . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
} else {
    // tampil alert dan akan redirect ke halaman halaman_admin.php
    echo "<script>alert('Data berhasil diubah.');window.location='transaksi2.php';</script>";
}
?>
