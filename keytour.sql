-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2021 at 03:42 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `keytour`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(3) NOT NULL,
  `username_admin` varchar(12) NOT NULL,
  `password_admin` varchar(255) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `email_admin` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username_admin`, `password_admin`, `nama_admin`, `email_admin`) VALUES
(1, 'admin1', 'adminadmin', 'Gusti Nugroho', 'gustinugroho@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(11) NOT NULL,
  `judul_artikel` varchar(50) NOT NULL,
  `waktu_artikel` date NOT NULL,
  `isi_artikel` longtext NOT NULL,
  `gambar_artikel` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `judul_artikel`, `waktu_artikel`, `isi_artikel`, `gambar_artikel`) VALUES
(1, 'Artikel 1', '2021-12-03', 'artikel1', 'Capture.PNG'),
(2, 'Artikel 2', '2021-12-18', 'Artikel 2', '81.jpg'),
(3, 'Artikel 3', '2021-12-03', 'Artikel 3', 'ERD.png'),
(4, 'Artikel 4', '2021-12-04', 'artikel 4', 'download.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id_galeri` int(11) NOT NULL,
  `foto_galeri` varchar(100) NOT NULL,
  `label_galeri` varchar(15) NOT NULL,
  `tentang_galeri` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id_galeri`, `foto_galeri`, `label_galeri`, `tentang_galeri`) VALUES
(1, 'mesut-kaya-eOcyhe5-9sQ-unsplash.jpg', '', ''),
(2, 'paul-gilmore-km74CLco7qs-unsplash.jpg', '', ''),
(3, 'eva-darron-oCdVtGFeDC0-unsplash.jpg', '', ''),
(4, 'WhatsApp_Image_2021-11-30_at_10_29_34_(3).jpeg', '', ''),
(5, 'WhatsApp_Image_2021-11-30_at_10_29_34_(6).jpeg', '', ''),
(6, 'WhatsApp_Image_2021-11-30_at_10_29_34_(9).jpeg', '', ''),
(7, 'WhatsApp_Image_2021-11-30_at_10_29_34_(10).jpeg', '', ''),
(8, 'WhatsApp_Image_2021-11-30_at_10_29_34_(4).jpeg', '', ''),
(9, 'WhatsApp_Image_2021-11-30_at_10_29_34_(1).jpeg', '', ''),
(10, 'WhatsApp_Image_2021-11-30_at_10_29_34.jpeg', '', ''),
(11, 'WhatsApp_Image_2021-11-30_at_10_29_34_(5).jpeg', '', ''),
(12, 'WhatsApp_Image_2021-11-30_at_10_29_34_(3)1.jpeg', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `paket_tour`
--

CREATE TABLE `paket_tour` (
  `id_paket` int(2) NOT NULL,
  `foto_paket` varchar(500) NOT NULL,
  `label_paket` varchar(15) NOT NULL,
  `pdf_paket` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paket_tour`
--

INSERT INTO `paket_tour` (`id_paket`, `foto_paket`, `label_paket`, `pdf_paket`) VALUES
(1, '8.jpg', 'Jalan Jalan', 'KopiPedia.pdf'),
(2, 'images.jpg', 'Old Trafford', 'RA.pdf'),
(3, 'images2.jpg', 'Liburan', 'KopiPedia1.pdf'),
(4, 'OIP_(1).jpg', 'Halan Halan', 'RA1.pdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indexes for table `paket_tour`
--
ALTER TABLE `paket_tour`
  ADD PRIMARY KEY (`id_paket`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=324;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `paket_tour`
--
ALTER TABLE `paket_tour`
  MODIFY `id_paket` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
