-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.4.11-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para lojinha
DROP DATABASE IF EXISTS `lojinha`;
CREATE DATABASE IF NOT EXISTS `lojinha` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `lojinha`;

-- Copiando estrutura para tabela lojinha.admin_users
DROP TABLE IF EXISTS `admin_users`;
CREATE TABLE IF NOT EXISTS `admin_users` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `group_id` int(11) NOT NULL DEFAULT 1,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `active` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela lojinha.admin_users: ~0 rows (aproximadamente)
DELETE FROM `admin_users`;
/*!40000 ALTER TABLE `admin_users` DISABLE KEYS */;
INSERT INTO `admin_users` (`admin_id`, `group_id`, `username`, `password`, `firstname`, `lastname`, `email`, `active`, `created_at`, `updated_at`) VALUES
	(1, 1, 'ademiro', 'ademiro', 'Ade', 'Miro', 'ademiro@gmail.com', 1, '2020-09-05 19:40:42', '2020-09-06 17:12:19');
/*!40000 ALTER TABLE `admin_users` ENABLE KEYS */;

-- Copiando estrutura para tabela lojinha.admin_users_auth
DROP TABLE IF EXISTS `admin_users_auth`;
CREATE TABLE IF NOT EXISTS `admin_users_auth` (
  `auth_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `browser` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`auth_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela lojinha.admin_users_auth: ~2 rows (aproximadamente)
DELETE FROM `admin_users_auth`;
/*!40000 ALTER TABLE `admin_users_auth` DISABLE KEYS */;
INSERT INTO `admin_users_auth` (`auth_id`, `user_id`, `token`, `browser`, `created_at`) VALUES
	(1, 1, NULL, NULL, '2020-09-06 17:12:19');
INSERT INTO `admin_users_auth` (`auth_id`, `user_id`, `token`, `browser`, `created_at`) VALUES
	(2, 1, NULL, NULL, '2020-09-07 17:33:10');
/*!40000 ALTER TABLE `admin_users_auth` ENABLE KEYS */;

-- Copiando estrutura para tabela lojinha.products
DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id_product` int(11) NOT NULL AUTO_INCREMENT,
  `id_attribute_group` int(11) NOT NULL DEFAULT 1,
  `id_type` int(11) NOT NULL DEFAULT 1,
  `id_subcategory` int(11) NOT NULL DEFAULT 0,
  `sku` varchar(50) NOT NULL DEFAULT '0',
  `name` varchar(255) NOT NULL DEFAULT '',
  `slug` varchar(255) NOT NULL DEFAULT '',
  `description` text NOT NULL DEFAULT '',
  `rate` double NOT NULL DEFAULT 0,
  `price_before` double DEFAULT 0,
  `price` double NOT NULL DEFAULT 0,
  `status` tinytext NOT NULL DEFAULT 'enabled',
  `weight` double NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id_product`),
  KEY `FK_products_categories` (`id_subcategory`),
  KEY `fk_attribute_group` (`id_attribute_group`),
  KEY `fk_type` (`id_type`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela lojinha.products: 6 rows
DELETE FROM `products`;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` (`id_product`, `id_attribute_group`, `id_type`, `id_subcategory`, `sku`, `name`, `slug`, `description`, `rate`, `price_before`, `price`, `status`, `weight`, `created_at`, `updated_at`) VALUES
	(1, 1, 0, 10, '0001', 'Camisa Social Manga Longa Watkins&Krown Masculina', 'camisa-social-watkins-krown-masculina', 'A camisa social manga longa da Watkins&Krown tem um ótimo acabamento, dando detalhes extraordinários e um conforto que faz a diferenciação de uma marca pra outra, mostrando garantia e qualidade.', 5, 99.99, 55.99, 'enabled', 0, '2020-09-02 11:23:49', '2020-09-02 11:25:08');
INSERT INTO `products` (`id_product`, `id_attribute_group`, `id_type`, `id_subcategory`, `sku`, `name`, `slug`, `description`, `rate`, `price_before`, `price`, `status`, `weight`, `created_at`, `updated_at`) VALUES
	(2, 1, 0, 30, '0002', 'Camisa Adooro! Manga 3/4 Folhagens Feminina - Branco', 'camisa-adooro-manga-3-4-folhagens-feminina-branco', 'Completamente atemporal a Camisa Adooro Manga Longa Folhagens Feminina é um verdadeiro must have no closet das mulheres. Com design super moderno atende a inúmeros estilos e cai bem em diversas ocasiões.', 5, 69.99, 59.99, 'enabled', 0, '2020-09-02 11:23:50', '2020-09-07 15:28:35');
INSERT INTO `products` (`id_product`, `id_attribute_group`, `id_type`, `id_subcategory`, `sku`, `name`, `slug`, `description`, `rate`, `price_before`, `price`, `status`, `weight`, `created_at`, `updated_at`) VALUES
	(3, 1, 0, 30, '0003', 'Camisa Regata Adooro! Estampada Corações Bolso Feminina - Marinho', 'camisa-regata-adooro-estampada-coracao-bolso-feminina-marinho', 'Romântica e delicada, a Camisa Regata Adooro! Estampada Corações Bolso Feminina traz um toque suave para os looks do dia a dia. Experimente combinar com shorts, calças e saias da moda!', 5, 69.99, 59.99, 'enabled', 0, '2020-09-02 11:23:51', '2020-09-07 15:28:39');
INSERT INTO `products` (`id_product`, `id_attribute_group`, `id_type`, `id_subcategory`, `sku`, `name`, `slug`, `description`, `rate`, `price_before`, `price`, `status`, `weight`, `created_at`, `updated_at`) VALUES
	(4, 1, 0, 30, '0004', 'Camisa C & V Collection Barra Floral Feminina', 'camisa-c-v-collection-barra-floral-feminina', 'A Camisa C & V Collection Barra Floral Feminina é sinônimo de conforto e estilo despojado para os seus dias casuais. A gola em cordão e os bolsos frontais garantem um look moderno.', 5, 59.99, 47.99, 'enabled', 0, '2020-09-02 11:23:51', '2020-09-02 22:12:54');
INSERT INTO `products` (`id_product`, `id_attribute_group`, `id_type`, `id_subcategory`, `sku`, `name`, `slug`, `description`, `rate`, `price_before`, `price`, `status`, `weight`, `created_at`, `updated_at`) VALUES
	(5, 1, 0, 14, '0005', 'Calça Sarja Ecxo Skinny Masculina - Verde Militar', 'calca-sarja-ecxo-skinny-masculina-verde-militar', 'Calça Sarja Ecxo Skinny Masculina - Verde Militar', 5, 149.99, 55.99, 'enabled', 0, '2020-09-02 11:23:52', '2020-09-02 11:25:08');
INSERT INTO `products` (`id_product`, `id_attribute_group`, `id_type`, `id_subcategory`, `sku`, `name`, `slug`, `description`, `rate`, `price_before`, `price`, `status`, `weight`, `created_at`, `updated_at`) VALUES
	(6, 1, 0, 5, '0006', 'Sapato Casual Couro Kildare Camurção Cano Médio Masculino - Café', 'sapato-casual-couro-killdare-comurcao-cano-medio-masculino', 'Sapato Casual Couro Kildare Camurção Cano Médio Masculino - Café', 5, 254.99, 229.9, 'enabled', 0, '2020-09-02 11:23:52', '2020-09-02 11:25:08');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;

-- Copiando estrutura para tabela lojinha.products_attributes
DROP TABLE IF EXISTS `products_attributes`;
CREATE TABLE IF NOT EXISTS `products_attributes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela lojinha.products_attributes: ~0 rows (aproximadamente)
DELETE FROM `products_attributes`;
/*!40000 ALTER TABLE `products_attributes` DISABLE KEYS */;
/*!40000 ALTER TABLE `products_attributes` ENABLE KEYS */;

-- Copiando estrutura para tabela lojinha.products_attributes_group
DROP TABLE IF EXISTS `products_attributes_group`;
CREATE TABLE IF NOT EXISTS `products_attributes_group` (
  `id_attribute_group` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_attribute_group`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela lojinha.products_attributes_group: ~0 rows (aproximadamente)
DELETE FROM `products_attributes_group`;
/*!40000 ALTER TABLE `products_attributes_group` DISABLE KEYS */;
/*!40000 ALTER TABLE `products_attributes_group` ENABLE KEYS */;

-- Copiando estrutura para tabela lojinha.products_categories
DROP TABLE IF EXISTS `products_categories`;
CREATE TABLE IF NOT EXISTS `products_categories` (
  `id_category` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL DEFAULT '',
  `subcategory` int(11) DEFAULT NULL,
  `slug` varchar(50) NOT NULL,
  PRIMARY KEY (`id_category`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela lojinha.products_categories: 11 rows
DELETE FROM `products_categories`;
/*!40000 ALTER TABLE `products_categories` DISABLE KEYS */;
INSERT INTO `products_categories` (`id_category`, `name`, `subcategory`, `slug`) VALUES
	(1, 'Masculino', NULL, 'masculino');
INSERT INTO `products_categories` (`id_category`, `name`, `subcategory`, `slug`) VALUES
	(2, 'Feminino', NULL, 'feminino');
INSERT INTO `products_categories` (`id_category`, `name`, `subcategory`, `slug`) VALUES
	(3, 'Unissex', NULL, 'unissex');
INSERT INTO `products_categories` (`id_category`, `name`, `subcategory`, `slug`) VALUES
	(4, 'Esportes', NULL, 'esportes');
INSERT INTO `products_categories` (`id_category`, `name`, `subcategory`, `slug`) VALUES
	(12, 'Acessórios', 2, 'acessorios');
INSERT INTO `products_categories` (`id_category`, `name`, `subcategory`, `slug`) VALUES
	(6, 'Marcas', NULL, 'marcas');
INSERT INTO `products_categories` (`id_category`, `name`, `subcategory`, `slug`) VALUES
	(7, 'Roupas', 1, 'roupas');
INSERT INTO `products_categories` (`id_category`, `name`, `subcategory`, `slug`) VALUES
	(8, 'Calçados', 1, 'calcados');
INSERT INTO `products_categories` (`id_category`, `name`, `subcategory`, `slug`) VALUES
	(9, 'Acessórios', 1, 'acessorios');
INSERT INTO `products_categories` (`id_category`, `name`, `subcategory`, `slug`) VALUES
	(10, 'Roupas', 2, 'roupas');
INSERT INTO `products_categories` (`id_category`, `name`, `subcategory`, `slug`) VALUES
	(11, 'Calçados', 2, 'calcados');
/*!40000 ALTER TABLE `products_categories` ENABLE KEYS */;

-- Copiando estrutura para tabela lojinha.products_stockitem
DROP TABLE IF EXISTS `products_stockitem`;
CREATE TABLE IF NOT EXISTS `products_stockitem` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela lojinha.products_stockitem: ~0 rows (aproximadamente)
DELETE FROM `products_stockitem`;
/*!40000 ALTER TABLE `products_stockitem` DISABLE KEYS */;
/*!40000 ALTER TABLE `products_stockitem` ENABLE KEYS */;

-- Copiando estrutura para tabela lojinha.products_subcategories
DROP TABLE IF EXISTS `products_subcategories`;
CREATE TABLE IF NOT EXISTS `products_subcategories` (
  `id_subcategory` int(11) NOT NULL AUTO_INCREMENT,
  `id_category` int(11) NOT NULL DEFAULT 0,
  `slug` varchar(50) NOT NULL DEFAULT '',
  `name` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id_subcategory`),
  KEY `fk_category` (`id_category`)
) ENGINE=MyISAM AUTO_INCREMENT=54 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela lojinha.products_subcategories: 53 rows
DELETE FROM `products_subcategories`;
/*!40000 ALTER TABLE `products_subcategories` DISABLE KEYS */;
INSERT INTO `products_subcategories` (`id_subcategory`, `id_category`, `slug`, `name`) VALUES
	(1, 8, 'botas', 'Botas');
