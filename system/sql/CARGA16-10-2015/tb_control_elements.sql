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
-- Estrutura da tabela `tb_control_elements`
--

CREATE TABLE IF NOT EXISTS `tb_control_elements` (
  `id_control_element` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `imagePath` varchar(50) NOT NULL,
  `id_grp_control` int(11) NOT NULL,
  `callFunction` varchar(100) NOT NULL,
  PRIMARY KEY (`id_control_element`),
  KEY `id_grp_control` (`id_grp_control`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Extraindo dados da tabela `tb_control_elements`
--

INSERT INTO `tb_control_elements` (`id_control_element`, `name`, `imagePath`, `id_grp_control`, `callFunction`) VALUES
(1, 'Appearance', 'desktop_m.png', 1, ''),
(2, 'Gadgets', 'gadgets.png', 1, 'getControlPage(this,''getListWidgets'')'),
(3, 'Start Menu', 'startmenu.png', 1, ''),
(4, 'Secutiry', 'firewall.png', 2, ''),
(5, 'Folder Options', 'folder_lock.png', 2, ''),
(6, 'System', 'system.png', 3, 'getListControl(this, ''getSystemInfo'' ,'''','''','''');'),
(7, 'Backup', 'backup.png', 2, 'getControlPage(this,''getBackupinfo'')'),
(8, 'Programs', 'programs.png', 2, 'getControlPage(this,''getListPrograms'')'),
(9, 'User Accounts', 'account.png', 2, 'getControlPage(this,''getUserInfo'')'),
(10, 'Wos Update', 'update.png', 2, 'getControlPage(this,''getUpdateInfo'')'),
(11, 'Languages', 'language.png', 3, ''),
(12, 'Fonts', 'fonts.png', 3, 'getControlPage(this,''getListFonts'')'),
(13, 'Date', 'calendar.png', 3, 'callWindow(this,''sdate'',''callWindowSdate'','''')');

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `tb_control_elements`
--
ALTER TABLE `tb_control_elements`
  ADD CONSTRAINT `tb_control_elements_ibfk_1` FOREIGN KEY (`id_grp_control`) REFERENCES `tb_grp_control` (`id_grp_control`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
