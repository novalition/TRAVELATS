-- Adminer 4.3.1 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `bis`;
CREATE TABLE `bis` (
  `id_bis` char(5) NOT NULL,
  `id_supir` char(5) NOT NULL,
  `no_kursi` char(2) NOT NULL,
  `jenis_bis` varchar(15) NOT NULL,
  `kuota_bis` int(26) NOT NULL,
  `plat_bis` varchar(8) NOT NULL,
  `no_stnk` int(7) NOT NULL,
  `id_rute` char(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `kursi`;
CREATE TABLE `kursi` (
  `no_kursi` char(2) NOT NULL,
  `id_bis` char(5) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `operator`;
CREATE TABLE `operator` (
  `nama` varchar(30) NOT NULL,
  `id_operator` char(5) NOT NULL,
  `no_ktp` char(16) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(1) NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `pembayaran`;
CREATE TABLE `pembayaran` (
  `id_pesanan` char(5) NOT NULL,
  `id_operator` char(5) NOT NULL,
  `jenis_pembayaran` varchar(15) NOT NULL,
  `no_pembayaran` char(4) NOT NULL,
  `tanggal_pembayaran` date NOT NULL,
  `total_bayar` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `pemesanan`;
CREATE TABLE `pemesanan` (
  `id_pemesanan` char(5) NOT NULL,
  `id_penumpang` char(5) NOT NULL,
  `no_kursi` char(2) NOT NULL,
  `id_jadwal` char(4) NOT NULL,
  `tanggal_pesan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `supir`;
CREATE TABLE `supir` (
  `nama` varchar(30) NOT NULL,
  `id_supir` char(5) NOT NULL,
  `no_ktp` char(16) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(1) NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `id_operator` char(5) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- 2017-07-12 07:57:56
