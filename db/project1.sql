-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Nov 2019 pada 15.56
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project1`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `username` varchar(40) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nim` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `alamat` varchar(60) NOT NULL,
  `no_hp` varchar(50) NOT NULL,
  `angkatan` varchar(5) NOT NULL,
  `tipe_user` int(1) NOT NULL,
  `dosen_penguji1` varchar(20) NOT NULL,
  `dosen_penguji2` varchar(20) NOT NULL,
  `jadwal` date NOT NULL,
  `dosen_penguji3` varchar(20) NOT NULL,
  `dosen_penguji4` varchar(20) NOT NULL,
  `jadwal2` date NOT NULL,
  `judulta` varchar(50) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `namafile` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `pass`, `nama`, `nim`, `email`, `alamat`, `no_hp`, `angkatan`, `tipe_user`, `dosen_penguji1`, `dosen_penguji2`, `jadwal`, `dosen_penguji3`, `dosen_penguji4`, `jadwal2`, `judulta`, `nik`, `namafile`) VALUES
('singgih1', '123', 'Singgih', '0001', '', '', '', '', 2, '', '', '0000-00-00', '', '', '0000-00-00', '', '', NULL),
('julian1', '123', 'Julian Manuel', '0002', '', '', '', '', 2, '', '', '0000-00-00', '', '', '0000-00-00', '', '', NULL),
('yoga1', '123', 'Yoga Pratama', '0003', '', '', '', '', 2, '', '', '0000-00-00', '', '', '0000-00-00', '', '', NULL),
('aryo1', '123', 'Aryo Anindhyo', '0004', '', '', '', '', 2, '', '', '0000-00-00', '', '', '0000-00-00', '', '', NULL),
('jeremy1', '123', 'Jeremia Joseph', '21070117140002', 'jeremy@gmail.com', 'Semarang', '086273828234', '2017', 1, '', '', '0000-00-00', '', '', '0000-00-00', '', '', NULL),
('genta1', '123', 'Genta Pertiby', '21070117140003', 'genta@gmail.com', 'Semarang', '086273823114', '2017', 1, '', '', '0000-00-00', '', '', '0000-00-00', '', '', NULL),
('danil1', '123', 'Daniel Felix', '21070117140004', 'danil@gmail.com', 'Semarang', '086273828242', '2017', 1, '', '', '0000-00-00', '', '', '0000-00-00', 'Kerja Bahlul', 'denny nurkartamanda', 'Pressman 139-146.docx'),
('agung1', '123', 'Agung Budi', '0005', '', '', '', '', 3, '', '', '0000-00-00', '', '', '0000-00-00', '', '', NULL),
('joko1', '123', 'Joko Anwar', '1000', '', '', '', '', 4, '', '', '0000-00-00', '', '', '0000-00-00', '', '', 'IMK_02_Daniel Felix Nainggolan_21120117130069.docx'),
('kokgabisa', '', '', '', '', '', '', '', 1, '', '', '0000-00-00', '', '', '0000-00-00', '', 'heru prastawa', NULL),
('', '', '', '', '', '', '', '', 1, '', '', '0000-00-00', '', '', '0000-00-00', '', '', NULL),
('', '', '', '', '', '', '', '', 1, '', '', '0000-00-00', '', '', '0000-00-00', '', '', NULL),
('Budiman', '2010120', 'Kita', '21070117140059', '', '', '', '', 1, '', '', '0000-00-00', '', '', '0000-00-00', '', '', NULL),
('coba123', 'kaskus1881', 'Coba ', '21120117130069', 'coba@gmail.com', 'Coba Semarang', '08623373922', '2018', 1, '', '', '0000-00-00', '', '', '0000-00-00', '', '', NULL),
('denny1', '123', 'Denny Nurkartamanda, ST, MT', '', '', '', '', '', 0, '', '', '0000-00-00', '', '', '0000-00-00', '', '', NULL),
('ahmad1', '123', 'Ahmad', '21120117130080', 'ahmad@gmail.com', 'Cengkareng', '085261729382', '2016', 1, '', '', '0000-00-00', '', '', '0000-00-00', 'Mencoba Berubah', 'susatyo nugroho', NULL),
('budi1', '123', 'Budi Nugroho', '21120117130056', '', '', '', '2018', 1, '', '', '0000-00-00', '', '', '0000-00-00', 'Berubaaaah', 'denny nurkartamanda', NULL),
('ahmud1', '123', 'Ahmud', '21120117138849', '', '', '', '2019', 1, '', '', '0000-00-00', '', '', '0000-00-00', '', '', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
