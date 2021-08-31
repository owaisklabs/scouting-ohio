/*
SQLyog Ultimate v13.1.1 (64 bit)
MySQL - 10.4.19-MariaDB : Database - national_db
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


/*Table structure for table `academic_infos` */

DROP TABLE IF EXISTS `academic_infos`;

CREATE TABLE `academic_infos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `User_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `gpa` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `act` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `class_rank` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transcript` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attach_act_sat_result` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `football_bio` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desire_majro_in_college` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `clearing_house_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hobbies_extracurricular_activities` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `academic_infos` */

insert  into `academic_infos`(`id`,`User_id`,`created_at`,`updated_at`,`gpa`,`act`,`class_rank`,`transcript`,`attach_act_sat_result`,`football_bio`,`desire_majro_in_college`,`sat`,`clearing_house_id`,`hobbies_extracurricular_activities`) values 
(1,16,'2021-08-03 21:12:29','2021-08-08 01:59:24','2.5','Recusandae Mollitia','20',NULL,'1JpnxiywZc.pdf',NULL,'Sint magna hic reru','145','Aliquip dolores aut','Excepturi aliqua Ne');

/*Table structure for table `addtional_coaches` */

DROP TABLE IF EXISTS `addtional_coaches`;

CREATE TABLE `addtional_coaches` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `addtional_coaches` */

insert  into `addtional_coaches`(`id`,`user_id`,`created_at`,`updated_at`,`name`,`email`) values 
(5,18,'2021-08-02 23:25:18','2021-08-02 23:25:18','pusu@mailinator.com','pyxeqo@mailinator.com'),
(7,18,'2021-08-03 00:49:28','2021-08-03 00:59:35','kjkjkjkjkjkjkjkjk@mailinator.com','baralyxobo@mailinator.com'),
(8,18,'2021-08-03 00:49:50','2021-08-03 00:49:50','pusu@mailinator.com','pyxeqo@mailinator.com');

/*Table structure for table `articles` */

DROP TABLE IF EXISTS `articles`;

CREATE TABLE `articles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `articles` */

insert  into `articles`(`id`,`image`,`content`,`title`,`created_at`,`updated_at`,`deleted_at`) values 
(4,'rY4pDCY3cI.jpg','Welcome to National Specialist Database. You will be a part of something special. You are a part of a ‘Specialist Database’ that all college coaches will have access too! Through your individual customized profile, you can now use this profile as a 1 stop','coke.com','2021-05-25 16:49:21','2021-07-10 02:54:26','2021-07-10 02:54:26'),
(8,'r95wneqMiJ.png','Id error numquam as','Et ut accusamus nisi','2021-07-10 04:21:24','2021-07-14 22:51:09','2021-07-14 22:51:09'),
(9,'9AV4RdBXHu.png','Ad voluptatem qui cu Ad voluptatem qui cu Ad voluptatem qui cu Ad voluptatem qui cu Ad voluptatem qui cu Ad voluptatem qui cu Ad voluptatem qui cu Ad voluptatem qui cu Ad voluptatem qui cu Ad voluptatem qui cu','Sunt possimus atqu','2021-07-10 04:41:33','2021-07-10 04:41:33',NULL),
(10,'FPSngDPiYy.jpg','Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident  Nemo quia proident','Eos laborum veritat','2021-07-13 01:44:58','2021-07-14 23:27:40','2021-07-14 23:27:40'),
(11,'olq0j9mVgl.png','Fugit quis ut est c Fugit quis ut est cFugit quis ut est cFugit quis ut est cFugit quis ut est cFugit quis ut est cFugit quis ut est cFugit quis ut est c Fugit quis ut est c Fugit quis ut est c Fugit quis ut est c Fugit quis ut est c Fugit quis ut est c','Deserunt neque quis','2021-07-14 23:22:12','2021-07-14 23:22:16','2021-07-14 23:22:16'),
(12,'fLLUS0BFY6.png','Ut dignissimos rerum Ut dignissimos rerum Ut dignissimos rerum Ut dignissimos rerum Ut dignissimos rerum Ut dignissimos rerum Ut dignissimos rerum Ut dignissimos rerum Ut dignissimos rerum Ut dignissimos rerum Ut dignissimos rerum Ut dignissimos rerum Ut dignissimos rerum Ut dignissimos rerum Ut dignissimos rerum Ut dignissimos rerum Ut dignissimos rerum Ut dignissimos rerum Ut dignissimos rerum Ut dignissimos rerum Ut dignissimos rerum Ut dignissimos rerum Ut dignissimos rerum Ut dignissimos rerum Ut dignissimos rerum Ut dignissimos rerum Ut dignissimos rerum Ut dignissimos rerum Ut dignissimos rerum Ut dignissimos rerum Ut dignissimos rerum Ut dignissimos rerum Ut dignissimos rerum Ut dignissimos rerum Ut dignissimos rerum Ut dignissimos rerum Ut dignissimos rerum Ut dignissimos rerum Ut dignissimos rerum Ut dignissimos rerum Ut dignissimos rerum Ut dignissimos rerum Ut dignissimos rerum Ut dignissimos rerum Ut dignissimos rerum Ut dignissimos rerum Ut dignissimos rerum Ut dignissimos rerum Ut dignissimos rerum Ut dignissimos rerum Ut dignissimos rerum Ut dignissimos rerum Ut dignissimos rerum Ut dignissimos rerum Ut dignissimos rerum Ut dignissimos rerum Ut dignissimos rerum Ut dignissimos rerum Ut dignissimos rerum Ut dignissimos rerum','Cupiditate aut asper','2021-07-15 23:42:17','2021-07-15 23:42:17',NULL),
(13,'Kmn78TvJQO.pdf','Irure tempora expedi Irure tempora expedi Irure tempora expedi Irure tempora expedi Irure tempora expedi Irure tempora expedi Irure tempora expedi Irure tempora expedi Irure tempora expedi Irure tempora expedi Irure tempora expedi\r\nIrure tempora expedi Irure tempora expedi Irure tempora expedi Irure tempora expedi Irure tempora expedi Irure tempora expedi Irure tempora expedi Irure tempora expedi Irure tempora expedi Irure tempora expedi Irure tempora expedi\r\nIrure tempora expedi Irure tempora expedi Irure tempora expedi Irure tempora expedi Irure tempora expedi Irure tempora expedi Irure tempora expedi Irure tempora expedi Irure tempora expedi Irure tempora expedi Irure tempora expedi','Irure tempora expedi Irure tempora expedi Irure tempora expedi Irure tempora expedi Irure tempora expedi Irure tempora expedi Irure tempora expedi Irure tempora expedi Irure tempora expedi Irure tempora expedi Irure tempora expedi','2021-07-28 00:59:45','2021-07-28 01:00:46','2021-07-28 01:00:46');

/*Table structure for table `banners` */

DROP TABLE IF EXISTS `banners`;

