-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.0.18-nt - MySQL Community Edition (GPL)
-- Server OS:                    Win32
-- HeidiSQL Version:             11.3.0.6452
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for impulse
CREATE DATABASE IF NOT EXISTS `impulse` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `impulse`;

-- Dumping structure for table impulse.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `migration` varchar(255) collate utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table impulse.migrations: ~5 rows (approximately)
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(2, '2022_05_20_125631_create_tb_customer_table', 1),
	(3, '2022_05_21_164408_create_users_table', 2),
	(4, '2022_05_21_164408_create_tb_users_table', 3),
	(5, 'create_users_table', 3);

-- Dumping structure for table impulse.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL auto_increment,
  `tokenable_type` varchar(255) collate utf8_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) collate utf8_unicode_ci NOT NULL,
  `token` varchar(64) collate utf8_unicode_ci NOT NULL,
  `abilities` text collate utf8_unicode_ci,
  `last_used_at` timestamp NULL default NULL,
  `created_at` timestamp NULL default NULL,
  `updated_at` timestamp NULL default NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table impulse.personal_access_tokens: ~0 rows (approximately)

-- Dumping structure for table impulse.tb_customer
CREATE TABLE IF NOT EXISTS `tb_customer` (
  `customer_id` bigint(20) unsigned NOT NULL auto_increment,
  `customer_name` varchar(255) collate utf8_unicode_ci NOT NULL,
  `contact_name` varchar(255) collate utf8_unicode_ci default NULL,
  `address` varchar(255) collate utf8_unicode_ci default NULL,
  `city` varchar(255) collate utf8_unicode_ci default NULL,
  `created_at` timestamp NULL default NULL,
  `updated_at` timestamp NULL default NULL,
  PRIMARY KEY  (`customer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table impulse.tb_customer: ~26 rows (approximately)
INSERT INTO `tb_customer` (`customer_id`, `customer_name`, `contact_name`, `address`, `city`, `created_at`, `updated_at`) VALUES
	(1, 'Alfreds Futterkiste', 'Maria Anders', 'Obere Str. 57', 'Berlin', '2022-02-12 08:28:07', '2022-02-12 08:28:07'),
	(2, 'Ana Trujillo Emparedados y helados', 'Ana Trujillo', 'Avda. de la ConstituciÃ³n 2222', 'MÃ©xico D.F.', '2022-02-12 08:28:07', '2022-02-12 08:28:07'),
	(3, 'Antonio Moreno TaquerÃ­a', 'Antonio Moreno', 'Mataderos 2312', 'MÃ©xico D.F.', '2022-02-12 08:28:07', '2022-02-12 08:28:07'),
	(4, 'Around the Horn', 'Thomas Hardy', '120 Hanover Sq.', 'London', '2022-02-12 08:28:07', '2022-02-12 08:28:07'),
	(5, 'Berglunds snabbkÃ¶p', 'Christina Berglund', 'BerguvsvÃ¤gen 8', 'LuleÃ¥', '2022-02-12 08:28:07', '2022-02-12 08:28:07'),
	(6, 'Blauer See Delikatessen', 'Hanna Moos', 'Forsterstr. 57', 'Mannheim', '2022-02-12 08:28:07', '2022-02-12 08:28:07'),
	(7, 'Blondel pÃ¨re et fils', 'FrÃ©dÃ©rique Citeaux', '24, place KlÃ©ber', 'Strasbourg', '2022-02-12 08:28:07', '2022-02-12 08:28:07'),
	(8, 'BÃ³lido Comidas preparadas', 'MartÃ­n Sommer', 'C/ Araquil, 67', 'Madrid', '2022-02-12 08:28:07', '2022-02-12 08:28:07'),
	(9, 'Bon app\'', 'Laurence Lebihans', '12, rue des Bouchers', 'Marseille', '2022-02-12 08:28:07', '2022-02-12 08:28:07'),
	(10, 'Bottom-Dollar Marketse', 'Elizabeth Lincoln', '23 Tsawassen Blvd.', 'Tsawassen', '2022-02-12 08:28:07', '2022-02-12 08:28:07'),
	(11, 'B\'s Beverages', 'Victoria Ashworth', 'Fauntleroy Circus', 'London', '2022-02-12 08:28:07', '2022-02-12 08:28:07'),
	(12, 'Cactus Comidas para llevar', 'Patricio Simpson', 'Cerrito 333', 'Buenos Aires', '2022-02-12 08:28:07', '2022-02-12 08:28:07'),
	(13, 'Centro comercial Moctezuma', 'Francisco Chang', 'Sierras de Granada 9993', 'MÃ©xico D.F.', '2022-02-12 08:28:07', '2022-02-12 08:28:07'),
	(14, 'Chop-suey Chinese', 'Yang Wang', 'Hauptstr. 29', 'Bern', '2022-02-12 08:28:07', '2022-02-12 08:28:07'),
	(15, 'ComÃ©rcio Mineiro', 'Pedro Afonso', 'Av. dos LusÃ­adas, 23', 'SÃ£o Paulo', '2022-02-12 08:28:07', '2022-02-12 08:28:07'),
	(16, 'Consolidated Holdings', 'Elizabeth Brown', 'Berkeley Gardens 12 Brewery', 'London', '2022-02-12 08:28:07', '2022-02-12 08:28:07'),
	(17, 'Drachenblut Delikatessend', 'Sven Ottlieb', 'Walserweg 21', 'Aachen', '2022-02-12 08:28:07', '2022-02-12 08:28:07'),
	(18, 'Du monde entier', 'Janine Labrune', '67, rue des Cinquante Otages', 'Nantes', '2022-02-12 08:28:07', '2022-02-12 08:28:07'),
	(19, 'Eastern Connection', 'Ann Devon', '35 King George', 'London', '2022-02-12 08:28:07', '2022-02-12 08:28:07'),
	(20, 'Ernst Handel', 'Roland Mendel', 'Kirchgasse 6', 'Graz', '2022-02-12 08:28:07', '2022-02-12 08:28:07'),
	(21, 'Familia Arquibaldo', 'Aria Cruz', 'Rua OrÃ³s, 92', 'SÃ£o Paulo', '2022-02-12 08:28:07', '2022-02-12 08:28:07'),
	(22, 'FISSA Fabrica Inter. Salchichas S.A.', 'Diego Roel', 'C/ Moralzarzal, 86', 'Madrid', '2022-02-12 08:28:07', '2022-02-12 08:28:07'),
	(23, 'Folies gourmandes', 'Martine RancÃ©', '184, chaussÃ©e de Tournai', 'Lille', '2022-02-12 08:28:07', '2022-02-12 08:28:07'),
	(24, 'Folk och fÃ¤ HB', 'Maria Larsson', 'Ã…kergatan 24', 'BrÃ¤cke', '2022-02-12 08:28:07', '2022-02-12 08:28:07'),
	(25, 'Frankenversand', 'Peter Franken', 'Berliner Platz 43', 'MÃ¼nchen', '2022-02-12 08:28:07', '2022-02-12 08:28:07'),
	(26, 'robby refta arrosy', 'robbyrefta', 'nongkojajar hehe', 'pasuruan lahhh', '2022-05-20 07:28:13', '2022-05-20 07:45:32');

-- Dumping structure for table impulse.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL auto_increment,
  `name` varchar(255) collate utf8_unicode_ci NOT NULL,
  `email` varchar(255) collate utf8_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL default NULL,
  `password` varchar(255) collate utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) collate utf8_unicode_ci default NULL,
  `created_at` timestamp NULL default NULL,
  `updated_at` timestamp NULL default NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table impulse.users: ~0 rows (approximately)
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'admin', 'admin@admin.com', NULL, '$2y$10$aouSe27cg2UIttRBjsifG.DNp.Cx3J63kMF4FpfMoDz77TxpGzuui', NULL, '2022-05-22 00:13:15', '2022-05-22 00:13:15'),
	(2, 'robby', 'robbyrefta@gmail.com', NULL, '$2y$10$aouSe27cg2UIttRBjsifG.DNp.Cx3J63kMF4FpfMoDz77TxpGzuui', NULL, '2022-05-22 10:10:54', '2022-05-22 10:10:55');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
