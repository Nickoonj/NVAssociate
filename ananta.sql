-- MySQL dump 10.13  Distrib 8.0.32, for Linux (x86_64)
--
-- Host: localhost    Database: dbananta
-- ------------------------------------------------------
-- Server version	8.0.32-0ubuntu0.20.04.2

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `addons`
--

DROP TABLE IF EXISTS `addons`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `addons` (
  `id` int NOT NULL AUTO_INCREMENT,
  `add_on_type_id` int DEFAULT NULL,
  `add_on_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `add_on_type_json` varchar(2500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time` int DEFAULT NULL,
  `month_day` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int NOT NULL,
  `status` smallint NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_DB652637AE5A6E89` (`add_on_type_id`),
  CONSTRAINT `FK_DB652637AE5A6E89` FOREIGN KEY (`add_on_type_id`) REFERENCES `addons_type` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `addons`
--

LOCK TABLES `addons` WRITE;
/*!40000 ALTER TABLE `addons` DISABLE KEYS */;
INSERT INTO `addons` VALUES (11,1,'Plan One','{\"size\":\"5\"}',120,'Days',1200,1,'2023-03-08 05:34:04',NULL),(12,2,'Plan Two','{\"size\":\"10\"}',100,'Days',1000,1,'2023-03-08 05:34:47',NULL),(13,3,'Plan Three','{\"size\":\"10\"}',100,'Days',1200,1,'2023-03-08 05:35:06',NULL),(14,4,'Plan Four','{\"size\":\"6\"}',150,'Days',1500,1,'2023-03-08 05:35:32',NULL),(15,5,'Plan Five','{\"size\":\"10000\"}',110,'Days',1100,1,'2023-03-08 05:35:48',NULL),(16,6,'Plan Six','{\"Task_Manager\":\"on\",\"File_Manager\":\"on\",\"E_Commerce\":\"off\",\"Template_Customization\":\"off\",\"Live_Report_Client_Mobile_App\":\"off\"}',100,'Days',1200,1,'2023-03-08 05:36:01',NULL);
/*!40000 ALTER TABLE `addons` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `addons_type`
--

DROP TABLE IF EXISTS `addons_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `addons_type` (
  `id` int NOT NULL AUTO_INCREMENT,
  `addons_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `addons_type`
--

LOCK TABLES `addons_type` WRITE;
/*!40000 ALTER TABLE `addons_type` DISABLE KEYS */;
INSERT INTO `addons_type` VALUES (1,'Storage Space','2023-03-03 16:06:00',NULL),(2,'No. Of Clients','2023-03-03 16:06:00',NULL),(3,'No. Of Employees','2023-03-03 16:06:00',NULL),(4,'No. Of Client Login','2023-03-03 16:06:00',NULL),(5,'No. Of Transactions','2023-03-03 16:06:00',NULL),(6,'Features List','2023-03-03 16:06:00',NULL);
/*!40000 ALTER TABLE `addons_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `doctrine_migration_versions`
--

DROP TABLE IF EXISTS `doctrine_migration_versions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8mb3_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `doctrine_migration_versions`
--

LOCK TABLES `doctrine_migration_versions` WRITE;
/*!40000 ALTER TABLE `doctrine_migration_versions` DISABLE KEYS */;
INSERT INTO `doctrine_migration_versions` VALUES ('DoctrineMigrations\\Version20230217104332','2023-02-17 10:43:43',1718),('DoctrineMigrations\\Version20230217115050','2023-02-17 11:50:58',335),('DoctrineMigrations\\Version20230303083346','2023-03-03 08:33:56',225),('DoctrineMigrations\\Version20230303103142','2023-03-03 10:31:51',607),('DoctrineMigrations\\Version20230304100600','2023-03-04 10:06:11',1386),('DoctrineMigrations\\Version20230307055820','2023-03-07 05:58:28',715),('DoctrineMigrations\\Version20230308055740','2023-03-08 05:57:48',199),('DoctrineMigrations\\Version20230308055846','2023-03-08 05:58:52',188),('DoctrineMigrations\\Version20230308064417','2023-03-08 06:44:22',212),('DoctrineMigrations\\Version20230308064528','2023-03-08 06:45:32',203);
/*!40000 ALTER TABLE `doctrine_migration_versions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `promo_codes`
--

DROP TABLE IF EXISTS `promo_codes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `promo_codes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `promo_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `promo_description` longtext COLLATE utf8mb4_unicode_ci,
  `promo_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_category` int NOT NULL,
  `life_of_code` int NOT NULL,
  `use_per_user` int NOT NULL,
  `terms_condition` longtext COLLATE utf8mb4_unicode_ci,
  `status` smallint NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `display_on_portal` tinyint(1) NOT NULL,
  `discount_amount` int NOT NULL,
  `maximum_discount_amount` int NOT NULL,
  `maximum_order_value` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `promo_codes`
--

LOCK TABLES `promo_codes` WRITE;
/*!40000 ALTER TABLE `promo_codes` DISABLE KEYS */;
INSERT INTO `promo_codes` VALUES (5,'First','This is for testing','Percentage','2023-03-08 12:00:00','2023-03-10 12:00:00','All',1,10,10,'10',1,'2023-03-08 06:48:11',NULL,0,10,10,10),(6,'Second','This is for testing','Price','2023-03-09 13:00:00','2023-03-10 12:00:00','All',1,8,7,'This is for testing',1,'2023-03-08 06:49:34',NULL,0,1000,100,100),(7,'Three','This is for testing','Percentage','2023-03-09 13:00:00','2023-03-15 11:00:00','All',1,11,11,'This is for testing',1,'2023-03-08 06:50:16',NULL,0,11,11,11);
/*!40000 ALTER TABLE `promo_codes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reset_password_request`
--

DROP TABLE IF EXISTS `reset_password_request`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `reset_password_request` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `selector` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hashed_token` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `requested_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  `expires_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  PRIMARY KEY (`id`),
  KEY `IDX_7CE748AA76ED395` (`user_id`),
  CONSTRAINT `FK_7CE748AA76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reset_password_request`
--

LOCK TABLES `reset_password_request` WRITE;
/*!40000 ALTER TABLE `reset_password_request` DISABLE KEYS */;
/*!40000 ALTER TABLE `reset_password_request` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subscriptions`
--

DROP TABLE IF EXISTS `subscriptions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `subscriptions` (
  `id` int NOT NULL AUTO_INCREMENT,
  `plan_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` int NOT NULL,
  `month_day` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_of_clients` int NOT NULL,
  `no_of_clients_login` int NOT NULL,
  `no_of_employee` int NOT NULL,
  `no_of_transaction` int NOT NULL,
  `storage_size` int NOT NULL,
  `price` int NOT NULL,
  `display_on_portal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `task_manager` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_manager` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_login_app` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `e_commerce` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `template_customization` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `live_report_client_mobile_app` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  `updated_at` datetime DEFAULT NULL COMMENT '(DC2Type:datetime_immutable)',
  `deleted_at` datetime DEFAULT NULL COMMENT '(DC2Type:datetime_immutable)',
  `caemployee_and_owner_login` int NOT NULL,
  `client_owner_and_employee_login` int NOT NULL,
  `client_vendor_login` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subscriptions`
--

LOCK TABLES `subscriptions` WRITE;
/*!40000 ALTER TABLE `subscriptions` DISABLE KEYS */;
INSERT INTO `subscriptions` VALUES (1,'Gold Plan 1',120,'Days',6,3,6,100001,11,8000,'1','1','1','','1','','',1,'2023-02-21 08:59:25',NULL,NULL,0,0,0),(2,'Test 1',120,'Days',6,3,6,1000,11,7000,'','1','','','','','',1,'2023-02-21 09:37:30',NULL,NULL,0,0,0),(5,'Test 3',120,'Days',5,5,5,5,10,3000,'','1','1','','1','','',1,'2023-02-23 05:07:24',NULL,NULL,0,0,0),(7,'Test 3',123,'Days',3,3,3,3,12,213,'','1','','','','','',1,'2023-02-23 06:56:14',NULL,NULL,0,0,0),(8,'Test 32',232,'Days',1,1,1,1,21,213,'','1','1','','','','',1,'2023-02-23 06:56:34',NULL,NULL,0,0,0),(9,'Test 1',12321,'Days',21,1,1,12,21,123,'','1','1','','1','','',1,'2023-02-23 06:56:52',NULL,NULL,0,0,0),(10,'fdfsd',123,'Days',12,1,12,12,2,2133,'','1','','','','','',1,'2023-02-23 06:57:11',NULL,NULL,0,0,0),(11,'2332',213,'Days',213,12,21,12,21,213,'','1','1','','1','','',1,'2023-02-23 06:57:41',NULL,NULL,0,0,0),(12,'Test 3',213,'Days',21,21,21,23,213,213123,'','1','1','','1','','',1,'2023-02-23 06:58:23',NULL,NULL,0,0,0),(13,'Gold Plan 11',120,'Days',8,8,8,8,11,6000,'','1','1','','1','1','',1,'2023-02-24 13:33:32',NULL,NULL,0,0,0),(14,'Alpesh\'s Plan',121,'Days',8,10,9,1000,4,5500,'','1','1','','1','','',1,'2023-03-01 17:10:02',NULL,NULL,0,0,0),(15,'New Subscription 03032023',120,'Days',10,0,5,12000,11,2000,'','1','1','','1','','',1,'2023-03-03 08:44:34',NULL,NULL,7,8,9);
/*!40000 ALTER TABLE `subscriptions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` json NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_verified` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'admin@gmail.com','[]','$2y$13$3pmIAwvFbEqGcLtxgj6STOiOhIf2UezKHlzdbrKyj.E31MrLYgsUq',1);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-03-09  9:49:10
