<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

// membuat variabel untuk menampung data dari form
$id = $_POST['id'];
$keterangan    = $_POST['keterangan'];
$januari       = $_POST['januari'];
$februari      = $_POST['februari'];
$maret         = $_POST['maret'];
$april         = $_POST['april'];
$mei           = $_POST['mei'];
$juni          = $_POST['juni'];

// jalankan query UPDATE berdasarkan ID yang produknya kita edit
$query  = "UPDATE keuangan SET keterangan = '$keterangan', januari = '$januari', februari = '$februari', maret = '$maret', april = '$april', mei = '$mei', juni = '$juni'";
$query .= " WHERE id = '$id'";
$result = mysqli_query($koneksi, $query);

// periksa query apakah ada error
if (!$result) {
    die("Query gagal dijalankan: " . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
} else {
    // tampil alert dan akan redirect ke halaman halaman_admin.php
    echo "<script>alert('Data berhasil diubah.');window.location='keuangan.php';</script>";
}
?>
