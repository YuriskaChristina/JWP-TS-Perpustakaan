-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2022 at 10:15 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpustakaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `koleksi`
--

CREATE TABLE `koleksi` (
  `ID` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `penulis` varchar(100) NOT NULL,
  `penerbit` varchar(100) NOT NULL,
  `tahun` int(4) NOT NULL,
  `cover` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `koleksi`
--

INSERT INTO `koleksi` (`ID`, `judul`, `penulis`, `penerbit`, `tahun`, `cover`) VALUES
(13, 'Perahu Kertas', 'Dee Lestari', 'Tiga Serangkai', 0, 'perahukertas.jpg'),
(14, 'Laskar Pelangi', 'Andrea Hirata', 'Tiga Serangkai', 0, 'laskarpelangi.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pinjam`
--

CREATE TABLE `pinjam` (
  `ID` int(11) NOT NULL,
  `IDuser` int(11) NOT NULL,
  `IDbuku` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `cover` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pinjam`
--

INSERT INTO `pinjam` (`ID`, `IDuser`, `IDbuku`, `judul`, `nama`, `cover`, `tanggal`, `status`) VALUES
(2, 9, 13, 'Perahu Kertas', 'Jeanne Rose', '', '2022-04-10', 'Masa Peminjaman'),
(3, 9, 14, 'Laskar Pelangi', 'Jeanne Rose', '', '2022-04-10', 'Masa Peminjaman');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `telepon` varchar(13) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `profile` varchar(100) NOT NULL,
  `cookie` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `nama`, `email`, `password`, `alamat`, `telepon`, `created_at`, `updated_at`, `profile`, `cookie`) VALUES
(9, 'Jeanne Rose', 'jeanne@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Jalan Anggrek No. 99, Surakarta', '080921902828', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'pasfoto.jpg', '0wSKP5IgWxLoHAlqNX7FapBrKZWvAtzoXwtQiZqaCG3IJk4km6h2VELyDlMTj1nH');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `koleksi`
--
ALTER TABLE `koleksi`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `pinjam`
--
ALTER TABLE `pinjam`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `IDbuku` (`IDbuku`),
  ADD KEY `IDuser` (`IDuser`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `koleksi`
--
ALTER TABLE `koleksi`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `pinjam`
--
ALTER TABLE `pinjam`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pinjam`
--
ALTER TABLE `pinjam`
  ADD CONSTRAINT `pinjam_ibfk_1` FOREIGN KEY (`IDbuku`) REFERENCES `koleksi` (`ID`),
  ADD CONSTRAINT `pinjam_ibfk_2` FOREIGN KEY (`IDuser`) REFERENCES `users` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
