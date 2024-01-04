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
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

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
    <h1>Website Koperasi Huda</h1>
    <!-- CRUD Table -->
    </br>
      <?php 
    $data = mysqli_query($koneksi,"select * from transaksi");   
  while ($d = mysqli_fetch_array($data)) {  

      $totalDebit = 0;
      $totalKredit = 0;

  while ($d = mysqli_fetch_array($data)) {
    $totalDebit += $d['debet'];
    $totalKredit += $d['kredit'];
  }
}
  
      ?>
    <canvas id="barChart" width="400" height="200"></canvas>
  </div>
</div>
<script>
  document.addEventListener('DOMContentLoaded', function () {
    var ctx = document.getElementById('barChart').getContext('2d');

    var myChart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ['Debit', 'Kredit'],
        datasets: [{
          label: 'Total Debit and Kredit',
          data: [<?php echo $totalDebit; ?>, <?php echo $totalKredit; ?>],
          backgroundColor: [
            'rgba(75, 192, 192, 0.2)', // Debit color
            'rgba(255, 99, 132, 0.2)'  // Kredit color
          ],
          borderColor: [
            'rgba(75, 192, 192, 1)',
            'rgba(255, 99, 132, 1)'
          ],
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    });
  });
</script>
  </div>
<br/>
<br/>
<br/>
  <div class="footer">
    <p>&copy; 2023 Ahmad Fatchul Huda. All rights reserved.</p>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
