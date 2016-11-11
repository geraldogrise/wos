-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 16-Out-2015 às 21:05
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
-- Estrutura da tabela `tb_events_calendar`
--

CREATE TABLE IF NOT EXISTS `tb_events_calendar` (
  `id_events` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `image` varchar(100) DEFAULT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id_events`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Extraindo dados da tabela `tb_events_calendar`
--

INSERT INTO `tb_events_calendar` (`id_events`, `name`, `image`, `id_user`) VALUES
(4, 'Estado', 'http://localhost/estudo/wos/computer/bahia.png', 2),
(5, 'Reunião', NULL, 2),
(6, 'Café da Manhâ', NULL, 2),
(7, 'Teste', 'http://localhost/estudo/wos/computer/bandeiras/coreiaidosul.jpg', 1),
(8, 'Teste', 'http://localhost/estudo/wos/computer/bandeiras/coreiaidosul.jpg', 1);

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `tb_events_calendar`
--
ALTER TABLE `tb_events_calendar`
  ADD CONSTRAINT `tb_events_calendar_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
