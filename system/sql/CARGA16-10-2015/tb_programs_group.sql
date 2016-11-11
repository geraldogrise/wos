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
-- Estrutura da tabela `tb_programs_group`
--

CREATE TABLE IF NOT EXISTS `tb_programs_group` (
  `id_program_group` int(11) NOT NULL AUTO_INCREMENT,
  `id_program` int(11) NOT NULL,
  `id_group` int(11) NOT NULL,
  PRIMARY KEY (`id_program_group`),
  KEY `id_program` (`id_program`),
  KEY `id_group` (`id_group`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `tb_programs_group`
--

INSERT INTO `tb_programs_group` (`id_program_group`, `id_program`, `id_group`) VALUES
(3, 1, 4),
(5, 1, 7);

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `tb_programs_group`
--
ALTER TABLE `tb_programs_group`
  ADD CONSTRAINT `tb_programs_group_ibfk_1` FOREIGN KEY (`id_program`) REFERENCES `tb_programs` (`id_program`),
  ADD CONSTRAINT `tb_programs_group_ibfk_2` FOREIGN KEY (`id_group`) REFERENCES `tb_group` (`id_group`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
