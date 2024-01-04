<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

	// membuat variabel untuk menampung data dari form
  $keterangan    = $_POST['keterangan'];
  $januari       = $_POST['januari'];
  $februari      = $_POST['februari   '];
  $maret         = $_POST['maret'];
  $april         = $_POST['april  '];
  $mei           = $_POST['mei'];
  $juni          = $_POST['juni'];
  


//cek dulu jika ada gambar produk jalankan coding ini
            $query = "INSERT INTO keuangan (keterangan, januari, februari, maret, april, mei, juni) VALUES ('$keterangan', '$januari', '$februari', '$maret', '$april', '$mei', '$juni')";
            $result = mysqli_query($koneksi, $query);
                  // periska query apakah ada error
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                           " - ".mysqli_error($koneksi));
                  } else {
                    //tampil alert dan akan redirect ke halaman index.php
                    //silahkan ganti index.php sesuai halaman yang akan dituju
                    echo "<script>alert('Data berhasil ditambah.');window.location='keuangan.php';</script>";
                  }
?>
 