INSERT INTO `products_subcategories` (`id_subcategory`, `id_category`, `slug`, `name`) VALUES
	(2, 8, 'chinelos', 'Chinelos');
INSERT INTO `products_subcategories` (`id_subcategory`, `id_category`, `slug`, `name`) VALUES
	(3, 8, 'mocassim', 'Mocassim');
INSERT INTO `products_subcategories` (`id_subcategory`, `id_category`, `slug`, `name`) VALUES
	(4, 8, 'sapatenis', 'Sapatênis');
INSERT INTO `products_subcategories` (`id_subcategory`, `id_category`, `slug`, `name`) VALUES
	(5, 8, 'sapato-casual', 'Sapato Casual');
INSERT INTO `products_subcategories` (`id_subcategory`, `id_category`, `slug`, `name`) VALUES
	(6, 8, 'sapato-confort', 'Sapato Conforto');
INSERT INTO `products_subcategories` (`id_subcategory`, `id_category`, `slug`, `name`) VALUES
	(7, 8, 'sapato-social', 'Sapato Social');
INSERT INTO `products_subcategories` (`id_subcategory`, `id_category`, `slug`, `name`) VALUES
	(8, 8, 'slider', 'Sider');
INSERT INTO `products_subcategories` (`id_subcategory`, `id_category`, `slug`, `name`) VALUES
	(9, 8, 'tenis', 'Tênis');
