<?php
include('koneksi.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ahmad Fatchul Huda - Web Developer</title>
    <link rel="shortcut icon" href="jambi.png">
    <!-- Tambahkan Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
        }

        nav {
            background-color: #343a40;
            padding: 10px 0;
        }

        nav a {
            color: #ffffff;
            text-decoration: none;
            padding: 10px 15px;
        }

        nav .nav-center {
            display: flex;
            justify-content: center;
        }

        header {
            text-align: center;
            padding: 20px 0;
            background-color: gray;
            color: #ffffff;
        }

        header img {
            width: 250px;
            height: 250px;
            border-radius: 50%;
            margin-top: 20px;
        }

        .profile-info {
            max-width: 800px;
            margin: 30px auto;
            padding: 20px;
            background-color: #ffffff;
            border: 1px solid #dee2e6;
            border-radius: 10px;
        }

        footer {
            background-color: #343a40;
            color: #ffffff;
            padding: 10px 0;
            text-align: center;
        }
    </style>
</head>

<body>
    <nav>
        <div class="container">
            <div class="nav-center">
                <ul class="nav">
                    <li class="nav-item"><a class="nav-link" href="halaman_pimpinan.php">Menu</a></li>
                    <li class="nav-item"><a class="nav-link" href="Profile3.php">Profile</a></li>
                    <li class="nav-item"><a class="nav-link" href="transaksi3.php"> Transaksi</a></li>
                    <li class="nav-item"><a class="nav-link" href="barang3.php"> Barang</a></li>
                    <li class="nav-item"><a class="nav-link" href="kegiatan3.php"> Kegiatan</a></li>
                    <li class="nav-item"><a class="nav-link" href="usaha3.php"> Usaha</a></li>
                    <li class="nav-item"><a class="nav-link" href="keuangan2.php"> Keuangan</a></li>
                    <li class="nav-item"><a class="nav-link" href="grafik2.php"> Grafik</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <header>
        <img src="gambar/HendiQT.jpg" alt="Huda's Photo">
    </br>
    <br/>
        <h1>Hendi Ananda Putra</h1>
        <p>Web Developer</p>
    </header>

    <div class="container profile-info">
        <h2>Biodata Diri</h2>
        <table class="table">
            <tr>
                <td>Nama</td>
                <td>Hendi Ananda Putra</td>
            </tr>
            <tr>
                <td>NIM</td>
                <td>701220217</td>
            </tr><tr>
                <td>Jenis Kelamin</td>
                <td>Laki-Laki</td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>09 mei 2003</td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td>Koto Baru</td>
            </tr>
            <tr>
                <td>Status</td>
                <td>Mahasiswa</td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>Prov.Jambi Jln. Pattimura No.50 Sumatera</td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td>Sistem Informasi</td>
            </tr>
            <tr>
                <td>Fakultas</td>
                <td>Saintek</td>
            </tr>
            <tr>
                <td>No Hp</td>
                <td><a href="https://wa.me/6282278973308" style="color:black">082278973308</a></td>
            </tr>
            <!-- Tambahkan baris-baris data lainnya -->
        </table>
    </div>

    <footer>
        &copy; 2023 Hendi Ananda Putra. All rights reserved.
    </footer>

    <!-- Tambahkan Bootstrap JS (optional, tergantung kebutuhan) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
