-- MariaDB dump 10.18  Distrib 10.4.17-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: daftarin
-- ------------------------------------------------------
-- Server version	10.4.17-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `admin sekolah`
--

DROP TABLE IF EXISTS `admin sekolah`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin sekolah` (
  `id_admin_sekolah` int(10) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_admin_sekolah`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin sekolah`
--

LOCK TABLES `admin sekolah` WRITE;
/*!40000 ALTER TABLE `admin sekolah` DISABLE KEYS */;
/*!40000 ALTER TABLE `admin sekolah` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `adminweb`
--

DROP TABLE IF EXISTS `adminweb`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `adminweb` (
  `id_admin_web` varchar(10) NOT NULL,
  `datasekolah_id` varchar(10) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `telepon` varchar(20) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `akun_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_admin_web`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `adminweb`
--

LOCK TABLES `adminweb` WRITE;
/*!40000 ALTER TABLE `adminweb` DISABLE KEYS */;
INSERT INTO `adminweb` VALUES ('ADM001','S001','Admin SMAN  1 MOJOKERTO','-','0998','Alamatnya',5);
/*!40000 ALTER TABLE `adminweb` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `akun`
--

DROP TABLE IF EXISTS `akun`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `akun` (
  `id_akun` int(10) NOT NULL AUTO_INCREMENT,
  `level_pengguna` varchar(15) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  PRIMARY KEY (`id_akun`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `akun`
--

LOCK TABLES `akun` WRITE;
/*!40000 ALTER TABLE `akun` DISABLE KEYS */;
INSERT INTO `akun` VALUES (1,'admin','admin','admin'),(2,'siswa','siswa','siswa'),(5,'sekolah','sekolah','sekolah'),(14,'siswa','aaezha','password'),(24,'siswa','aa','aa'),(25,'siswa','bb','bb'),(26,'siswa','cc','bb'),(27,'siswa','DD','DD'),(28,'siswa','aku','aku');
/*!40000 ALTER TABLE `akun` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `datasekolah`
--

DROP TABLE IF EXISTS `datasekolah`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `datasekolah` (
  `id_data_sekolah` varchar(10) NOT NULL,
  `tipe` varchar(10) DEFAULT 'sd',
  `kepala_sekolah` varchar(15) NOT NULL,
  `tahun_berdiri` varchar(25) NOT NULL,
  `nama_sekolah` varchar(25) NOT NULL,
  `kuota` varchar(255) NOT NULL,
  `jalur_masuk` varchar(25) NOT NULL,
  `Alamat` varchar(20) NOT NULL,
  `Narahubung` varchar(20) NOT NULL,
  PRIMARY KEY (`id_data_sekolah`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `datasekolah`
--

LOCK TABLES `datasekolah` WRITE;
/*!40000 ALTER TABLE `datasekolah` DISABLE KEYS */;
INSERT INTO `datasekolah` VALUES ('S001','sd','ANIMAN','29 Mei 1997','SMAN  1 MOJOKERTO','IPA : 200IPS : 100','Reguler Prestasi','Jl. Tugu Utara No.1,','(0341) 366454'),('S002','sma','MURIS ILMI','27 APRIL 1987','SMAN  2 MOJOKERTO','IPA : 200IPS : 100','Reguler Prestaso','JL. PATIMURA 9 BANDU','(0341) 366454'),('S003','sd','DENADA','29 Mei 1997','SMAN  3 MOJOKERTO','IPA : 200 IPS : 150','REGULER PRESTASI','JL. PATIMURA 11 BAND','(0341) 366454');
/*!40000 ALTER TABLE `datasekolah` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pendaftaran`
--

DROP TABLE IF EXISTS `pendaftaran`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pendaftaran` (
  `id_pendaftaran` int(10) NOT NULL AUTO_INCREMENT,
  `foto_diri` blob DEFAULT NULL,
  `pilihan_JalurMasuk` varchar(25) DEFAULT NULL,
  `pilihan_Sekolah` varchar(25) DEFAULT NULL,
  `pilihan_Sekolah2` varchar(10) DEFAULT NULL,
  `sekolah_lulus` varchar(10) DEFAULT NULL,
  `nama_sekolah_asal` varchar(25) DEFAULT NULL,
  `alamat_sekolah` varchar(255) DEFAULT NULL,
  `nama_ortu` varchar(25) DEFAULT NULL,
  `pekerjaan_ortu` varchar(25) DEFAULT NULL,
  `alamat_ortu` varchar(255) DEFAULT NULL,
  `no_hp_ortu` varchar(15) DEFAULT NULL,
  `NEM` float DEFAULT NULL,
  `prestasi` varchar(15) DEFAULT NULL,
  `bukti_dokumen` mediumblob DEFAULT NULL,
  `siswa_id` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id_pendaftaran`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pendaftaran`
--

LOCK TABLES `pendaftaran` WRITE;
/*!40000 ALTER TABLE `pendaftaran` DISABLE KEYS */;
INSERT INTO `pendaftaran` VALUES (4,NULL,'Prestasi','S001','S002',NULL,'asda','asdsadsad','Supardi','Wiraswasta','JL. Candi Karang Besuki No 10 Kota Malang','087750759007asd',37,'juara 1, juara ',NULL,'AS005'),(5,NULL,'Prestasi','S003','S001',NULL,'asda','asdsadsad','Supardi','Wiraswasta','JL. Candi Karang Besuki No 10 Kota Malang','087750759007asd',37,'juara 1, juara ',NULL,'AS005');
/*!40000 ALTER TABLE `pendaftaran` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `siswa`
--

DROP TABLE IF EXISTS `siswa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `siswa` (
  `id_siswa` varchar(10) NOT NULL,
  `nama_lengkap` varchar(50) DEFAULT NULL,
  `gambar` varchar(25) DEFAULT NULL,
  `tempat_lahir` varchar(25) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `jenis_kelamin` varchar(10) DEFAULT NULL,
  `agama` varchar(10) DEFAULT NULL,
  `asal_sekolah` varchar(25) DEFAULT NULL,
  `no_hp` varchar(15) DEFAULT NULL,
  `akun_id` int(11) DEFAULT NULL,
  `nisn` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_siswa`),
  UNIQUE KEY `no_hp` (`no_hp`),
  UNIQUE KEY `nisn` (`nisn`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `siswa`
--

LOCK TABLES `siswa` WRITE;
/*!40000 ALTER TABLE `siswa` DISABLE KEYS */;
INSERT INTO `siswa` VALUES ('AS001','Siswa Satu','user.png','','2003-12-12','Surabaya','Laki-laki','Kristen Pr','SMPN 1 Mojokerto','0909090909090',2,NULL),('AS002','Camila Pauline Carraro',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('AS003','Aa',NULL,'Malang','2021-05-20','JL. Candi Karang Besuki No 10 Kota Malang','Laki-Laki','Kristen','SMPN 2 KOTA MALANG','088567781623',24,NULL),('AS004','DD',NULL,'Malang','0000-00-00','JL. Candi Karang Besuki No 10 Kota Malang','--','--','SMPN 2 KOTA MALANG','0885612',27,NULL),('AS005','aku',NULL,'Malang','2021-12-31','JL. Candi Karang Besuki No 10 Kota Malang','Perempuan','Kristen','SMPN 2 KOTA MALANG','312',28,NULL);
/*!40000 ALTER TABLE `siswa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'daftarin'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-05-24 10:03:30