INSERT INTO `products_subcategories` (`id_subcategory`, `id_category`, `slug`, `name`) VALUES
	(10, 7, 'camisas', 'Camisas');
INSERT INTO `products_subcategories` (`id_subcategory`, `id_category`, `slug`, `name`) VALUES
	(11, 7, 'camisetas', 'Camisetas');
INSERT INTO `products_subcategories` (`id_subcategory`, `id_category`, `slug`, `name`) VALUES
	(12, 7, 'calcas', 'Calças');
INSERT INTO `products_subcategories` (`id_subcategory`, `id_category`, `slug`, `name`) VALUES
	(13, 7, 'calca-jeans', 'Calça Jeans');
INSERT INTO `products_subcategories` (`id_subcategory`, `id_category`, `slug`, `name`) VALUES
	(14, 7, 'calcas-sarja', 'Calças Sarja');
INSERT INTO `products_subcategories` (`id_subcategory`, `id_category`, `slug`, `name`) VALUES
	(15, 7, 'casacos-e-jaquetas', 'Casacos e Jaquetas');
INSERT INTO `products_subcategories` (`id_subcategory`, `id_category`, `slug`, `name`) VALUES
	(16, 7, 'moletons', 'Moletons');
INSERT INTO `products_subcategories` (`id_subcategory`, `id_category`, `slug`, `name`) VALUES
	(17, 7, 'polos', 'Polos');
