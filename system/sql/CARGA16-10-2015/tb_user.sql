-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 16-Out-2015 às 21:07
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
-- Estrutura da tabela `tb_user`
--

CREATE TABLE IF NOT EXISTS `tb_user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `login` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `id_group` int(11) NOT NULL,
  `user_image` varchar(500) NOT NULL,
  PRIMARY KEY (`id_user`),
  KEY `id_group` (`id_group`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Extraindo dados da tabela `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `name`, `email`, `login`, `password`, `id_group`, `user_image`) VALUES
(1, 'admin', 'admin@grisecorp.com.br', 'admin', 'admin', 1, 'no_photo.jpg'),
(2, 'Geraldo Grise Bacelar de Sousa', 'geraldogrise@yahoo.com.br', 'geraldo', '1234', 1, 'no_photo.jpg'),
(3, 'Zuleide Grise Bacelar de Sousa', 'zucagrise@yahoo.com.br', 'zuca', '12345', 1, 'no_photo.jpg'),
(4, 'Daniel Grise Bacelar de Sousa', 'danngrise@yahoo.com.br', 'dann', '1234', 2, 'no_photo.jpg'),
(5, 'Farah Morais', 'farahmorais@hotmail.com.br', 'farahmorais', '1234', 2, 'no_photo.jpg'),
(6, 'Renata Alves', 'renataalves@hotmail.com', 'renata.alves', '1234', 2, 'no_photo.jpg'),
(7, 'Grise', 'grise888@gmail.com', 'grise', '1234', 2, 'no_photo.jpg');

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `tb_user`
--
ALTER TABLE `tb_user`
  ADD CONSTRAINT `tb_user_ibfk_1` FOREIGN KEY (`id_group`) REFERENCES `tb_group` (`id_group`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
