# Host: localhost  (Version: 5.6.20)
# Date: 2016-08-21 09:58:18
# Generator: MySQL-Front 5.2  (Build 5.66)

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE */;
/*!40101 SET SQL_MODE='NO_ENGINE_SUBSTITUTION' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES */;
/*!40103 SET SQL_NOTES='ON' */;

DROP DATABASE IF EXISTS `sistemjadwalruang`;
CREATE DATABASE `sistemjadwalruang` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `sistemjadwalruang`;

#
# Source for table "detil_ruang"
#

DROP TABLE IF EXISTS `detil_ruang`;
CREATE TABLE `detil_ruang` (
  `ruang` varchar(2) NOT NULL DEFAULT '',
  `id_matkul` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ruang`,`id_matkul`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

#
# Data for table "detil_ruang"
#

INSERT INTO `detil_ruang` VALUES ('01',1),('01',4),('02',1),('02',4),('03',1),('03',5),('06',2),('07',2);

#
# Source for table "dosen"
#

DROP TABLE IF EXISTS `dosen`;
CREATE TABLE `dosen` (
  `id_dosen` int(10) NOT NULL AUTO_INCREMENT,
  `nm_dosen` varchar(40) NOT NULL DEFAULT '',
  `alamat` varchar(255) NOT NULL DEFAULT '',
  `tlp` varchar(15) NOT NULL,
  PRIMARY KEY (`id_dosen`)
) ENGINE=MyISAM AUTO_INCREMENT=1064 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

#
# Data for table "dosen"
#

INSERT INTO `dosen` VALUES (1048,'Amran Swandy Simamora, S.Kom','Borong-Borong','509039032'),(1049,'Joko Priyono, S.Kom','Pondok Aren','3489283923'),(1050,'Sara Famayla Florentin, S.Kom','Pondok Jagung','093094033'),(1056,'Ambar Setya Ningsih, S.Kom','Yogyakarta','05930859385'),(1057,'Agus Santoso, S.Kom','Klaten','298392839'),(1058,'Astrid Nathania, S.Kom','Pasar Kemis','384984334'),(1059,'Rahma Pujianti, S.Kom','CIledug','99384934'),(1061,'Edi Susanto, S.Kom','Bintaro Jaya','43647232'),(1062,'Ryfan Aditya Indra, S.Kom','Karawaci','94823948239'),(1063,'Imam Halim Mursyidin, S.Kom','Teluk Naga','9283928392');

#
# Source for table "jadwal"
#

DROP TABLE IF EXISTS `jadwal`;
CREATE TABLE `jadwal` (
  `id_matkul` int(11) NOT NULL AUTO_INCREMENT,
  `kelompok` varchar(2) DEFAULT NULL,
  `dosen` varchar(50) DEFAULT NULL,
  `matkul` varchar(50) DEFAULT NULL,
  `ruang` varchar(2) DEFAULT NULL,
  `jam` varchar(10) DEFAULT NULL,
  `kelas` varchar(1) DEFAULT NULL,
  `thn_ajar` varchar(10) DEFAULT NULL,
  `semester` varchar(1) DEFAULT NULL,
  `keterangan` varchar(50) DEFAULT NULL,
  `hari` varchar(10) DEFAULT NULL,
  `selesai` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id_matkul`)
) ENGINE=MyISAM AUTO_INCREMENT=101 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

#
# Data for table "jadwal"
#