INSERT INTO `products_subcategories` (`id_subcategory`, `id_category`, `slug`, `name`) VALUES
	(18, 7, 'regatas', 'Regatas');
INSERT INTO `products_subcategories` (`id_subcategory`, `id_category`, `slug`, `name`) VALUES
	(19, 7, 'shorts-e-bermudas', 'Shorts e Bermudas');
INSERT INTO `products_subcategories` (`id_subcategory`, `id_category`, `slug`, `name`) VALUES
	(20, 9, 'bones', 'Bonés');
INSERT INTO `products_subcategories` (`id_subcategory`, `id_category`, `slug`, `name`) VALUES
	(21, 9, 'cateiras', 'Carteiras');
INSERT INTO `products_subcategories` (`id_subcategory`, `id_category`, `slug`, `name`) VALUES
	(22, 9, 'cintos', 'Cintos');
INSERT INTO `products_subcategories` (`id_subcategory`, `id_category`, `slug`, `name`) VALUES
	(23, 9, 'malas', 'Malas');
INSERT INTO `products_subcategories` (`id_subcategory`, `id_category`, `slug`, `name`) VALUES
	(24, 9, 'mochilas-e-bolsas', 'Mochilas e Bolsas');
INSERT INTO `products_subcategories` (`id_subcategory`, `id_category`, `slug`, `name`) VALUES
	(25, 9, 'oculos', 'Óculos');
INSERT INTO `products_subcategories` (`id_subcategory`, `id_category`, `slug`, `name`) VALUES
	(26, 9, 'relogios', 'Relógios');
INSERT INTO `products_subcategories` (`id_subcategory`, `id_category`, `slug`, `name`) VALUES
	(27, 10, 'blusas-e-camisetas', 'Blusas e Camisetas');
INSERT INTO `products_subcategories` (`id_subcategory`, `id_category`, `slug`, `name`) VALUES
	(28, 10, 'calcas', 'Calças');
INSERT INTO `products_subcategories` (`id_subcategory`, `id_category`, `slug`, `name`) VALUES
	(29, 10, 'calca-jeans', 'Calças Jeans');
INSERT INTO `products_subcategories` (`id_subcategory`, `id_category`, `slug`, `name`) VALUES
	(30, 10, 'camisas', 'Camisas');
INSERT INTO `products_subcategories` (`id_subcategory`, `id_category`, `slug`, `name`) VALUES
	(31, 10, 'casacos', 'Casacos');
