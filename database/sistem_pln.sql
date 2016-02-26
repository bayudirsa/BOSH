-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2016 at 07:04 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sistem_pln`
--

-- --------------------------------------------------------

--
-- Table structure for table `dt_slide`
--

CREATE TABLE IF NOT EXISTS `dt_slide` (
  `slide_id` varchar(2) NOT NULL,
  `deskripsi` varchar(20) NOT NULL,
  `gambar` varchar(200) NOT NULL,
  PRIMARY KEY (`slide_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dt_slide`
--

INSERT INTO `dt_slide` (`slide_id`, `deskripsi`, `gambar`) VALUES
('1', 'Slide 1', 'images/slide1.jpg'),
('2', 'Slide 2', 'images/slide2.jpg'),
('3', 'Slide 3', 'images/slide3.jpg'),
('4', 'Slide 4', 'images/slide4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `dt_tagihan`
--

CREATE TABLE IF NOT EXISTS `dt_tagihan` (
  `tagihan_id` varchar(20) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `token` varchar(20) NOT NULL,
  `waktu` varchar(20) NOT NULL,
  PRIMARY KEY (`tagihan_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dt_tagihan`
--

INSERT INTO `dt_tagihan` (`tagihan_id`, `user_id`, `token`, `waktu`) VALUES
('15022310001', '15022300001', '65', '240'),
('15022310002', '15022300002', '500', '2');

-- --------------------------------------------------------

--
-- Table structure for table `dt_user`
--

CREATE TABLE IF NOT EXISTS `dt_user` (
  `user_id` varchar(20) NOT NULL,
  `no_meter` varchar(20) NOT NULL,
  `daya` varchar(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level_user` int(1) NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dt_user`
--

INSERT INTO `dt_user` (`user_id`, `no_meter`, `daya`, `username`, `password`, `level_user`, `Nama`, `alamat`, `no_telp`) VALUES
('15022300001', '86011196606', '1300', 'bayudirsa', 'e10adc3949ba59abbe56e057f20f883e', 3, 'Bayu Dirsa Gunawan', 'Jl. Air Dingin, Perum. Taman Mas Jaya No.22', '082390299923'),
('15022300002', '', '', 'didi', 'e10adc3949ba59abbe56e057f20f883e', 3, '', 'Jl. Kulim', '081200991292');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
