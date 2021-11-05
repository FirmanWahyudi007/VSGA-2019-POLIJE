-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2019 at 03:32 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_mhs`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` varchar(13) NOT NULL,
  `id_mhs` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `jenis_kelamin` enum('P','L') NOT NULL,
  `jurusan` varchar(30) NOT NULL,
  `asal_sekolah` varchar(100) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `id_mhs`, `nama`, `agama`, `jenis_kelamin`, `jurusan`, `asal_sekolah`, `alamat`) VALUES
('E41190305', 1, 'Firman Wahyudi', 'Islam', 'L', 'TEKNIK INFORMATIKA', 'SMKN 1 PANJI', 'Jln Raya Banyuwangi-Situbondo,Kapongan,Situbondo,Jawa Timur'),
('E41190519', 2, 'Dicky Kurnia Ramadhan', 'Islam', 'L', 'TEKNIK INFORMATIKA', 'SMKN 1 PANJI', 'Panji Lor,Panji,Situbondo,Jawa Timur'),
('E41191908', 3, 'Syaikhu Rizal', 'Islam', 'L', 'TEKNIK INFORMATIKA', 'SMK PGRI 5 JEMBER', 'Wonorejo,Jember,Jawa Timur'),
('E41191901', 5, 'M. Geofany H', 'Islam', 'L', 'TEKNIK INFORMATIKA', 'SMKN 1 PANJI', 'Klatakan,Kec Panarukan,Kab Situbondo,Jawa Timur'),
('E90871145', 7, 'Agustina P', 'Kristen', 'P', 'TEKNIK MESIN', 'SMKN 1 JEMBER', 'Jln Tegal Gede,Sumbersari,Jember,Jawa Timur');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id_mhs`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id_mhs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
