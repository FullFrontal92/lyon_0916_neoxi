-- MySQL dump 10.13  Distrib 5.7.15, for Linux (x86_64)
--
-- Host: localhost    Database: neoxi_db
-- ------------------------------------------------------
-- Server version	5.7.13-0ubuntu0.16.04.2

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `picture` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `date` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `text` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `news`
--

LOCK TABLES `news` WRITE;
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` VALUES (1,'images/actu1_home.jpg','Fraude et sécurité : tout savoir sur la fraude aux paiements','mardi 18 octobre 2016, 17h30','Toutes les entreprises sont susceptibles d’être touchées par la fraude au paiement.\r\n\r\nLa fin du fax de confirmation des paiements en EBICS T est annoncée fin 2016 par les établissements bancaires.\r\n\r\nDésormais le protocole doit être sécurisé par l’apposition d’une signature électronique.\r\n\r\nLes banques et les éditeurs de logiciels recommandent donc la signature électronique bancaire de type EBICS TS\r\n\r\nlors des échanges bancaires comme moyen de prévention des fraudes aux paiements\r\n\r\n \r\n\r\nPour chacune de vos banques, il faudra revoir le process de vos échanges EBICS actuels.\r\n\r\n \r\n\r\nPrenez vos dispositions et anticipez pour éviter l’effet d’étranglement de cette mise en place qui aura forcément lieu sur décembre.'),(2,'images/actu1_home.jpg','Marchés publics : la facture électronique obligatoire dès 2017','mardi 18 octobre 2016, 17h30','D\'ici 2020, toutes les factures entre l’Etat et ses fournisseurs seront dématérialisées. Le dispositif n’est pas nouveau : depuis le 1er janvier 2012, en effet, tous les fournisseurs ont la possibilité de transmettre leurs factures de façon dématérialisée. Aujourd’hui, l’objectif est de généraliser ce dispositif et de l\'élargir aux établissements publics et aux collectivités territoriales. Pour mener à bien ce projet stratégique de modernisation de l’Etat et de simplification pour les entreprises, un calendrier et un dispositif technique provisoire ont été retenus.\r\n\r\nLe calendrier d’obligation de facturation électronique\r\n\r\n \r\n\r\nL’ordonnance du 26 juin 2014 définit le calendrier d’obligation de facturation électronique pour les émetteurs de factures à destination de l’Etat, des collectivités territoriales et de leurs établissements publics respectifs :\r\n\r\n1er janvier 2017 : obligation pour les grandes entreprises (plus de 5 000 salariés) et les personnes publiques ;\r\n\r\n1er janvier 2018 : obligation pour les entreprises de taille intermédiaire (250 à 5 000 salariés) ;\r\n\r\n1er janvier 2019 : obligation pour les petites et moyennes entreprises (10 à 250 salariés) ;\r\n\r\n1er janvier 2020 : obligation pour les très petites entreprises (moins de 10 salariés).\r\n\r\n \r\n\r\nCette disposition généralise par ailleurs aux collectivités territoriales et à tous les établissements publics, l’obligation faite à l’Etat d’accepter les factures électroniques.\r\n\r\n \r\n\r\nDans le cadre de la stratégie européenne pour le numérique, la directive européenne relative à la facturation électronique dans les marchés publics de 2014 relaie l\'obligation de la facture électronique dans les marchés publics et insiste sur l’élaboration d\'une norme européenne afin d\'assurer l\'interopérabilité entre les différents systèmes pour la plupart nationaux'),(3,'images/actu1_home.jpg','Logiciels de Paies : Mise en production de la Phase 3 de la DSN : ouverture le 27 septembre !','mardi 18 octobre 2016, 17h30','La DSN phase 3 a été mise en production le 27 septembre 2016.\r\n\r\nElle constitue le prolongement de la DSN Phase 2, à laquelle s’ajoutent de nouveaux organismes de protection sociale et de nouvelles fonctionnalités.\r\n\r\nLa phase 3 s’appuie sur la sécurisation des phases antérieures et remplacera ainsi de nombreuses procédures : \r\n\r\n  \r\n\r\nL’attestation employeur\r\n\r\nLa DMMO/l’EMMO\r\n\r\nLa radiation des contrats complémentaires\r\n\r\nLa DUCS Urssaf\r\n\r\nLe relevé mensuel de mission (Intérim)\r\n\r\nLes autres DUCS (retraite complémentaire, prévoyance…)\r\n\r\nLes déclarations de cotisations MSA (BVM, DTS)\r\n\r\nLorsqu’un an de DSN phase 3 auront été transmises, la DADSU (campagne 2018 pour les entreprises en phase 3 en janvier 2017)\r\n\r\nÀ partir de janvier 2017 : le recouvrement des régimes spéciaux ou particuliers\r\n\r\n La phase 3 alimentera par ailleurs le compte personnel de formation et le compte pénibilité.\r\n\r\n    \r\n\r\nImportant : La généralisation obligatoire de la DSN à l’ensemble des entreprises en janvier prochain reposera sur la phase 3.\r\n\r\nN’attendez pas pour vous y préparer !');
/*!40000 ALTER TABLE `news` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-10-25 16:04:12
