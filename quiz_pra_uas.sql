-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 13, 2021 at 07:50 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz_pra_uas`
--

-- --------------------------------------------------------

--
-- Table structure for table `buah`
--

CREATE TABLE `buah` (
  `id` int(5) NOT NULL,
  `kodebuah` varchar(10) NOT NULL,
  `namabuah` varchar(25) NOT NULL,
  `hargabuah` double NOT NULL,
  `jenisbuah` varchar(10) NOT NULL,
  `readystock` int(1) NOT NULL,
  `gambarbuah` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buah`
--

INSERT INTO `buah` (`id`, `kodebuah`, `namabuah`, `hargabuah`, `jenisbuah`, `readystock`, `gambarbuah`) VALUES
(1, 'FRT-001', 'Apel', 20000, 'import', 1, 'https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full//92/MTA-5090238/kedaisayur_kedaisayur_apel_fuji_buah-buahan_-1_kg-_full02_iaizm4sw.jpg'),
(2, 'FRT-002', 'Jeruk', 10000, 'lokal', 1, 'https://id-test-11.slatic.net/p/28e852b4116a4832c150ea0c7e88cb32.jpg'),
(3, 'FRT-003', 'Mangga', 15000, 'lokal', 0, 'https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full//85/MTA-3480014/rezeki-fresh-market_rezeki-fresh-market-mangga-manalagi-buah--4--5pcs--1kg-_full02.jpg'),
(4, 'FRT-004', 'Anggur', 25000, 'import', 1, 'https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full//101/MTA-8046595/sayur_home_delivery_anggur_merah_buah_anggur_merah_fresh_bandung_1kg_full01_hdid96re.jpg'),
(5, 'FRT-005', 'Salak', 8000, 'lokal', 0, 'https://cf.shopee.co.id/file/fdecd20fdd8bc6da34ae9b3b9d4e5a27'),
(6, 'FRT-006', 'Durian', 6500, 'lokal', 1, 'https://s0.bukalapak.com/img/01941747531/original/_MIN_10_BIJI_BENIH_BUAH_DURIAN_MONTONG_SUPER.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_pesan`
--

CREATE TABLE `kategori_pesan` (
  `id` int(5) NOT NULL,
  `kodekategori` varchar(10) NOT NULL,
  `namakategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori_pesan`
--

INSERT INTO `kategori_pesan` (`id`, `kodekategori`, `namakategori`) VALUES
(1, 'CAT-0001', 'Produk'),
(2, 'CAT-002', 'Pelayanan'),
(3, 'CAT-0003', 'Lain-lain');

-- --------------------------------------------------------

--
-- Table structure for table `kontak_kami`
--

CREATE TABLE `kontak_kami` (
  `id` int(5) NOT NULL,
  `tanggalkirim` date NOT NULL,
  `namapengirim` varchar(50) NOT NULL,
  `emailpengirim` varchar(50) NOT NULL,
  `subjekpesan` varchar(255) NOT NULL,
  `isipesan` text NOT NULL,
  `kategoripesan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buah`
--
ALTER TABLE `buah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori_pesan`
--
ALTER TABLE `kategori_pesan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kontak_kami`
--
ALTER TABLE `kontak_kami`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buah`
--
ALTER TABLE `buah`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kontak_kami`
--
ALTER TABLE `kontak_kami`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
