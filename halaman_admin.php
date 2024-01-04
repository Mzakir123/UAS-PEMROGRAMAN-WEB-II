<?php
  include('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Website Koperasi</title>
  <link href="uin.jpeg" rel="shortcut icon">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <style>
    body {
      font-family: 'Arial', sans-serif; 
      margin: 0;
      padding: 0;
      background-color: #f4f4f4;
    }

    header {
      background-color: #333;
      color: white;
      text-align: center;
      padding: 5px;
    }

    nav {
      background-color: #007bff;
      overflow: hidden;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    nav a {
      color: white;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
      margin-top: 10px;
    }

    nav a:hover {
      background-color: #ddd;
      color: black;
    }

    .search-container {
      text-align: center;
      margin-top: 10px;
      margin-bottom: 10px;
    }

    input[type=text] {
      padding: 6px;
      border: none;
      font-size: 17px;
    }

    .btn-layout {
      margin-top: 10px;
      margin-left: 20px;
    }

    .logout-btn {
      margin-right: 20px;
    }

    .footer {
      background-color: #333;
      color: white;
      text-align: center;
      padding: 10px;
      position: fixed;
      bottom: 0;
      width: 100%;
    }

    .social-icons img {
      width: 30px;
      margin: 0 5px;
    }

    .crud-icons img {
      width: 20px;
      margin-right: 5px;
    }
  </style>
</head>
<body>

  <header>
    <div class="social-icons">
      <a href="https://www.facebook.com/profile.php?id=100038473054934&mibextid=rS40aB7S9Ucbxw6v"><i class="fab fa-facebook-f"></i></a>
      <a href="https://www.instagram.com/hudaahmadfatchul?igsh=YTQwZjQ0NmI0OA=="><i class="fab fa-instagram"></i></a>
      <a href="https://youtube.com/@AhmadFatchulHuda?si=CU7YHv06eS8WMaJL"><i class="fab fa-youtube"></i></a>                      
    </div>
    <h1><img src="gambar/kopma2.jpg" width="100%" height="250"></h1>
  </header>

  <nav>
    <div>
      <a href="halaman_admin.php"> Menu</a>
      <a href="Profile2.php"> Profile</a>
      <a href="transaksi2.php"> Transaksi</a>
      <a href="barang2.php"> Barang</a>
      <a href="kegiatan2.php"> Kegiatan</a>
      <a href="usaha2.php"> Usaha</a>
      <a href="keuangan.php"> Keuangan</a>
      <a href="grafik.php"> Grafik</a>
    </div>
    <div class="search-container">
       <form action="" method="get">
    <center>
  <input type="text" name="cari">
  <input type="submit" value="Cari">
    </div>
    <button class="btn btn-primary btn-logout">
    <i class="fas fa-sign-out-alt"></i>
    <a href="logout.php" class="logout-btn">Logout</a>
  </button>
  </nav>
  <marquee scrolldelay="30" bgcolor="white"><b>Berita dan Informasi Koperasi UIN Jambi Terkini dan Terupdate</b></marquee>

  <div class="content container mt-3">
    <h1>Website Koperasi Hendi</h1>
    <!-- CRUD Table -->
    <center><button class="btn btn-success"><i class="fas fa-plus"></i><a  href="tambah.php" style="color:#fff">Tambah</a></button>  
      <a href="cetak.php" target="_blank" class="btn btn-primary btn-cetak"><i class="fas fa-print"></i> Cetak</a>
      <a href="unduh.php" class="btn btn-warning btn-unduh"><i class="fas fa-download"></i> Unduh</a>
    </center>
    <br/>
    <table class="table">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>NIM</th>
          <th>Jenis Kelamin</th>
          <th>Alamat</th>
          <th>Jurusan</th>
          <th>Fakultas</th>
          <th>Email</th>
          <th>Posisi</th>
          <th>Gambar</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
      <?php 
  if(isset($_GET['cari'])){
    $cari = $_GET['cari'];
    $data = mysqli_query($koneksi,"select * from pegawai where nama like '%".$cari."%'");       
  }else{
    $data = mysqli_query($koneksi,"select * from pegawai");   
  }
  $no = 1;
  while($d = mysqli_fetch_array($data)){
  ?>
       <tr>
          <td><?php echo $no++ ?></td>
          <td><?php echo $d['nama']; ?></td>
          <td><?php echo $d['nim']; ?></td>
          <td><?php echo $d['jeniskelamin']; ?></td>
          <td><?php echo $d['alamat']; ?></td>
          <td><?php echo $d['jurusan']; ?></td>
          <td><?php echo $d['fakultas']; ?></td>
          <td><?php echo $d['email']; ?></td>
          <td><?php echo $d['posisi']; ?></td>
          <td style="text-align: center;"><img src="gambar/<?php echo $d['gambar']; ?>" style="width: 120px;"></td>
          <td>
            <button class="btn btn-info"><i class="fas fa-edit"></i><a href="edit.php?id=<?php echo $d['id']; ?>"style="color:#fff"> Edit </a></button>
            <p></p>
            <button class="btn btn-danger"><i class="fas fa-trash"></i><a href="proses_hapus.php?id=<?php echo $d['id']; ?>"style="color:#fff"> Hapus </a></button>
          </td>
      </tr>   
      <?php } ?>
    </tbody>
    </table>
  </div>
<br/>
<br/>
  <div class="footer">
    <p>&copy; 2023 Hendi Ananda Putra. All rights reserved.</p>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
