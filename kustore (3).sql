-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2022 at 09:03 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kustore`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(5) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `email`, `password`) VALUES
(1, 'a', 'a@a.com', '$2y$10$/cO7rid2CjL8IiaQhFeBqO6.7VLgmO1eJrLuxDiZ5jqaPJC.9T/Ui');

-- --------------------------------------------------------

--
-- Table structure for table `data_diri`
--

CREATE TABLE `data_diri` (
  `id_data_diri` int(5) NOT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `country` varchar(20) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `city` varchar(20) DEFAULT NULL,
  `province` varchar(20) DEFAULT NULL,
  `postal_code` varchar(10) DEFAULT NULL,
  `about` varchar(100) DEFAULT NULL,
  `img` varchar(50) DEFAULT NULL,
  `notif_email` varchar(50) DEFAULT NULL,
  `push` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_diri`
--

INSERT INTO `data_diri` (`id_data_diri`, `first_name`, `last_name`, `email`, `country`, `address`, `city`, `province`, `postal_code`, `about`, `img`, `notif_email`, `push`) VALUES
(78, 'elvin', 'elvin', 'kukuhelvin20@gmail.com', 'Indonesia', 'pacitan', 'pacitan', 'Jawa Timur', '65893', 'adadad', '1654136453981.jpg', 'Comments', 'No Push Notification'),
(82, 'kakakak', 'elvin', 'kukuhelvin20@gmail.com', 'Indonesia', 'pacitan', 'pacitan', 'Jawa Timur', '65893', 'sdafjbsjkfshfkshfkjshkfjs', '1654136454022.jpg', 'Comments', 'Everything'),
(93, 'hai', 'hai', 'lo@lo.com', 'Indonesia', 'hai', 'hai', 'hai', '02130', 'adadadadfaffaf', 'images (1).jpeg', 'Comments', 'Everything');

-- --------------------------------------------------------

--
-- Table structure for table `jenis`
--