CREATE TABLE `banners` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `page` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitle` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `banners` */

insert  into `banners`(`id`,`created_at`,`updated_at`,`page`,`title`,`subtitle`,`description`,`image`,`status`,`deleted_at`) values 
(1,'2021-05-25 16:37:31','2021-05-25 16:45:44','Main','Pride And','Passion Meets','Success','xKo6n0HU7s.jpg','Inactive',NULL),
(2,'2021-05-25 16:38:33','2021-05-25 16:47:00','About Us Home','About Us','Welcome to the National Specialist Database! The only database in the industry created by specialists for specialists! The 1st of its kind Centralized Database & Specialist Resource guide!','Welcome to National Specialist Database. You will be a part of something special. You are a part of a ‘Specialist Database’ that all college coaches will have access too! Through your individual customized profile, you can now use this profile as a 1 stop shop.','jq4zZ7VRO4.jpg','Inactive',NULL),
(3,'2021-05-25 16:42:46','2021-06-24 03:49:02','Main Video','asd','asd','https://www.youtube.com/embed/ujKsB72nfuk','JCUdcXRcYI.jpg','Inactive',NULL),
(4,'2021-05-25 16:58:46','2021-06-23 04:27:07','About Us Main','ABOUT US',NULL,'Welcome to the National Specialist Database! The most comprehensive database for Kickers, Punters, and Long Snappers for the college recruiting process.\r\n\r\nYour all in one player database will give you everything you need for college coaches to see.\r\n\r\nYou no longer need to be listed on an evaluation platform for college coaches to find you. This database will provide an opportunity for everything to be found!\r\n\r\nJoin Us Today!','EV5RH29sQB.jpg','Inactive',NULL);

/*Table structure for table `brands` */

DROP TABLE IF EXISTS `brands`;

CREATE TABLE `brands` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '#',
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `brands` */

insert  into `brands`(`id`,`name`,`link`,`image`,`created_at`,`updated_at`,`deleted_at`) values 
(1,'brand 1','https://www.coca-colacompany.com','QsudLtkwYK.jpg','2021-05-25 16:56:46','2021-05-25 16:56:46',NULL),
(2,'brand 1','https://en.cdprojektred.com/','RBcTh3uXPs.jpg','2021-05-25 16:56:55','2021-05-25 16:56:55',NULL),
(3,'Gatorade','https://en.cdprojektred.com/','G0nBvbWQWa.jpg','2021-05-25 16:57:12','2021-05-25 16:57:12',NULL),
(4,'asd','https://www.coca-colacompany.com','Ajl1CIETCK.jpg','2021-05-25 16:57:19','2021-05-25 16:57:19',NULL),
(5,'ads','https://www.coca-colacompany.com','ZBJgUTXWgb.jpg','2021-05-25 16:57:27','2021-05-25 16:57:27',NULL);

/*Table structure for table `change_fields` */

DROP TABLE IF EXISTS `change_fields`;

CREATE TABLE `change_fields` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `change_value` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `change_filed` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `change_fields` */

insert  into `change_fields`(`id`,`user_id`,`change_value`,`change_filed`,`created_at`,`updated_at`) values 
(1,16,'{\"updated_at\":\"2021-08-13 06:16:04\",\"hudle\":\"fkfjp jkjao kdkd\",\"facebook\":\"ksksps djdid  ksa\",\"instagram\":\"ala;dl  adjdj aadn\",\"snapchat\":\"ksksap akjdian ja\"}',NULL,'2021-08-13 06:16:04','2021-08-13 06:16:04'),
(2,16,'{\"updated_at\":\"2021-08-14 04:01:43\",\"player_country\":\"Henry\"}',NULL,'2021-08-14 04:01:43','2021-08-14 04:01:43'),
(4,16,'{\"updated_at\":\"2021-08-19 00:07:17\",\"facebook\":\"https:\\/\\/www.facebook.com\\/Cristiano\",\"instagram\":\"https:\\/\\/www.instagram.com\\/cristiano\\/\"}',NULL,'2021-08-19 00:07:17','2021-08-19 00:07:17'),
(5,16,'{\"fullname\":\"Tarik Cross\",\"best_college_poition\":\"Dolor quo sint incid\",\"high_school\":\"Ea dolores odio faci\",\"offensive\":\"Voluptatem ad reicie\",\"class_off\":\"Quaerat nulla ullam\",\"secondry_offensive\":\"In consectetur volu\",\"jersey_number\":\"762\",\"defensive\":\"Commodi debitis anim\",\"height\":\"Sed elit qui expedi\",\"secondry_defensive\":\"Tempore non in in e\",\"weight\":\"Dolorum ut dolores q\",\"special_team_position\":\"Necessitatibus atque\",\"offer\":\"Rerum aliquam nemo a\",\"updated_at\":\"2021-08-27 23:52:34\"}',NULL,'2021-08-27 23:52:34','2021-08-27 23:52:34'),
(6,16,'{\"fullname\":\"Tara Wagner\",\"best_college_poition\":\"Voluptates quod sit\",\"high_school\":\"Voluptas expedita ul\",\"offensive\":\"Aliquam qui modi eli\",\"class_off\":\"Ea repudiandae maior\",\"secondry_offensive\":\"Impedit cupidatat p\",\"jersey_number\":\"431\",\"defensive\":\"Sed voluptates vel e\",\"height\":\"Ut quidem quidem occ\",\"secondry_defensive\":\"Sunt eos veritatis\",\"weight\":\"Non pariatur Laudan\",\"special_team_position\":\"Vel dolor omnis sunt\",\"offer\":\"Qui autem sed laudan\",\"updated_at\":\"2021-08-27 23:52:47\"}',NULL,'2021-08-27 23:52:47','2021-08-27 23:52:47'),
(7,16,'{\"updated_at\":\"2021-08-27 23:52:57\",\"ft_40_yard_dash\":\"Repellendus Ad exer\",\"timed_by\":\"In Nam totam pariatu\",\"ft_20_yd_shuttle\":\"Consequatur dolores\",\"ft_100_meter_dash\":\"Minim dolore mollit\",\"bench_max_1_rep\":\"Quo sapiente consequ\",\"bench_reps_at_185\":\"Aliquam vel ipsam ut\",\"vertical_jump\":\"Ea veniam dolore op\",\"broad_jump\":\"Enim ab sunt mollit\",\"bench_reps_at_225\":\"Velit dolore fugiat\",\"squat\":\"Cillum dolor ut anim\",\"power_clean\":\"Alias aut mollit vel\",\"dead_lift\":\"Aut mollitia proiden\",\"football_post_season_honors\":\"Temporibus minima si\",\"football_statics\":\"Ratione do laborum\",\"other_sports_and_athletic_honors\":\"Ad aliquip qui lorem\",\"Hobbies_extracurricular_activities\":\"Libero veritatis eni\",\"Camp_combines\":\"Voluptates perferend\",\"list_college_recruiting_you\":\"At corporis voluptat\",\"list_official_college_visits_you_will_tak_have_taken\":\"Officia doloremque n\"}',NULL,'2021-08-27 23:52:57','2021-08-27 23:52:57'),
(8,16,'{\"high_school\":null,\"offensive\":null,\"secondry_offensive\":null,\"defensive\":null,\"secondry_defensive\":null,\"updated_at\":\"2021-08-27 23:53:24\"}',NULL,'2021-08-27 23:53:24','2021-08-27 23:53:24'),
(9,16,'[]',NULL,'2021-08-28 02:02:02','2021-08-28 02:02:02');

/*Table structure for table `coach_player_messages` */

DROP TABLE IF EXISTS `coach_player_messages`;

CREATE TABLE `coach_player_messages` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `sender_id` bigint(20) unsigned NOT NULL,
  `receiver_id` bigint(20) unsigned NOT NULL,
  `message` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `coach_player_messages` */

insert  into `coach_player_messages`(`id`,`sender_id`,`receiver_id`,`message`,`created_at`,`updated_at`) values 
(1,31,16,'Hello mike','2021-08-10 02:42:23','2021-08-10 02:42:26'),
(2,16,31,'Hello Coach','2021-08-10 02:43:23','2021-08-10 02:43:25'),
(3,16,31,'How are you','2021-08-10 02:43:44','2021-08-10 02:43:48'),
(4,31,16,'Iam Fine','2021-08-10 02:44:04','2021-08-10 02:44:07'),
(10,31,16,'your Match is tomorrow','2021-08-10 05:07:09','2021-08-10 05:07:09'),
(14,31,16,'hello johnny','2021-08-10 21:56:39','2021-08-10 21:56:39'),
(18,16,31,'hello coach','2021-08-10 22:21:58','2021-08-10 22:21:58'),
(19,16,31,'hello','2021-08-10 22:56:48','2021-08-10 22:56:48'),
(20,31,21,'hello','2021-08-11 01:07:42','2021-08-11 01:07:42'),
(21,16,31,'hello','2021-08-23 21:42:22','2021-08-23 21:42:22'),
(22,21,31,'4546554654','2021-08-25 05:06:44','2021-08-25 05:06:44');

/*Table structure for table `coach_players` */

DROP TABLE IF EXISTS `coach_players`;

CREATE TABLE `coach_players` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `coach_id` bigint(20) unsigned NOT NULL,
  `player_id` bigint(20) unsigned NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `coach_players` */

insert  into `coach_players`(`id`,`coach_id`,`player_id`,`status`,`created_at`,`updated_at`) values 
(17,31,16,'ACCEPTED','2021-08-10 22:18:39','2021-08-10 22:18:42'),
(19,31,21,'ACCEPTED','2021-08-11 01:04:30','2021-08-11 01:04:30');

/*Table structure for table `contacts` */

DROP TABLE IF EXISTS `contacts`;

CREATE TABLE `contacts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `contacts` */

