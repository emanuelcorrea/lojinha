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
CREATE DATABASE IF NOT EXISTS `lojinha` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `lojinha`;

-- Copiando estrutura para tabela lojinha.categories
CREATE TABLE IF NOT EXISTS `categories` (
  `id_category` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL DEFAULT '',
  `subcategory` int(11) DEFAULT NULL,
  `slug` varchar(50) NOT NULL,
  PRIMARY KEY (`id_category`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela lojinha.categories: 11 rows
DELETE FROM `categories`;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` (`id_category`, `name`, `subcategory`, `slug`) VALUES
	(1, 'Masculino', NULL, 'masculino');
INSERT INTO `categories` (`id_category`, `name`, `subcategory`, `slug`) VALUES
	(2, 'Feminino', NULL, 'feminino');
INSERT INTO `categories` (`id_category`, `name`, `subcategory`, `slug`) VALUES
	(3, 'Unissex', NULL, 'unissex');
INSERT INTO `categories` (`id_category`, `name`, `subcategory`, `slug`) VALUES
	(4, 'Esportes', NULL, 'esportes');
INSERT INTO `categories` (`id_category`, `name`, `subcategory`, `slug`) VALUES
	(12, 'Acessórios', 2, 'acessorios');
INSERT INTO `categories` (`id_category`, `name`, `subcategory`, `slug`) VALUES
	(6, 'Marcas', NULL, 'marcas');
INSERT INTO `categories` (`id_category`, `name`, `subcategory`, `slug`) VALUES
	(7, 'Roupas', 1, 'roupas');
INSERT INTO `categories` (`id_category`, `name`, `subcategory`, `slug`) VALUES
	(8, 'Calçados', 1, 'calcados');
INSERT INTO `categories` (`id_category`, `name`, `subcategory`, `slug`) VALUES
	(9, 'Acessórios', 1, 'acessorios');
INSERT INTO `categories` (`id_category`, `name`, `subcategory`, `slug`) VALUES
	(10, 'Roupas', 2, 'roupas');
INSERT INTO `categories` (`id_category`, `name`, `subcategory`, `slug`) VALUES
	(11, 'Calçados', 2, 'calcados');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;

-- Copiando estrutura para tabela lojinha.products
CREATE TABLE IF NOT EXISTS `products` (
  `id_product` int(11) NOT NULL AUTO_INCREMENT,
  `id_subcategory` int(11) NOT NULL DEFAULT 0,
  `name` varchar(255) NOT NULL DEFAULT '',
  `slug` varchar(255) NOT NULL DEFAULT '',
  `description` text NOT NULL DEFAULT '',
  `url_img` varchar(255) NOT NULL DEFAULT '',
  `rate` double NOT NULL DEFAULT 0,
  `price_before` double DEFAULT 0,
  `price` double NOT NULL DEFAULT 0,
  PRIMARY KEY (`id_product`),
  KEY `FK_products_categories` (`id_subcategory`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela lojinha.products: 6 rows
DELETE FROM `products`;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` (`id_product`, `id_subcategory`, `name`, `slug`, `description`, `url_img`, `rate`, `price_before`, `price`) VALUES
	(1, 10, 'Camisa Social Watkins&Krown Masculina', 'camisa-social-watkins-krown-masculina', 'Camisa C & V Collection Barra Floral Feminina', 'https://static.zattini.com.br/produtos/camisa-social-manga-longa-watkins&krown-masculina/14/IFZ-0006-014/IFZ-0006-014_detalhe1.jpg?ims=326x', 5, 99.99, 55.99);
INSERT INTO `products` (`id_product`, `id_subcategory`, `name`, `slug`, `description`, `url_img`, `rate`, `price_before`, `price`) VALUES
	(2, 30, 'Camisa Adooro! Manga 3/4 Folhagens Feminina - Branco', 'camisa-adooro-manga-3-4-folhagens-feminina-branco', 'Camisa Adooro! Manga 3/4 Folhagens Feminina - Branco', 'https://static.zattini.com.br/produtos/camisa-adooro!-manga-34-folhagens-feminina/14/ILV-0048-014/ILV-0048-014_detalhe1.jpg?ims=326x', 5, 0, 59.99);
INSERT INTO `products` (`id_product`, `id_subcategory`, `name`, `slug`, `description`, `url_img`, `rate`, `price_before`, `price`) VALUES
	(3, 30, 'Camisa Regata Adooro! Estampada Corações Bolso Feminina - Marinho', 'camisa-regata-adooro-estampada-coracao-bolso-feminina-marinho', 'Camisa Regata Adooro! Estampada Corações Bolso Feminina - Marinho', 'https://static.zattini.com.br/produtos/camisa-regata-adooro!-estampada-coracoes-bolso-feminina/12/ILV-0102-012/ILV-0102-012_detalhe1.jpg?ims=326x', 5, 0, 59.99);
INSERT INTO `products` (`id_product`, `id_subcategory`, `name`, `slug`, `description`, `url_img`, `rate`, `price_before`, `price`) VALUES
	(4, 30, 'Camisa C & V Collection Barra Floral Feminina', 'camisa-c-v-collection-barra-floral-feminina', 'Camisa C & V Collection Barra Floral Feminina', 'https://static.zattini.com.br/produtos/camisa-manga-longa-c-&-v-collection-barra-floral-feminina/14/MAU-0027-014/MAU-0027-014_detalhe1.jpg?ims=326x', 5, 59.99, 47.99);
INSERT INTO `products` (`id_product`, `id_subcategory`, `name`, `slug`, `description`, `url_img`, `rate`, `price_before`, `price`) VALUES
	(5, 14, 'Calça Sarja Ecxo Skinny Masculina - Verde Militar', 'calca-sarja-ecxo-skinny-masculina-verde-militar', 'Calça Sarja Ecxo Skinny Masculina - Verde Militar', 'http://static.zattini.com.br/produtos/calca-sarja-ecxo-skinny-masculina/92/LYU-0262-192/LYU-0262-192_zoom1.jpg?ts=1595354956&ims=326x', 5, 149.99, 55.99);
INSERT INTO `products` (`id_product`, `id_subcategory`, `name`, `slug`, `description`, `url_img`, `rate`, `price_before`, `price`) VALUES
	(6, 5, 'Sapato Casual Couro Kildare Camurção Cano Médio Masculino - Café', 'sapato-casual-couro-killdare-comurcao-cano-medio-masculino', 'Sapato Casual Couro Kildare Camurção Cano Médio Masculino - Café', 'https://static.zattini.com.br/produtos/sapato-casual-couro-kildare-camurcao-cano-medio-masculino/03/E29-0612-003/E29-0612-003_zoom1.jpg?ts=1569262617&ims=326x', 5, 254.99, 229.9);
/*!40000 ALTER TABLE `products` ENABLE KEYS */;

-- Copiando estrutura para tabela lojinha.subcategories
CREATE TABLE IF NOT EXISTS `subcategories` (
  `id_subcategory` int(11) NOT NULL AUTO_INCREMENT,
  `id_category` int(11) NOT NULL DEFAULT 0,
  `slug` varchar(50) NOT NULL DEFAULT '',
  `name` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id_subcategory`),
  KEY `FK_subcategories_categories` (`id_category`)
) ENGINE=MyISAM AUTO_INCREMENT=54 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela lojinha.subcategories: 53 rows
DELETE FROM `subcategories`;
/*!40000 ALTER TABLE `subcategories` DISABLE KEYS */;
INSERT INTO `subcategories` (`id_subcategory`, `id_category`, `slug`, `name`) VALUES
	(1, 8, 'botas', 'Botas');
INSERT INTO `subcategories` (`id_subcategory`, `id_category`, `slug`, `name`) VALUES
	(2, 8, 'chinelos', 'Chinelos');
INSERT INTO `subcategories` (`id_subcategory`, `id_category`, `slug`, `name`) VALUES
	(3, 8, 'mocassim', 'Mocassim');
INSERT INTO `subcategories` (`id_subcategory`, `id_category`, `slug`, `name`) VALUES
	(4, 8, 'sapatenis', 'Sapatênis');
INSERT INTO `subcategories` (`id_subcategory`, `id_category`, `slug`, `name`) VALUES
	(5, 8, 'sapato-casual', 'Sapato Casual');
INSERT INTO `subcategories` (`id_subcategory`, `id_category`, `slug`, `name`) VALUES
	(6, 8, 'sapato-confort', 'Sapato Conforto');
INSERT INTO `subcategories` (`id_subcategory`, `id_category`, `slug`, `name`) VALUES
	(7, 8, 'sapato-social', 'Sapato Social');
INSERT INTO `subcategories` (`id_subcategory`, `id_category`, `slug`, `name`) VALUES
	(8, 8, 'slider', 'Sider');
INSERT INTO `subcategories` (`id_subcategory`, `id_category`, `slug`, `name`) VALUES
	(9, 8, 'tenis', 'Tênis');
INSERT INTO `subcategories` (`id_subcategory`, `id_category`, `slug`, `name`) VALUES
	(10, 7, 'camisas', 'Camisas');
INSERT INTO `subcategories` (`id_subcategory`, `id_category`, `slug`, `name`) VALUES
	(11, 7, 'camisetas', 'Camisetas');
INSERT INTO `subcategories` (`id_subcategory`, `id_category`, `slug`, `name`) VALUES
	(12, 7, 'calcas', 'Calças');
INSERT INTO `subcategories` (`id_subcategory`, `id_category`, `slug`, `name`) VALUES
	(13, 7, 'calca-jeans', 'Calça Jeans');
INSERT INTO `subcategories` (`id_subcategory`, `id_category`, `slug`, `name`) VALUES
	(14, 7, 'calcas-sarja', 'Calças Sarja');
INSERT INTO `subcategories` (`id_subcategory`, `id_category`, `slug`, `name`) VALUES
	(15, 7, 'casacos-e-jaquetas', 'Casacos e Jaquetas');
INSERT INTO `subcategories` (`id_subcategory`, `id_category`, `slug`, `name`) VALUES
	(16, 7, 'moletons', 'Moletons');
INSERT INTO `subcategories` (`id_subcategory`, `id_category`, `slug`, `name`) VALUES
	(17, 7, 'polos', 'Polos');
INSERT INTO `subcategories` (`id_subcategory`, `id_category`, `slug`, `name`) VALUES
	(18, 7, 'regatas', 'Regatas');
INSERT INTO `subcategories` (`id_subcategory`, `id_category`, `slug`, `name`) VALUES
	(19, 7, 'shorts-e-bermudas', 'Shorts e Bermudas');
INSERT INTO `subcategories` (`id_subcategory`, `id_category`, `slug`, `name`) VALUES
	(20, 9, 'bones', 'Bonés');
INSERT INTO `subcategories` (`id_subcategory`, `id_category`, `slug`, `name`) VALUES
	(21, 9, 'cateiras', 'Carteiras');
INSERT INTO `subcategories` (`id_subcategory`, `id_category`, `slug`, `name`) VALUES
	(22, 9, 'cintos', 'Cintos');
INSERT INTO `subcategories` (`id_subcategory`, `id_category`, `slug`, `name`) VALUES
	(23, 9, 'malas', 'Malas');
INSERT INTO `subcategories` (`id_subcategory`, `id_category`, `slug`, `name`) VALUES
	(24, 9, 'mochilas-e-bolsas', 'Mochilas e Bolsas');
INSERT INTO `subcategories` (`id_subcategory`, `id_category`, `slug`, `name`) VALUES
	(25, 9, 'oculos', 'Óculos');
INSERT INTO `subcategories` (`id_subcategory`, `id_category`, `slug`, `name`) VALUES
	(26, 9, 'relogios', 'Relógios');
INSERT INTO `subcategories` (`id_subcategory`, `id_category`, `slug`, `name`) VALUES
	(27, 10, 'blusas-e-camisetas', 'Blusas e Camisetas');
INSERT INTO `subcategories` (`id_subcategory`, `id_category`, `slug`, `name`) VALUES
	(28, 10, 'calcas', 'Calças');
INSERT INTO `subcategories` (`id_subcategory`, `id_category`, `slug`, `name`) VALUES
	(29, 10, 'calca-jeans', 'Calças Jeans');
INSERT INTO `subcategories` (`id_subcategory`, `id_category`, `slug`, `name`) VALUES
	(30, 10, 'camisas', 'Camisas');
INSERT INTO `subcategories` (`id_subcategory`, `id_category`, `slug`, `name`) VALUES
	(31, 10, 'casacos', 'Casacos');
INSERT INTO `subcategories` (`id_subcategory`, `id_category`, `slug`, `name`) VALUES
	(32, 10, 'malhas-e-tricos', 'Malhas e Tricôs');
INSERT INTO `subcategories` (`id_subcategory`, `id_category`, `slug`, `name`) VALUES
	(33, 10, 'moletons', 'Moletons');
INSERT INTO `subcategories` (`id_subcategory`, `id_category`, `slug`, `name`) VALUES
	(34, 10, 'saias', 'Saias');
INSERT INTO `subcategories` (`id_subcategory`, `id_category`, `slug`, `name`) VALUES
	(35, 10, 'shorts-e-bermudas', 'Shorts e Bermudas');
INSERT INTO `subcategories` (`id_subcategory`, `id_category`, `slug`, `name`) VALUES
	(36, 10, 'vestidos', 'Vestidos');
INSERT INTO `subcategories` (`id_subcategory`, `id_category`, `slug`, `name`) VALUES
	(37, 12, 'bijuterias', 'Bijuterias');
INSERT INTO `subcategories` (`id_subcategory`, `id_category`, `slug`, `name`) VALUES
	(38, 12, 'bolsas', 'Bolsas');
INSERT INTO `subcategories` (`id_subcategory`, `id_category`, `slug`, `name`) VALUES
	(39, 12, 'carteiras', 'Carteiras');
INSERT INTO `subcategories` (`id_subcategory`, `id_category`, `slug`, `name`) VALUES
	(40, 12, 'cintos', 'Cintos');
INSERT INTO `subcategories` (`id_subcategory`, `id_category`, `slug`, `name`) VALUES
	(41, 12, 'mochilas-e-malas', 'Mochilas e Malas');
INSERT INTO `subcategories` (`id_subcategory`, `id_category`, `slug`, `name`) VALUES
	(42, 12, 'oculos', 'Óculos');
INSERT INTO `subcategories` (`id_subcategory`, `id_category`, `slug`, `name`) VALUES
	(43, 12, 'relogios', 'Relógios');
INSERT INTO `subcategories` (`id_subcategory`, `id_category`, `slug`, `name`) VALUES
	(44, 11, 'botas', 'Botas');
INSERT INTO `subcategories` (`id_subcategory`, `id_category`, `slug`, `name`) VALUES
	(45, 11, 'chinelos', 'Chinelos');
INSERT INTO `subcategories` (`id_subcategory`, `id_category`, `slug`, `name`) VALUES
	(46, 11, 'linha-conforto', 'Linha Conforto');
INSERT INTO `subcategories` (`id_subcategory`, `id_category`, `slug`, `name`) VALUES
	(47, 11, 'mocassins', 'Mocassins');
INSERT INTO `subcategories` (`id_subcategory`, `id_category`, `slug`, `name`) VALUES
	(48, 11, 'peeptoes', 'Peep toes');
INSERT INTO `subcategories` (`id_subcategory`, `id_category`, `slug`, `name`) VALUES
	(49, 11, 'rasteiras', 'Rasteiras');
INSERT INTO `subcategories` (`id_subcategory`, `id_category`, `slug`, `name`) VALUES
	(50, 11, 'sandalias', 'Sandálias');
INSERT INTO `subcategories` (`id_subcategory`, `id_category`, `slug`, `name`) VALUES
	(51, 11, 'sapatilhas', 'Sapatilhas');
INSERT INTO `subcategories` (`id_subcategory`, `id_category`, `slug`, `name`) VALUES
	(52, 11, 'scarpins', 'Scarpins');
INSERT INTO `subcategories` (`id_subcategory`, `id_category`, `slug`, `name`) VALUES
	(53, 11, 'tenis', 'Tênis');
/*!40000 ALTER TABLE `subcategories` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
