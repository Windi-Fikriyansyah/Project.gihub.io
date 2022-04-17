-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2022 at 06:24 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_nowplay`
--

CREATE TABLE `tb_nowplay` (
  `id_nowplay` int(11) NOT NULL,
  `judulfilm` varchar(100) NOT NULL,
  `tahun` varchar(10) NOT NULL,
  `genre` varchar(50) NOT NULL,
  `durasi` varchar(60) NOT NULL,
  `sutradara` varchar(100) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_nowplay`
--

INSERT INTO `tb_nowplay` (`id_nowplay`, `judulfilm`, `tahun`, `genre`, `durasi`, `sutradara`, `foto`) VALUES
(10, 'Avengers: Endgame', '2019', 'Action', '3 jam 1 menit', 'Anthony Russo', '14.jpg'),
(11, 'Spider-Man: No Way Home', '2021', 'Action', '2 j 28 m', 'Jon Watts', '10.jpg'),
(12, 'Luca', '2021', 'Laga/Pertualangan', '1 j 35 m', 'Enrico Casarosa', '8.jpg'),
(13, 'Bucin', '2020', 'Komedi/Drama', '1 j 37 m', 'Candra Liow', '3.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_nowplay`
--
ALTER TABLE `tb_nowplay`
  ADD PRIMARY KEY (`id_nowplay`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_nowplay`
--
ALTER TABLE `tb_nowplay`
  MODIFY `id_nowplay` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