/*Table structure for table `countries` */

DROP TABLE IF EXISTS `countries`;

CREATE TABLE `countries` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `region_id` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=90 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `countries` */

insert  into `countries`(`id`,`name`,`region_id`,`created_at`,`updated_at`) values 
(1,'Williams',1,'2021-08-14 01:51:01','2021-08-14 01:51:36'),
(2,'Fulton',1,'2021-08-14 01:51:03','2021-08-14 01:51:41'),
(3,'Lucas',1,'2021-08-14 01:51:06','2021-08-14 01:51:39'),
(4,'Defiance',1,'2021-08-14 01:51:07','2021-08-14 01:51:43'),
(5,'Henry',1,'2021-08-14 01:51:10','2021-08-14 01:51:45'),
(6,'Wood',1,'2021-08-14 01:51:12','2021-08-14 01:51:48'),
(7,'Paulding',1,'2021-08-14 01:51:14','2021-08-14 01:51:50'),
(8,'Putnam',1,'2021-08-14 01:51:16','2021-08-14 01:51:52'),
(9,'Hancock',1,'2021-08-14 01:51:19','2021-08-14 01:51:55'),
(10,'Van Wert',1,'2021-08-14 01:51:22','2021-08-14 01:51:58'),
(11,'Allen',1,'2021-08-14 01:51:27','2021-08-14 01:52:00'),
(12,'Mercer',1,'2021-08-14 01:51:32','2021-08-14 01:52:05'),
(13,'Auglaize',1,'2021-08-14 01:51:29','2021-08-14 01:52:03'),
(14,'Erie',2,'2021-08-14 03:05:10','2021-08-14 03:08:22'),
(15,'Lorain',2,'2021-08-14 03:05:15','2021-08-14 03:08:24'),
(16,'Cuyahoga',2,'2021-08-14 03:05:18','2021-08-14 03:08:25'),
(17,'Geauga',2,'2021-08-14 03:05:22','2021-08-14 03:08:29'),
(18,'Lake',2,'2021-08-14 03:05:25','2021-08-14 03:08:27'),
(19,'Ashtabula',2,'2021-08-14 03:05:28','2021-08-14 03:08:34'),
(20,'Huron',2,'2021-08-14 03:05:30','2021-08-14 03:08:32'),
(21,'Ashland',2,'2021-08-14 03:05:34','2021-08-14 03:08:38'),
(22,'Medina',2,'2021-08-14 03:05:38','2021-08-14 03:08:35'),
(23,'Summit',2,'2021-08-14 03:05:36','2021-08-14 03:08:41'),
(24,'Portage',2,'2021-08-14 03:05:42','2021-08-14 03:08:40'),
(25,'Trumbull',2,'2021-08-14 03:05:45','2021-08-14 03:08:45'),
(26,'Richland',2,'2021-08-14 03:05:48','2021-08-14 03:08:43'),
(27,'Wayne',2,'2021-08-14 03:05:52','2021-08-14 03:08:49'),
(28,'Holmes',2,'2021-08-14 03:05:50','2021-08-14 03:08:47'),
(29,'Coshocton',2,'2021-08-14 03:05:57','2021-08-14 03:08:53'),
(30,'Stark',2,'2021-08-14 03:05:55','2021-08-14 03:08:51'),
(31,'Tuscarawas',2,'2021-08-14 03:06:03','2021-08-14 03:08:57'),
(32,'Carroll',2,'2021-08-14 03:05:59','2021-08-14 03:08:55'),
(33,'Harrison',2,'2021-08-14 03:06:06','2021-08-14 03:09:01'),
(34,'Mahoning',2,'2021-08-14 03:06:01','2021-08-14 03:08:59'),
(35,'Columbiana',2,'2021-08-14 03:06:11','2021-08-14 03:10:34'),
(36,'Jefferson',2,'2021-08-14 03:06:15','2021-08-14 03:10:36'),
(37,'Hardin',3,'2021-08-14 03:06:19','2021-08-14 03:10:53'),
(38,'Marion',3,'2021-08-14 03:06:22','2021-08-14 03:10:37'),
(39,'Morrow',3,'2021-08-14 03:06:24','2021-08-14 03:10:58'),
(40,'Knox',3,'2021-08-14 03:06:27','2021-08-14 03:10:56'),
(41,'Union',3,'2021-08-14 03:06:25','2021-08-14 03:11:02'),
(42,'Delaware',3,'2021-08-14 03:06:36','2021-08-14 03:11:04'),
(43,'Licking',3,'2021-08-14 03:06:29','2021-08-14 03:11:08'),
(44,'Madison',3,'2021-08-14 03:06:38','2021-08-14 03:11:06'),
(45,'Franklin',3,'2021-08-14 03:06:42',NULL),
(46,'Fayette',3,'2021-08-14 03:06:40',NULL),
(47,'Pickaway',3,'2021-08-14 03:06:45',NULL),
(48,'Fairfield',3,'2021-08-14 03:06:43',NULL),
(49,'Hocking',3,'2021-08-14 03:06:50',NULL),
(50,'Perry',3,'2021-08-14 03:06:47',NULL),
(51,'Darke',4,'2021-08-14 03:06:53',NULL),
(52,'Preble',4,'2021-08-14 03:06:51',NULL),
(53,'Butler',4,'2021-08-14 03:06:56',NULL),
(54,'Hamilton',4,'2021-08-14 03:06:54',NULL),
(55,'Shelby',4,'2021-08-14 03:07:01',NULL),
(56,'Miami',4,'2021-08-14 03:06:58',NULL),
(57,'Montgomery',4,'2021-08-14 03:07:05',NULL),
(58,'Warren',4,'2021-08-14 03:07:03',NULL),
(59,'Clermont',4,'2021-08-14 03:07:09',NULL),
(60,'Logan',4,'2021-08-14 03:07:13',NULL),
(61,'Champaign',4,'2021-08-14 03:07:11',NULL),
(62,'Clark',4,'2021-08-14 03:07:17',NULL),
(63,'Greene',4,'2021-08-14 03:07:15',NULL),
(64,'Clinton',4,'2021-08-14 03:07:20',NULL),
(65,'Highland',4,'2021-08-14 03:07:18',NULL),
(66,'Adams',4,'2021-08-14 03:07:24',NULL),
(67,'Ross',5,'2021-08-14 03:07:23',NULL),
(68,'Pike',5,'2021-08-14 03:07:30',NULL),
(69,'Scioto',5,'2021-08-14 03:07:28',NULL),
(70,'Vinton',5,'2021-08-14 03:07:27',NULL),
(71,'Jackson',5,'2021-08-14 03:07:34',NULL),
(72,'Lawrence',5,'2021-08-14 03:07:32',NULL),
(73,'Muskingum',5,'2021-08-14 03:07:37',NULL),
(74,'Morgan',5,'2021-08-14 03:07:36',NULL),
(75,'Athens',5,'2021-08-14 03:07:41',NULL),
(76,'Meigs',5,'2021-08-14 03:07:39',NULL),
(77,'Gallia',5,'2021-08-14 03:07:48',NULL),
(78,'Guernsey',5,'2021-08-14 03:07:43',NULL),
(79,'Noble',5,'2021-08-14 03:07:51',NULL),
(80,'Washington',5,'2021-08-14 03:07:50',NULL),
(81,'Belmont',5,'2021-08-14 03:07:55',NULL),
(82,'Monroe',5,'2021-08-14 03:07:53',NULL),
(83,'Sandusky',1,'2021-08-14 03:07:59',NULL),
(84,'Ottawa',1,'2021-08-14 03:07:57',NULL),
(85,'Seneca',1,'2021-08-14 03:08:01',NULL),
(86,'Wyandot',1,'2021-08-14 03:08:05',NULL),
(87,'Crawford',1,'2021-08-14 03:08:04',NULL),
(88,'Brown',4,'2021-08-14 03:08:09',NULL);

