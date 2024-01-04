-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2024 at 05:50 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud_pg`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` int(11) NOT NULL,
  `namabarang` varchar(50) NOT NULL,
  `hargasatuan` int(11) NOT NULL,
  `stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `namabarang`, `hargasatuan`, `stok`) VALUES
(1, 'Pulpen', 2000, 50),
(2, 'Kertas A4', 10000, 100),
(3, 'Staples', 5000, 30),
(4, 'Tinta Printer', 50000, 20),
(13, 'Pena', 2000, 15);

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id` int(11) NOT NULL,
  `jeniskegiatan` varchar(50) NOT NULL,
  `tanggalkegiatan` date NOT NULL,
  `pjkegiatan` varchar(50) NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`id`, `jeniskegiatan`, `tanggalkegiatan`, `pjkegiatan`, `gambar`) VALUES
(1, 'Jumpa Kopma', '2023-10-15', 'Imam Kurniawan Firmansyah', '336-2.jpeg'),
(4, 'Diksar', '2023-11-20', 'Farhan Arya Pratama', '420-1.jpeg'),
(5, 'Have Fun Kopma', '2024-12-05', 'Adi Rakabumi Jaya', '99-4.jpeg'),
(6, 'Sosial Asistance Kopma', '2024-12-25', 'Aditya Saputra', '459-3.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `keuangan`
--

CREATE TABLE `keuangan` (
  `id` int(11) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `januari` int(11) NOT NULL,
  `februari` int(11) NOT NULL,
  `maret` int(11) NOT NULL,
  `april` int(11) NOT NULL,
  `mei` int(11) NOT NULL,
  `juni` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `keuangan`
--

INSERT INTO `keuangan` (`id`, `keterangan`, `januari`, `februari`, `maret`, `april`, `mei`, `juni`) VALUES
(1, 'Pendapatan', 6800000, 8300000, 6300000, 5500000, 7500000, 4600000),
(0, 'Kas', 7100000, 8300000, 6200000, 5500000, 6500000, 5800000);

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nim` int(9) NOT NULL,
  `jeniskelamin` enum('Laki-Laki','Perempuan','','') NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `fakultas` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `posisi` set('Unit_SDM','Unit_Kominfo','Unit_Usaha','Unit_Pengembangan') NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id`, `nama`, `nim`, `jeniskelamin`, `alamat`, `jurusan`, `fakultas`, `email`, `posisi`, `gambar`) VALUES
(2, 'Falih Gumilang', 701220024, 'Laki-Laki', 'Aceh', 'sistem informasi', 'saintek', 'falih@gmail.com', 'Unit_Kominfo', '489-a1.jpeg'),
(9, 'Ahmad Fatchul Huda', 701220026, 'Laki-Laki', 'Padang', 'sistem Informasi', 'saintek', 'huda@gmail.com', 'Unit_Usaha', '732-a3.jpeg'),
(13, 'Fawwaz', 701220027, 'Laki-Laki', 'Medan', 'sistem Informasi', 'saintek', 'fawwaz@gmail.com', 'Unit_Pengembangan', '596-a2.jpeg'),
(18, 'Hadi', 2147483647, 'Laki-Laki', 'Palembang', 'sistem Informasi', 'saintek', 'hadi@gmail.com', 'Unit_SDM', '981-a4.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL,
  `tanggaltransaksi` date NOT NULL,
  `akun` varchar(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `debet` int(11) NOT NULL,
  `kredit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id`, `tanggaltransaksi`, `akun`, `keterangan`, `debet`, `kredit`) VALUES
(1, '2023-01-01', 'Kas', 'Setoran awal', 1000000, 0),
(2, '2023-04-03', 'Piutang Usaha', 'Pinjaman kepada Anggota Unit SDM', 500000, 0),
(3, '2023-09-12', 'Simpanan', 'Simpanan Anggota Unit Pengembangan', 0, 200000),
(4, '2023-12-25', 'Pembelian Inventaris', 'Pembelian Peralatan baru', 600000, 0),
(5, '2024-02-13', 'Piutang Usaha', 'Pelunasan dari Anggota Unit SDM', 0, 300000);

-- --------------------------------------------------------

--
-- Table structure for table `usaha`
--

CREATE TABLE `usaha` (
  `id` int(11) NOT NULL,
  `namausaha` varchar(50) NOT NULL,
  `jenisusaha` set('jasa','barang','','') NOT NULL,
  `tanggaldidirikan` date NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usaha`
--

INSERT INTO `usaha` (`id`, `namausaha`, `jenisusaha`, `tanggaldidirikan`, `lokasi`, `gambar`) VALUES
(1, 'Kopma Mart', 'barang', '2015-12-09', 'Jl. Jambi-Muara Bulian No.Km. 17', '859-a.jpeg'),
(2, 'Kopma Digital Printing', 'jasa', '2016-03-20', 'Jl. Jambi-Muara Bulian No.Km. 17	', '269-c.jpeg'),
(3, 'Kopma Florist', 'barang', '2016-10-03', 'Jl. Jambi-Muara Bulian No.Km 15', '130-e.jpeg'),
(4, 'Kopma Catering', 'jasa', '2017-03-15', 'Jl. Jambi-Muara Bulian No.Km. 15	', '480-d.jpeg'),
(9, 'Kopma Jobs', 'jasa', '2023-12-28', 'Jl. Jambi-Muara Bulian No.Km. 15	', '435-b.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `level`) VALUES
(1, 'Ahmad Fatchul Huda', 'Huda', 'Huda123', 'admin'),
(2, 'Falih Gumilang', 'Falih', 'Falih123', 'pegawai'),
(3, 'Rizalul Imran', 'Imran', 'Imran123', 'pimpinan'),
(5, 'Nur Hadi', 'Hadi', 'Hadi123', 'pegawai');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usaha`
--
ALTER TABLE `usaha`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `usaha`
--
ALTER TABLE `usaha`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