INSERT INTO `products_subcategories` (`id_subcategory`, `id_category`, `slug`, `name`) VALUES
	(32, 10, 'malhas-e-tricos', 'Malhas e Tricôs');
INSERT INTO `products_subcategories` (`id_subcategory`, `id_category`, `slug`, `name`) VALUES
	(33, 10, 'moletons', 'Moletons');
INSERT INTO `products_subcategories` (`id_subcategory`, `id_category`, `slug`, `name`) VALUES
	(34, 10, 'saias', 'Saias');
INSERT INTO `products_subcategories` (`id_subcategory`, `id_category`, `slug`, `name`) VALUES
	(35, 10, 'shorts-e-bermudas', 'Shorts e Bermudas');
INSERT INTO `products_subcategories` (`id_subcategory`, `id_category`, `slug`, `name`) VALUES
	(36, 10, 'vestidos', 'Vestidos');
INSERT INTO `products_subcategories` (`id_subcategory`, `id_category`, `slug`, `name`) VALUES
	(37, 12, 'bijuterias', 'Bijuterias');
INSERT INTO `products_subcategories` (`id_subcategory`, `id_category`, `slug`, `name`) VALUES
	(38, 12, 'bolsas', 'Bolsas');
INSERT INTO `products_subcategories` (`id_subcategory`, `id_category`, `slug`, `name`) VALUES
	(39, 12, 'carteiras', 'Carteiras');
INSERT INTO `products_subcategories` (`id_subcategory`, `id_category`, `slug`, `name`) VALUES
	(40, 12, 'cintos', 'Cintos');
INSERT INTO `products_subcategories` (`id_subcategory`, `id_category`, `slug`, `name`) VALUES
	(41, 12, 'mochilas-e-malas', 'Mochilas e Malas');
INSERT INTO `products_subcategories` (`id_subcategory`, `id_category`, `slug`, `name`) VALUES
	(42, 12, 'oculos', 'Óculos');
INSERT INTO `products_subcategories` (`id_subcategory`, `id_category`, `slug`, `name`) VALUES
	(43, 12, 'relogios', 'Relógios');
INSERT INTO `products_subcategories` (`id_subcategory`, `id_category`, `slug`, `name`) VALUES
	(44, 11, 'botas', 'Botas');
INSERT INTO `products_subcategories` (`id_subcategory`, `id_category`, `slug`, `name`) VALUES
	(45, 11, 'chinelos', 'Chinelos');
INSERT INTO `products_subcategories` (`id_subcategory`, `id_category`, `slug`, `name`) VALUES
	(46, 11, 'linha-conforto', 'Linha Conforto');
INSERT INTO `products_subcategories` (`id_subcategory`, `id_category`, `slug`, `name`) VALUES
	(47, 11, 'mocassins', 'Mocassins');
INSERT INTO `products_subcategories` (`id_subcategory`, `id_category`, `slug`, `name`) VALUES
	(48, 11, 'peeptoes', 'Peep toes');
INSERT INTO `products_subcategories` (`id_subcategory`, `id_category`, `slug`, `name`) VALUES
	(49, 11, 'rasteiras', 'Rasteiras');
INSERT INTO `products_subcategories` (`id_subcategory`, `id_category`, `slug`, `name`) VALUES
	(50, 11, 'sandalias', 'Sandálias');
INSERT INTO `products_subcategories` (`id_subcategory`, `id_category`, `slug`, `name`) VALUES
	(51, 11, 'sapatilhas', 'Sapatilhas');
INSERT INTO `products_subcategories` (`id_subcategory`, `id_category`, `slug`, `name`) VALUES
	(52, 11, 'scarpins', 'Scarpins');
INSERT INTO `products_subcategories` (`id_subcategory`, `id_category`, `slug`, `name`) VALUES
	(53, 11, 'tenis', 'Tênis');
/*!40000 ALTER TABLE `products_subcategories` ENABLE KEYS */;

-- Copiando estrutura para tabela lojinha.products_type
DROP TABLE IF EXISTS `products_type`;
CREATE TABLE IF NOT EXISTS `products_type` (
  `id_type` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela lojinha.products_type: ~0 rows (aproximadamente)
DELETE FROM `products_type`;
/*!40000 ALTER TABLE `products_type` DISABLE KEYS */;
/*!40000 ALTER TABLE `products_type` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
