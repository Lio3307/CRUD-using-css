-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2023 at 01:37 PM
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
-- Database: `harga_motor`
--

-- --------------------------------------------------------

--
-- Table structure for table `motor`
--

CREATE TABLE `motor` (
  `IDMOTOR` int(255) NOT NULL,
  `MERK` varchar(255) NOT NULL,
  `HARGA` text NOT NULL,
  `FOTO` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `motor`
--

INSERT INTO `motor` (`IDMOTOR`, `MERK`, `HARGA`, `FOTO`) VALUES
(35, 'Nmax', '35 Juta', 'upload/nmax.jpg'),
(37, 'Kawasaki Ninja H2', '860 Juta', 'upload/h2.jpg'),
(38, 'Hayabusa', '400 Juta', 'upload/hayabusa.jpg'),
(40, 'Ducati Panigale V4', '800 Juta', 'upload/ducatipanegalev4.jpg'),
(41, 'Ducati Scrambler Icon', '360 Juta', 'upload/DucatiScramblerIcon.jpg'),
(42, 'BMW G 310 R', '116 Juta', 'upload/BmwG310R.jpg'),
(45, 'Rxking', '25 Juta', 'upload/rxking.jpg'),
(46, 'BMW C 400 GT', '279 Juta', 'upload/BMWC400GT.jpg'),
(47, 'BMW C 400 X', '259 Juta', 'upload/BMWC400X.jpg'),
(48, 'Honda Vario 125', '22,55 - 25 Juta', 'upload/hondavario125.jpg'),
(49, 'Honda Vario 160', '26,64 - 30 Juta', 'upload/hondavario160.jpg'),
(50, 'BMW R Nine T', '644 Juta', 'upload/BMWRNineT.jpg'),
(51, 'BMW S 1000 RR', '767 Juta', 'upload/BMWS1000RR.jpg'),
(52, 'KTM RC 390', '105 Juta', 'upload/ktmrc390.jpg'),
(54, 'KTM Duke 390', '100 Juta', 'upload/ktmduke390.jpg'),
(55, 'Kawasaki Ninja ZX-25R', '107 - 125 Juta', 'upload/kawasakininjazx25r.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `motor`
--
ALTER TABLE `motor`
  ADD PRIMARY KEY (`IDMOTOR`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `motor`
--
ALTER TABLE `motor`
  MODIFY `IDMOTOR` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
