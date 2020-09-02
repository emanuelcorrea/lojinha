-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.4.13-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              11.0.0.5919
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
  `url_img` varchar(255) NOT NULL DEFAULT '',
  `rate` double NOT NULL DEFAULT 0,
  `price_before` double DEFAULT 0,
  `price` double NOT NULL DEFAULT 0,
  `status` tinytext NOT NULL DEFAULT 'enabled',
  `weight` double NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id_product`),
  KEY `FK_products_categories` (`id_subcategory`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela lojinha.products: 6 rows
DELETE FROM `products`;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` (`id_product`, `id_attribute_group`, `id_type`, `id_subcategory`, `sku`, `name`, `slug`, `description`, `url_img`, `rate`, `price_before`, `price`, `status`, `weight`, `created_at`, `updated_at`) VALUES
	(1, 1, 0, 10, '0001', 'Camisa Social Manga Longa Watkins&Krown Masculina', 'camisa-social-watkins-krown-masculina', 'A camisa social manga longa da Watkins&Krown tem um ótimo acabamento, dando detalhes extraordinários e um conforto que faz a diferenciação de uma marca pra outra, mostrando garantia e qualidade.', 'https://static.zattini.com.br/produtos/camisa-social-manga-longa-watkins&krown-masculina/14/IFZ-0006-014/IFZ-0006-014_detalhe1.jpg?ims=326x', 5, 99.99, 55.99, 'enabled', 0, '2020-09-02 11:23:49', '2020-09-02 11:25:08'),
	(2, 1, 0, 30, '0002', 'Camisa Adooro! Manga 3/4 Folhagens Feminina - Branco', 'camisa-adooro-manga-3-4-folhagens-feminina-branco', 'Camisa Adooro! Manga 3/4 Folhagens Feminina - Branco', 'https://static.zattini.com.br/produtos/camisa-adooro!-manga-34-folhagens-feminina/14/ILV-0048-014/ILV-0048-014_detalhe1.jpg?ims=326x', 5, 0, 59.99, 'enabled', 0, '2020-09-02 11:23:50', '2020-09-02 11:25:08'),
	(3, 1, 0, 30, '0003', 'Camisa Regata Adooro! Estampada Corações Bolso Feminina - Marinho', 'camisa-regata-adooro-estampada-coracao-bolso-feminina-marinho', 'Camisa Regata Adooro! Estampada Corações Bolso Feminina - Marinho', 'https://static.zattini.com.br/produtos/camisa-regata-adooro!-estampada-coracoes-bolso-feminina/12/ILV-0102-012/ILV-0102-012_detalhe1.jpg?ims=326x', 5, 0, 59.99, 'enabled', 0, '2020-09-02 11:23:51', '2020-09-02 11:25:08'),
	(4, 1, 0, 30, '0004', 'Camisa C & V Collection Barra Floral Feminina', 'camisa-c-v-collection-barra-floral-feminina', 'Camisa C & V Collection Barra Floral Feminina', 'https://static.zattini.com.br/produtos/camisa-manga-longa-c-&-v-collection-barra-floral-feminina/14/MAU-0027-014/MAU-0027-014_detalhe1.jpg?ims=326x', 5, 59.99, 47.99, 'enabled', 0, '2020-09-02 11:23:51', '2020-09-02 11:25:08'),
	(5, 1, 0, 14, '0005', 'Calça Sarja Ecxo Skinny Masculina - Verde Militar', 'calca-sarja-ecxo-skinny-masculina-verde-militar', 'Calça Sarja Ecxo Skinny Masculina - Verde Militar', 'http://static.zattini.com.br/produtos/calca-sarja-ecxo-skinny-masculina/92/LYU-0262-192/LYU-0262-192_zoom1.jpg?ts=1595354956&ims=326x', 5, 149.99, 55.99, 'enabled', 0, '2020-09-02 11:23:52', '2020-09-02 11:25:08'),
	(6, 1, 0, 5, '0006', 'Sapato Casual Couro Kildare Camurção Cano Médio Masculino - Café', 'sapato-casual-couro-killdare-comurcao-cano-medio-masculino', 'Sapato Casual Couro Kildare Camurção Cano Médio Masculino - Café', 'https://static.zattini.com.br/produtos/sapato-casual-couro-kildare-camurcao-cano-medio-masculino/03/E29-0612-003/E29-0612-003_zoom1.jpg?ts=1569262617&ims=326x', 5, 254.99, 229.9, 'enabled', 0, '2020-09-02 11:23:52', '2020-09-02 11:25:08');
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
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
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
	(1, 'Masculino', NULL, 'masculino'),
	(2, 'Feminino', NULL, 'feminino'),
	(3, 'Unissex', NULL, 'unissex'),
	(4, 'Esportes', NULL, 'esportes'),
	(12, 'Acessórios', 2, 'acessorios'),
	(6, 'Marcas', NULL, 'marcas'),
	(7, 'Roupas', 1, 'roupas'),
	(8, 'Calçados', 1, 'calcados'),
	(9, 'Acessórios', 1, 'acessorios'),
	(10, 'Roupas', 2, 'roupas'),
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
  KEY `FK_subcategories_categories` (`id_category`)
) ENGINE=MyISAM AUTO_INCREMENT=54 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela lojinha.products_subcategories: 53 rows
DELETE FROM `products_subcategories`;
/*!40000 ALTER TABLE `products_subcategories` DISABLE KEYS */;
INSERT INTO `products_subcategories` (`id_subcategory`, `id_category`, `slug`, `name`) VALUES
	(1, 8, 'botas', 'Botas'),
	(2, 8, 'chinelos', 'Chinelos'),
	(3, 8, 'mocassim', 'Mocassim'),
	(4, 8, 'sapatenis', 'Sapatênis'),
	(5, 8, 'sapato-casual', 'Sapato Casual'),
	(6, 8, 'sapato-confort', 'Sapato Conforto'),
	(7, 8, 'sapato-social', 'Sapato Social'),
	(8, 8, 'slider', 'Sider'),
	(9, 8, 'tenis', 'Tênis'),
	(10, 7, 'camisas', 'Camisas'),
	(11, 7, 'camisetas', 'Camisetas'),
	(12, 7, 'calcas', 'Calças'),
	(13, 7, 'calca-jeans', 'Calça Jeans'),
	(14, 7, 'calcas-sarja', 'Calças Sarja'),
	(15, 7, 'casacos-e-jaquetas', 'Casacos e Jaquetas'),
	(16, 7, 'moletons', 'Moletons'),
	(17, 7, 'polos', 'Polos'),
	(18, 7, 'regatas', 'Regatas'),
	(19, 7, 'shorts-e-bermudas', 'Shorts e Bermudas'),
	(20, 9, 'bones', 'Bonés'),
	(21, 9, 'cateiras', 'Carteiras'),
	(22, 9, 'cintos', 'Cintos'),
	(23, 9, 'malas', 'Malas'),
	(24, 9, 'mochilas-e-bolsas', 'Mochilas e Bolsas'),
	(25, 9, 'oculos', 'Óculos'),
	(26, 9, 'relogios', 'Relógios'),
	(27, 10, 'blusas-e-camisetas', 'Blusas e Camisetas'),
	(28, 10, 'calcas', 'Calças'),
	(29, 10, 'calca-jeans', 'Calças Jeans'),
	(30, 10, 'camisas', 'Camisas'),
	(31, 10, 'casacos', 'Casacos'),
	(32, 10, 'malhas-e-tricos', 'Malhas e Tricôs'),
	(33, 10, 'moletons', 'Moletons'),
	(34, 10, 'saias', 'Saias'),
	(35, 10, 'shorts-e-bermudas', 'Shorts e Bermudas'),
	(36, 10, 'vestidos', 'Vestidos'),
	(37, 12, 'bijuterias', 'Bijuterias'),
	(38, 12, 'bolsas', 'Bolsas'),
	(39, 12, 'carteiras', 'Carteiras'),
	(40, 12, 'cintos', 'Cintos'),
	(41, 12, 'mochilas-e-malas', 'Mochilas e Malas'),
	(42, 12, 'oculos', 'Óculos'),
	(43, 12, 'relogios', 'Relógios'),
	(44, 11, 'botas', 'Botas'),
	(45, 11, 'chinelos', 'Chinelos'),
	(46, 11, 'linha-conforto', 'Linha Conforto'),
	(47, 11, 'mocassins', 'Mocassins'),
	(48, 11, 'peeptoes', 'Peep toes'),
	(49, 11, 'rasteiras', 'Rasteiras'),
	(50, 11, 'sandalias', 'Sandálias'),
	(51, 11, 'sapatilhas', 'Sapatilhas'),
	(52, 11, 'scarpins', 'Scarpins'),
	(53, 11, 'tenis', 'Tênis');
/*!40000 ALTER TABLE `products_subcategories` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
