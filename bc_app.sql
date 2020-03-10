# Host: localhost  (Version 5.5.5-10.1.35-MariaDB)
# Date: 2020-03-10 20:39:18
# Generator: MySQL-Front 6.1  (Build 1.26)


#
# Structure for table "tb_detil_pesan"
#

DROP TABLE IF EXISTS `tb_detil_pesan`;
CREATE TABLE `tb_detil_pesan` (
  `noSp` char(6) NOT NULL,
  `kdJasa` char(6) NOT NULL,
  `jmlJual` int(3) DEFAULT NULL,
  `hrgJual` double(9,0) DEFAULT NULL,
  PRIMARY KEY (`kdJasa`,`noSp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "tb_detil_pesan"
#

INSERT INTO `tb_detil_pesan` VALUES ('SP0011','JS0001',2,400000),('SP0001','JS0002',2,340000),('SP0008','JS0002',2,350000),('SP0012','JS0003',2,400000),('SP0008','JS0004',2,540000),('SP0010','JS0004',2,700000);

#
# Structure for table "tb_divisi"
#

DROP TABLE IF EXISTS `tb_divisi`;
CREATE TABLE `tb_divisi` (
  `idDivisi` char(4) NOT NULL,
  `nmDivisi` char(35) DEFAULT NULL,
  `Lantai` int(2) DEFAULT NULL,
  `noTelp` char(13) DEFAULT NULL,
  PRIMARY KEY (`idDivisi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "tb_divisi"
#

INSERT INTO `tb_divisi` VALUES ('D001','IT Management',4,'081387654567'),('D002','Management bisnis',4,'02134545778'),('D003','Management HR',4,'08783515672'),('D004','Management System',3,'087656765434'),('D005','Divisi Marketing',4,'02134556654');

#
# Structure for table "tb_jasa"
#

DROP TABLE IF EXISTS `tb_jasa`;
CREATE TABLE `tb_jasa` (
  `kdJasa` char(6) NOT NULL,
  `nmJasa` varchar(35) DEFAULT NULL,
  `lamaJasa` int(3) DEFAULT NULL,
  `hrgJasa` double(9,0) DEFAULT NULL,
  PRIMARY KEY (`kdJasa`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "tb_jasa"
#

INSERT INTO `tb_jasa` VALUES ('JS0001','IT Support',2,200000),('JS0002','IT Administration',2,300000),('JS0003','IT Management',2,300000),('JS0004','System Analyst',2,500000),('JS0005','IT Server admin',2,6400000);

#
# Structure for table "tb_login"
#

DROP TABLE IF EXISTS `tb_login`;
CREATE TABLE `tb_login` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(80) DEFAULT NULL,
  `password` varchar(80) DEFAULT NULL,
  `hakAkses` char(5) DEFAULT 'admin',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

#
# Data for table "tb_login"
#

INSERT INTO `tb_login` VALUES (1,'admin','123','admin');

#
# Structure for table "tb_nota"
#

DROP TABLE IF EXISTS `tb_nota`;
CREATE TABLE `tb_nota` (
  `noNota` char(6) NOT NULL,
  `noSp` char(6) DEFAULT NULL,
  `tglNota` date DEFAULT NULL,
  `jmlHarga` double(9,0) DEFAULT NULL,
  PRIMARY KEY (`noNota`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "tb_nota"
#

INSERT INTO `tb_nota` VALUES ('NT0001','SP0001','2020-03-05',680000),('NT0003','SP0010','2020-03-10',1400000),('NT0004','SP0010','2020-03-10',1400000),('NT0005','SP0010','2020-03-10',1400000);

#
# Structure for table "tb_sp"
#

DROP TABLE IF EXISTS `tb_sp`;
CREATE TABLE `tb_sp` (
  `noSp` char(6) NOT NULL,
  `idDivisi` char(4) DEFAULT NULL,
  `tglSp` date DEFAULT NULL,
  PRIMARY KEY (`noSp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "tb_sp"
#

INSERT INTO `tb_sp` VALUES ('SP0001','D003','2020-03-05'),('SP0004','D006','2020-03-04'),('SP0005','D013','2020-03-04'),('SP0006','D006','2020-03-04'),('SP0007','D002','2020-03-05'),('SP0008','D002','2020-03-05'),('SP0009','D003','2020-03-05'),('SP0010','D004','2020-03-10'),('SP0011','D002','2020-03-10'),('SP0012','D003','2020-03-10');
