-- MySQL dump 10.13  Distrib 5.7.43, for Linux (x86_64)
--
-- Host: localhost    Database: sharoel1_sharoel_studio
-- ------------------------------------------------------
-- Server version	5.7.43

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
-- Table structure for table `cache`
--

DROP TABLE IF EXISTS `cache`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int(11) NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache`
--

LOCK TABLES `cache` WRITE;
/*!40000 ALTER TABLE `cache` DISABLE KEYS */;
INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES ('admin@example.com|51.195.255.103','i:1;',1745693700),('admin@example.com|51.195.255.103:timer','i:1745693699;',1745693699),('sharoelstudio@gmail.com|37.201.192.72','i:1;',1740424223),('sharoelstudio@gmail.com|37.201.192.72:timer','i:1740424223;',1740424223);
/*!40000 ALTER TABLE `cache` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cache_locks`
--

DROP TABLE IF EXISTS `cache_locks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int(11) NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache_locks`
--

LOCK TABLES `cache_locks` WRITE;
/*!40000 ALTER TABLE `cache_locks` DISABLE KEYS */;
/*!40000 ALTER TABLE `cache_locks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `main_image_id` bigint(20) unsigned DEFAULT NULL,
  `order_num` int(11) DEFAULT NULL,
  PRIMARY KEY (`slug`),
  UNIQUE KEY `order_unique_index` (`order_num`),
  KEY `categories_main_image_id_foreign` (`main_image_id`),
  CONSTRAINT `categories_main_image_id_foreign` FOREIGN KEY (`main_image_id`) REFERENCES `images` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` (`slug`, `main_image_id`, `order_num`) VALUES ('children',14,3),('family',13,4),('in_nature',20,5),('indoors',6,6),('maternity',18,1),('newborn',9,2);
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comments` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comments`
--

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `images` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `category_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `images_category_slug_foreign` (`category_slug`),
  CONSTRAINT `images_category_slug_foreign` FOREIGN KEY (`category_slug`) REFERENCES `categories` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `images`
--

LOCK TABLES `images` WRITE;
/*!40000 ALTER TABLE `images` DISABLE KEYS */;
INSERT INTO `images` (`id`, `category_slug`, `created_at`, `updated_at`) VALUES (1,'children','2025-01-06 17:33:59','2025-01-06 17:33:59'),(2,'newborn','2025-01-06 17:39:02','2025-01-06 17:39:02'),(3,'children','2025-01-06 17:40:13','2025-01-06 17:40:13'),(4,'in_nature','2025-01-06 17:40:22','2025-01-06 17:40:22'),(5,'maternity','2025-01-06 17:40:32','2025-01-06 17:40:32'),(6,'indoors','2025-01-06 17:40:53','2025-01-06 17:40:53'),(7,'in_nature','2025-01-06 17:41:13','2025-01-06 17:41:13'),(8,'newborn','2025-01-06 17:41:33','2025-01-06 17:41:33'),(9,'newborn','2025-01-06 17:44:04','2025-01-06 17:44:04'),(10,'indoors','2025-01-06 17:44:34','2025-01-06 17:44:34'),(11,'family','2025-01-06 17:45:32','2025-01-06 17:45:32'),(12,'children','2025-01-06 17:45:41','2025-01-06 17:45:41'),(13,'family','2025-01-06 17:45:53','2025-01-06 17:45:53'),(14,'children','2025-01-06 17:46:02','2025-01-06 17:46:02'),(15,'maternity','2025-01-06 17:48:12','2025-01-06 17:48:12'),(16,'maternity','2025-01-06 17:48:33','2025-01-06 17:48:33'),(17,'maternity','2025-01-06 17:48:59','2025-01-06 17:48:59'),(18,'maternity','2025-01-06 17:49:09','2025-01-06 17:49:09'),(19,'maternity','2025-01-06 17:49:24','2025-01-06 17:49:24'),(20,'in_nature','2025-01-06 17:49:39','2025-01-06 17:49:39'),(21,'in_nature','2025-01-06 17:49:50','2025-01-06 17:49:50'),(22,'in_nature','2025-01-06 17:49:58','2025-01-06 17:49:58'),(23,'in_nature','2025-01-06 17:50:05','2025-01-06 17:50:05'),(24,'children','2025-01-07 05:05:17','2025-01-07 05:05:17'),(25,'family','2025-01-07 05:06:38','2025-01-07 05:06:38'),(26,'maternity','2025-02-27 09:12:36','2025-02-27 09:12:36'),(27,'maternity','2025-02-27 09:13:43','2025-02-27 09:13:43'),(28,'family','2025-03-16 04:27:09','2025-03-16 04:27:09'),(29,'family','2025-04-10 10:23:21','2025-04-10 10:23:21'),(30,'children','2025-04-10 10:23:59','2025-04-10 10:23:59'),(31,'children','2025-04-10 10:25:54','2025-04-10 10:25:54'),(32,'maternity','2025-04-10 11:07:18','2025-04-10 11:07:18'),(33,'maternity','2025-04-10 11:07:31','2025-04-10 11:07:31'),(34,'maternity','2025-04-10 11:07:50','2025-04-10 11:07:50'),(35,'children','2025-04-26 15:33:16','2025-04-26 15:33:16'),(36,'children','2025-04-26 15:34:00','2025-04-26 15:34:00'),(37,'children','2025-04-26 15:36:44','2025-04-26 15:36:44');
/*!40000 ALTER TABLE `images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `job_batches`
--

DROP TABLE IF EXISTS `job_batches`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `job_batches`
--

LOCK TABLES `job_batches` WRITE;
/*!40000 ALTER TABLE `job_batches` DISABLE KEYS */;
/*!40000 ALTER TABLE `job_batches` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint(3) unsigned NOT NULL,
  `reserved_at` int(10) unsigned DEFAULT NULL,
  `available_at` int(10) unsigned NOT NULL,
  `created_at` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jobs`
--

LOCK TABLES `jobs` WRITE;
/*!40000 ALTER TABLE `jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `media`
--

DROP TABLE IF EXISTS `media`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `media` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) unsigned NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `collection_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mime_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `conversions_disk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` bigint(20) unsigned NOT NULL,
  `manipulations` json NOT NULL,
  `custom_properties` json NOT NULL,
  `generated_conversions` json NOT NULL,
  `responsive_images` json NOT NULL,
  `order_column` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `media_uuid_unique` (`uuid`),
  KEY `media_model_type_model_id_index` (`model_type`,`model_id`),
  KEY `media_order_column_index` (`order_column`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `media`
--

LOCK TABLES `media` WRITE;
/*!40000 ALTER TABLE `media` DISABLE KEYS */;
INSERT INTO `media` (`id`, `model_type`, `model_id`, `uuid`, `collection_name`, `name`, `file_name`, `mime_type`, `disk`, `conversions_disk`, `size`, `manipulations`, `custom_properties`, `generated_conversions`, `responsive_images`, `order_column`, `created_at`, `updated_at`) VALUES (1,'App\\Models\\Image',1,'ccadefa7-d6c2-4b6e-b762-518dd28cd7c9','images','children','ez6wBNrFoQNYORfAhA9xiYYEuFVOTMBwM0T5znq1.jpeg','image/jpeg','public','public',73996,'[]','[]','[]','[]',1,'2025-01-06 17:33:59','2025-01-06 17:33:59'),(2,'App\\Models\\Image',2,'39ac7c60-ecb4-442c-a774-864b7e50d24f','images','newborn','QvpieYHy9vfazkuGumdowZfmRHSWfcBtqwUVG8nW.jpeg','image/jpeg','public','public',89259,'[]','[]','[]','[]',1,'2025-01-06 17:39:02','2025-01-06 17:39:02'),(3,'App\\Models\\Image',3,'665da673-0f10-41d5-9ebc-38d4dae8830e','images','image7','8GffLSJxsevJBzqtivS4mK6WzwaNhDqI21NgOft3.jpeg','image/jpeg','public','public',115867,'[]','[]','[]','[]',1,'2025-01-06 17:40:13','2025-01-06 17:40:13'),(4,'App\\Models\\Image',4,'b0a53f51-32fd-4226-8bd8-70c46eb8a570','images','slide3','KGHXdOlxyJozJNc6ljWphtFF39rB3UgMuxSxnupw.jpeg','image/jpeg','public','public',159023,'[]','[]','[]','[]',1,'2025-01-06 17:40:22','2025-01-06 17:40:22'),(5,'App\\Models\\Image',5,'3020e310-a0b6-42c2-819a-b887e1f5e335','images','maternity','yaImeaeCw6lOpoqBp4zaueFWficW8ML4HdNQjhEE.jpg','image/jpeg','public','public',447318,'[]','[]','[]','[]',1,'2025-01-06 17:40:32','2025-01-06 17:40:32'),(6,'App\\Models\\Image',6,'d25dffc5-3163-452e-b22b-a52fb869cc22','images','indoors','vYnrytFUr2IwPUeYsPOfHI7MwWVpm5uViQAF1giX.jpg','image/jpeg','public','public',95917,'[]','[]','[]','[]',1,'2025-01-06 17:40:53','2025-01-06 17:40:53'),(7,'App\\Models\\Image',7,'cf5c4244-2747-4cb0-b11c-79d81ced2f5f','images','in_nature','wkC0iVBKw0HFIOdK9BSmNJJEarZCjynR8PTvhxO7.jpeg','image/jpeg','public','public',66379,'[]','[]','[]','[]',1,'2025-01-06 17:41:13','2025-01-06 17:41:13'),(8,'App\\Models\\Image',8,'75d5d1e3-9662-4e75-9501-e56d36ca3eaa','images','newborn1','C0ao6Pv94YO24wQZEzHwIlFEONjoIZMB3i0ltFdS.jpeg','image/jpeg','public','public',60969,'[]','[]','[]','[]',1,'2025-01-06 17:41:33','2025-01-06 17:41:33'),(9,'App\\Models\\Image',9,'6a77c3b5-55d8-41a5-a1da-ec3be9fb01a2','images','newborn','spGQ5Ul1JXcl6w6A671jen1nTwG4zogFMyGU5qqx.jpg','image/jpeg','public','public',8476799,'[]','[]','[]','[]',1,'2025-01-06 17:44:04','2025-01-06 17:44:04'),(10,'App\\Models\\Image',10,'56b1c935-1ee2-4053-a00e-bea680b5ffc5','images','cat1','xnyBjKQCy3PAH3XvdfYGrmdZz0ySw3R6RnYH9B6W.jpeg','image/jpeg','public','public',75143,'[]','[]','[]','[]',1,'2025-01-06 17:44:34','2025-01-06 17:44:34'),(11,'App\\Models\\Image',11,'be076074-051c-40fe-904a-4a8b87c7a2e4','images','family','mBLQ9Lohyb4kLLQDTYapauvPpLsBqRIkyHXKXomO.jpg','image/jpeg','public','public',7510504,'[]','[]','[]','[]',1,'2025-01-06 17:45:32','2025-01-06 17:45:32'),(12,'App\\Models\\Image',12,'c5cbaee2-1b65-4ed5-a460-611fd9f02ebd','images','slide4','MzTRVS9jC1o6XBli3g3QiP0pAGy4VUdHRbhyVirx.jpeg','image/jpeg','public','public',59664,'[]','[]','[]','[]',1,'2025-01-06 17:45:41','2025-01-06 17:45:41'),(13,'App\\Models\\Image',13,'e73e7673-8ce7-4339-bcff-1068781da35c','images','family_01','ocweQKR7tVQWiD4ICOcEjT9VDV7MWdsV5mH7P1mk.jpg','image/jpeg','public','public',138074,'[]','[]','[]','[]',1,'2025-01-06 17:45:53','2025-01-06 17:45:53'),(14,'App\\Models\\Image',14,'4a1d3f73-ee59-4cbc-8f25-1b8a9a6501e3','images','children_01','eUayfiLhrsl5ZAc0oC3mGnMT7eTA7E9g9pVDjUyH.jpg','image/jpeg','public','public',95334,'[]','[]','[]','[]',1,'2025-01-06 17:46:02','2025-01-06 17:46:02'),(15,'App\\Models\\Image',15,'2a185380-eb7e-4ae3-9689-2e13f0dea035','images','photo_2025-01-06_20-58-15','OKmLVF1Up5V5vd8R7jKDUV7yNgRQ9FKqzkQbSE3C.jpg','image/jpeg','public','public',65486,'[]','[]','[]','[]',1,'2025-01-06 17:48:12','2025-01-06 17:48:12'),(16,'App\\Models\\Image',16,'e035bacc-c292-429c-bac6-bcfbd15f29cf','images','photo_2025-01-06_20-58-21','RqQbmacPOBusLSdIhXgVb0CF5Fd19fmiEbyiTvDZ.jpg','image/jpeg','public','public',37243,'[]','[]','[]','[]',1,'2025-01-06 17:48:33','2025-01-06 17:48:33'),(17,'App\\Models\\Image',17,'94ffe1aa-d201-4ff0-8f0f-ef4be6dba9f5','images','photo_2025-01-06_20-58-24','ugEK48iV9pwkOpWv8vrzBTSWahzhgghyUX4FoivA.jpg','image/jpeg','public','public',49328,'[]','[]','[]','[]',1,'2025-01-06 17:48:59','2025-01-06 17:48:59'),(18,'App\\Models\\Image',18,'ac3d3ec7-086a-4597-8506-d3f1a688fc9b','images','photo_2025-01-06_20-58-27','A1LoXZsGCZ5S42B9KS3HxiugOiiKOCVS6p6cepBd.jpg','image/jpeg','public','public',44823,'[]','[]','[]','[]',1,'2025-01-06 17:49:09','2025-01-06 17:49:09'),(19,'App\\Models\\Image',19,'a2c2dbab-10df-4f31-93fa-f08b72038911','images','photo_2025-01-06_20-58-29','V2BOBZbAFS86QzxxXDJTviElj8iBXJ1eIHkRjqq6.jpg','image/jpeg','public','public',35743,'[]','[]','[]','[]',1,'2025-01-06 17:49:24','2025-01-06 17:49:24'),(20,'App\\Models\\Image',20,'f1c5120e-d687-4404-a8c2-ae4f3ccbe45d','images','photo_2025-01-06_20-58-33','8rMscw2uqvnMRfLt8FXjWeI8iY9sqRBjuy3oK7Yg.jpg','image/jpeg','public','public',91762,'[]','[]','[]','[]',1,'2025-01-06 17:49:39','2025-01-06 17:49:39'),(21,'App\\Models\\Image',21,'b6fbc880-df61-4a39-ac3a-feedfaf98292','images','photo_2025-01-06_20-58-35','qAhnJgYFRkEl4jL4II6Wl0SktkxIscb3wzRaA3BQ.jpg','image/jpeg','public','public',102612,'[]','[]','[]','[]',1,'2025-01-06 17:49:50','2025-01-06 17:49:50'),(22,'App\\Models\\Image',22,'a76d263b-107f-4739-91a1-bd6568309893','images','photo_2025-01-06_20-58-37','EC76Pp4MRSHRP27DXnx2lzCZf5yD0S2kxQ8Pi1xU.jpg','image/jpeg','public','public',103545,'[]','[]','[]','[]',1,'2025-01-06 17:49:58','2025-01-06 17:49:58'),(23,'App\\Models\\Image',23,'acff540b-e461-4fda-ae54-5f1605794192','images','photo_2025-01-06_20-58-39','ny2aEjB1EvbZE7jNmInbDDp6nh15mqMZgMUHx0P7.jpg','image/jpeg','public','public',76678,'[]','[]','[]','[]',1,'2025-01-06 17:50:05','2025-01-06 17:50:05'),(24,'App\\Models\\Image',24,'36e4773b-2f53-47d5-9660-e45b9b1dcb6a','images','photo_2025-01-07_12-03-38','RHztQ9PO4Rb4sWhdwnMXXNkDDLHF1wur8xrOPQlf.jpg','image/jpeg','public','public',83176,'[]','[]','[]','[]',1,'2025-01-07 05:05:20','2025-01-07 05:05:20'),(25,'App\\Models\\Image',25,'ca7fc03f-1b8c-4e36-ab46-4a7f9a1a6111','images','photo_2025-01-07_12-03-41','HlZBjHXPgpCntLYM43f2a3DSxXhUR1VV7gcAEvDQ.jpg','image/jpeg','public','public',94974,'[]','[]','[]','[]',1,'2025-01-07 05:06:38','2025-01-07 05:06:38'),(26,'App\\Models\\Image',26,'d1a369eb-d03b-421b-9346-a75696cb7bb7','images','photo_2025-02-27_13-58-13','n6yl2Maws7lIvo2fnczAgNfUbAz0TjtuHzIKIa6b.jpg','image/jpeg','public','public',38632,'[]','[]','[]','[]',1,'2025-02-27 09:12:37','2025-02-27 09:12:37'),(27,'App\\Models\\Image',27,'7d808fd4-07cf-4e49-ac5f-f5052346d1c9','images','photo_2025-02-27_13-58-11','idCfRZSG8GefnrpJpAauWuVJfsdC310lYM7f8Xox.jpg','image/jpeg','public','public',59980,'[]','[]','[]','[]',1,'2025-02-27 09:13:43','2025-02-27 09:13:43'),(28,'App\\Models\\Image',28,'1a273293-05e0-4b3f-8096-633af7c3fa74','images','photo_2025-03-16_11-26-24','kVGCDGVDqI1DneJkHgNgq4Szkq46JYcPo6xeo7eK.jpg','image/jpeg','public','public',152523,'[]','[]','[]','[]',1,'2025-03-16 04:27:09','2025-03-16 04:27:09'),(29,'App\\Models\\Image',29,'4c6ddda0-2843-4bc4-ad5e-3d961cb571f0','images','photo_2025-04-10_17-22-12','sj3oOHl8hitB6utuToegRs9iwK4b3BL7aTl3katA.jpg','image/jpeg','public','public',130346,'[]','[]','[]','[]',1,'2025-04-10 10:23:21','2025-04-10 10:23:21'),(30,'App\\Models\\Image',30,'7c1da369-6c78-4e64-a355-709c56dc191c','images','photo_2025-04-10_17-22-18','8TB7nCd09n712wz2AEnYDG1PyThyBdLKMsmX1s2B.jpg','image/jpeg','public','public',57760,'[]','[]','[]','[]',1,'2025-04-10 10:23:59','2025-04-10 10:23:59'),(31,'App\\Models\\Image',31,'6e2b70ce-adf0-4568-a856-310930c2edf5','images','photo_2025-04-10_17-22-16','WwX6MkGXmBL725UgkGBiYDMtxylfeQ8a07Ma22FV.jpg','image/jpeg','public','public',58395,'[]','[]','[]','[]',1,'2025-04-10 10:25:54','2025-04-10 10:25:54'),(32,'App\\Models\\Image',32,'5c29be84-ad6f-4cea-863d-38713f124ca9','images','photo_2025-04-10_18-06-10','HGUhQDee3gQ679B7p8QKVIOp25GWxRV4b2SUqdSv.jpg','image/jpeg','public','public',34397,'[]','[]','[]','[]',1,'2025-04-10 11:07:18','2025-04-10 11:07:18'),(33,'App\\Models\\Image',33,'0129acb8-76e4-47dd-9add-c19e9cdbc710','images','photo_2025-04-10_18-06-08','YGNEmbi6YetcKWEyKngmM4oMzFBNUfvOAAtaWPO8.jpg','image/jpeg','public','public',42430,'[]','[]','[]','[]',1,'2025-04-10 11:07:31','2025-04-10 11:07:31'),(34,'App\\Models\\Image',34,'ec972d7a-e188-41c2-a079-0e7513986efa','images','photo_2025-04-10_18-06-06','sDxgk36BlXvSf1EiRboTIcYceiwu8dymjPMzZLLN.jpg','image/jpeg','public','public',68952,'[]','[]','[]','[]',1,'2025-04-10 11:07:50','2025-04-10 11:07:50'),(35,'App\\Models\\Image',35,'82e73987-96a9-4c9d-a1b4-b89083fffc76','images','photo_1_2025-04-26_22-32-16','pGcjKIdrtMWv0y96GYpcnFJoOCnuHSYNNzCSUCQx.jpg','image/jpeg','public','public',45723,'[]','[]','[]','[]',1,'2025-04-26 15:33:16','2025-04-26 15:33:16'),(36,'App\\Models\\Image',36,'a130c7fb-9625-48a1-a33e-177fb599552c','images','photo_2_2025-04-26_22-32-16','XeFps1zPXktJSxg7juA7CV8Rhy2K6nEmvQ4HLKpg.jpg','image/jpeg','public','public',51038,'[]','[]','[]','[]',1,'2025-04-26 15:34:00','2025-04-26 15:34:00'),(37,'App\\Models\\Image',37,'64597ca3-afc7-49fc-9f35-356a691ad8cb','images','photo_3_2025-04-26_22-32-16','epJ8sad2FEh4hUdzafuRjB9X64Icg1k8R64Q6cLD.jpg','image/jpeg','public','public',42574,'[]','[]','[]','[]',1,'2025-04-26 15:36:45','2025-04-26 15:36:45');
/*!40000 ALTER TABLE `media` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (1,'0001_01_01_000000_create_users_table',1),(2,'0001_01_01_000001_create_cache_table',1),(3,'0001_01_01_000002_create_jobs_table',1),(4,'2020_12_03_212858_create_categories_table',1),(5,'2024_12_05_083048_create_comments_table',1),(6,'2024_12_05_135521_create_plans_table',1),(7,'2024_12_05_212016_create_media_table',1),(8,'2024_12_05_212859_create_images_table',1),(9,'2025_01_05_175505_add_thunbnail_id_foreign_key_to_categories_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reset_tokens`
--

LOCK TABLES `password_reset_tokens` WRITE;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `plans`
--

DROP TABLE IF EXISTS `plans`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `plans` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `discounted_price` double NOT NULL DEFAULT '0',
  `is_discounted` tinyint(1) NOT NULL DEFAULT '0',
  `discount_text_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discount_text_fa` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discount_text_de` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `plans`
--

LOCK TABLES `plans` WRITE;
/*!40000 ALTER TABLE `plans` DISABLE KEYS */;
INSERT INTO `plans` (`id`, `name`, `price`, `discounted_price`, `is_discounted`, `discount_text_en`, `discount_text_fa`, `discount_text_de`) VALUES (1,'basic',270,165,1,NULL,NULL,NULL),(2,'silver',450,250,1,NULL,NULL,NULL),(3,'gold',675,345,1,NULL,NULL,NULL),(4,'videography',250,200,1,NULL,NULL,NULL);
/*!40000 ALTER TABLE `plans` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES ('9JrqnUYrqcwigNxDiZ63rQUloW9L2X0LyYc7YyA6',NULL,'196.251.66.237','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.114 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoiQURUVVlrY1BXbXJFTExZRFFteUV6N0xtQkI1ZkIwRTlEWGxIa01iNiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjM6Imh0dHA6Ly9zaGFyb2Vsc3R1ZGlvLmRlIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1751278177),('bS6HkZ9kd1UTfDxbw4VpzhCpQBhoOd9NhcOjJ0Vl',NULL,'47.82.60.20','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36 Edg/114.0.1823.43','YTozOntzOjY6Il90b2tlbiI7czo0MDoiOEhMQmtLcFNpeVNVSkVUY3M4QTBJeWVsd0drbEQweXR1TFJzMEVuWCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDc6Imh0dHA6Ly9zaGFyb2Vsc3R1ZGlvLmRlL2ZhL2NhdGVnb3JpZXMvaW5fbmF0dXJlIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1751283188),('dhCj5N8L1Mte1l1WZGwhl6RVWfjbLlwVeBE3OhsY',NULL,'185.191.171.16','Mozilla/5.0 (compatible; SemrushBot/7~bl; +http://www.semrush.com/bot.html)','YTozOntzOjY6Il90b2tlbiI7czo0MDoiQ3RFVWgyUUxzM2dxdWhMRmVGVzl0aGs4QTFycDBwWkVldjlVRjliWiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHBzOi8vc2hhcm9lbHN0dWRpby5kZS9lbi9nYWxsZXJ5Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1751283091),('HLFcP2eRdM9cIeNDgLgQPdaovhEUHgtrEYebFvh1',NULL,'185.151.155.4','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/133.0.0.0 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoiMmwzcWRGUVZlNHhYaFhIVEM0QTB4YTdmSXRnOHdVeUtVTDdQa0g5SSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjM6Imh0dHA6Ly9zaGFyb2Vsc3R1ZGlvLmRlIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1751285267),('JAC7hRtK8GgkuDEs1OVoJlv6U6hwuD5PeJggFULC',NULL,'185.191.171.16','Mozilla/5.0 (compatible; SemrushBot/7~bl; +http://www.semrush.com/bot.html)','YTozOntzOjY6Il90b2tlbiI7czo0MDoiY1VRNEhZSkdJNHAyN2g2VUtXYXRVMjdQeEV4SWxTMEhTSEtVZ1JDRCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHBzOi8vc2hhcm9lbHN0dWRpby5kZS9lbi9nYWxsZXJ5Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1751283091),('mhihy6NIF4sxPzp82JXCKyeROZdBNxeV80NhB1pH',NULL,'57.141.0.20','meta-externalagent/1.1 (+https://developers.facebook.com/docs/sharing/webmasters/crawler)','YTozOntzOjY6Il90b2tlbiI7czo0MDoiRDdSMW9yMERCVnEzTzhVb1J0TkVFeTBKcUJIUkdoUHBCaXVjRGt1SSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjg6Imh0dHBzOi8vd3d3LnNoYXJvZWxzdHVkaW8uZGUiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19',1751284126);
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES (1,'admin','admin@example.com','2025-01-06 17:32:30','$2y$12$3EQtw4RemlC6J8/D.ekgg.DiNaGGvKUpm9u2GJ7E1j2TyL5RpiTNy','o4V74NTlyQnfPBsk66uIgCd6Kfcy2bNfD47vXZCHuhzORNekbNFkAjvIpDxr','2025-01-06 17:32:30','2025-01-06 17:32:30');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'sharoel1_sharoel_studio'
--

--
-- Dumping routines for database 'sharoel1_sharoel_studio'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-06-30 17:08:57
