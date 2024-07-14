-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2020 at 08:51 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_aldyansyah`
--

-- --------------------------------------------------------

--
-- Table structure for table `cbt_kelas`
--

CREATE TABLE IF NOT EXISTS `cbt_kelas` (
  `id_kelas` int(5) NOT NULL,
  `kelas` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cbt_kelas`
--

INSERT INTO `cbt_kelas` (`id_kelas`, `kelas`) VALUES
(8, '6SIFM002'),
(321, '01SIFM01'),
(10111, '08SIFM001`');

-- --------------------------------------------------------

--
-- Table structure for table `cbt_kelas_ujian`
--

CREATE TABLE IF NOT EXISTS `cbt_kelas_ujian` (
  `id_ujian` int(5) NOT NULL,
  `id_kelas` int(5) NOT NULL,
  `aktif` enum('Y','N') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cbt_kelas_ujian`
--

INSERT INTO `cbt_kelas_ujian` (`id_ujian`, `id_kelas`, `aktif`) VALUES
(0, 8, 'Y'),
(1, 8, 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `cbt_nilai`
--

CREATE TABLE IF NOT EXISTS `cbt_nilai` (
`id_nilai` int(10) NOT NULL,
  `nis` int(20) NOT NULL,
  `id_ujian` int(5) NOT NULL,
  `jml_bener` int(5) NOT NULL,
  `nilai` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `cbt_siswa`
--

CREATE TABLE IF NOT EXISTS `cbt_siswa` (
  `nis` int(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `id_kelas` int(5) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cbt_siswa`
--

INSERT INTO `cbt_siswa` (`nis`, `nama`, `id_kelas`, `status`) VALUES
(3, 'ALDYANSYAH', 6, 'TIDAK'),
(3222, 'DSADSA', 0, 'AKTIF'),
(2147483647, 'ACHMADALDYANSYAH.M.KOM', 10111, 'AKTIF');

-- --------------------------------------------------------

--
-- Table structure for table `cbt_soal`
--

CREATE TABLE IF NOT EXISTS `cbt_soal` (
  `id_soal` int(5) NOT NULL,
  `id_ujian` int(5) NOT NULL,
  `soal` text NOT NULL,
  `pilihan_1` text NOT NULL,
  `pilihan_2` text NOT NULL,
  `pilihan_3` text NOT NULL,
  `pilihan_4` text NOT NULL,
  `pilihan_5` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cbt_soal`
--

INSERT INTO `cbt_soal` (`id_soal`, `id_ujian`, `soal`, `pilihan_1`, `pilihan_2`, `pilihan_3`, `pilihan_4`, `pilihan_5`) VALUES
(0, 22111, 'IPAAA', 'SOAL5', 'SOAL4', 'SOAL2', 'SOAL2', 'SOAL1');

-- --------------------------------------------------------

--
-- Table structure for table `cbt_ujian`
--

CREATE TABLE IF NOT EXISTS `cbt_ujian` (
  `id_ujian` int(5) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `nama_mapel` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` int(5) NOT NULL,
  `jml_soal` int(3) NOT NULL,
  `id_user` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cbt_ujian`
--

INSERT INTO `cbt_ujian` (`id_ujian`, `judul`, `nama_mapel`, `tanggal`, `waktu`, `jml_soal`, `id_user`) VALUES
(2, 'IPA', 'IPA', '2020-07-30', 3, 50, 4),
(7, 'AZZ', 'AZZ', '2020-07-31', 3, 4, 0),
(44, 'AZZZZ', 'ZZZZZ', '2020-08-13', 3, 44, 5);

-- --------------------------------------------------------

--
-- Table structure for table `cbt_user`
--

CREATE TABLE IF NOT EXISTS `cbt_user` (
`id_user` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `cbt_user`
--

INSERT INTO `cbt_user` (`id_user`, `nama`, `username`, `password`, `level`) VALUES
(1, 'ACHMAD ALDYANSYAH', 'aldy', 'aldy', 'SUNIOR IT '),
(3, 'aaa', 'AAA', 'AAA', 'STAFF IT'),
(4, '', '', '', ''),
(6, 'ALDYANSYAHA', 'aldy1', 'aldy1', 'STAFF IT');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cbt_kelas`
--
ALTER TABLE `cbt_kelas`
 ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `cbt_nilai`
--
ALTER TABLE `cbt_nilai`
 ADD PRIMARY KEY (`id_nilai`);

--
-- Indexes for table `cbt_siswa`
--
ALTER TABLE `cbt_siswa`
 ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `cbt_soal`
--
ALTER TABLE `cbt_soal`
 ADD PRIMARY KEY (`id_soal`);

--
-- Indexes for table `cbt_ujian`
--
ALTER TABLE `cbt_ujian`
 ADD PRIMARY KEY (`id_ujian`);

--
-- Indexes for table `cbt_user`
--
ALTER TABLE `cbt_user`
 ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cbt_nilai`
--
ALTER TABLE `cbt_nilai`
MODIFY `id_nilai` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cbt_user`
--
ALTER TABLE `cbt_user`
MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
