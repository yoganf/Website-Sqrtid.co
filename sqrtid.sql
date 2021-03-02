-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2019 at 01:15 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sqrtid`
--
CREATE DATABASE IF NOT EXISTS `sqrtid` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `sqrtid`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'yoga', 'yoga12');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE IF NOT EXISTS `berita` (
  `id_berita` int(5) NOT NULL AUTO_INCREMENT,
  `kategori` enum('Hodie','Pants','T-shirt','Bag','Hat') NOT NULL,
  `judul` varchar(200) NOT NULL,
  `harga` varchar(100) NOT NULL,
  `isi_berita` text NOT NULL,
  `tanggal_posting` date NOT NULL,
  `gambar` varchar(100) NOT NULL,
  PRIMARY KEY (`id_berita`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `kategori`, `judul`, `harga`, `isi_berita`, `tanggal_posting`, `gambar`) VALUES
(6, 'Hat', 'TEST 2', '2', 'jhgf"""""', '2019-06-30', '4.jpg'),
(7, 'Hodie', 'oiuytrew', '', 'kjhytre"', '2019-06-30', '4.jpg'),
(8, 'Pants', 'SQRT ASTRO', '123567', 'lkjhgt', '2019-06-30', '3.jpg'),
(10, 'Hodie', 'SQRT ASTRO', '123567', 'wqre', '2019-06-30', '1.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
