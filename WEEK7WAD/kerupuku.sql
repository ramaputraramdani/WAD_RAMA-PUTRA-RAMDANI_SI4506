-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:4308
-- Generation Time: Nov 06, 2023 at 03:19 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kerupuku`
--

-- --------------------------------------------------------

--
-- Table structure for table `jenis_kerupuk`
--

CREATE TABLE `jenis_kerupuk` (
  `nomor` int(11) NOT NULL,
  `nama_kerupuk` varchar(255) DEFAULT NULL,
  `kode_kerupuk` varchar(50) DEFAULT NULL,
  `harga_kerupuk` int(11) DEFAULT NULL,
  `stock_kerupuk` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jenis_kerupuk`
--

INSERT INTO `jenis_kerupuk` (`nomor`, `nama_kerupuk`, `kode_kerupuk`, `harga_kerupuk`, `stock_kerupuk`) VALUES
(1, 'Kemplang Bakar', 'KP001', 75000, 100),
(2, 'Kemplang Kancing', 'KP002', 50000, 70),
(3, 'Kemplang Keriting', 'KP003', 55000, 80),
(4, 'Kemplang Getas', 'KP004', 60000, 70),
(5, 'Kemplang Usus', 'KP005', 45000, 90);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jenis_kerupuk`
--
ALTER TABLE `jenis_kerupuk`
  ADD PRIMARY KEY (`nomor`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jenis_kerupuk`
--
ALTER TABLE `jenis_kerupuk`
  MODIFY `nomor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
