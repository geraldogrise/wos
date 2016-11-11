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
-- Estrutura da tabela `tb_calendar_item`
--

CREATE TABLE IF NOT EXISTS `tb_calendar_item` (
  `id_calendar_item` int(11) NOT NULL AUTO_INCREMENT,
  `dt_event` date NOT NULL,
  `id_events` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `pathCalendar` varchar(200) NOT NULL,
  PRIMARY KEY (`id_calendar_item`),
  KEY `id_user` (`id_user`),
  KEY `id_events` (`id_events`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Extraindo dados da tabela `tb_calendar_item`
--

INSERT INTO `tb_calendar_item` (`id_calendar_item`, `dt_event`, `id_events`, `id_user`, `pathCalendar`) VALUES
(15, '2015-06-29', 4, 2, 'C:#wamp#www#estudo#wos#computer#teste.wcal'),
(16, '2015-07-07', 4, 2, 'C:#wamp#www#estudo#wos#computer#teste.wcal'),
(17, '2015-10-05', 8, 1, 'C:#wamp#www#estudo#wos#computer#geraldo.wcal'),
(18, '2015-10-09', 7, 1, 'C:#wamp#www#estudo#wos#computer#geraldo.wcal');

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `tb_calendar_item`
--
ALTER TABLE `tb_calendar_item`
  ADD CONSTRAINT `tb_calendar_item_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`),
  ADD CONSTRAINT `tb_calendar_item_ibfk_2` FOREIGN KEY (`id_events`) REFERENCES `tb_events_calendar` (`id_events`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
