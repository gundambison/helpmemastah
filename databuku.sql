-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2015 at 03:34 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `databuku`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE IF NOT EXISTS `buku` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `judul` varchar(50) NOT NULL,
  `penerbit` varchar(30) NOT NULL,
  `thn_terbit` varchar(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=82 ;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id`, `judul`, `penerbit`, `thn_terbit`) VALUES
(1, 'Rahasia Inti MASTER PHP & MySQLi', 'LOKOMEDIA', '2015'),
(2, 'Rahasia Menjadi Pintar', 'Madyan', '2016'),
(3, 'Mastering VB.Net', 'Madyan Super', '2010'),
(4, 'PHP From ZERO to HERO', 'Madyan Cool', '2016'),
(5, 'Belajar CI dari NOL', 'Madyan Eka', '2017'),
(6, 'nama buku', 'penerbit buku', 'thn '),
(7, 'nama buku', 'penerbit buku', 'thn '),
(8, 'nama buku', 'penerbit buku', 'thn '),
(9, 'nama buku', 'penerbit buku', 'thn '),
(10, 'nama buku', 'penerbit buku', 'thn '),
(11, 'nama buku', 'penerbit buku', 'thn '),
(12, 'nama buku', 'penerbit buku', 'thn '),
(13, 'nama buku', 'penerbit buku', 'thn '),
(14, 'nama buku', 'penerbit buku', 'thn '),
(15, 'nama buku', 'penerbit buku', 'thn '),
(16, 'nama buku', 'penerbit buku', 'thn '),
(17, 'nama buku', 'penerbit buku', 'thn '),
(18, 'nama buku', 'penerbit buku', 'thn '),
(19, 'nama buku', 'penerbit buku', 'thn '),
(20, 'nama buku', 'penerbit buku', 'thn '),
(21, 'nama buku', 'penerbit buku', 'thn '),
(22, 'nama buku', 'penerbit buku', 'thn '),
(23, 'nama buku', 'penerbit buku', 'thn '),
(24, 'nama buku', 'penerbit buku', 'thn '),
(25, 'nama buku', 'penerbit buku', 'thn '),
(26, 'nama buku', 'penerbit buku', 'thn '),
(27, 'nama buku', 'penerbit buku', 'thn '),
(28, 'nama buku', 'penerbit buku', 'thn '),
(29, 'nama buku', 'penerbit buku', 'thn '),
(30, 'nama buku', 'penerbit buku', 'thn '),
(31, 'nama buku', 'penerbit buku', 'thn '),
(32, 'nama buku', 'penerbit buku', 'thn '),
(33, 'nama buku', 'penerbit buku', 'thn '),
(34, 'nama buku', 'penerbit buku', 'thn '),
(35, 'nama buku', 'penerbit buku', 'thn '),
(36, 'nama buku', 'penerbit buku', 'thn '),
(37, 'nama buku', 'penerbit buku', 'thn '),
(38, 'nama buku', 'penerbit buku', 'thn '),
(39, 'nama buku', 'penerbit buku', 'thn '),
(40, 'nama buku', 'penerbit buku', 'thn '),
(41, 'nama buku', 'penerbit buku', 'thn '),
(42, 'nama buku', 'penerbit buku', 'thn '),
(43, 'nama buku', 'penerbit buku', 'thn '),
(44, 'nama buku', 'penerbit buku', 'thn '),
(45, 'nama buku', 'penerbit buku', 'thn '),
(46, 'nama buku', 'penerbit buku', 'thn '),
(47, 'nama buku', 'penerbit buku', 'thn '),
(48, 'nama buku', 'penerbit buku', 'thn '),
(49, 'nama buku', 'penerbit buku', 'thn '),
(50, 'nama buku', 'penerbit buku', 'thn '),
(51, 'nama buku', 'penerbit buku', 'thn '),
(52, 'nama buku', 'penerbit buku', 'thn '),
(53, 'nama buku', 'penerbit buku', 'thn '),
(54, 'nama buku', 'penerbit buku', 'thn '),
(55, 'nama buku', 'penerbit buku', 'thn '),
(56, 'nama buku', 'penerbit buku', 'thn '),
(57, 'nama buku', 'penerbit buku', 'thn '),
(58, 'nama buku', 'penerbit buku', 'thn '),
(59, 'nama buku', 'penerbit buku', 'thn '),
(60, 'nama buku', 'penerbit buku', 'thn '),
(61, 'nama buku', 'penerbit buku', 'thn '),
(62, 'nama buku', 'penerbit buku', 'thn '),
(63, 'nama buku', 'penerbit buku', 'thn '),
(64, 'nama buku', 'penerbit buku', 'thn '),
(65, 'nama buku', 'penerbit buku', 'thn '),
(66, 'nama buku', 'penerbit buku', 'thn '),
(67, 'nama buku', 'penerbit buku', 'thn '),
(68, 'nama buku', 'penerbit buku', 'thn '),
(69, 'nama buku', 'penerbit buku', 'thn '),
(70, 'nama buku', 'penerbit buku', 'thn '),
(74, 'Rahasia Visual Basic .NET', 'Madyan Sakti', '2016'),
(75, 'x', 'penerbit buku1', 'thn '),
(76, '5', 'Madyan Cool', '1'),
(77, 'q', 'q', 'q'),
(78, 'z', 'z', 'z'),
(79, 's', 's', 's'),
(80, 'k', 'k', 'k'),
(81, 'q', 'p', 'p');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
