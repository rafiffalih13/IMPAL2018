-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2018 at 09:21 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `deluxtea`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `kodebarang` varchar(8) NOT NULL,
  `rasa` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`kodebarang`, `rasa`) VALUES
('brg1', 'Lemon'),
('brg2', 'Blackcurrant');

-- --------------------------------------------------------

--
-- Table structure for table `partner`
--

CREATE TABLE `partner` (
  `username` varchar(50) NOT NULL,
  `namatoko` varchar(50) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `partner`
--

INSERT INTO `partner` (`username`, `namatoko`, `alamat`) VALUES
('usr_jaka', 'Toko Jaka', 'jalan bait bait'),
('usr_agate', 'Zeiss Factory', 'Jalan Zeiss'),
('usr_erika', 'Orbal Store', 'Liberl'),
('usr_kevin', 'Grailsritter', 'Arteria'),
('usr_ries', 'Asteria Store', 'Asteria'),
('usr_joshua', 'Astray Store', 'Hamel'),
('usr_vita', 'Ouroboros', 'Hexen'),
('usr_lisa', 'Reinford Store', 'Roer');

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `namatoko` varchar(50) NOT NULL,
  `rasa` varchar(16) NOT NULL,
  `stock1` int(11) NOT NULL,
  `stock2` int(11) NOT NULL,
  `stock3` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penjualan`
--

INSERT INTO `penjualan` (`namatoko`, `rasa`, `stock1`, `stock2`, `stock3`) VALUES
('Toko Jaka', 'Lemon', 20, 0, 0),
('Toko Jaka', 'Blackcurrant', 30, 23, 0),
('Zeiss Factory', 'Lemon', 22, 0, 0),
('Zeiss Factory', 'Blackcurrant', 15, 0, 0),
('Orbal Store', 'Lemon', 21, 12, 0),
('Orbal Store', 'Blackcurrant', 23, 0, 0),
('Grailsritter', 'Lemon', 18, 0, 0),
('Grailsritter', 'Blackcurrant', 14, 0, 0),
('Asteria Store', 'Lemon', 10, 0, 0),
('Asteria Store', 'Blackcurrant', 2, 0, 0),
('Astray Store', 'Lemon', 6, 0, 0),
('Astray Store', 'Blackcurrant', 4, 0, 0),
('Ouroboros', 'Lemon', 10, 0, 0),
('Ouroboros', 'Blackcurrant', 5, 0, 0),
('Reinford Store', 'Lemon', 23, 0, 0),
('Reinford Store', 'Blackcurrant', 5, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(50) NOT NULL,
  `password` varchar(16) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `no_hp` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `nama`, `no_hp`) VALUES
('own_rachman', 'rahasia', 'Rachman Noor Sidiq', '08138192119'),
('usr_jaka', 'qweqwe123', 'Jaka Thinker', '08381283918'),
('usr_agate', 'rahasia', 'Agate Crosner', '0823219192'),
('usr_erika', 'rahasia', 'Erika Russel', '08883217892'),
('usr_kevin', 'rahasia', 'Kevin Graham', '08238176234'),
('usr_ries', 'rahasia', 'Ries Argent', '083238123'),
('usr_joshua', 'rahasia', 'Joshua Bright', '08124821928'),
('usr_vita', 'rahasia', 'Vita Coltide', '0832716328'),
('usr_lisa', 'rahasia', 'Alisa Reinford', '0818247283'),
('adm_hemi', 'rahasia', 'Wazy Hemisphere', '08238213273'),
('adm_theo', 'rahasia', 'Theo', '0832362518');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
