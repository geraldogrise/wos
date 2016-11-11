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

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_country`
--

CREATE TABLE IF NOT EXISTS `tb_country` (
  `id_country` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `abv` varchar(50) NOT NULL,
  `continent` varchar(30) NOT NULL,
  `status` varchar(1) NOT NULL,
  PRIMARY KEY (`id_country`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=195 ;

--
-- Extraindo dados da tabela `tb_country`
--

INSERT INTO `tb_country` (`id_country`, `name`, `abv`, `continent`, `status`) VALUES
(1, 'Algeria', 'dz', 'africa', 'I'),
(2, 'Angola', 'ao', 'africa', 'I'),
(3, 'Benin', 'bj', 'africa', 'I'),
(4, 'Botswana', 'bw', 'africa', 'I'),
(5, 'Burkina', 'bf', 'africa', 'I'),
(6, 'Burundi', 'bi', 'africa', 'I'),
(7, 'Cameroon', 'cm', 'africa', 'I'),
(8, 'Cape Verde', 'cv', 'africa', 'I'),
(9, 'Central African Republic', 'cf', 'africa', 'I'),
(10, 'Chad', 'td', 'africa', 'I'),
(11, 'Comoros', 'km', 'africa', 'I'),
(12, 'Congo', 'cg', 'africa', 'I'),
(13, 'Congo, Democratic Republic of', 'cd', 'africa', 'I'),
(14, 'Djibouti', 'dj', 'africa', 'I'),
(15, 'Egypt', 'eg', 'africa', 'I'),
(16, 'Equatorial Guinea', 'gq', 'africa', 'I'),
(17, 'Eritrea', 'er', 'africa', 'I'),
(18, 'Ethiopia', 'et', 'africa', 'I'),
(19, 'Gabon', 'ga', 'africa', 'I'),
(20, 'Gambia', 'gm', 'africa', 'I'),
(21, 'Ghana', 'gh', 'africa', 'I'),
(22, 'Guinea', 'gn', 'africa', 'I'),
(23, 'Guinea-Bissau', 'gw', 'africa', 'I'),
(24, 'Ivory Coast', 'ci', 'africa', 'I'),
(25, 'Kenya', 'ke', 'africa', 'I'),
(26, 'Lesotho', 'ls', 'africa', 'I'),
(27, 'Liberia', 'lr', 'africa', 'I'),
(28, 'Libya', 'ly', 'africa', 'I'),
(29, 'Madagascar', 'mg', 'africa', 'I'),
(30, 'Malawi', 'mw', 'africa', 'I'),
(31, 'Mali', 'ml', 'africa', 'I'),
(32, 'Mauritania', 'mr', 'africa', 'I'),
(33, 'Mauritius', 'mu', 'africa', 'I'),
(34, 'Morocco', 'ma', 'africa', 'I'),
(35, 'Mozambique', 'mz', 'africa', 'I'),
(36, 'Namibia', 'na', 'africa', 'I'),
(37, 'Niger', 'ne', 'africa', 'I'),
(38, 'Nigeria', 'ng', 'africa', 'I'),
(39, 'Rwanda', 'rw', 'africa', 'I'),
(40, 'Sao Tome and Principe', 'st', 'africa', 'I'),
(41, 'Senegal', 'sn', 'africa', 'I'),
(42, 'Seychelles', 'sc', 'africa', 'I'),
(43, 'Sierra Leone', 'sl', 'africa', 'I'),
(44, 'Somalia', 'so', 'africa', 'I'),
(45, 'South Africa', 'za', 'africa', 'I'),
(46, 'South Sudan', 'ss', 'africa', 'I'),
(47, 'Sudan', 'sd', 'africa', 'I'),
(48, 'Swaziland', 'sz', 'africa', 'I'),
(49, 'Tanzania', 'tz', 'africa', 'I'),
(50, 'Togo', 'tg', 'africa', 'I'),
(51, 'Tunisia', 'tn', 'africa', 'I'),
(52, 'Uganda', 'ug', 'africa', 'I'),
(53, 'Zambia', 'zm', 'africa', 'I'),
(54, 'Zimbabwe\r\n    ', 'zw', 'africa', 'I'),
(55, 'Afghanistan', 'af', 'asia', 'I'),
(56, 'Bahrain', 'bh', 'asia', 'I'),
(57, 'Bangladesh', 'bd', 'asia', 'I'),
(58, 'Bhutan', 'bt', 'asia', 'I'),
(59, 'Brunei', 'bn', 'asia', 'I'),
(60, 'Burma (Myanmar)', 'mm', 'asia', 'I'),
(61, 'Cambodia', 'kh', 'asia', 'I'),
(62, 'China', 'cn', 'asia', 'I'),
(63, 'East Timor', 'etimor', 'asia', 'I'),
(64, 'India', 'in', 'asia', 'I'),
(65, 'Indonesia', 'id', 'asia', 'I'),
(66, 'Iran', 'ir', 'asia', 'I'),
(67, 'Iraq', 'iq', 'asia', 'I'),
(68, 'Israel', 'il', 'asia', 'I'),
(69, 'Japan', 'jp', 'asia', 'I'),
(70, 'Jordan', 'jo', 'asia', 'I'),
(71, 'Kazakhstan', 'kz', 'asia', 'I'),
(72, 'Korea, North', 'kp', 'asia', 'I'),
(73, 'Korea, South', 'kr', 'asia', 'I'),
(74, 'Kuwait', 'kw', 'asia', 'I'),
(75, 'Kyrgyzstan', 'kg', 'asia', 'I'),
(76, 'Laos', 'la', 'asia', 'I'),
(77, 'Lebanon', 'lb', 'asia', 'I'),
(78, 'Malaysia', 'my', 'asia', 'I'),
(79, 'Maldives', 'mv', 'asia', 'I'),
(80, 'Mongolia', 'mn', 'asia', 'I'),
(81, 'Nepal', 'np', 'asia', 'I'),
(82, 'Oman', 'om', 'asia', 'I'),
(83, 'Pakistan', 'pk', 'asia', 'I'),
(84, 'Philippines', 'ph', 'asia', 'I'),
(85, 'Qatar', 'qa', 'asia', 'I'),
(86, 'Russian Federation', 'ru', 'asia', 'I'),
(87, 'Saudi Arabia', 'sa', 'asia', 'I'),
(88, 'Singapore', 'sg', 'asia', 'I'),
(89, 'Sri Lanka', 'lk', 'asia', 'I'),
(90, 'Syria', 'sy', 'asia', 'I'),
(91, 'Tajikistan', 'tj', 'asia', 'I'),
(92, 'Thailand', 'th', 'asia', 'I'),
(93, 'Turkey', 'tr', 'asia', 'I'),
(94, 'Turkmenistan', 'tm', 'asia', 'I'),
(95, 'United Arab Emirates', 'ae', 'asia', 'I'),
(96, 'Uzbekistan', 'uz', 'asia', 'I'),
(97, 'Vietnam', 'vn', 'asia', 'I'),
(98, 'Yemen', 'ye', 'asia', 'I'),
(99, 'Albania', 'al', 'europe', 'I'),
(100, 'Andorra', 'ad', 'europe', 'I'),
(101, 'Armenia', 'am', 'europe', 'I'),
(102, 'Austria', 'at', 'europe', 'I'),
(103, 'Azerbaijan', 'az', 'europe', 'I'),
(104, 'Belarus', 'by', 'europe', 'I'),
(105, 'Belgium', 'be', 'europe', 'I'),
(106, 'Bosnia and Herzegovina', 'ba', 'europe', 'I'),
(107, 'Bulgaria', 'bg', 'europe', 'I'),
(108, 'Croatia', 'hr', 'europe', 'I'),
(109, 'Cyprus', 'cy', 'europe', 'I'),
(110, 'Czech Republic', 'cz', 'europe', 'I'),
(111, 'Denmark', 'dk', 'europe', 'I'),
(112, 'Estonia', 'ee', 'europe', 'I'),
(113, 'Finland', 'fi', 'europe', 'I'),
(114, 'France', 'fr', 'europe', 'I'),
(115, 'Georgia', 'ge', 'europe', 'I'),
(116, 'Germany', 'de', 'europe', 'I'),
(117, 'Greece', 'gr', 'europe', 'I'),
(118, 'Hungary', 'hu', 'europe', 'I'),
(119, 'Iceland', 'is', 'europe', 'I'),
(120, 'Ireland', 'ie', 'europe', 'I'),
(121, 'Italy', 'it', 'europe', 'I'),
(122, 'Latvia', 'lv', 'europe', 'I'),
(123, 'Liechtenstein', 'li', 'europe', 'I'),
(124, 'Lithuania', 'lt', 'europe', 'I'),
(125, 'Luxembourg', 'lu', 'europe', 'I'),
(126, 'Macedonia', 'mk', 'europe', 'I'),
(127, 'Malta', 'mt', 'europe', 'I'),
(128, 'Moldova', 'md', 'europe', 'I'),
(129, 'Monaco', 'mc', 'europe', 'I'),
(130, 'Montenegro', 'mj', 'europe', 'I'),
(131, 'Netherlands', 'nl', 'europe', 'I'),
(132, 'Norway', 'no', 'europe', 'I'),
(133, 'Poland', 'pl', 'europe', 'I'),
(134, 'Portugal', 'pt', 'europe', 'I'),
(135, 'Romania', 'ro', 'europe', 'I'),
(136, 'San Marino', 'sm', 'europe', 'I'),
(137, 'Serbia', 'mj', 'europe', 'I'),
(138, 'Slovakia', 'sk', 'europe', 'I'),
(139, 'Slovenia', 'si', 'europe', 'I'),
(140, 'Spain', 'es', 'europe', 'I'),
(141, 'Sweden', 'se', 'europe', 'I'),
(142, 'Switzerland', 'ch', 'europe', 'I'),
(143, 'Ukraine', 'ua', 'europe', 'I'),
(144, 'United Kingdom', 'uk', 'europe', 'I'),
(145, 'Vatican City', 'va', 'europe', 'I'),
(146, 'Antigua and Barbuda', 'caribb', 'north america', 'I'),
(147, 'Bahamas', 'caribb', 'north america', 'I'),
(148, 'Barbados', 'caribb', 'north america', 'I'),
(149, 'Belize', 'camerica', 'north america', 'I'),
(150, 'Canada', 'ca', 'north america', 'I'),
(151, 'Costa Rica', 'camerica', 'north america', 'I'),
(152, 'Cuba', 'caribb', 'north america', 'I'),
(153, 'Dominica', 'caribb', 'north america', 'I'),
(154, 'Dominican Republic', 'caribb', 'north america', 'I'),
(155, 'El Salvador', 'camerica', 'north america', 'I'),
(156, 'Grenada', 'caribb', 'north america', 'I'),
(157, 'Guatemala', 'camerica', 'north america', 'I'),
(158, 'Haiti', 'caribb', 'north america', 'I'),
(159, 'Honduras', 'camerica', 'north america', 'I'),
(160, 'Jamaica', 'caribb', 'north america', 'I'),
(161, 'Mexico', 'mx', 'north america', 'I'),
(162, 'Nicaragua', 'camerica', 'north america', 'I'),
(163, 'Panama', 'camerica', 'north america', 'I'),
(164, 'Saint Kitts and Nevis', 'caribb', 'north america', 'I'),
(165, 'Saint Lucia', 'caribb', 'north america', 'I'),
(166, 'Saint Vincent and the Grenadines', 'caribb', 'north america', 'I'),
(167, 'Trinidad and Tobago', 'caribb', 'north america', 'I'),
(168, 'United States', 'us', 'north america', 'I'),
(169, 'Australia', 'au', 'oceania', 'I'),
(170, 'Fiji', 'fj', 'oceania', 'I'),
(171, 'Kiribati', 'ki', 'oceania', 'I'),
(172, 'Marshall Islands', 'mh', 'oceania', 'I'),
(173, 'Micronesia', 'fm', 'oceania', 'I'),
(174, 'Nauru', 'nr', 'oceania', 'I'),
(175, 'New Zealand', 'nz', 'oceania', 'I'),
(176, 'Palau', 'pw', 'oceania', 'I'),
(177, 'Papua New Guinea', 'pg', 'oceania', 'I'),
(178, 'Samoa', 'ws', 'oceania', 'I'),
(179, 'Solomon Islands', 'sb', 'oceania', 'I'),
(180, 'Tonga', 'to', 'oceania', 'I'),
(181, 'Tuvalu', 'tv', 'oceania', 'I'),
(182, 'Vanuatu', 'vu', 'oceania', 'I'),
(183, 'Argentina', 'ar', 'south america', 'I'),
(184, 'Bolivia', 'bo', 'south america', 'I'),
(185, 'Brazil', 'br', 'south america', 'I'),
(186, 'Chile', 'cl', 'south america', 'I'),
(187, 'Colombia', 'co', 'south america', 'I'),
(188, 'Ecuador', 'ec', 'south america', 'I'),
(189, 'Guyana', 'gy', 'south america', 'I'),
(190, 'Paraguay', 'py', 'south america', 'I'),
(191, 'Peru', 'pe', 'south america', 'I'),
(192, 'Suriname', 'sr', 'south america', 'I'),
(193, 'Uruguay', 'uy', 'south america', 'I'),
(194, 'Venezuela', 've', 'south america', 'I');

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

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_fonts`
--

