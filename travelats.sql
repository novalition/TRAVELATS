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
  `id_rute` char(4) NOT NULL,
  PRIMARY KEY (`id_bis`),
  KEY `id_supir` (`id_supir`),
  KEY `id_rute` (`id_rute`),
  CONSTRAINT `bis_ibfk_2` FOREIGN KEY (`id_supir`) REFERENCES `supir` (`id_supir`) ON DELETE CASCADE,
  CONSTRAINT `bis_ibfk_3` FOREIGN KEY (`id_rute`) REFERENCES `rute` (`id_rute`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `jadwal`;
CREATE TABLE `jadwal` (
  `id_jadwal` char(4) NOT NULL,
  `id_supir` char(5) NOT NULL,
  `id_rute` char(4) NOT NULL,
  `jam_keberangkatan` time NOT NULL,
  `id_bis` char(5) NOT NULL,
  PRIMARY KEY (`id_jadwal`),
  KEY `id_supir` (`id_supir`),
  KEY `id_rute` (`id_rute`),
  KEY `id_bis` (`id_bis`),
  CONSTRAINT `jadwal_ibfk_1` FOREIGN KEY (`id_supir`) REFERENCES `supir` (`id_supir`) ON DELETE CASCADE,
  CONSTRAINT `jadwal_ibfk_2` FOREIGN KEY (`id_rute`) REFERENCES `rute` (`id_rute`) ON DELETE CASCADE,
  CONSTRAINT `jadwal_ibfk_3` FOREIGN KEY (`id_bis`) REFERENCES `bis` (`id_bis`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `kursi`;
CREATE TABLE `kursi` (
  `no_kursi` char(2) NOT NULL,
  `id_bis` char(5) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`no_kursi`),
  KEY `id_bis` (`id_bis`),
  CONSTRAINT `kursi_ibfk_1` FOREIGN KEY (`id_bis`) REFERENCES `bis` (`id_bis`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `manajer`;
CREATE TABLE `manajer` (
  `nama` varchar(30) NOT NULL,
  `id_manajer` char(5) NOT NULL,
  `no_ktp` char(16) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(1) NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `id_operator` char(5) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  PRIMARY KEY (`id_manajer`),
  KEY `id_operator` (`id_operator`),
  CONSTRAINT `manajer_ibfk_1` FOREIGN KEY (`id_operator`) REFERENCES `operator` (`id_operator`) ON DELETE CASCADE
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
  `password` varchar(10) NOT NULL,
  PRIMARY KEY (`id_operator`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `pembayaran`;
CREATE TABLE `pembayaran` (
  `id_pesanan` char(5) NOT NULL,
  `id_operator` char(5) NOT NULL,
  `jenis_pembayaran` varchar(15) NOT NULL,
  `no_pembayaran` char(4) NOT NULL,
  `tanggal_pembayaran` date NOT NULL,
  `total_bayar` varchar(20) NOT NULL,
  PRIMARY KEY (`no_pembayaran`),
  KEY `id_operator` (`id_operator`),
  CONSTRAINT `pembayaran_ibfk_1` FOREIGN KEY (`id_operator`) REFERENCES `operator` (`id_operator`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `pemesanan`;
CREATE TABLE `pemesanan` (
  `id_pemesanan` char(5) NOT NULL,
  `id_penumpang` char(5) NOT NULL,
  `no_kursi` char(2) NOT NULL,
  `id_jadwal` char(4) NOT NULL,
  `tanggal_pesan` date NOT NULL,
  PRIMARY KEY (`id_pemesanan`),
  KEY `id_penumpang` (`id_penumpang`),
  KEY `id_jadwal` (`id_jadwal`),
  CONSTRAINT `pemesanan_ibfk_1` FOREIGN KEY (`id_penumpang`) REFERENCES `penumpang` (`id_penumpang`) ON DELETE CASCADE,
  CONSTRAINT `pemesanan_ibfk_2` FOREIGN KEY (`id_jadwal`) REFERENCES `jadwal` (`id_jadwal`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `penumpang`;
CREATE TABLE `penumpang` (
  `id_penumpang` char(5) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `no_ktp` char(16) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_rek` varchar(12) NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `email` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(1) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  PRIMARY KEY (`id_penumpang`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `rute`;
CREATE TABLE `rute` (
  `id_rute` char(4) NOT NULL,
  `jalur` varchar(20) NOT NULL,
  `tarif` int(20) NOT NULL,
  PRIMARY KEY (`id_rute`)
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
  `password` varchar(10) NOT NULL,
  PRIMARY KEY (`id_supir`),
  KEY `id_operator` (`id_operator`),
  CONSTRAINT `supir_ibfk_1` FOREIGN KEY (`id_operator`) REFERENCES `operator` (`id_operator`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- 2017-07-13 07:37:52