INSERT INTO `jadwal` VALUES (72,'AA','Imam Halim Mursyidin, S.Kom','Metoda Numerik','01','08.00','1','2015/2016','1','Hadir','senin','09.40'),(73,'AB','Sara Famayla Florentin, S.Kom','Metoda Numerik','02','08.00','1','2015/2016','1','Hadir','senin','09.40'),(74,'AC','Joko Priyono, S.Kom','Metoda Numerik','03','08.00','1','2015/2016','1','Hadir','senin','09.40'),(75,'XX','Agus Santoso, S.Kom','Interpersonal Skill','06','08.00','1','2015/2016','1','Hadir','senin','09.40'),(76,'XY','Amran Swandy Simamora, S.Kom','Interpersonal Skill','07','08.00','1','2015/2016','1','Hadir','senin','09.40'),(81,'CZ','ASDAS','asdasd','02','08.00','1','2015/2016','1','Tidak Hadir','selasa','09.40'),(82,'XZ','Ryfan Aditya Indra, S.Kom','Interpersonal Skill','05','08.00','1','2015/2016','1','Hadir','senin','09.40'),(83,'CZ','ASDAS','asdasd','02','08.00','1','2015/2016','1','Tidak Hadir','selasa','09.40'),(84,'XZ','Ryfan Aditya Indra, S.Kom','Interpersonal Skill','05','08.00','1','2015/2016','1','Hadir','senin','09.40'),(86,'XZ','Ryfan Aditya Indra, S.Kom','Interpersonal Skill','05','08.00','1','2015/2016','1','Hadir','senin','09.40'),(88,'XZ','Ryfan Aditya Indra, S.Kom','Interpersonal Skill','05','08.00','1','2015/2016','1','Hadir','senin','09.40'),(90,'CZ','ASDAS','asdasd','02','08.00','1','2015/2016','1','Tidak Hadir','selasa','09.40'),(91,'CC','Ryfan Aditya Indra, S.Kom','Metoda Numerik','01','08.00','1','2015/2016','1','Hadir','selasa','09.40'),(92,'CZ','ASDAS','asdasd','02','08.00','1','2015/2016','1','Tidak Hadir','selasa','09.40'),(93,'CC','Ryfan Aditya Indra, S.Kom','Metoda Numerik','01','08.00','1','2015/2016','1','Hadir','selasa','09.40'),(95,'CC','Ryfan Aditya Indra, S.Kom','Metoda Numerik','01','08.00','1','2015/2016','1','Hadir','selasa','09.40'),(96,'CZ','ASDAS','asdasd','02','08.00','1','2015/2016','1','Tidak Hadir','selasa','09.40'),(97,'AX','Edi Susanto, S.Kom','Pemrograman Visual','01','08.00','1','2015/2016','1','Hadir','kamis','10.35'),(98,'KK','Imam Halim Mursyidin, S.Kom','Metoda Numerik','01','12.30','1','2015/2016','1','Hadir','kamis','14.15'),(99,'AA','Sara Famayla Florentin, S.Kom','Sistem Operasi','05','10.40','1','2015/2016','1','Tidak Hadir','kamis','13.20'),(100,'OP','Ryfan Aditya Indra, S.Kom','Arsitektur Komputer','02','08.00','1','2015/2016','1','Pengganti','kamis','10.35');

#
# Source for table "matkul"
#

DROP TABLE IF EXISTS `matkul`;
CREATE TABLE `matkul` (
  `id_matkul` int(10) NOT NULL AUTO_INCREMENT,
  `nm_matkul` varchar(50) NOT NULL,
  PRIMARY KEY (`id_matkul`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

#
# Data for table "matkul"
#

INSERT INTO `matkul` VALUES (1,'Metoda Numerik'),(2,'Interpersonal Skill'),(3,'Sistem Operasi'),(4,'Pemrograman Web'),(5,'Kalkulus 1'),(7,'Sistem Digital'),(8,'Arsitektur Komputer'),(9,'Organisasi Komputer'),(10,'Jaringan Komputer'),(11,'PASI'),(12,'Statistik Probabilitas');

#
# Source for table "users"
#

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(300) NOT NULL,
  `email` varchar(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  PRIMARY KEY (`id_user`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

#
# Data for table "users"
#

INSERT INTO `users` VALUES (1,'admin','admin','admin@admin.com','Administrator'),(24,'almi','almi','almi@dharmaputra.ac.id','Almi');

/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