CREATE TABLE IF NOT EXISTS `tb_fonts` (
  `id_fonts` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(300) NOT NULL,
  `folder` varchar(600) NOT NULL,
  PRIMARY KEY (`id_fonts`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `tb_fonts`
--

INSERT INTO `tb_fonts` (`id_fonts`, `name`, `folder`) VALUES
(1, 'fontawesome', 'css/fontes'),
(2, 'coda-heavy', 'css/fontes'),
(3, 'glyphicons-halflings', 'css\\fonts');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_gallery`
--

CREATE TABLE IF NOT EXISTS `tb_gallery` (
  `id_gallery` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id_gallery`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_gallery_item`
--

CREATE TABLE IF NOT EXISTS `tb_gallery_item` (
  `id_gallery_item` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `description` varchar(30) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_gallery` int(11) NOT NULL,
  PRIMARY KEY (`id_gallery_item`),
  KEY `id_user` (`id_user`),
  KEY `id_gallery` (`id_gallery`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_group_user`
--

CREATE TABLE IF NOT EXISTS `tb_group_user` (
  `id_group_user` int(11) NOT NULL AUTO_INCREMENT,
  `id_group` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id_group_user`),
  KEY `id_group` (`id_group`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Extraindo dados da tabela `tb_group_user`
--

INSERT INTO `tb_group_user` (`id_group_user`, `id_group`, `id_user`) VALUES
(1, 6, 2),
(2, 7, 3),
(3, 10, 4),
(4, 9, 5),
(5, 8, 6),
(6, 9, 6),
(7, 10, 6),
(8, 4, 7);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_grp_control`
--

CREATE TABLE IF NOT EXISTS `tb_grp_control` (
  `id_grp_control` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `priority` int(11) NOT NULL,
  PRIMARY KEY (`id_grp_control`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `tb_grp_control`
--

INSERT INTO `tb_grp_control` (`id_grp_control`, `name`, `priority`) VALUES
(1, 'Layout', 2),
(2, 'Security', 1),
(3, 'Format', 3);

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

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_programs`
--

CREATE TABLE IF NOT EXISTS `tb_programs` (
  `id_program` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `imagePath` varchar(50) NOT NULL,
  `id_grp_program` int(11) NOT NULL,
  `callFunction` varchar(100) NOT NULL,
  PRIMARY KEY (`id_program`),
  KEY `id_grp_program` (`id_grp_program`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=42 ;

--
-- Extraindo dados da tabela `tb_programs`
--

INSERT INTO `tb_programs` (`id_program`, `name`, `imagePath`, `id_grp_program`, `callFunction`) VALUES
(1, 'Upload Zone', 'upload.png', 1, 'callUploadWindow(this,''upload'')'),
(2, 'Wexplore', 'folder.png', 1, 'callWindowWExplore(this,''wexplore'','''',''normal'','''','''','''')'),
(3, 'WDoc', 'doc.png', 2, 'callWindow(this,''wdoc'',''callWindowWdoc'','''')'),
(4, 'Wnpad', 'txt.png', 2, 'callWindow(this,''wnpad'',''callWindowWnpad'','''')'),
(5, 'GDocs', 'gdocs.png', 3, 'callWindow(this,''gdocs'',''callWindowGdocs'','''')'),
(6, 'Pdf Viewer', 'pdf-viewer.png', 3, 'callWindow(this,''pdf_viewer'',''callWindowPdf_viewer'','''')'),
(7, 'Sound Manager', 'sound.png', 4, 'callWindow(this,''soundmanager'',''callWindowSoundManager'','''')'),
(8, 'WAudio', 'waudio.png', 4, 'callWindow(this,''waudio'',''callWindowWaudio'','''')'),
(9, 'WVideo', 'video_logo.png', 4, 'callWindow(this,''wvideo'',''callWindowWvideo'','''')'),
(10, 'Ytb Manager', 'ytd.png', 4, 'callWindow(this,''ytbmanager'',''callWindowYtbManager'','''')'),
(11, 'Galleria', 'galleria.png', 5, 'callWindow(this,''galleria'',''callWindowGalleria'','''')'),
(12, 'Imanager', 'imanager.png', 5, 'callWindowImanager(this,''imanager'','''','''','''')'),
(13, 'Wcarousel', 'wcarousel.png', 5, 'callWindow(this,''wcarousel'',''callWindowWCarousel'','''')'),
(14, 'WSlider', 'wslider.png', 5, 'callWindow(this,''wslider'',''callWindowWSlider'','''')'),
(15, 'Xml Editor', 'xml.png', 6, 'callWindow(this,''xmleditor'',''callWindowXmlEditor'','''')'),
(16, 'Html Editor', 'html.png', 6, 'callWindow(this,''htmleditor'',''callWindowHtmlEditor'','''')'),
(17, 'Php Editor', 'php.png', 6, 'callWindow(this,''phpeditor'',''callWindowPhpEditor'','''')'),
(18, 'Ccharp Editor', 'cs.png', 6, 'callWindow(this,''ccharpeditor'',''callWindowCcharpEditor'','''')'),
(19, 'Css Editor', 'css.png', 6, 'callWindow(this,''csseditor'',''callWindowCssEditor'','''')'),
(20, 'Django Editor', 'django.png', 6, 'callWindow(this,''djangoeditor'',''callWindowDjangoEditor'','''')'),
(21, 'Java Editor', 'java.png', 6, 'callWindow(this,''javaeditor'',''callWindowJavaEditor'','''')'),
(22, 'JsEditor', 'js.png', 6, 'callWindow(this,''jseditor'',''callWindowJsEditor'','''')'),
(23, 'Python Editor', 'python.png', 6, 'callWindow(this,''pythoneditor'',''callWindowPythonEditor'','''')'),
(24, 'Sql Editor', 'sql.png', 6, 'callWindow(this,''sqleditor'',''callWindowSqlEditor'','''')'),
(25, 'WCalc', 'wcalc.png', 8, 'callWindowFade(this,''wcalc'','''')'),
(26, 'Calculator', 'calculator.png', 8, 'callWindowFade(this,''calculator'','''')'),
(27, 'WPaint', 'wpaint.png', 7, 'callWindow(this,''wpaint'',''callWindowWPaint'','''')'),
(28, 'Paint', 'paint.png', 7, 'callWindow(this,''paint'',''callWindowPaint'','''')'),
(31, 'WCam', 'wcam.png', 4, 'callWindowFade(this,''wcam'',''callWindowWCam'')'),
(32, 'WCalendar', 'wcalendar.png', 8, 'callWindow(this,''wcalendar'',''callWindowWCalendar'','''')'),
(33, 'WZip', 'zip.png', 1, 'callWindow(this,''wzip'',''callWindowWZip'','''')'),
(34, 'Control Panel', 'controlpanel.png', 1, 'callWindow(this,''controlpanel'',''callWindowControlPanel'','''')'),
(35, 'Calendar', 'calendar.png', 10, 'callWindow(this,''calendar'',''callWindowCalendar'','''')'),
(36, 'DClock', 'dclock.png', 10, 'callWindow(this,''dclock'',''callWindowDClock'','''')'),
(37, 'User Account', 'user_account.png', 11, 'callWindow(this,''useraccount'',''callWindowUserAccount'','''')'),
(38, 'Group Account', 'account_group.png', 11, 'callWindow(this,''groupaccount'',''callWindowGroupAccount'','''')'),
(39, 'Window extract', 'extract.png', 11, 'callWindow(this,''window_extract'',''callWindowWindow_extract'','''')'),
(40, 'Window Zip', 'zippar.png', 11, 'callWindow(this,''window_zip'',''callWindowWindow_zip'','''')'),
(41, 'WWeather', 'wweather.png', 10, 'callWindow(this,''wweather'','''','''')');

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

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_programs_grpusers`
--

CREATE TABLE IF NOT EXISTS `tb_programs_grpusers` (
  `id_program_grpusers` int(11) NOT NULL AUTO_INCREMENT,
  `id_program` int(11) NOT NULL,
  `id_group` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id_program_grpusers`),
  KEY `id_program` (`id_program`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `tb_programs_grpusers`
--

INSERT INTO `tb_programs_grpusers` (`id_program_grpusers`, `id_program`, `id_group`, `id_user`) VALUES
(1, 1, 4, 7);

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

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_youtube_gallery`
--

CREATE TABLE IF NOT EXISTS `tb_youtube_gallery` (
  `id_youtube_gallery` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `description` varchar(30) NOT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id_youtube_gallery`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_youtube_item`
--

CREATE TABLE IF NOT EXISTS `tb_youtube_item` (
  `id_youtube_item` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `description` varchar(30) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_youtube_gallery` int(11) NOT NULL,
  PRIMARY KEY (`id_youtube_item`),
  KEY `id_user` (`id_user`),
  KEY `id_youtube_gallery` (`id_youtube_gallery`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `tb_calendar_item`
--
ALTER TABLE `tb_calendar_item`
  ADD CONSTRAINT `tb_calendar_item_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`),
  ADD CONSTRAINT `tb_calendar_item_ibfk_2` FOREIGN KEY (`id_events`) REFERENCES `tb_events_calendar` (`id_events`);

--
-- Limitadores para a tabela `tb_control_elements`
--
ALTER TABLE `tb_control_elements`
  ADD CONSTRAINT `tb_control_elements_ibfk_1` FOREIGN KEY (`id_grp_control`) REFERENCES `tb_grp_control` (`id_grp_control`);

--
-- Limitadores para a tabela `tb_events_calendar`
--
ALTER TABLE `tb_events_calendar`
  ADD CONSTRAINT `tb_events_calendar_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`);

--
-- Limitadores para a tabela `tb_gallery`
--
ALTER TABLE `tb_gallery`
  ADD CONSTRAINT `tb_gallery_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`);

--
-- Limitadores para a tabela `tb_gallery_item`
--
ALTER TABLE `tb_gallery_item`
  ADD CONSTRAINT `tb_gallery_item_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`),
  ADD CONSTRAINT `tb_gallery_item_ibfk_2` FOREIGN KEY (`id_gallery`) REFERENCES `tb_gallery` (`id_gallery`);

--
-- Limitadores para a tabela `tb_group_user`
--
ALTER TABLE `tb_group_user`
  ADD CONSTRAINT `tb_group_user_ibfk_1` FOREIGN KEY (`id_group`) REFERENCES `tb_group` (`id_group`),
  ADD CONSTRAINT `tb_group_user_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`);

--
-- Limitadores para a tabela `tb_programs`
--
ALTER TABLE `tb_programs`
  ADD CONSTRAINT `tb_programs_ibfk_1` FOREIGN KEY (`id_grp_program`) REFERENCES `tb_grp_program` (`id_grp_program`);

--
-- Limitadores para a tabela `tb_programs_group`
--
ALTER TABLE `tb_programs_group`
  ADD CONSTRAINT `tb_programs_group_ibfk_1` FOREIGN KEY (`id_program`) REFERENCES `tb_programs` (`id_program`),
  ADD CONSTRAINT `tb_programs_group_ibfk_2` FOREIGN KEY (`id_group`) REFERENCES `tb_group` (`id_group`);

--
-- Limitadores para a tabela `tb_programs_grpusers`
--
ALTER TABLE `tb_programs_grpusers`
  ADD CONSTRAINT `tb_programs_grpusers_ibfk_1` FOREIGN KEY (`id_program`) REFERENCES `tb_programs` (`id_program`),
  ADD CONSTRAINT `tb_programs_grpusers_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`);

--
-- Limitadores para a tabela `tb_user`
--
ALTER TABLE `tb_user`
  ADD CONSTRAINT `tb_user_ibfk_1` FOREIGN KEY (`id_group`) REFERENCES `tb_group` (`id_group`);

--
-- Limitadores para a tabela `tb_youtube_gallery`
--
ALTER TABLE `tb_youtube_gallery`
  ADD CONSTRAINT `tb_youtube_gallery_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`);

--
-- Limitadores para a tabela `tb_youtube_item`
--
ALTER TABLE `tb_youtube_item`
  ADD CONSTRAINT `tb_youtube_item_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`),
  ADD CONSTRAINT `tb_youtube_item_ibfk_2` FOREIGN KEY (`id_youtube_gallery`) REFERENCES `tb_youtube_gallery` (`id_youtube_gallery`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
