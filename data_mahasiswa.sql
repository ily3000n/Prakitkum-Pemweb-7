-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2023 at 08:50 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_mahasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` varchar(10) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `kode_prodi` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `kode_prodi`) VALUES
('121040267', 'Rizki Pratamawan', 'IF'),
('121050320', 'Rizal Setiawati', 'ME'),
('121050321', 'Rizal Setiawan', 'IK'),
('121110045', 'Ahmad Junaedi', 'ME'),
('121110046', 'Ahmad Junaeri', 'GT'),
('121110267', 'Bayu Pramana', 'BI'),
('121120092', 'Nanda Putri', 'SL'),
('121120321', 'Aditya Wijaya', 'IK'),
('121130009', 'Irfan Maulana', 'BI'),
('121130321', 'Ilham Ramadhan', 'IN'),
('121140189', 'Muhammad Fabil', 'IF'),
('121170092', 'Rendra Maulana', 'ME'),
('121210087', 'Indah Permata', 'IF'),
('121210089', 'Indah Permatasari', 'KM'),
('121210345', 'Desi Anggraini', 'EL'),
('121230053', 'Evi Listia', 'GT'),
('121240092', 'Dinda Pratiwi', 'IN'),
('121250168', 'Rina Agustini', 'IN'),
('121250178', 'Maya Sari', 'BI'),
('121250179', 'Rina Agustina', 'IF'),
('121260045', 'Yuniati', 'IK'),
('121310345', 'Dian Fitri', 'LK'),
('121310456', 'Lina Novita', 'GT'),
('121310457', 'Lina Novitasari', 'LK'),
('121320178', 'Ratna Dewi', 'SL'),
('121320345', 'Sari Wulandari', 'EL'),
('121320346', 'Sari Wulan', 'KM'),
('121340092', 'Siti Rahmah', 'SL'),
('121340321', 'Fajar Rahman', 'KM'),
('121430009', 'Aldi Saputra', 'LK');

-- --------------------------------------------------------

--
-- Table structure for table `program_studi`
--

CREATE TABLE `program_studi` (
  `kode_prodi` varchar(10) NOT NULL,
  `nama_prodi` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `program_studi`
--

INSERT INTO `program_studi` (`kode_prodi`, `nama_prodi`) VALUES
('BI', 'Biologi'),
('EL', 'Teknik Elektro'),
('GT', 'Teknik Geomatika'),
('IF', 'Teknik Informatika'),
('IK', 'Ilmu Komputer'),
('IN', 'Teknik Industri'),
('KM', 'Kimia'),
('LK', 'Teknik Lingkungan'),
('ME', 'Teknik Mesin'),
('SL', 'Teknik Sipil');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`),
  ADD KEY `kode_prodi` (`kode_prodi`);

--
-- Indexes for table `program_studi`
--
ALTER TABLE `program_studi`
  ADD PRIMARY KEY (`kode_prodi`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `mahasiswa_ibfk_1` FOREIGN KEY (`kode_prodi`) REFERENCES `program_studi` (`kode_prodi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