/*Table structure for table `features` */

DROP TABLE IF EXISTS `features`;

CREATE TABLE `features` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `features` */

insert  into `features`(`id`,`content`,`created_at`,`updated_at`,`deleted_at`) values 
(1,'Customized URL link for you!','2021-05-25 16:59:55','2021-06-23 04:27:53',NULL),
(2,'List every star rating you have earned on 1 page','2021-05-25 17:00:02','2021-05-25 17:00:02',NULL),
(3,'No need for a twitter limit in this bio','2021-05-25 17:00:07','2021-05-25 17:00:07',NULL),
(4,'List multiple hudl, camp and personal training videos on your profile','2021-05-25 17:00:13','2021-05-25 17:00:13',NULL),
(5,'List your news articles, junior day visits and offers!','2021-05-25 17:00:19','2021-05-25 17:00:19',NULL),
(6,'Most comprehensive player profile in the industry!','2021-05-25 17:00:24','2021-05-25 17:00:24',NULL),
(7,'Created BY Specialists FOR Specialists!','2021-05-25 17:00:28','2021-05-25 17:00:28',NULL);

/*Table structure for table `honor_awards` */

DROP TABLE IF EXISTS `honor_awards`;

CREATE TABLE `honor_awards` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `User_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `football_post_season_honors` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `football_statics` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `other_sports_and_athletic_honors` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hobbies_extracurricular_activities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `honor_awards` */

insert  into `honor_awards`(`id`,`User_id`,`created_at`,`updated_at`,`football_post_season_honors`,`football_statics`,`other_sports_and_athletic_honors`,`hobbies_extracurricular_activities`) values 
(1,16,'2021-08-03 22:02:06','2021-08-03 22:02:06','Est esse tempor quo','Veritatis minim solu','Consequatur ipsum ex','Est quam dolorem sit');

/*Table structure for table `logos` */

DROP TABLE IF EXISTS `logos`;

CREATE TABLE `logos` (
  `id` bigint(20) unsigned NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `logos` */

insert  into `logos`(`id`,`type`,`image`,`created_at`,`updated_at`) values 
(2,'footer','WltAl4YMHF.png','2021-05-25 16:44:13','2021-07-09 21:53:49'),
(3,'favicon','uPw33ZVgsR.png','2021-05-25 16:44:13','2021-07-14 23:42:03'),
(4,'main','cJNlHUeAVZ.png','2021-05-27 17:16:17','2021-07-09 21:52:16');

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(1,'2014_10_12_000000_create_users_table',1),
(2,'2014_10_12_100000_create_password_resets_table',1),
(3,'2016_06_01_000001_create_oauth_auth_codes_table',1),
(4,'2016_06_01_000002_create_oauth_access_tokens_table',1),
(5,'2016_06_01_000003_create_oauth_refresh_tokens_table',1),
(6,'2016_06_01_000004_create_oauth_clients_table',1),
(7,'2016_06_01_000005_create_oauth_personal_access_clients_table',1),
(8,'2019_08_19_000000_create_failed_jobs_table',1),
(9,'2021_04_19_211503_users_type',1),
(10,'2021_04_22_003508_create_logos_table',1),
(11,'2021_04_22_030914_create_settings_table',1),
(12,'2021_05_13_022907_create_banners_table',1),
(13,'2021_05_17_212144_banner_title_subtitle_longtext',1),
(14,'2021_05_17_234622_create_articles_table',1),
(15,'2021_05_18_011132_create_brands_table',1),
(16,'2021_05_18_015933_brands_link_default',1),
(17,'2021_05_18_025100_create_features_table',1),
(18,'2021_05_21_024018_create_packages_table',1),
(19,'2021_05_21_034623_users_registration_fields',1),
(20,'2021_05_23_040721_users_mltiple_types',1),
(21,'2021_05_24_224431_users_profile_section',1),
(22,'2021_05_24_225425_users_info_fields',1),
(23,'2021_05_24_235249_users_coach_fields',1),
(24,'2021_05_25_003319_create_star_ratings_table',1),
(25,'2021_05_25_053220_users_season_stats',1);

/*Table structure for table `oauth_access_tokens` */

DROP TABLE IF EXISTS `oauth_access_tokens`;

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `client_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_access_tokens_user_id_index` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `oauth_access_tokens` */

/*Table structure for table `oauth_auth_codes` */

DROP TABLE IF EXISTS `oauth_auth_codes`;

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `client_id` bigint(20) unsigned NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_auth_codes_user_id_index` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `oauth_auth_codes` */

/*Table structure for table `oauth_clients` */

DROP TABLE IF EXISTS `oauth_clients`;

