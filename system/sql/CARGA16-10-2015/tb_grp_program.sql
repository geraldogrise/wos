-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 16-Out-2015 às 21:06
-- Versão do servidor: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `wos`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_grp_program`
--

CREATE TABLE IF NOT EXISTS `tb_grp_program` (
  `id_grp_program` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `priority` int(11) NOT NULL,
  PRIMARY KEY (`id_grp_program`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Extraindo dados da tabela `tb_grp_program`
--

INSERT INTO `tb_grp_program` (`id_grp_program`, `name`, `priority`) VALUES
(1, 'ESSENTIALS', 1),
(2, 'TEXT EDITOR', 2),
(3, 'DOCUMENTS VIEWER', 3),
(4, 'AUDIO & VIDEO', 4),
(5, 'IMAGE MEDIA', 5),
(6, 'CODE EDITOR', 6),
(7, 'IMAGE EDITOR', 7),
(8, 'ACCESSORIES', 8),
(10, 'WIDGET', 9),
(11, 'SYSTEM', 11);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
