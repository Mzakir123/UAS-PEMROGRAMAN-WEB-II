<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

// membuat variabel untuk menampung data dari form
$id = $_POST['id'];
$namabarang      = $_POST['namabarang'];
$hargasatuan     = $_POST['hargasatuan'];
$stok            = $_POST['stok'];

// jalankan query UPDATE berdasarkan ID yang produknya kita edit
$query  = "UPDATE barang SET namabarang = '$namabarang', hargasatuan = '$hargasatuan', stok = '$stok'";
$query .= " WHERE id = '$id'";
$result = mysqli_query($koneksi, $query);

// periksa query apakah ada error
if (!$result) {
    die("Query gagal dijalankan: " . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
} else {
    // tampil alert dan akan redirect ke halaman halaman_admin.php
    echo "<script>alert('Data berhasil diubah.');window.location='barang2.php';</script>";
}
?>