CREATE TABLE `oauth_clients` (
  `id` bigint(20) unsigned NOT NULL,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_clients_user_id_index` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `oauth_clients` */

/*Table structure for table `oauth_personal_access_clients` */

DROP TABLE IF EXISTS `oauth_personal_access_clients`;

CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint(20) unsigned NOT NULL,
  `client_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `oauth_personal_access_clients` */

/*Table structure for table `oauth_refresh_tokens` */

DROP TABLE IF EXISTS `oauth_refresh_tokens`;

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `oauth_refresh_tokens` */

/*Table structure for table `packages` */

DROP TABLE IF EXISTS `packages`;

CREATE TABLE `packages` (
  `id` bigint(20) unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` decimal(20,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `packages` */

insert  into `packages`(`id`,`title`,`amount`,`created_at`,`updated_at`,`deleted_at`) values 
(1,'Monthly',100.00,'2021-05-25 16:50:38','2021-05-25 16:50:38',NULL),
(2,'Annual',900.00,'2021-05-25 16:50:56','2021-05-25 16:50:56',NULL),
(3,'Lifetime',900.00,'2021-05-25 16:51:13','2021-05-25 16:51:13',NULL),
(4,'Trial',0.00,'2021-05-25 16:51:21','2021-05-25 16:51:21',NULL);

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

insert  into `password_resets`(`email`,`token`,`created_at`) values 
('fredaston49@gmail.com','$2y$10$CEqKA66yx/RDzA8cXpBlJu6rO7iBTLCWv9bGFP3pt.SOOMTyWhqsu','2021-06-24 01:04:12'),
('uzairhyder33@gmail.com','$2y$10$sf92HDBg526SXlVCGzzGauiZpDNL/nZ3/3iLvlsvQQCDPnKfA02Eq','2021-07-01 23:52:30'),
('owaisahmed268@gmail.com','$2y$10$34LK2ij3fOW1AM06L4lfW.SNWZQuBYs4hUwujg5TXCXb/QSWhOjbK','2021-07-19 21:11:04');

/*Table structure for table `player_articles` */

DROP TABLE IF EXISTS `player_articles`;

CREATE TABLE `player_articles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `User_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `upload_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `article_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `player_articles` */

insert  into `player_articles`(`id`,`User_id`,`created_at`,`updated_at`,`upload_image`,`title`,`article_link`) values 
(1,16,'2021-07-31 01:49:32','2021-08-17 22:57:00','Q680cOt0yeyFlHW.png','re demo search','45465465'),
(2,16,'2021-08-03 22:56:12','2021-08-03 23:15:58','ypJMQkG4AASVpuH.png','Est laudantium exe','https://designprosusa.com/blog/blog1'),
(4,16,'2021-08-28 04:37:41','2021-08-28 04:37:41',NULL,'Logan Pennington','https://designprosusa.com/blog/blog1');

/*Table structure for table `player_basic_infos` */

DROP TABLE IF EXISTS `player_basic_infos`;

CREATE TABLE `player_basic_infos` (
  `user_id` bigint(11) DEFAULT NULL,
  `fullname` varchar(191) DEFAULT NULL,
  `best_college_poition` varchar(191) DEFAULT NULL,
  `high_school` varchar(191) DEFAULT NULL,
  `offensive` varchar(191) DEFAULT NULL,
  `class_off` varchar(191) DEFAULT NULL,
  `secondry_offensive` varchar(191) DEFAULT NULL,
  `jersey_number` varchar(191) DEFAULT NULL,
  `defensive` varchar(191) DEFAULT NULL,
  `height` varchar(191) DEFAULT NULL,
  `secondry_defensive` varchar(191) DEFAULT NULL,
  `weight` varchar(191) DEFAULT NULL,
  `special_team_position` varchar(191) DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `offer` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `player_basic_infos` */

insert  into `player_basic_infos`(`user_id`,`fullname`,`best_college_poition`,`high_school`,`offensive`,`class_off`,`secondry_offensive`,`jersey_number`,`defensive`,`height`,`secondry_defensive`,`weight`,`special_team_position`,`id`,`offer`,`created_at`,`updated_at`) values 
(16,'Tara Wagner','Voluptates quod sit',NULL,NULL,'Ea repudiandae maior',NULL,'431',NULL,'Ut quidem quidem occ',NULL,'Non pariatur Laudan','Vel dolor omnis sunt',3,'Qui autem sed laudan','2021-08-08 02:07:33','2021-08-27 23:53:24');

/*Table structure for table `player_combine_results` */

DROP TABLE IF EXISTS `player_combine_results`;

CREATE TABLE `player_combine_results` (
  `id` int(55) unsigned NOT NULL AUTO_INCREMENT,
  `User_id` bigint(55) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `ft_40_yard_dash` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `timed_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ft_20_yd_shuttle` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ft_100_meter_dash` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bench_max_1_rep` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bench_reps_at_185` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vertical_jump` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `broad_jump` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bench_reps_at_225` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `squat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `power_clean` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dead_lift` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `football_post_season_honors` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `football_statics` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `other_sports_and_athletic_honors` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Hobbies_extracurricular_activities` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Camp_combines` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `list_college_recruiting_you` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `list_official_college_visits_you_will_tak_have_taken` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `player_combine_results` */

insert  into `player_combine_results`(`id`,`User_id`,`created_at`,`updated_at`,`ft_40_yard_dash`,`timed_by`,`ft_20_yd_shuttle`,`ft_100_meter_dash`,`bench_max_1_rep`,`bench_reps_at_185`,`vertical_jump`,`broad_jump`,`bench_reps_at_225`,`squat`,`power_clean`,`dead_lift`,`football_post_season_honors`,`football_statics`,`other_sports_and_athletic_honors`,`Hobbies_extracurricular_activities`,`Camp_combines`,`list_college_recruiting_you`,`list_official_college_visits_you_will_tak_have_taken`) values 
(1,16,'2021-08-04 00:28:31','2021-08-27 23:52:57','Repellendus Ad exer','In Nam totam pariatu','Consequatur dolores','Minim dolore mollit','Quo sapiente consequ','Aliquam vel ipsam ut','Ea veniam dolore op','Enim ab sunt mollit','Velit dolore fugiat','Cillum dolor ut anim','Alias aut mollit vel','Aut mollitia proiden','Temporibus minima si','Ratione do laborum','Ad aliquip qui lorem','Libero veritatis eni','Voluptates perferend','At corporis voluptat','Officia doloremque n');

/*Table structure for table `player_evaluations` */

DROP TABLE IF EXISTS `player_evaluations`;

CREATE TABLE `player_evaluations` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `player_grade_evaluation` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `head_coach_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `head_coach_phone_landline` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `head_coach_phone_cell` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `head_coach_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `head_coach_or_team_twitter_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_mumber` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `premium_top_position` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `premium_rank` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `evaluation` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `best_game_film_from_past_season_and_why` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `best_players_on_your_team` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `best_player_you_faced_last_season` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `why_do_you_want_to_play_college_football` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`,`head_coach_phone_landline`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `player_evaluations` */

insert  into `player_evaluations`(`id`,`user_id`,`created_at`,`updated_at`,`player_grade_evaluation`,`head_coach_name`,`head_coach_phone_landline`,`head_coach_phone_cell`,`head_coach_email`,`head_coach_or_team_twitter_link`,`name`,`phone_mumber`,`email`,`premium_top_position`,`premium_rank`,`evaluation`,`best_game_film_from_past_season_and_why`,`best_players_on_your_team`,`best_player_you_faced_last_season`,`why_do_you_want_to_play_college_football`) values 
(2,16,'2021-08-05 02:02:10','2021-08-11 21:07:42','Architecto sunt cill','Josiah Bauer','46','3','jakylelero@mailinator.com','Laboris in minima ex','Benedict Mclean','289','zaxygeriz@mailinator.com','TOP OL - Offensive Line','Fuga Minima dolor N','Odio aliquip omnis p','Est dolor natus qui','Occaecat ex impedit','Ipsa voluptates in','Quis sed ea ipsum r'),
(3,21,'2021-08-05 03:08:33','2021-08-05 03:08:33','Ad iure vel vel non','Josiah Bauer Wallace','66','98','marybybo@mailinator.com','Architecto et iure i','Merritt Mosley','445','sarome@mailinator.com','Aperiam amet fugiat','Iure id quibusdam al','Soluta saepe in nihi','Unde laborum Incidi','Dolore est rerum cum','Et in fugiat explica','Tempore corporis ex');

/*Table structure for table `player_links` */

DROP TABLE IF EXISTS `player_links`;

CREATE TABLE `player_links` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `User_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `hudle` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `snapchat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `database_24_7` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `database_rivals` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `player_links` */

insert  into `player_links`(`id`,`User_id`,`created_at`,`updated_at`,`hudle`,`youtube`,`facebook`,`twitter`,`instagram`,`snapchat`,`database_24_7`,`database_rivals`) values 
(1,16,'2021-08-08 01:59:54','2021-08-19 00:07:17','fkfjp jkjao kdkd','www.youtube.com/freecodecamp','https://www.facebook.com/Cristiano','Wahajahmed02','https://www.instagram.com/cristiano/','ksksap akjdian ja','hgh jyyry','adada'),
(2,21,'2021-08-12 04:23:03','2021-08-12 04:23:03',NULL,NULL,NULL,'fadyzinc8',NULL,NULL,NULL,NULL);

/*Table structure for table `player_personal_infos` */

DROP TABLE IF EXISTS `player_personal_infos`;

CREATE TABLE `player_personal_infos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `User_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `player_home_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `player_city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `player_state` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `player_zipcode` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `player_country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `player_phone_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `player_secondry_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `player_dob` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `male_parent_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `male_parent_phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `male_parent_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `male_parent_occupation` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `male_parent_alma_mater` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `female_parent_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `female_parent_phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `female_parent_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `female_parent_occupation` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `female_parent_alma_mater` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `list_official_college_visits_you_will_tak` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `player_personal_infos` */

insert  into `player_personal_infos`(`id`,`User_id`,`created_at`,`updated_at`,`player_home_address`,`player_city`,`player_state`,`player_zipcode`,`player_country`,`player_phone_number`,`player_secondry_number`,`player_dob`,`male_parent_name`,`male_parent_phone`,`male_parent_email`,`male_parent_occupation`,`male_parent_alma_mater`,`female_parent_name`,`female_parent_phone`,`female_parent_email`,`female_parent_occupation`,`female_parent_alma_mater`,`list_official_college_visits_you_will_tak`) values 
(1,16,'2021-07-29 02:46:21','2021-08-14 04:01:43','Qui impedit accusam','karachi','sind','99438','Henry','+1 (648) 429-5074','874','Sequi omnis fugiat','Jermaine Hobbs','+1 (891) 794-3403','vututyso@mailinator.com','Et in laboriosam et','Maiores consequatur','Hayden Cross','+1 (485) 899-1166','pekakosijy@mailinator.com','Et ipsam quae perfer',NULL,'Quis tempore est au'),
(2,21,'2021-08-14 04:03:06','2021-08-14 04:03:06',NULL,NULL,NULL,NULL,'Allen',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);

/*Table structure for table `player_videos` */

DROP TABLE IF EXISTS `player_videos`;

CREATE TABLE `player_videos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `User_id` bigint(20) NOT NULL,
  `hudl_thumbnail` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hudl_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `player_videos` */

insert  into `player_videos`(`id`,`User_id`,`hudl_thumbnail`,`hudl_link`,`created_at`,`updated_at`) values 
(2,16,'hGjWHKP0nw.png','//www.hudl.com/embed/video/2/12432/60d2838817629a17447df319','2021-07-31 01:51:31','2021-08-18 22:38:37'),
(4,16,'OzqXyKAYh4.png','//www.hudl.com/embed/video/3/15023956/5fe2911b664b6d1450e0c88e','2021-08-18 01:16:27','2021-08-18 23:00:47'),
(5,16,'yUgB5Ud2Gu.jpg','//www.hudl.com/embed/video/3/15023956/5fe2911b664b6d1450e0c88e','2021-08-18 02:54:48','2021-08-18 23:01:16'),
(6,16,'dUfMdYgUW6.png','//www.hudl.com/embed/video/3/15023956/5fe2911b664b6d1450e0c88e','2021-08-18 22:30:24','2021-08-18 22:30:24'),
(7,16,'cXfBSbFirk.png','//www.hudl.com/embed/video/2/12432/60d2838817629a17447df319','2021-08-18 22:38:53','2021-08-18 22:38:53'),
(8,16,'7OtTYorhNQ.png','//www.hudl.com/embed/video/2/12432/60d2838817629a17447df319','2021-08-18 22:39:38','2021-08-18 22:39:38'),
(9,21,'4KLXqTZfUe.png','//www.hudl.com/embed/video/3/15023956/5fe2911b664b6d1450e0c88e','2021-08-18 22:41:19','2021-08-18 22:41:19'),
(10,21,'kdhIjaF8xy.png','//www.hudl.com/embed/video/2/12432/60d2838817629a17447df319','2021-08-18 22:41:40','2021-08-18 22:41:40'),
(11,21,'0s8FjIPyxZ.png','//www.hudl.com/embed/video/2/12432/60d2838817629a17447df319','2021-08-18 22:41:57','2021-08-18 22:41:57'),
(12,21,'L21iurRjSy.png','//www.hudl.com/embed/video/2/12432/60d2838817629a17447df319','2021-08-18 22:42:21','2021-08-18 22:42:21'),
(13,21,'DQXiVaBgS2.jpg','//www.hudl.com/embed/video/3/15023956/5fe2911b664b6d1450e0c88e','2021-08-18 22:43:07','2021-08-18 22:43:07'),
(14,16,'5h9F2wi6QL.png','//www.hudl.com/embed/video/3/15023956/5fe2911b664b6d1450e0c88e','2021-08-28 04:33:44','2021-08-28 04:53:36');

/*Table structure for table `regions` */

DROP TABLE IF EXISTS `regions`;

CREATE TABLE `regions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `regions` */

insert  into `regions`(`id`,`name`,`created_at`,`updated_at`) values 
(1,'northwest ohio','2021-08-14 03:42:37','2021-08-14 03:42:46'),
(2,'northeast ohio','2021-08-14 03:42:39','2021-08-14 03:42:49'),
(3,'central ohio','2021-08-14 03:42:41','2021-08-14 03:42:51'),
(4,'southwest ohio','2021-08-14 03:42:43','2021-08-14 03:42:57'),
(5,'Southeast Ohio','2021-08-14 04:06:44','2021-08-14 04:06:48');

/*Table structure for table `scholarship_offers` */

DROP TABLE IF EXISTS `scholarship_offers`;

CREATE TABLE `scholarship_offers` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `FBS_division_1_colleges` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `FCS_division_1aa_2_and_3_colleges` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `FBS_division_1_college` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `division_FCS_division_1aa_2_and_3_college` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `list_walk_wn_offers` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `walk_on_committment` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `scholarship_offers` */

insert  into `scholarship_offers`(`id`,`user_id`,`FBS_division_1_colleges`,`FCS_division_1aa_2_and_3_colleges`,`FBS_division_1_college`,`division_FCS_division_1aa_2_and_3_college`,`list_walk_wn_offers`,`walk_on_committment`,`created_at`,`updated_at`) values 
(26,21,'Air Force',NULL,'Air Force','Albion',NULL,'Albany State','2021-08-22 01:46:54','2021-08-22 01:46:54'),
(27,21,'Duke',NULL,'Air Force','Albion',NULL,'Albany State','2021-08-22 01:46:54','2021-08-22 01:46:54'),
(28,21,'FIU',NULL,'Air Force','Albion',NULL,'Albany State','2021-08-22 01:46:54','2021-08-22 01:46:54'),
(29,21,NULL,'Albion','Air Force','Albion',NULL,'Albany State','2021-08-22 01:46:54','2021-08-22 01:46:54'),
(30,21,NULL,'Averett','Air Force','Albion',NULL,'Albany State','2021-08-22 01:46:54','2021-08-22 01:46:54'),
(31,21,NULL,'Bryant Bulldogs','Air Force','Albion',NULL,'Albany State','2021-08-22 01:46:54','2021-08-22 01:46:54'),
(32,21,NULL,NULL,'Air Force','Albion','Adrian','Albany State','2021-08-22 01:46:54','2021-08-22 01:46:54'),
(39,50,'Akron',NULL,NULL,NULL,NULL,NULL,'2021-08-27 23:24:36','2021-08-27 23:24:36'),
(40,50,NULL,'Adrian',NULL,NULL,NULL,NULL,'2021-08-27 23:24:36','2021-08-27 23:24:36'),
(41,50,NULL,NULL,NULL,NULL,'Abilene Christian',NULL,'2021-08-27 23:24:36','2021-08-27 23:24:36'),
(45,16,'Air Force',NULL,'Arizona','Bethune-Cookman Wildcats',NULL,'Citadel Bulldogs','2021-08-28 05:17:21','2021-08-28 05:17:21'),
(46,16,NULL,'Alabama A&M Bulldogs','Arizona','Bethune-Cookman Wildcats',NULL,'Citadel Bulldogs','2021-08-28 05:17:21','2021-08-28 05:17:21'),
(47,16,NULL,NULL,'Arizona','Bethune-Cookman Wildcats','Citadel Bulldogs','Citadel Bulldogs','2021-08-28 05:17:21','2021-08-28 05:17:21');

/*Table structure for table `see_profiles` */

DROP TABLE IF EXISTS `see_profiles`;

CREATE TABLE `see_profiles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `player_id` bigint(20) DEFAULT NULL,
  `visiter_id` bigint(20) DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'unseen',
  `count` int(20) DEFAULT 0,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `see_profiles` */

insert  into `see_profiles`(`id`,`player_id`,`visiter_id`,`status`,`count`,`updated_at`,`created_at`) values 
(34,16,29,'seen',12,'2021-08-25 00:50:48','2021-08-24 23:48:19'),
(35,16,25,'seen',1,'2021-08-25 00:50:48','2021-08-25 00:50:26'),
(36,16,24,'seen',1,'2021-08-25 04:17:56','2021-08-25 04:17:46'),
(37,16,21,'seen',6,'2021-08-27 00:44:05','2021-08-25 04:23:51'),
(39,31,21,'seen',1,'2021-08-26 05:02:02','2021-08-26 04:59:25'),
(40,16,31,'unseen',5,'2021-08-30 23:07:37','2021-08-26 05:01:14'),
(41,21,31,'seen',6,'2021-08-26 05:19:15','2021-08-26 05:07:58'),
(43,21,21,'seen',2,'2021-08-26 21:04:47','2021-08-26 05:43:53'),
(44,16,16,'seen',1,'2021-08-27 00:52:27','2021-08-27 00:52:25'),
(45,42,42,'seen',2,'2021-08-27 22:40:22','2021-08-27 21:55:15'),
(46,17,31,'unseen',1,'2021-08-30 22:52:14','2021-08-30 22:52:14');

/*Table structure for table `settings` */

DROP TABLE IF EXISTS `settings`;

CREATE TABLE `settings` (
  `id` bigint(20) unsigned NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `settings` */

insert  into `settings`(`id`,`key`,`value`,`created_at`,`updated_at`) values 
(1,'Facebook','https://www.facebook.com/',NULL,'2021-08-20 23:03:28'),
(2,'Twitter','https://twitter.com/',NULL,'2021-08-20 23:03:29'),
(3,'Youtube','https://www.youtube.com',NULL,'2021-08-20 23:07:00'),
(4,'Instagram','https://www.instagram.com/',NULL,'2021-08-20 23:03:29'),
(5,'Footer','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod .',NULL,'2021-08-20 23:03:05');

/*Table structure for table `star_ratings` */

DROP TABLE IF EXISTS `star_ratings`;

CREATE TABLE `star_ratings` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `club_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_attended` date DEFAULT NULL,
  `rating` decimal(8,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `star_ratings` */

insert  into `star_ratings`(`id`,`user_id`,`club_name`,`last_attended`,`rating`,`created_at`,`updated_at`) values 
(4,4,'LA Galaxy','2021-05-03',2.50,'2021-05-28 19:17:01','2021-05-28 19:17:01'),
(26,2,'Real Madrid C F','2021-06-01',2.50,'2021-06-01 17:16:10','2021-06-01 17:16:10'),
(27,2,'Ajax Amsterdam','2021-06-03',4.50,'2021-06-01 17:16:22','2021-06-01 17:16:22'),
(28,10,'Minnesota State Mankato(Punting)','2021-03-12',3.50,'2021-06-24 02:47:15','2021-06-24 02:48:21'),
(29,10,'Minnesota State Mankato(Kicking)','2021-03-23',3.00,'2021-06-24 02:48:09','2021-06-24 02:48:09'),
(30,11,'National Kicking Rankings(kicker )','2021-01-02',5.00,'2021-06-24 20:51:29','2021-06-24 20:51:29'),
(31,12,'Kohls','2021-01-01',4.50,'2021-06-25 02:09:04','2021-06-25 02:09:04'),
(32,12,'Sailer Kicking','2021-03-02',4.50,'2021-06-25 02:09:52','2021-06-25 02:09:52'),
(33,13,'National Kicking Rankings:','2021-01-01',3.00,'2021-06-25 02:15:56','2021-06-25 02:15:56');

/*Table structure for table `subscriptions` */

DROP TABLE IF EXISTS `subscriptions`;

CREATE TABLE `subscriptions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `subscriptions` */

insert  into `subscriptions`(`id`,`email`,`created_at`,`updated_at`) values 
(2,'admin@nsd.com','2021-07-13 22:01:57','2021-07-13 22:01:57'),
(3,'testing@championdrumsmokers.com','2021-07-13 22:05:20','2021-07-13 22:05:20'),
(4,'owaisahmed268@gmail.com','2021-07-16 00:09:04','2021-07-16 00:09:04'),
(5,NULL,'2021-07-17 02:41:47','2021-07-17 02:41:47'),
(6,'admin@scoutingohio.com','2021-07-17 02:48:47','2021-07-17 02:48:47'),
(7,'segamorip@mailinator.com','2021-07-17 02:51:04','2021-07-17 02:51:04'),
(8,'zihije@mailinator.com','2021-08-18 22:56:54','2021-08-18 22:56:54');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `agreement_value` enum('0','1') COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `package_id` int(11) DEFAULT NULL,
  `package_amount` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `package_status` enum('0','1') COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `user_status` enum('0','1') COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `package_end_date` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_profile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_cover` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `college_university` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `summer_football_camps` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fb_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `snap_chat_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_premium` tinyint(1) DEFAULT 0,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`email`,`email_verified_at`,`password`,`remember_token`,`type`,`last_name`,`user_name`,`agreement_value`,`package_id`,`package_amount`,`package_status`,`user_status`,`created_at`,`package_end_date`,`updated_at`,`user_profile`,`user_cover`,`college_university`,`phone`,`summer_football_camps`,`twitter_link`,`fb_link`,`instagram_link`,`snap_chat_link`,`is_premium`) values 
(1,'Admin','admin@scoutingohio.com',NULL,'$2y$10$l0tswgrEhm1htd2dHDtbX.wN.H8zTKz.HipauG5udg5rtudvUXDWm',NULL,'Admin','Admin','Admin','0',NULL,NULL,'0','0','2021-05-25 16:26:58',NULL,'2021-06-24 21:22:23',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),
(16,'Tara Wagner','johntivut@gmail.com',NULL,'$2y$10$5Q2uHBAx/lmyZ8wL7LtnY.51t5sH13oxHGZ9H/BY9ryDHsRgsJk/6',NULL,'Player',NULL,NULL,'0',NULL,NULL,'0','1','2021-07-15 03:31:18',NULL,'2021-08-27 23:52:47','Jbeq9yjG8QRZGhY4gwlp.png','mKiRo1JcA0Xed94gkmpU.png',NULL,NULL,NULL,'Wahajahmed02',NULL,NULL,NULL,0),
(17,'Brenna Turner','zihije@mailinator.com',NULL,'$2y$10$7MJQhyLPTUIw6kJ8ntDd2.h51hofocYHfUgT73etiheJsWDuSuC.m',NULL,'Caoch',NULL,NULL,'0',NULL,NULL,'0','1','2021-07-15 22:12:35',NULL,'2021-07-15 22:12:35',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),
(18,'tahobe@mailinator.com','cywytanuzo@mailinator.com',NULL,'$2y$10$uDmMQFqbr1.XtepilrHOJOTdXaxPExCtFdlkY5yLiGObwq2NrEgta',NULL,'Caoch',NULL,NULL,'0',NULL,NULL,'0','1','2021-07-15 22:15:11',NULL,'2021-08-02 22:52:39',NULL,NULL,'qumabufuv@mailinator.com','qelelavig@mailinator.com','Quo deserunt quibusd','fadyzinc8','topybibej@mailinator.com','hugid@mailinator.com','fozino@mailinator.com',0),
(19,'Caryn Vaughn','fororutuh@mailinator.com',NULL,'$2y$10$/YyxpS9FcEmXdfdZTBnT9.3CykiyFgNhh/bcvmoW1nZuCHFm1jAre',NULL,'Caoch',NULL,NULL,'0',NULL,NULL,'0','1','2021-07-15 22:15:33',NULL,'2021-07-15 22:15:33',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),
(20,'Sigourney Randolph','kyvipybyqy@mailinator.com',NULL,'$2y$10$dYhFDZ8T/5m6pS5Uf0OOy.jDe.ppzKRm0hlz3hM5IZsMnUNlmpLB6',NULL,'Caoch',NULL,NULL,'0',NULL,NULL,'0','1','2021-07-26 22:09:14',NULL,'2021-07-26 22:09:14',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),
(21,'Stone Douglas','lybegahy@mailinator.com',NULL,'$2y$10$cHX9w6aUJK8vByjVtEHL4OOEjsNw7cEunpp9U9EuOmVsSqXAXT20G',NULL,'Player',NULL,NULL,'0',NULL,NULL,'0','1','2021-08-05 02:42:33',NULL,'2021-08-05 02:47:15','DNHT4bDfeK9ziOyo8O64.png',NULL,NULL,NULL,NULL,'fadyzinc8',NULL,'',NULL,1),
(23,'Jason Dennis','zypyfop@mailinator.com',NULL,'$2y$10$CaHMhGwodwGCFYR98kzBu.QNKbe/Xwcg.wFAZwsljZtXAj9m1AHpm',NULL,'college coach',NULL,NULL,'0',NULL,NULL,'0','1','2021-08-05 21:48:07',NULL,'2021-08-05 21:48:07',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),
(24,'Lysandra Leblanc','pomocah@mailinator.com',NULL,'$2y$10$ZxHOTFUnrsRhWo42Ih1WxuJLLQD7spwATKShL4aBxgETnQfx8TD6q',NULL,'college coach',NULL,NULL,'0',NULL,NULL,'0','1','2021-08-05 21:48:51',NULL,'2021-08-05 21:48:51',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),
(25,'Allistair Munoz','sisy@mailinator.com',NULL,'$2y$10$FMeKQPkF3/QGnLJSsQZ79eD5VKDai1k2tNHDLcy/Tf5SM0JJObt4u',NULL,'college coach',NULL,NULL,'0',NULL,NULL,'0','1','2021-08-05 21:49:14',NULL,'2021-08-05 21:49:14',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),
(28,'Jamal Griffin','nuzi@mailinator.com',NULL,'$2y$10$GKNr0.PyVpdJQPUtnaWqn.utFbtrxlvrcEYV90ajfqAUcYsI5zvoG',NULL,'college coach',NULL,NULL,'0',NULL,NULL,'0','1','2021-08-05 22:16:02',NULL,'2021-08-05 22:16:02',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),
(29,'Althea Marsh','jarafaf@mailinator.com',NULL,'$2y$10$IgRO8rMtGC4rbpanEsKzyODhgLuddG/mn/0yaT0cWjZjSMpK0.Rxu',NULL,'high school coach',NULL,NULL,'0',NULL,NULL,'0','1','2021-08-05 22:16:07',NULL,'2021-08-05 22:16:07',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),
(30,'Faith Joseph','nuzehig@mailinator.com',NULL,'$2y$10$g.h2VBtbB8otUAkB7BuP8ekDhadO.ggWZAgFS9V160rI5ZvdB9He2',NULL,'college coach',NULL,NULL,'0',NULL,NULL,'0','1','2021-08-05 22:17:08',NULL,'2021-08-05 22:17:08',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),
(31,'Tiger Velasquez','cecaqy@mailinator.com',NULL,'$2y$10$jm7zTiYa.hsUYrojZ3FCVuH50CGaJoyj30vUGv81ALUGbQFyZZwES',NULL,'college coach',NULL,NULL,'0',NULL,NULL,'0','1','2021-08-05 22:28:44',NULL,'2021-08-30 23:27:53',NULL,NULL,'st pual high school','+1 (889) 514-9725','Magnam minim totam q',NULL,NULL,NULL,NULL,0),
(40,'Cameron Vance','jygup@mailinator.com',NULL,'$2y$10$5db9ps6IedxvY1Y5qTb48ebaW5suuS0cxtpbXpG8TozALW/lyOUPa',NULL,'high school coach',NULL,NULL,'0',NULL,NULL,'0','1','2021-08-21 04:29:42',NULL,'2021-08-21 04:29:42',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),
(41,'Aiko Leon','zotunipizi@mailinator.com',NULL,'$2y$10$WplKDv9yOBFpi/7lZ14DROLFKAdnyI28R9Pztb86dXK331gM13oqq',NULL,'college coach',NULL,NULL,'0',NULL,NULL,'0','0','2021-08-21 05:09:27',NULL,'2021-08-21 05:09:27',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),
(42,'Myles Johns','janodyf@mailinator.com',NULL,'$2y$10$DWv/kn0h/91rDa28z12x4OCn2Ms1KQ5Qh0sK5T.jxtgmYDyWdidJy',NULL,'Player',NULL,NULL,'0',NULL,NULL,'0','1','2021-08-27 21:51:56',NULL,'2021-08-27 21:51:56',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),
(43,'Jane Berger','higoxu@mailinator.com',NULL,'$2y$10$Bf5.xqYVP7.6MhYV6CNpHuJDmMg8FJmEp7B04Jgr8snSKUM1ywSC.',NULL,'Player',NULL,NULL,'0',NULL,NULL,'0','1','2021-08-27 22:08:16',NULL,'2021-08-27 22:08:16',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),
(44,'Vivien Jacobson','bylypideke@mailinator.com',NULL,'$2y$10$BFAEyNE9K4djohR7g4yTg.BOAhMVXNEBIeHrL9k9gGxy3sxgf9SZa',NULL,'Player',NULL,NULL,'0',NULL,NULL,'0','1','2021-08-27 22:14:03',NULL,'2021-08-27 22:14:03',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),
(45,'Ishmael Vargas','lyhytepad@mailinator.com',NULL,'$2y$10$hVx5vdFpplHpYGa7NRt3vekXPToSyUzHYxhpP6I.K25YTDKdC5Rlu',NULL,'college coach',NULL,NULL,'0',NULL,NULL,'0','1','2021-08-27 22:50:02',NULL,'2021-08-27 22:54:51',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),
(46,'Lionel Burton','hivydube@mailinator.com',NULL,'$2y$10$AAIu6NjP53F2Y6Lbs2mbnOtOQpIIsIqW119XHJ28QqPuzDHZrbX1C',NULL,'college coach',NULL,NULL,'0',NULL,NULL,'0','0','2021-08-27 22:55:33',NULL,'2021-08-27 22:55:33',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),
(47,'Ethan Mason','dehedyv@mailinator.com',NULL,'$2y$10$RkZ2/HvRa39XW8EKi6.yau9gd9ev20I2UuNG2x8PnskMj5aWSxSKy',NULL,'college coach',NULL,NULL,'0',NULL,NULL,'0','1','2021-08-27 22:58:32',NULL,'2021-08-27 23:18:16',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),
(48,'Kay Ross','legufu@mailinator.com',NULL,'$2y$10$GFDTPRvALUKpTaA8iSTGW.RcN7aqzz479jCAdTti84uX5Q9g5k8Q6',NULL,'player',NULL,NULL,'0',NULL,NULL,'0','1','2021-08-27 23:18:58',NULL,'2021-08-27 23:18:58',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),
(49,'Fulton Flynn','siqyrygaqo@mailinator.com',NULL,'$2y$10$pBOfzoGjfgCCcTSIFjcC0eg1jFxY.eJDT3KoBqp3BhLniMphRbh4e',NULL,'college coach',NULL,NULL,'0',NULL,NULL,'0','0','2021-08-27 23:22:13',NULL,'2021-08-27 23:22:13',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),
(50,'Sybill Hull','zogux@mailinator.com',NULL,'$2y$10$M0ygL7atYDruQZZ15L2vO.RGLiQ93pjTONxnpzAOt04gnnJCu0YqG',NULL,'Player',NULL,NULL,'0',NULL,NULL,'0','1','2021-08-27 23:22:30',NULL,'2021-08-27 23:26:07',NULL,'ZKTyyWedwz4jYtEnuueq.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,0);

/*Table structure for table `videos` */

DROP TABLE IF EXISTS `videos`;

CREATE TABLE `videos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `thumbnil` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `videos` */

insert  into `videos`(`id`,`thumbnil`,`video_link`,`created_at`,`updated_at`) values 
(1,'S3YMtHudxI.png','//www.hudl.com/embed/video/2/45897/60d3742917629a17447e4110','2021-08-11 21:50:04','2021-08-11 21:50:04'),
(2,'Aj4z5eiep0.png','//www.hudl.com/embed/video/2/45897/60d3742917629a17447e4110','2021-08-11 21:50:50','2021-08-11 21:50:50'),
(3,'ADrXXL3MTF.png','//www.hudl.com/embed/video/2/45897/60d3742917629a17447e4110','2021-08-11 21:51:02','2021-08-11 21:51:02'),
(4,'BAttsjTG60.png','//www.hudl.com/embed/video/2/45897/60d3742917629a17447e4110','2021-08-11 21:51:22','2021-08-11 21:51:22'),
(5,'OmHfPE23lw.png','//www.hudl.com/embed/video/2/45897/60d3742917629a17447e4110','2021-08-11 21:52:04','2021-08-11 21:52:04'),
(6,'0g3HxnKh89.png','//www.hudl.com/embed/video/2/45897/60d3742917629a17447e4110','2021-08-11 21:52:16','2021-08-11 21:52:16'),
(7,'0aWfX6Y82n.png','//www.hudl.com/embed/video/2/45897/60d3742917629a17447e4110','2021-08-11 21:52:27','2021-08-11 21:52:27');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
