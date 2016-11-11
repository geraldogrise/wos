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

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `tb_programs`
--
ALTER TABLE `tb_programs`
  ADD CONSTRAINT `tb_programs_ibfk_1` FOREIGN KEY (`id_grp_program`) REFERENCES `tb_grp_program` (`id_grp_program`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
