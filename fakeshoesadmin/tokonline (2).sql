-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2023 at 10:36 AM
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
-- Database: `tokonline`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'salman', 'salman');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama`) VALUES
(1, 'Running Shoes'),
(2, 'Basketball Shoes'),
(3, 'Jordan Shoes');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `gambar` varchar(150) NOT NULL,
  `kategori_id` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `nama`, `harga`, `gambar`, `kategori_id`) VALUES
(1, 'Air Jordan 1 Mid SE', 'Rp 2,129,000', 'Air Jordan 1 Mid SE.jpeg', 3),
(2, 'Air Jordan 2 Retro Low', 'Rp 2,489,000', 'Air Jordan 2 Retro Low.webp', 3),
(3, 'Air Jordan 1 Low FlyEase', 'Rp 2,099,000', 'Air Jordan 1 Low FlyEase.webp', 3),
(4, 'Tatum 1 \"St. Louis\" PF', 'Rp 1,909,000', 'Tatum 1 St Louis PF.webp', 1),
(5, 'Zion 2 PF', 'Rp 1,909,000', 'Zion 2 PF.webp', 1),
(6, 'Air Jordan Low SE', 'Rp 1,859,000', 'Air Jordan Low SE.jpeg', 3),
(7, 'Air Jordan 13 Retro', 'Rp 2,889,000', 'Air Jordan 13 Retro.jpeg', 2),
(8, 'Jordan Why Not .6 PF', 'Rp 2,379,000', 'Jordan Why Not .6 PF.webp', 2),
(9, 'Jordan Stadium 90', 'Rp 2,199,000', 'Jordan Stadium 90.webp', 2),
(10, 'Jordan Series Mid', 'Rp 1,459,000', 'Jordan Series Mid.webp', 2),
(11, 'Air Jordan 1 Mid', 'Rp 1,939,000', 'Air Jordan 1 Mid.webp', 3),
(12, 'Jordan One Take 4 PF', 'Rp 1,499,000', 'Jordan One Take 4 PF.webp', 3),
(13, 'Jordan Retro 6 G NRG', 'Rp 3,369,000', 'Jordan Retro 6 G NRG.webp', 1),
(14, 'Air Jordan 1 Retro High OG', 'Rp 2,849,000', 'Air Jordan 1 Retro High OG.webp', 1),
(15, 'Air Jordan 6 Retro', 'Rp 3,099,000', 'Air Jordan 6 Retro.webp', 1),
(16, 'Air Jordan 1 Zoom CMFT 2', 'Rp 2,249,000', 'Air Jordan 1 Zoom CMFT 2.webp', 3),
(17, 'Air Jordan 1 Low SE', 'Rp 1,578,000', 'Air Jordan 1 Low SE.jpeg', 3),
(18, 'Jordan Stay Loyal 2', 'Rp 1,819,000', 'Jordan Stay Loyal 2.webp', 3),
(19, 'Air Jordan 6 Retro', 'Rp 3,169,000', 'Air Jordan 6 Retro1.webp', 1),
(20, 'Zion 2 PF', 'Rp 1,869,000', 'Zion 2 PF1.webp', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kategori_id` (`kategori_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `produk_ibfk_1` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
