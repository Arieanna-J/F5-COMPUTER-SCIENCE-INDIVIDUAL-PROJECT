-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2022 at 08:59 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simple`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `idadmin` varchar(12) NOT NULL,
  `password` varchar(10) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `aras` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`idadmin`, `password`, `nama`, `aras`) VALUES
('ADMIN', '1234', 'PENTADBIR SISTEM', 'ADMIN'),
('bi976', 'NAJWA1234', 'Hidayatun Najwa', 'HAKIM'),
('dm889', 'ASLINA1234', 'Aslina Hidayawati', 'HAKIM'),
('gh245', 'KUMAR1234', 'Suresh Kumar ', 'HAKIM'),
('hj556', 'AHMAD1234', 'Ahmad Rahim', 'HAKIM'),
('jk453', 'KURTIS1234', 'Kurtis Conner', 'HAKIM'),
('kh234', 'AMIRAH1234', 'Nurul Amirah', 'HAKIM'),
('kk123', 'ADILA1234', 'Adila Natasya', 'HAKIM'),
('lh313', 'REIHA1234', 'Noreiha Suffiyah', 'HAKIM'),
('mb694', 'MOHD1234', 'Mohammad Haikal ', 'HAKIM'),
('nb229', 'JESS1234', 'Jessica Lowe Yan', 'HAKIM'),
('rs237', 'AZLIN1234', 'Azlin Salehudin', 'HAKIM'),
('sh360', 'TAN1234', 'Tan Soo Hui', 'HAKIM'),
('sk453', 'DREW1234', 'Drew Gooden', 'HAKIM');

-- --------------------------------------------------------

--
-- Table structure for table `hakim`
--

CREATE TABLE `hakim` (
  `idhakim` int(11) NOT NULL,
  `iditem` int(11) DEFAULT NULL,
  `idadmin` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hakim`
--

INSERT INTO `hakim` (`idhakim`, `iditem`, `idadmin`) VALUES
(6, 1, 'hj556'),
(7, 2, 'kh234'),
(8, 3, 'rs237'),
(10, 4, 'sh360'),
(11, 5, 'lh313'),
(12, 8, 'mb694'),
(13, 7, 'dm889'),
(14, 6, 'nb229'),
(17, 12, 'jk453'),
(18, 13, 'bi976'),
(19, 15, 'sk453');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `iditem` int(11) NOT NULL,
  `item` varchar(100) DEFAULT NULL,
  `markah` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`iditem`, `item`, `markah`) VALUES
(1, 'Lakaran', 100),
(2, 'Teknik Mewarna', 100),
(3, 'Ton Mewarna', 50),
(4, 'Kajian Mewarna', 50),
(5, 'Prespektif', 50),
(6, 'Anatomi', 30),
(7, 'Tema', 100),
(8, 'Kreativiti', 20),
(12, 'Teknik Touch-up', 50),
(13, 'WOW FACTOR', 50),
(15, 'Cara Melukis', 30);

-- --------------------------------------------------------

--
-- Table structure for table `markah`
--