CREATE TABLE `jenis` (
  `id_jenis` int(5) NOT NULL,
  `jenis` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenis`
--

INSERT INTO `jenis` (`id_jenis`, `jenis`) VALUES
(1, 'iphone'),
(2, 'headphone'),
(3, 'samsung');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id_product` int(5) NOT NULL,
  `id_jenis` int(5) NOT NULL,
  `nama_product` varchar(50) DEFAULT NULL,
  `tipe` varchar(50) DEFAULT NULL,
  `keterangan` varchar(100) DEFAULT NULL,
  `gambar_product` varchar(50) DEFAULT NULL,
  `harga_product` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id_product`, `id_jenis`, `nama_product`, `tipe`, `keterangan`, `gambar_product`, `harga_product`) VALUES
(25, 1, 'iPHONE 12', '128 GB', 'iPHONE merupakan brand hp keluaran APPLE dengan spesifikasi tinggi dan high end', '12.jpeg', 'Rp 7.999.999'),
(26, 1, 'iPHONE 13', '128 GB', 'iPHONE merupakan brand hp keluaran APPLE dengan spesifikasi tinggi dan high end', '13.jpeg', 'Rp 10.000.000'),
(27, 1, 'iPHONE 13 PRO', '128 GB', 'iPHONE merupakan brand hp keluaran APPLE dengan spesifikasi tinggi dan high end', '13pro.jpeg', 'Rp 13.500.000'),
(28, 3, 'SAMSUNG J2 PRIME', '16 GB', 'SAMSUNG MERUPAKAN BRAND HP YANG TERKENAL KOKOH DAN AWET.', 'sjp.jpeg', 'Rp 999.999'),
(29, 3, 'SAMSUNG M62', '128 GB', 'SAMSUNG MERUPAKAN BRAND HP YANG TERKENAL KOKOH DAN AWET.', 'm62.jpeg', 'Rp 3.500.000'),
(30, 3, 'SAMSUNG S21', '128 GB', 'SAMSUNG MERUPAKAN BRAND HP YANG TERKENAL KOKOH DAN AWET.', 's21.jpeg', 'Rp 7.000.000'),
(31, 3, 'SAMSUNG A03', '128 GB', 'SAMSUNG MERUPAKAN BRAND HP YANG TERKENAL KOKOH DAN AWET.', 'sa03.jpeg', 'Rp 2.799.999'),
(32, 3, 'SAMSUNG A32', '128 GB', 'SAMSUNG MERUPAKAN BRAND HP YANG TERKENAL KOKOH DAN AWET.', 'sa32.jpeg', 'Rp 4.700.000'),
(33, 3, 'SAMSUNG A38', '128 GB', 'SAMSUNG MERUPAKAN BRAND HP YANG TERKENAL KOKOH DAN AWET.', 'sa38.jpeg', 'Rp 6.000.000'),
(34, 3, 'SAMSUNG A50', '128 GB', 'SAMSUNG MERUPAKAN BRAND HP YANG TERKENAL KOKOH DAN AWET.', 'sa50.jpeg', 'Rp 4.999.999'),
(35, 3, 'SAMSUNG A52', '128 GB', 'SAMSUNG MERUPAKAN BRAND HP YANG TERKENAL KOKOH DAN AWET.', 'sa52.jpeg', 'Rp 3.600.000'),
(37, 2, 'ROG STRIX THETA', 'HEADSET', 'ROG STRIX THETA merupakan headset gaming kualitas tinggi.', 'hp7.jpeg', 'Rp 4.700.000'),
(38, 2, 'SADES HEADSET', 'HEADSET', 'SADES HEADSET merupakan headset gaming lokal kualitas tinggi.', 'hp6.jpeg', 'Rp 999.999'),
(39, 2, 'RAZER KRAKEN KITTY', 'HEADSET', 'RAZER KRAKEN KITTY merupakan headset gaming imut kualitas tinggi dan sempat viral.', 'hp5.jpeg', 'Rp 3.799.999'),
(40, 2, 'LOGITECH HEADSET', 'HEADSET', 'LOGITECH HEADSET merupakan headset gaming kualitas tinggi.', 'hp4.jpeg', 'Rp 1.900.000'),
(41, 2, 'STEELSERIES HEADSET', 'HEADSET', 'STEELSERIES HEDSET merupakan headset gaming kualitas tinggi.', 'hp3.jpeg', 'Rp 2.999.999'),
(42, 2, 'RAZER KRAKEN', 'HEADSET', 'RAZER KRAKEN merupakan headset gaming kualitas tinggi.', 'hp2.jpeg', 'Rp 3.400.000'),
(43, 2, 'AUDIO TECHNICA M50', 'HEADSET', 'AUDIO TECHNICA merupakan headset podcast kualitas tinggi.', 'hp1.jpeg', 'Rp 3.000.000'),
(49, 2, 'imam', 'manusia', 'hai imam', 'Logo BEM.png', 'Rp 2.000.000');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(5) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `level` enum('user','admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `email`, `password`, `level`) VALUES
(23, 'lo', 'lo@lo.com', '$2y$10$IRerVcNrF.4IAax41s4tr.eYRafwrxRF/h59Q4yUf9wXbh2xh4m8q', 'user'),
(24, 'hi', 'hi@hi.com', '$2y$10$QOQZXvG/zc2XvtFX4UpA5.R31vaxAVRfBmSwC4mV3vVaZt1Xcw1cy', 'user'),
(25, 'i', 'i@i.i', '$2y$10$CPlt2qr6ntKjdX6GyyBjMOE3//dPn65.NSvmp/XXfmwosmSDxzjkG', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `data_diri`
--
ALTER TABLE `data_diri`
  ADD PRIMARY KEY (`id_data_diri`);

--
-- Indexes for table `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`),
  ADD KEY `id_jenis` (`id_jenis`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `data_diri`
--
ALTER TABLE `data_diri`
  MODIFY `id_data_diri` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `jenis`
--
ALTER TABLE `jenis`
  MODIFY `id_jenis` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id_product` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`id_jenis`) REFERENCES `jenis` (`id_jenis`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
