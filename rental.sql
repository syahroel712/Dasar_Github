-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2019 at 01:15 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rental`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `id_customer` char(15) NOT NULL,
  `nama_customer` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_telp` char(12) NOT NULL,
  PRIMARY KEY (`id_customer`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_customer`, `nama_customer`, `alamat`, `no_telp`) VALUES
('CUS-000-0001', 'Susi', 'Jl. Kera 89', '087777777777'),
('CUS-000-0002', 'Azzahra Sabrina', 'Jl. Pattimura 93', '089467292290'),
('CUS-000-0003', 'Syahrul', 'Jl. Soekarno 100', '085371233912'),
('CUS-000-0004', 'Ridho Ilahi', 'Jl. Bung Tomo 98', '087878887878'),
('CUS-000-0005', 'Rehan', 'Jl. Melati 56', '08324239239'),
('CUS-000-0006', 'Rafi', 'Jl. Mawar 34', '081234973427'),
('CUS-000-0007', 'Elia Nur', 'Jl. Mangga 34', '08129312312'),
('CUS-000-0008', 'Ismi', 'Jl. Bawang 765', '012319231231'),
('CUS-000-0009', 'Dwi Sabrina', 'Jl. Salak 65', '082391828828'),
('CUS-000-0010', 'Rani Sri', 'Jl. Naga 752', '082391291223');

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE IF NOT EXISTS `karyawan` (
  `id_karyawan` char(15) NOT NULL,
  `nama_karyawan` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_telp` char(12) NOT NULL,
  PRIMARY KEY (`id_karyawan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id_karyawan`, `nama_karyawan`, `alamat`, `no_telp`) VALUES
('KAR-000-001', 'Teguh Furqan', 'Jl. Nasution 569', '08222121121'),
('KAR-000-002', 'Azka Azkia', 'Jl. Durian 0343', '082139123192'),
('KAR-000-003', 'Fathur', 'Jl. Sayuti 672', '083472382323'),
('KAR-000-004', 'Sita', 'Jl. Haji Mahmud 01', '083621619828'),
('KAR-000-005', 'Zulva', 'Jl. Tiga Medan 23', '012831823718'),
('KAR-000-006', 'Melda', 'Jl. Singkong 123', '083218321435'),
('KAR-000-007', 'Ria', 'Jl. Hijau 123', '087237617238'),
('KAR-000-008', 'Riza', 'Jl. Kaya 123', '083842320392'),
('KAR-000-009', 'Bagas', 'Jl. Jeruk 123', '089823712381'),
('KAR-000-010', 'Annisa', 'Jl. Kerbau Bangau 69', '08231237126'),
('KAR-000-011', 'Isra', 'Jl. Merda', '08231923121');

-- --------------------------------------------------------

--
-- Stand-in structure for view `laporan`
--
CREATE TABLE IF NOT EXISTS `laporan` (
`id_sewa` char(15)
,`nama_karyawan` varchar(50)
,`nama_customer` varchar(50)
,`merk` varchar(50)
,`tgl_pinjam` date
,`tgl_kembali` date
,`total_bayar` int(11)
,`status` varchar(10)
);
-- --------------------------------------------------------

--
-- Table structure for table `mobil`
--

CREATE TABLE IF NOT EXISTS `mobil` (
  `id_mobil` char(12) NOT NULL,
  `no_plat` char(10) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `merk` varchar(50) NOT NULL,
  `thn_buat` varchar(4) NOT NULL,
  `jumlah` int(2) NOT NULL,
  `warna` varchar(50) NOT NULL,
  `biaya_sewa` int(7) NOT NULL,
  PRIMARY KEY (`id_mobil`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mobil`
--

INSERT INTO `mobil` (`id_mobil`, `no_plat`, `jenis`, `merk`, `thn_buat`, `jumlah`, `warna`, `biaya_sewa`) VALUES
('MOB-000-001', 'BA 4343 NB', 'Mpv', 'Kijang', '2015', 0, 'Silver', 500000),
('MOB-000-002', 'BA 2312 LK', 'Sedan', 'Toyota', '2013', 1, 'Hitam', 350000),
('MOB-000-003', 'BA 7777 JK', 'TRUK', 'HINO', '2019', 1, 'HIJAU', 400000),
('MOB-000-004', 'BA 8232 NB', 'Pickup', 'Rush', '2010', 1, 'Merah', 250000),
('MOB-000-005', 'BA 8239 J', 'Sedan', 'Hino', '2014', 1, 'Hitam', 350000),
('MOB-000-006', 'BA 6236 L', 'Truck', 'Fun', '2014', 1, 'Hijau', 200000),
('MOB-000-007', 'BA 1213 T', 'Mvp', 'Hino', '2011', 1, 'Hitam', 350000),
('MOB-000-008', 'BA 6273 HJ', 'Pickup', 'Hino', '2014', 1, 'Hitam', 350000),
('MOB-000-009', 'BA 9238 A', 'Sedan', 'Toyota', '2012', 1, 'Merah', 150000),
('MOB-000-010', 'BA 7162 AK', 'Truck', 'Polo', '2018', 1, 'Silver', 500000),
('MOB-000-011', 'BA 2718 C', 'Mvp', 'Hino', '2014', 1, 'Hitam', 350000),
('MOB-000-012', 'BA 2019 JK', 'MVP', 'TOYOTA', '2019', 1, 'Merah', 500000);

-- --------------------------------------------------------

--
-- Table structure for table `sewa`
--

CREATE TABLE IF NOT EXISTS `sewa` (
  `id_sewa` char(15) NOT NULL,
  `id_karyawan` char(15) NOT NULL,
  `id_customer` char(15) NOT NULL,
  `id_mobil` char(15) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `total_bayar` int(11) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`id_sewa`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sewa`
--

INSERT INTO `sewa` (`id_sewa`, `id_karyawan`, `id_customer`, `id_mobil`, `tgl_pinjam`, `tgl_kembali`, `total_bayar`, `status`) VALUES
('TR-MBL-0001', 'KAR-000-004', 'CUS-000-0001', 'MOB-000-002', '2019-01-01', '2019-01-02', 350000, 'IN'),
('TR-MBL-0002', 'KAR-000-005', 'CUS-000-0002', 'MOB-000-007', '2019-04-09', '2019-04-17', 350000, 'IN'),
('TR-MBL-0003', 'KAR-000-004', 'CUS-000-0001', 'MOB-000-001', '2019-04-09', '2019-04-10', 500000, 'IN'),
('TR-MBL-0004', 'KAR-000-004', 'CUS-000-0004', 'MOB-000-006', '2019-02-05', '2019-04-02', 200000, 'IN'),
('TR-MBL-0005', 'KAR-000-009', 'CUS-000-0005', 'MOB-000-009', '2019-02-12', '2019-04-08', 150000, 'IN'),
('TR-MBL-0006', 'KAR-000-004', 'CUS-000-0006', 'MOB-000-002', '2019-02-18', '2019-04-15', 350000, 'IN'),
('TR-MBL-0007', 'KAR-000-004', 'CUS-000-0001', 'MOB-000-001', '2019-04-30', '2019-04-23', 500000, 'IN'),
('TR-MBL-0008', 'KAR-000-004', 'CUS-000-0001', 'MOB-000-001', '2019-04-01', '2019-04-02', 500000, 'IN'),
('TR-MBL-0009', 'KAR-000-008', 'CUS-000-0005', 'MOB-000-001', '2019-04-23', '0000-00-00', 500000, 'OUT'),
('TR-MBL-0010', 'KAR-000-002', 'CUS-000-0001', 'MOB-000-002', '2019-04-10', '2019-10-30', 350000, 'IN'),
('TR-MBL-0011', 'KAR-000-001', 'CUS-000-0002', 'MOB-000-003', '2019-10-22', '2019-10-23', 400000, 'IN');

-- --------------------------------------------------------

--
-- Table structure for table `tblevel`
--

CREATE TABLE IF NOT EXISTS `tblevel` (
  `id_level` int(1) NOT NULL,
  `nama_level` varchar(50) NOT NULL,
  PRIMARY KEY (`id_level`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblevel`
--

INSERT INTO `tblevel` (`id_level`, `nama_level`) VALUES
(1, 'Admin'),
(2, 'Operator'),
(3, 'Owner'),
(4, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `tbuser`
--

CREATE TABLE IF NOT EXISTS `tbuser` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(225) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `id_level` int(11) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbuser`
--

INSERT INTO `tbuser` (`id_user`, `nama`, `username`, `password`, `id_level`) VALUES
(1, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 1),
(2, 'operator', 'operator', '4b583376b2767b923c3e1da60d10de59', 2);

-- --------------------------------------------------------

--
-- Structure for view `laporan`
--
DROP TABLE IF EXISTS `laporan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `laporan` AS select `sewa`.`id_sewa` AS `id_sewa`,`karyawan`.`nama_karyawan` AS `nama_karyawan`,`customer`.`nama_customer` AS `nama_customer`,`mobil`.`merk` AS `merk`,`sewa`.`tgl_pinjam` AS `tgl_pinjam`,`sewa`.`tgl_kembali` AS `tgl_kembali`,`sewa`.`total_bayar` AS `total_bayar`,`sewa`.`status` AS `status` from (((`sewa` join `mobil`) join `karyawan`) join `customer`) where ((`sewa`.`id_mobil` = `mobil`.`id_mobil`) and (`sewa`.`id_karyawan` = `karyawan`.`id_karyawan`) and (`sewa`.`id_customer` = `customer`.`id_customer`));

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
