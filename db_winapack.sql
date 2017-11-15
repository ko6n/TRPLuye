-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2017 at 02:56 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_winapack`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_katalogharga`
--

CREATE TABLE `tb_katalogharga` (
  `id_katalog` int(11) NOT NULL,
  `namabarang` varchar(60) NOT NULL,
  `harga` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_katalogharga`
--

INSERT INTO `tb_katalogharga` (`id_katalog`, `namabarang`, `harga`, `created_at`, `updated_at`) VALUES
(1, 'mesin pembungkus minuman saset', 3000000, '2017-11-14 18:54:33', '2017-11-14 18:54:33');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pemesanan`
--

CREATE TABLE `tb_pemesanan` (
  `id_pemesanan` int(11) NOT NULL,
  `nama_pemesan` varchar(30) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_telepon` varchar(14) NOT NULL,
  `jenis_barang` varchar(30) NOT NULL,
  `kegunaanmesin` varchar(60) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `status_jadi` varchar(30) NOT NULL,
  `desain` varchar(100) NOT NULL,
  `tanggalpesan` varchar(30) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pemesanan`
--

INSERT INTO `tb_pemesanan` (`id_pemesanan`, `nama_pemesan`, `alamat`, `no_telepon`, `jenis_barang`, `kegunaanmesin`, `jumlah`, `harga`, `status_jadi`, `desain`, `tanggalpesan`, `created_at`, `updated_at`) VALUES
(6, 'Ahmad Feril', 'jl jawa 7 no 149', '08122738189', 'vertikal', 'pengemas kaleangan', 1, 9000000, 'belum jadi', 'belum jadi', '13 November, 2017', '2017-11-14 01:51:12', '2017-11-14 17:57:54');

-- --------------------------------------------------------

--
-- Table structure for table `tb_roles`
--

CREATE TABLE `tb_roles` (
  `id_roles` int(11) NOT NULL,
  `namarole` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_roles`
--

INSERT INTO `tb_roles` (`id_roles`, `namarole`) VALUES
(1, 'manager'),
(2, 'administrasi'),
(3, 'perancangan'),
(4, 'gudang'),
(5, 'produksi'),
(6, 'perakitan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tingkatan`
--

CREATE TABLE `tb_tingkatan` (
  `id_tingkatan` int(11) NOT NULL,
  `namatingkat` varchar(60) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `tingkat` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_tingkatan`
--

INSERT INTO `tb_tingkatan` (`id_tingkatan`, `namatingkat`, `username`, `password`, `tingkat`) VALUES
(1, 'manager', 'manager', 'manager1', 'manager'),
(2, 'administrasi', 'administrasi', 'administrasi1', 'administrasi'),
(3, 'perancangan', 'perancangan', 'perancangan1', 'perancangan'),
(4, 'gudang', 'gudang', 'gudang1', 'gudang'),
(5, 'produksi', 'produksi', 'produksi1', 'produksi'),
(6, 'perakitan', 'perakitan', 'perakitan1', 'perakitan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_katalogharga`
--
ALTER TABLE `tb_katalogharga`
  ADD PRIMARY KEY (`id_katalog`);

--
-- Indexes for table `tb_pemesanan`
--
ALTER TABLE `tb_pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`);

--
-- Indexes for table `tb_roles`
--
ALTER TABLE `tb_roles`
  ADD PRIMARY KEY (`id_roles`);

--
-- Indexes for table `tb_tingkatan`
--
ALTER TABLE `tb_tingkatan`
  ADD PRIMARY KEY (`id_tingkatan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_katalogharga`
--
ALTER TABLE `tb_katalogharga`
  MODIFY `id_katalog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_pemesanan`
--
ALTER TABLE `tb_pemesanan`
  MODIFY `id_pemesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tb_roles`
--
ALTER TABLE `tb_roles`
  MODIFY `id_roles` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tb_tingkatan`
--
ALTER TABLE `tb_tingkatan`
  MODIFY `id_tingkatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
