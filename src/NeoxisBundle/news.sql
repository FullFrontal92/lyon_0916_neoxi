-- MySQL dump 10.13  Distrib 5.7.16, for Linux (x86_64)
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
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `news`
--

LOCK TABLES `news` WRITE;
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` VALUES (17,'/images/banque/image_actu6.jpg','Fraude et sécurité : tout savoir sur la fraude aux paiements','jeudi 03 novembre, 14h27','<p class=\"MsoNormal m_-1823544452209071357gmail_msg\" style=\"text-align: justify;\">Toutes les entreprises sont susceptibles d&rsquo;&ecirc;tre touch&eacute;es par la fraude au paiement. La fin du fax de confirmation des paiements en EBICS T est annonc&eacute;e fin 2016 par les &eacute;tablissements bancaires.</p>\r\n<p class=\"MsoNormal m_-1823544452209071357gmail_msg\" style=\"text-align: justify;\">D&eacute;sormais le protocole doit &ecirc;tre s&eacute;curis&eacute; par l&rsquo;apposition d&rsquo;une signature &eacute;lectronique. Les banques et les &eacute;diteurs de logiciels recommandent donc la signature &eacute;lectronique bancaire de type EBICS TS lors des &eacute;changes bancaires comme moyen de pr&eacute;vention des fraudes aux paiements.</p>\r\n<p style=\"text-align: justify;\">Pour chacune de vos banques, il faudra revoir le process de vos &eacute;changes EBICS actuels. Prenez vos dispositions et anticipez pour &eacute;viter l&rsquo;effet d&rsquo;&eacute;tranglement de cette mise en place qui aura forc&eacute;ment lieu sur d&eacute;cembre.</p>'),(18,'/images/banque/image_actu7.jpg','Marchés publics : la facture électronique obligatoire dès 2017','jeudi 03 novembre, 14h31','<p class=\"MsoNormal m_-1823544452209071357gmail_msg\" style=\"text-align: justify;\"><span class=\"m_-1823544452209071357gmail_msg\">D\'ici 2020, toutes les factures entre l&rsquo;Etat et ses fournisseurs seront d&eacute;mat&eacute;rialis&eacute;es. Le dispositif n&rsquo;est pas nouveau : depuis le 1er janvier 2012, en effet, tous les fournisseurs ont la possibilit&eacute; de transmettre leurs factures de fa&ccedil;on d&eacute;mat&eacute;rialis&eacute;e. Aujourd&rsquo;hui, l&rsquo;objectif est de g&eacute;n&eacute;raliser ce dispositif et de l\'&eacute;largir aux &eacute;tablissements publics et aux collectivit&eacute;s territoriales. Pour mener &agrave; bien ce projet strat&eacute;gique de modernisation de l&rsquo;Etat et de simplification pour les entreprises, un calendrier et un dispositif technique provisoire ont &eacute;t&eacute; retenus.</span></p>\r\n<p class=\"MsoNormal m_-1823544452209071357gmail_msg\" style=\"text-align: justify;\"><strong><span class=\"m_-1823544452209071357gmail_msg\">Le calendrier d&rsquo;obligation de facturation &eacute;lectronique:</span> </strong><span class=\"m_-1823544452209071357gmail_msg\">L&rsquo;ordonnance du 26 juin 2014 d&eacute;finit le calendrier d&rsquo;obligation de facturation &eacute;lectronique pour les &eacute;metteurs de factures &agrave; destination de l&rsquo;Etat, des collectivit&eacute;s territoriales et de leurs &eacute;tablissements publics respectifs :</span></p>\r\n<p><span class=\"m_-1823544452209071357gmail_msg\">1er janvier 2017 : obligation pour les grandes entreprises (plus de 5 000 salari&eacute;s) et les personnes publiques ;</span><br /><span class=\"m_-1823544452209071357gmail_msg\">1er janvier 2018 : obligation pour les entreprises de taille interm&eacute;diaire (250 &agrave; 5 000 salari&eacute;s) ;</span><br /><span class=\"m_-1823544452209071357gmail_msg\">1er janvier 2019 : obligation pour les petites et moyennes entreprises (10 &agrave; 250 salari&eacute;s) ;</span><br /><span class=\"m_-1823544452209071357gmail_msg\">1er janvier 2020 : obligation pour les tr&egrave;s petites entreprises (moins de 10 salari&eacute;s).</span><br /><span class=\"m_-1823544452209071357gmail_msg\"> Cette disposition g&eacute;n&eacute;ralise par ailleurs aux collectivit&eacute;s territoriales et &agrave; tous les &eacute;tablissements publics, l&rsquo;obligation faite &agrave; l&rsquo;Etat d&rsquo;accepter les factures &eacute;lectroniques.</span></p>\r\n<p style=\"text-align: justify;\"><span class=\"m_-1823544452209071357gmail_msg\">Dans le cadre de la strat&eacute;gie europ&eacute;enne pour le num&eacute;rique, la directive europ&eacute;enne relative &agrave; la facturation &eacute;lectronique dans les march&eacute;s publics de 2014 relaie l\'obligation de la facture &eacute;lectronique dans les march&eacute;s publics et insiste sur l&rsquo;&eacute;laboration d\'une norme europ&eacute;enne afin d\'assurer l\'interop&eacute;rabilit&eacute; entre les diff&eacute;rents syst&egrave;mes pour la plupart nationaux.</span></p>'),(20,'/images/banque/image_actu12.jpg','Logiciels de Paies : Mise en production de la Phase 3 de la DSN','jeudi 03 novembre, 14h32','<p class=\"MsoNormal m_-4872237951615984963gmail_msg\" style=\"text-align: justify;\"><span class=\"m_-4872237951615984963gmail_msg\">La DSN phase 3 a &eacute;t&eacute; mise en production le 27 septembre 2016. Elle constitue le prolongement de la DSN Phase 2, &agrave; laquelle s&rsquo;ajoutent de nouveaux organismes de protection sociale et de nouvelles fonctionnalit&eacute;s. La phase 3 s&rsquo;appuie sur la s&eacute;curisation des phases ant&eacute;rieures et remplacera ainsi de nombreuses proc&eacute;dures :</span> </p>\r\n<p><span class=\"m_-4872237951615984963gmail_msg\">L&rsquo;attestation employeur</span><br /><span class=\"m_-4872237951615984963gmail_msg\">La DMMO/l&rsquo;EMMO</span><br /><span class=\"m_-4872237951615984963gmail_msg\">La radiation des contrats compl&eacute;mentaires</span><br /><span class=\"m_-4872237951615984963gmail_msg\">La DUCS Urssaf </span><br /><span class=\"m_-4872237951615984963gmail_msg\">Le relev&eacute; mensuel de mission (Int&eacute;rim)</span><br /><span class=\"m_-4872237951615984963gmail_msg\">Les autres DUCS (retraite compl&eacute;mentaire, pr&eacute;voyance&hellip;)</span><br /><span class=\"m_-4872237951615984963gmail_msg\">Les d&eacute;clarations de cotisations MSA (BVM, DTS)</span></p>\r\n<p class=\"MsoNormal m_-4872237951615984963gmail_msg\" style=\"text-align: justify;\"><span class=\"m_-4872237951615984963gmail_msg\">Lorsqu&rsquo;un an de DSN phase 3 auront &eacute;t&eacute; transmises, la DADSU (campagne 2018 pour les entreprises en phase 3 en janvier 2017). &Agrave; partir de janvier 2017 : le recouvrement des r&eacute;gimes sp&eacute;ciaux ou particuliers. La phase 3 alimentera par ailleurs le compte personnel de formation et le compte p&eacute;nibilit&eacute;. <br /></span></p>\r\n<p style=\"text-align: justify;\"><span class=\"m_-4872237951615984963gmail_msg\"><strong>Important</strong> : La g&eacute;n&eacute;ralisation obligatoire de la DSN &agrave; l&rsquo;ensemble des entreprises en janvier prochain reposera sur la phase 3. N&rsquo;attendez pas pour vous y pr&eacute;parer !</span></p>');
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

-- Dump completed on 2016-11-03 14:33:31