CREATE TABLE `markah` (
  `idmarkah` int(11) NOT NULL,
  `markah` int(2) DEFAULT NULL,
  `iditem` int(11) DEFAULT NULL,
  `idpeserta` varchar(12) DEFAULT NULL,
  `idadmin` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `markah`
--

INSERT INTO `markah` (`idmarkah`, `markah`, `iditem`, `idpeserta`, `idadmin`) VALUES
(1, 50, 3, '000569', 'rs237'),
(2, 34, 3, '130302', 'rs237'),
(3, 45, 3, '060427040090', 'rs237'),
(4, 43, 3, '190701', 'rs237'),
(5, 4, 3, '694201', 'rs237'),
(6, 45, 3, '220905', 'rs237'),
(7, 22, 3, '160596', 'rs237'),
(8, 4, 3, '690420', 'rs237'),
(9, 32, 3, '123312', 'rs237'),
(10, 0, 3, '223042', 'rs237'),
(11, 23, 3, '310300', 'rs237'),
(12, 43, 3, '260601', 'rs237'),
(13, 40, 3, '190905', 'rs237'),
(14, 43, 3, '050302', 'rs237'),
(15, 50, 13, '000569', 'bi976'),
(16, 50, 13, '130302', 'bi976'),
(17, 50, 13, '060427040090', 'bi976'),
(18, 32, 13, '190701', 'bi976'),
(19, 34, 13, '694201', 'bi976'),
(20, 45, 13, '220905', 'bi976'),
(21, 46, 13, '160596', 'bi976'),
(22, 49, 13, '690420', 'bi976'),
(23, 30, 13, '123312', 'bi976'),
(24, 39, 13, '223042', 'bi976'),
(25, 45, 13, '310300', 'bi976'),
(26, 12, 13, '260601', 'bi976'),
(27, 43, 13, '190905', 'bi976'),
(28, 45, 13, '050302', 'bi976'),
(29, 100, 7, '000569', 'dm889'),
(30, 98, 7, '130302', 'dm889'),
(31, 4, 7, '060427040090', 'dm889'),
(32, 45, 7, '190701', 'dm889'),
(33, 72, 7, '694201', 'dm889'),
(34, 98, 7, '220905', 'dm889'),
(35, 23, 7, '160596', 'dm889'),
(36, 83, 7, '690420', 'dm889'),
(37, 24, 7, '123312', 'dm889'),
(38, 33, 7, '223042', 'dm889'),
(39, 89, 7, '310300', 'dm889'),
(40, 34, 7, '260601', 'dm889'),
(41, 67, 7, '190905', 'dm889'),
(42, 34, 7, '050302', 'dm889'),
(43, 100, 1, '000569', 'hj556'),
(44, 89, 1, '130302', 'hj556'),
(45, 78, 1, '060427040090', 'hj556'),
(46, 45, 1, '190701', 'hj556'),
(47, 50, 1, '694201', 'hj556'),
(48, 9, 1, '220905', 'hj556'),
(49, 89, 1, '160596', 'hj556'),
(50, 34, 1, '690420', 'hj556'),
(51, 45, 1, '123312', 'hj556'),
(52, 78, 1, '223042', 'hj556'),
(53, 56, 1, '310300', 'hj556'),
(54, 87, 1, '260601', 'hj556'),
(55, 45, 1, '190905', 'hj556'),
(56, 89, 1, '050302', 'hj556'),
(57, 50, 12, '000569', 'jk453'),
(58, 50, 12, '130302', 'jk453'),
(59, 34, 12, '060427040090', 'jk453'),
(60, 44, 12, '190701', 'jk453'),
(61, 39, 12, '694201', 'jk453'),
(62, 40, 12, '220905', 'jk453'),
(63, 22, 12, '160596', 'jk453'),
(64, 12, 12, '690420', 'jk453'),
(65, 12, 12, '123312', 'jk453'),
(66, 14, 12, '223042', 'jk453'),
(67, 15, 12, '310300', 'jk453'),
(68, 13, 12, '260601', 'jk453'),
(69, 19, 12, '190905', 'jk453'),
(70, 10, 12, '050302', 'jk453'),
(71, 100, 2, '000569', 'kh234'),
(72, 100, 2, '130302', 'kh234'),
(73, 90, 2, '060427040090', 'kh234'),
(74, 34, 2, '190701', 'kh234'),
(75, 56, 2, '694201', 'kh234'),
(76, 99, 2, '220905', 'kh234'),
(77, 49, 2, '160596', 'kh234'),
(78, 45, 2, '690420', 'kh234'),
(79, 75, 2, '123312', 'kh234'),
(80, 89, 2, '223042', 'kh234'),
(81, 34, 2, '310300', 'kh234'),
(82, 65, 2, '260601', 'kh234'),
(83, 99, 2, '190905', 'kh234'),
(84, 34, 2, '050302', 'kh234'),
(85, 50, 5, '000569', 'lh313'),
(86, 45, 5, '130302', 'lh313'),
(87, 34, 5, '060427040090', 'lh313'),
(88, 44, 5, '190701', 'lh313'),
(89, 32, 5, '694201', 'lh313'),
(90, 22, 5, '220905', 'lh313'),
(91, 34, 5, '160596', 'lh313'),
(92, 32, 5, '690420', 'lh313'),
(93, 2, 5, '123312', 'lh313'),
(94, 34, 5, '223042', 'lh313'),
(95, 32, 5, '310300', 'lh313'),
(96, 33, 5, '260601', 'lh313'),
(97, 11, 5, '190905', 'lh313'),
(98, 12, 5, '050302', 'lh313'),
(99, 30, 6, '000569', 'nb229'),
(100, 30, 6, '130302', 'nb229'),
(101, 23, 6, '060427040090', 'nb229'),
(102, 2, 6, '190701', 'nb229'),
(103, 23, 6, '694201', 'nb229'),
(104, 23, 6, '220905', 'nb229'),
(105, 21, 6, '160596', 'nb229'),
(106, 3, 6, '690420', 'nb229'),
(107, 11, 6, '123312', 'nb229'),
(108, 13, 6, '223042', 'nb229'),
(109, 30, 6, '310300', 'nb229'),
(110, 21, 6, '260601', 'nb229'),
(111, 22, 6, '190905', 'nb229'),
(112, 21, 6, '050302', 'nb229'),
(113, 50, 4, '000569', 'sh360'),
(114, 50, 4, '130302', 'sh360'),
(115, 32, 4, '060427040090', 'sh360'),
(116, 23, 4, '190701', 'sh360'),
(117, 33, 4, '694201', 'sh360'),
(118, 43, 4, '220905', 'sh360'),
(119, 33, 4, '160596', 'sh360'),
(120, 40, 4, '690420', 'sh360'),
(121, 49, 4, '123312', 'sh360'),
(122, 29, 4, '223042', 'sh360'),
(123, 30, 4, '310300', 'sh360'),
(124, 38, 4, '260601', 'sh360'),
(125, 27, 4, '190905', 'sh360'),
(126, 47, 4, '050302', 'sh360'),
(127, 20, 8, '000569', 'mb694'),
(128, 20, 8, '130302', 'mb694'),
(129, 20, 8, '060427040090', 'mb694'),
(130, 20, 8, '190701', 'mb694'),
(131, 20, 8, '694201', 'mb694'),
(132, 12, 8, '220905', 'mb694'),
(133, 19, 8, '160596', 'mb694'),
(134, 18, 8, '690420', 'mb694'),
(135, 17, 8, '123312', 'mb694'),
(136, 19, 8, '223042', 'mb694'),
(137, 20, 8, '310300', 'mb694'),
(138, 12, 8, '260601', 'mb694'),
(139, 10, 8, '190905', 'mb694'),
(140, 10, 8, '050302', 'mb694'),
(141, 40, 12, '150819', 'jk453'),
(142, 30, 15, '000569', 'sk453'),
(143, 20, 15, '130302', 'sk453'),
(144, 22, 15, '060427040090', 'sk453'),
(145, 12, 15, '150819', 'sk453'),
(146, 13, 15, '190701', 'sk453'),
(147, 14, 15, '694201', 'sk453'),
(148, 11, 15, '220905', 'sk453'),
(149, 12, 15, '160596', 'sk453'),
(150, 13, 15, '690420', 'sk453'),
(151, 22, 15, '123312', 'sk453'),
(152, 10, 15, '223042', 'sk453'),
(153, 12, 15, '310300', 'sk453'),
(154, 11, 15, '260601', 'sk453'),
(155, 13, 15, '190905', 'sk453'),
(156, 14, 15, '050302', 'sk453');

-- --------------------------------------------------------

--
-- Table structure for table `pemenang`
--

CREATE TABLE `pemenang` (
  `idpeserta` varchar(12) NOT NULL,
  `jum` int(3) DEFAULT NULL,
  `tempat` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pemenang`
--

INSERT INTO `pemenang` (`idpeserta`, `jum`, `tempat`) VALUES
('000569', 600, 'PERTAMA'),
('060427040090', 410, 'SAGUHATI'),
('130302', 566, 'KEDUA'),
('160596', 358, 'SAGUHATI'),
('190905', 383, 'SAGUHATI'),
('220905', 436, 'KETIGA'),
('223042', 348, 'SAGUHATI'),
('260601', 358, 'SAGUHATI'),
('310300', 374, 'SAGUHATI'),
('694201', 363, 'SAGUHATI');

-- --------------------------------------------------------

--
-- Table structure for table `peserta`
--

CREATE TABLE `peserta` (
  `idpeserta` varchar(12) NOT NULL,
  `nama` varchar(70) DEFAULT NULL,
  `nomhp` varchar(13) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `peserta`
--

INSERT INTO `peserta` (`idpeserta`, `nama`, `nomhp`) VALUES
('000569', 'Aina Umairah', '293187913'),
('050302', 'Soo Hui Shavina', '0125567231'),
('060427040090', 'Ayreen Nurlisa', '0108633449'),
('123312', 'Nabiha Abdullah', '01121610480'),
('130302', 'Arieanna Jayne binti Abdullah', '0177873356'),
('150819', 'Cynthia Weng Lee', '0177873356'),
('160596', 'Kaassan A/L Jayakumar', '392109121'),
('190701', 'Hassan bin Ahmad', '0167783456'),
('190905', 'Siti Nur Irene', '01678980098'),
('220905', 'Jasmine Xui Li', '0129324567'),
('223042', 'Nurhalini Binti Kamarudin', '0129892122'),
('260601', 'Salwa Ayreen binti Jaafar', '0153346789'),
('310300', 'Nurul Faqihah Syahrin', '0119218723'),
('690420', 'Linda Zachary binti Hernandez  ', '989282910'),
('694201', 'Jacob Andrew Sharpe', '22332113323');

-- --------------------------------------------------------

--
-- Table structure for table `tetapan`
--

CREATE TABLE `tetapan` (
  `idtetapan` int(11) NOT NULL,
  `namasys` varchar(50) DEFAULT NULL,
  `kata1` varchar(100) DEFAULT NULL,
  `detail1` varchar(100) DEFAULT NULL,
  `kata2` varchar(100) DEFAULT NULL,
  `detail2` varchar(100) DEFAULT NULL,
  `tamat_daftar` date DEFAULT NULL,
  `tamat_hakim` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tetapan`
--

INSERT INTO `tetapan` (`idtetapan`, `namasys`, `kata1`, `detail1`, `kata2`, `detail2`, `tamat_daftar`, `tamat_hakim`) VALUES
(1, 'SISTEM PENGURUSAN ARTISTIC DRAWING', 'SISTEM PENGURUSAN ARTISTIC DRAWING COMPETITION', 'Show us your skills and passion for arts ', 'KEMENTERIAN KOMUNIKASI DAN MULTIMEDIA MALAYSIA', 'KUALA LUMPUR CONVENTION CENTRE', '2022-09-17', '2022-10-25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idadmin`);

--
-- Indexes for table `hakim`
--
ALTER TABLE `hakim`
  ADD PRIMARY KEY (`idhakim`),
  ADD KEY `iditem` (`iditem`),
  ADD KEY `idadmin` (`idadmin`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`iditem`);

--
-- Indexes for table `markah`
--
ALTER TABLE `markah`
  ADD PRIMARY KEY (`idmarkah`);

--
-- Indexes for table `pemenang`
--
ALTER TABLE `pemenang`
  ADD PRIMARY KEY (`idpeserta`);

--
-- Indexes for table `peserta`
--
ALTER TABLE `peserta`
  ADD PRIMARY KEY (`idpeserta`);

--
-- Indexes for table `tetapan`
--
ALTER TABLE `tetapan`
  ADD PRIMARY KEY (`idtetapan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hakim`
--
ALTER TABLE `hakim`
  MODIFY `idhakim` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `iditem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `markah`
--
ALTER TABLE `markah`
  MODIFY `idmarkah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=157;

--
-- AUTO_INCREMENT for table `tetapan`
--
ALTER TABLE `tetapan`
  MODIFY `idtetapan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `hakim`
--
ALTER TABLE `hakim`
  ADD CONSTRAINT `hakim_ibfk_1` FOREIGN KEY (`iditem`) REFERENCES `item` (`iditem`);

--
-- Constraints for table `pemenang`
--
ALTER TABLE `pemenang`
  ADD CONSTRAINT `pemenang_ibfk_1` FOREIGN KEY (`idpeserta`) REFERENCES `peserta` (`idpeserta`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
