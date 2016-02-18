-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           5.6.17 - MySQL Community Server (GPL)
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              9.3.0.5036
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Copiando estrutura do banco de dados para produto
CREATE DATABASE IF NOT EXISTS `banco` /*!40100 DEFAULT CHARACTER SET latin2 COLLATE latin2_bin */;
USE `banco`;


-- Copiando estrutura para tabela produto.cliente
CREATE TABLE IF NOT EXISTS `cliente` (
  `id` int(11) PRIMARY KEY NOT NULL,
  `nome` varchar(50) COLLATE latin2_bin DEFAULT NULL,
  `email` varchar(50) COLLATE latin2_bin DEFAULT NULL,
  `tel` varchar(50) COLLATE latin2_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin2 COLLATE=latin2_bin;

CREATE TABLE IF NOT EXISTS `produto` (
  `id` int(11) PRIMARY KEY NOT NULL,
  `nome` varchar(50) COLLATE latin2_bin DEFAULT NULL,
  `descricao` varchar(50) COLLATE latin2_bin DEFAULT NULL,
  `preco` varchar(50) COLLATE latin2_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin2 COLLATE=latin2_bin;


CREATE TABLE IF NOT EXISTS `pedido` (
  `id_pedido` int(11) DEFAULT NULL,
  FOREIGN KEY (id_produto) REFERENCES produto(id),
  FOREIGN KEY (id_pedido) REFERENCES pedido(id),

) ENGINE=InnoDB DEFAULT CHARSET=latin2 COLLATE=latin2_bin;
