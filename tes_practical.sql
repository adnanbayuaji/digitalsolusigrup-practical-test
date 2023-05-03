-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 03 Mei 2023 pada 11.39
-- Versi Server: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tes_practical`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `ms_product`
--

CREATE TABLE `ms_product` (
  `id` int(11) NOT NULL,
  `merek` varchar(255) DEFAULT NULL,
  `jenis` varchar(255) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ms_product`
--

INSERT INTO `ms_product` (`id`, `merek`, `jenis`, `jumlah`, `harga`, `keterangan`) VALUES
(1, 'Toyota', 'Camry', 1, 450000000, 'Sedan (2016)'),
(2, 'Honda', 'CR-V', 5, 325000000, 'SUV (2018)'),
(3, 'Ford', 'Ranger', 2, 250000000, 'Pick-up (2015)'),
(4, 'Hyundai', 'Avega', 3, 120000000, 'Sedan (2013)'),
(5, 'Mitsubishi', 'Pajero Sport', 2, 560000000, 'SUV (2021)'),
(6, 'Toyota', 'Vios', 8, 75000000, 'Sedan (2013)'),
(7, 'Honda', 'Jazz', 6, 180000000, 'City Car (2017)'),
(8, 'Mitsubishi', 'Triton', 2, 220000000, 'Pic-up (2016)'),
(9, 'Ford', 'Raptor', 1, 350000000, 'Pickup (2016)'),
(10, 'Honda', 'Brio', 12, 175000000, 'City Car (2021)'),
(11, 'Hyundai', 'Stargazer', 1, 400000000, 'SUV (2022)'),
(12, 'Toyota', 'Accor', 4, 280000000, 'Sedan (2019)'),
(14, 'Merek 13', 'Jenis 13', 13, 1000003, 'Ket 13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ms_product`
--
ALTER TABLE `ms_product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ms_product`
--
ALTER TABLE `ms_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
