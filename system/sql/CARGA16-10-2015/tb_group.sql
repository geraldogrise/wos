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
-- Estrutura da tabela `tb_group`
--

CREATE TABLE IF NOT EXISTS `tb_group` (
  `id_group` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `id_group_pai` int(11) NOT NULL,
  `group_image` varchar(500) NOT NULL,
  PRIMARY KEY (`id_group`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Extraindo dados da tabela `tb_group`
--

INSERT INTO `tb_group` (`id_group`, `name`, `id_group_pai`, `group_image`) VALUES
(1, 'admin', 0, 'no_photo.jpg'),
(2, 'editor', 0, 'no_photo.jpg'),
(4, 'BIA', 1, 'no_photo.jpg'),
(6, 'Financial Admin', 1, 'no_photo.jpg'),
(7, 'Accounting Admin', 1, 'no_photo.jpg'),
(8, 'Database Admin', 1, 'no_photo.jpg'),
(9, 'Development Admin', 1, 'no_photo.jpg'),
(10, 'Design Admin', 1, 'no_photo.jpg'),
(11, 'Design', 0, 'no_photo.jpg'),
(12, 'Financial Manager', 0, 'no_photo.jpg'),
(13, 'Account Manager', 0, 'no_photo.jpg'),
(14, 'Design Manager', 0, 'no_photo.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
