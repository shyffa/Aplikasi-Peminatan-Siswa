-- phpMyAdmin SQL Dump
-- version 3.3.7deb7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 20. Februari 2016 jam 21:37
-- Versi Server: 5.1.49
-- Versi PHP: 5.3.3-7+squeeze14

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `peminatan`
--
CREATE DATABASE `peminatan` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `peminatan`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(50) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`username`, `nama`, `password`) VALUES
('admin', 'Sisisiru', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `user` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login`
--


-- --------------------------------------------------------

--
-- Struktur dari tabel `mapel`
--

CREATE TABLE IF NOT EXISTS `mapel` (
  `kode_mapel` int(5) NOT NULL AUTO_INCREMENT,
  `mapel` varchar(100) NOT NULL,
  PRIMARY KEY (`kode_mapel`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data untuk tabel `mapel`
--

INSERT INTO `mapel` (`kode_mapel`, `mapel`) VALUES
(1, 'pemograman dasar'),
(2, 'sistem komputer'),
(3, 'perakitan komputer'),
(4, 'simulasi digital'),
(5, 'jaringan dasar'),
(6, 'pemograman web');

-- --------------------------------------------------------

--
-- Struktur dari tabel `modul`
--

CREATE TABLE IF NOT EXISTS `modul` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data untuk tabel `modul`
--


-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai`
--

CREATE TABLE IF NOT EXISTS `nilai` (
  `id_nilai` int(11) NOT NULL AUTO_INCREMENT,
  `nis` varchar(20) DEFAULT NULL,
  `kode_mapel` varchar(5) DEFAULT NULL,
  `nilai` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_nilai`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data untuk tabel `nilai`
--

INSERT INTO `nilai` (`id_nilai`, `nis`, `kode_mapel`, `nilai`) VALUES
(1, '31212', '1', 80),
(2, '31212', '2', 80),
(3, '31212', '3', 80),
(4, '31212', '4', 80),
(5, '31212', '5', 80),
(6, '31212', '6', 80),
(7, '31212', '1', 80),
(8, '31212', '2', 80),
(9, '31212', '3', 80),
(10, '31212', '4', 80),
(11, '31212', '5', 80),
(12, '31212', '6', 80);

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminatan`
--

CREATE TABLE IF NOT EXISTS `peminatan` (
  `id_peminatan` int(11) NOT NULL AUTO_INCREMENT,
  `nis` varchar(20) NOT NULL,
  `pilihan` varchar(50) NOT NULL,
  PRIMARY KEY (`id_peminatan`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `peminatan`
--

INSERT INTO `peminatan` (`id_peminatan`, `nis`, `pilihan`) VALUES
(1, '31212', 'RPL');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE IF NOT EXISTS `siswa` (
  `nis` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kelas` varchar(20) NOT NULL,
  `jurusan` varchar(30) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `nama_ortu` varchar(30) NOT NULL,
  `tlp_ortu` varchar(13) NOT NULL,
  PRIMARY KEY (`nis`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`nis`, `nama`, `kelas`, `jurusan`, `agama`, `no_hp`, `nama_ortu`, `tlp_ortu`) VALUES
('31212', 'tes', 'tes', 'tes', 'tes', '9200', 'tes', '123');
