



CREATE TABLE IF NOT EXISTS `tb_backup` (
  `id_backup` int(11) NOT NULL AUTO_INCREMENT,
  `backup_file` varchar(300) NOT NULL,
  `dt_backup` date NOT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id_backup`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;


CREATE TABLE IF NOT EXISTS `tb_barbottom` (
  `id_barbottom` int(11) NOT NULL AUTO_INCREMENT,
  `class_name` varchar(500) NOT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id_barbottom`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;



CREATE TABLE IF NOT EXISTS `tb_calendar_item` (
  `id_calendar_item` int(11) NOT NULL AUTO_INCREMENT,
  `dt_event` date NOT NULL,
  `id_events` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `pathCalendar` varchar(200) NOT NULL,
  PRIMARY KEY (`id_calendar_item`),
  KEY `id_user` (`id_user`),
  KEY `id_events` (`id_events`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;



CREATE TABLE IF NOT EXISTS `tb_contact` (
  `id_contact` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(120) NOT NULL,
  `image` varchar(500) DEFAULT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id_contact`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;


CREATE TABLE IF NOT EXISTS `tb_contact_list` (
  `id_contact_list` int(11) NOT NULL AUTO_INCREMENT,
  `id_contact` int(11) DEFAULT NULL,
  `status` varchar(1) NOT NULL,
  `name` varchar(200) NOT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id_contact_list`),
  KEY `id_contact` (`id_contact`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;




CREATE TABLE IF NOT EXISTS `tb_control_elements` (
  `id_control_element` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `imagePath` varchar(50) NOT NULL,
  `id_grp_control` int(11) NOT NULL,
  `callFunction` varchar(100) NOT NULL,
  PRIMARY KEY (`id_control_element`),
  KEY `id_grp_control` (`id_grp_control`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;


INSERT INTO `tb_control_elements` (`id_control_element`, `name`, `imagePath`, `id_grp_control`, `callFunction`) VALUES
(1, 'Appearance', 'desktop_m.png', 1, 'callWindow(this,''appearance'',''callWindowAppearance'','''')'),
(2, 'Gadgets', 'gadgets.png', 1, 'getControlPage(this,''getListWidgets'')'),
(3, 'Start Menu', 'startmenu.png', 1, ''),
(4, 'Security', 'firewall.png', 2, 'callWindow(this,''security'',''callWindowSecurity'','''')'),
(5, 'Folder Options', 'folder_lock.png', 2, 'callWindow(this,''fonts_options'',''callWindowFonts_options'','''')'),
(6, 'System', 'system.png', 3, 'getListControl(this, ''getSystemInfo'' ,'''','''','''');'),
(7, 'Backup', 'backup.png', 2, 'getControlPage(this,''getBackupinfo'')'),
(8, 'Programs', 'programs.png', 2, 'getControlPage(this,''getListPrograms'')'),
(9, 'User Account', 'account.png', 2, 'getControlPage(this,''getUserInfo'')'),
(10, 'Wos Update', 'update.png', 2, 'getControlPage(this,''getUpdateInfo'')'),
(11, 'Languages', 'language.png', 3, 'callWindowWithParameter(this,''language'',''callWindowLanguage'','''',''system,lang_system'')'),
(12, 'Fonts', 'fonts.png', 3, 'getControlPage(this,''getListFonts'')'),
(13, 'Date', 'calendar.png', 3, 'callWindow(this,''sdate'',''callWindowSdate'','''')');




CREATE TABLE IF NOT EXISTS `tb_country` (
  `id_country` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `abv` varchar(50) NOT NULL,
  `continent` varchar(30) NOT NULL,
  `status` varchar(1) NOT NULL,
  `language` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`id_country`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=195 ;


INSERT INTO `tb_country` (`id_country`, `name`, `abv`, `continent`, `status`, `language`) VALUES
(1, 'Algeria', 'dz', 'africa', 'I', NULL),
(2, 'Angola', 'ao', 'africa', 'I', NULL),
(3, 'Benin', 'bj', 'africa', 'I', NULL),
(4, 'Botswana', 'bw', 'africa', 'I', NULL),
(5, 'Burkina', 'bf', 'africa', 'I', NULL),
(6, 'Burundi', 'bi', 'africa', 'I', NULL),
(7, 'Cameroon', 'cm', 'africa', 'I', NULL),
(8, 'Cape Verde', 'cv', 'africa', 'I', NULL),
(9, 'Central African Republic', 'cf', 'africa', 'I', NULL),
(10, 'Chad', 'td', 'africa', 'I', NULL),
(11, 'Comoros', 'km', 'africa', 'I', NULL),
(12, 'Congo', 'cg', 'africa', 'I', NULL),
(13, 'Congo, Democratic Republic of', 'cd', 'africa', 'I', NULL),
(14, 'Djibouti', 'dj', 'africa', 'I', NULL),
(15, 'Egypt', 'eg', 'africa', 'I', NULL),
(16, 'Equatorial Guinea', 'gq', 'africa', 'I', NULL),
(17, 'Eritrea', 'er', 'africa', 'I', NULL),
(18, 'Ethiopia', 'et', 'africa', 'I', NULL),
(19, 'Gabon', 'ga', 'africa', 'I', NULL),
(20, 'Gambia', 'gm', 'africa', 'I', NULL),
(21, 'Ghana', 'gh', 'africa', 'I', NULL),
(22, 'Guinea', 'gn', 'africa', 'I', NULL),
(23, 'Guinea-Bissau', 'gw', 'africa', 'I', NULL),
(24, 'Ivory Coast', 'ci', 'africa', 'I', NULL),
(25, 'Kenya', 'ke', 'africa', 'I', NULL),
(26, 'Lesotho', 'ls', 'africa', 'I', NULL),
(27, 'Liberia', 'lr', 'africa', 'I', NULL),
(28, 'Libya', 'ly', 'africa', 'I', NULL),
(29, 'Madagascar', 'mg', 'africa', 'I', NULL),
(30, 'Malawi', 'mw', 'africa', 'I', NULL),
(31, 'Mali', 'ml', 'africa', 'I', NULL),
(32, 'Mauritania', 'mr', 'africa', 'I', NULL),
(33, 'Mauritius', 'mu', 'africa', 'I', NULL),
(34, 'Morocco', 'ma', 'africa', 'I', NULL),
(35, 'Mozambique', 'mz', 'africa', 'I', NULL),
(36, 'Namibia', 'na', 'africa', 'I', NULL),
(37, 'Niger', 'ne', 'africa', 'I', NULL),
(38, 'Nigeria', 'ng', 'africa', 'I', NULL),
(39, 'Rwanda', 'rw', 'africa', 'I', NULL),
(40, 'Sao Tome and Principe', 'st', 'africa', 'I', NULL),
(41, 'Senegal', 'sn', 'africa', 'I', NULL),
(42, 'Seychelles', 'sc', 'africa', 'I', NULL),
(43, 'Sierra Leone', 'sl', 'africa', 'I', NULL),
(44, 'Somalia', 'so', 'africa', 'I', NULL),
(45, 'South Africa', 'za', 'africa', 'I', NULL),
(46, 'South Sudan', 'ss', 'africa', 'I', NULL),
(47, 'Sudan', 'sd', 'africa', 'I', NULL),
(48, 'Swaziland', 'sz', 'africa', 'I', NULL),
(49, 'Tanzania', 'tz', 'africa', 'I', NULL),
(50, 'Togo', 'tg', 'africa', 'I', NULL),
(51, 'Tunisia', 'tn', 'africa', 'I', NULL),
(52, 'Uganda', 'ug', 'africa', 'I', NULL),
(53, 'Zambia', 'zm', 'africa', 'I', NULL),
(54, 'Zimbabwe\r\n    ', 'zw', 'africa', 'I', NULL),
(55, 'Afghanistan', 'af', 'asia', 'I', NULL),
(56, 'Bahrain', 'bh', 'asia', 'I', NULL),
(57, 'Bangladesh', 'bd', 'asia', 'I', NULL),
(58, 'Bhutan', 'bt', 'asia', 'I', NULL),
(59, 'Brunei', 'bn', 'asia', 'I', NULL),
(60, 'Burma (Myanmar)', 'mm', 'asia', 'I', NULL),
(61, 'Cambodia', 'kh', 'asia', 'I', NULL),
(62, 'China', 'cn', 'asia', 'I', NULL),
(63, 'East Timor', 'etimor', 'asia', 'I', NULL),
(64, 'India', 'in', 'asia', 'I', NULL),
(65, 'Indonesia', 'id', 'asia', 'I', NULL),
(66, 'Iran', 'ir', 'asia', 'I', NULL),
(67, 'Iraq', 'iq', 'asia', 'I', NULL),
(68, 'Israel', 'il', 'asia', 'I', NULL),
(69, 'Japan', 'jp', 'asia', 'A', 'ja_JP'),
(70, 'Jordan', 'jo', 'asia', 'I', NULL),
(71, 'Kazakhstan', 'kz', 'asia', 'I', NULL),
(72, 'Korea, North', 'kp', 'asia', 'I', NULL),
(73, 'Korea, South', 'kr', 'asia', 'I', NULL),
(74, 'Kuwait', 'kw', 'asia', 'I', NULL),
(75, 'Kyrgyzstan', 'kg', 'asia', 'I', NULL),
(76, 'Laos', 'la', 'asia', 'I', NULL),
(77, 'Lebanon', 'lb', 'asia', 'I', NULL),
(78, 'Malaysia', 'my', 'asia', 'I', NULL),
(79, 'Maldives', 'mv', 'asia', 'I', NULL),
(80, 'Mongolia', 'mn', 'asia', 'I', NULL),
(81, 'Nepal', 'np', 'asia', 'I', NULL),
(82, 'Oman', 'om', 'asia', 'I', NULL),
(83, 'Pakistan', 'pk', 'asia', 'I', NULL),
(84, 'Philippines', 'ph', 'asia', 'I', NULL),
(85, 'Qatar', 'qa', 'asia', 'I', NULL),
(86, 'Russian Federation', 'ru', 'asia', 'I', NULL),
(87, 'Saudi Arabia', 'sa', 'asia', 'I', NULL),
(88, 'Singapore', 'sg', 'asia', 'I', NULL),
(89, 'Sri Lanka', 'lk', 'asia', 'I', NULL),
(90, 'Syria', 'sy', 'asia', 'I', NULL),
(91, 'Tajikistan', 'tj', 'asia', 'I', NULL),
(92, 'Thailand', 'th', 'asia', 'I', NULL),
(93, 'Turkey', 'tr', 'asia', 'I', NULL),
(94, 'Turkmenistan', 'tm', 'asia', 'I', NULL),
(95, 'United Arab Emirates', 'ae', 'asia', 'I', NULL),
(96, 'Uzbekistan', 'uz', 'asia', 'I', NULL),
(97, 'Vietnam', 'vn', 'asia', 'I', NULL),
(98, 'Yemen', 'ye', 'asia', 'I', NULL),
(99, 'Albania', 'al', 'europe', 'I', NULL),
(100, 'Andorra', 'ad', 'europe', 'I', NULL),
(101, 'Armenia', 'am', 'europe', 'I', NULL),
(102, 'Austria', 'at', 'europe', 'I', NULL),
(103, 'Azerbaijan', 'az', 'europe', 'I', NULL),
(104, 'Belarus', 'by', 'europe', 'I', NULL),
(105, 'Belgium', 'be', 'europe', 'I', NULL),
(106, 'Bosnia and Herzegovina', 'ba', 'europe', 'I', NULL),
(107, 'Bulgaria', 'bg', 'europe', 'I', NULL),
(108, 'Croatia', 'hr', 'europe', 'I', NULL),
(109, 'Cyprus', 'cy', 'europe', 'I', NULL),
(110, 'Czech Republic', 'cz', 'europe', 'I', NULL),
(111, 'Denmark', 'dk', 'europe', 'I', NULL),
(112, 'Estonia', 'ee', 'europe', 'I', NULL),
(113, 'Finland', 'fi', 'europe', 'I', NULL),
(114, 'France', 'fr', 'europe', 'I', NULL),
(115, 'Georgia', 'ge', 'europe', 'I', NULL),
(116, 'Germany', 'de', 'europe', 'A', 'de_DE'),
(117, 'Greece', 'gr', 'europe', 'I', NULL),
(118, 'Hungary', 'hu', 'europe', 'I', NULL),
(119, 'Iceland', 'is', 'europe', 'I', NULL),
(120, 'Ireland', 'ie', 'europe', 'A', 'en_US'),
(121, 'Italy', 'it', 'europe', 'I', NULL),
(122, 'Latvia', 'lv', 'europe', 'I', NULL),
(123, 'Liechtenstein', 'li', 'europe', 'I', NULL),
(124, 'Lithuania', 'lt', 'europe', 'I', NULL),
(125, 'Luxembourg', 'lu', 'europe', 'I', NULL),
(126, 'Macedonia', 'mk', 'europe', 'I', NULL),
(127, 'Malta', 'mt', 'europe', 'I', NULL),
(128, 'Moldova', 'md', 'europe', 'I', NULL),
(129, 'Monaco', 'mc', 'europe', 'I', NULL),
(130, 'Montenegro', 'mj', 'europe', 'I', NULL),
(131, 'Netherlands', 'nl', 'europe', 'I', NULL),
(132, 'Norway', 'no', 'europe', 'I', NULL),
(133, 'Poland', 'pl', 'europe', 'I', NULL),
(134, 'Portugal', 'pt', 'europe', 'I', NULL),
(135, 'Romania', 'ro', 'europe', 'I', NULL),
(136, 'San Marino', 'sm', 'europe', 'I', NULL),
(137, 'Serbia', 'mj', 'europe', 'I', NULL),
(138, 'Slovakia', 'sk', 'europe', 'I', NULL),
(139, 'Slovenia', 'si', 'europe', 'I', NULL),
(140, 'Spain', 'es', 'europe', 'I', NULL),
(141, 'Sweden', 'se', 'europe', 'I', NULL),
(142, 'Switzerland', 'ch', 'europe', 'I', NULL),
(143, 'Ukraine', 'ua', 'europe', 'I', NULL),
(144, 'United Kingdom', 'uk', 'europe', 'A', 'en_US'),
(145, 'Vatican City', 'va', 'europe', 'I', NULL),
(146, 'Antigua and Barbuda', 'caribb', 'north america', 'I', NULL),
(147, 'Bahamas', 'caribb', 'north america', 'I', NULL),
(148, 'Barbados', 'caribb', 'north america', 'I', NULL),
(149, 'Belize', 'camerica', 'north america', 'I', NULL),
(150, 'Canada', 'ca', 'north america', 'A', 'en_US'),
(151, 'Costa Rica', 'camerica', 'north america', 'I', NULL),
(152, 'Cuba', 'caribb', 'north america', 'I', NULL),
(153, 'Dominica', 'caribb', 'north america', 'I', NULL),
(154, 'Dominican Republic', 'caribb', 'north america', 'I', NULL),
(155, 'El Salvador', 'camerica', 'north america', 'I', NULL),
(156, 'Grenada', 'caribb', 'north america', 'I', NULL),
(157, 'Guatemala', 'camerica', 'north america', 'I', NULL),
(158, 'Haiti', 'caribb', 'north america', 'I', NULL),
(159, 'Honduras', 'camerica', 'north america', 'I', NULL),
(160, 'Jamaica', 'caribb', 'north america', 'I', NULL),
(161, 'Mexico', 'mx', 'north america', 'I', NULL),
(162, 'Nicaragua', 'camerica', 'north america', 'I', NULL),
(163, 'Panama', 'camerica', 'north america', 'I', NULL),
(164, 'Saint Kitts and Nevis', 'caribb', 'north america', 'I', NULL),
(165, 'Saint Lucia', 'caribb', 'north america', 'I', NULL),
(166, 'Saint Vincent and the Grenadines', 'caribb', 'north america', 'I', NULL),
(167, 'Trinidad and Tobago', 'caribb', 'north america', 'I', NULL),
(168, 'United States', 'us', 'north america', 'A', 'en_US'),
(169, 'Australia', 'au', 'oceania', 'A', 'en_US'),
(170, 'Fiji', 'fj', 'oceania', 'I', NULL),
(171, 'Kiribati', 'ki', 'oceania', 'I', NULL),
(172, 'Marshall Islands', 'mh', 'oceania', 'I', NULL),
(173, 'Micronesia', 'fm', 'oceania', 'I', NULL),
(174, 'Nauru', 'nr', 'oceania', 'I', NULL),
(175, 'New Zealand', 'nz', 'oceania', 'A', 'en_US'),
(176, 'Palau', 'pw', 'oceania', 'I', NULL),
(177, 'Papua New Guinea', 'pg', 'oceania', 'I', NULL),
(178, 'Samoa', 'ws', 'oceania', 'I', NULL),
(179, 'Solomon Islands', 'sb', 'oceania', 'I', NULL),
(180, 'Tonga', 'to', 'oceania', 'I', NULL),
(181, 'Tuvalu', 'tv', 'oceania', 'I', NULL),
(182, 'Vanuatu', 'vu', 'oceania', 'I', NULL),
(183, 'Argentina', 'ar', 'south america', 'I', NULL),
(184, 'Bolivia', 'bo', 'south america', 'I', NULL),
(185, 'Brazil', 'br', 'south america', 'A', NULL),
(186, 'Chile', 'cl', 'south america', 'I', NULL),
(187, 'Colombia', 'co', 'south america', 'I', NULL),
(188, 'Ecuador', 'ec', 'south america', 'I', NULL),
(189, 'Guyana', 'gy', 'south america', 'I', NULL),
(190, 'Paraguay', 'py', 'south america', 'I', NULL),
(191, 'Peru', 'pe', 'south america', 'I', NULL),
(192, 'Suriname', 'sr', 'south america', 'I', NULL),
(193, 'Uruguay', 'uy', 'south america', 'I', NULL),
(194, 'Venezuela', 've', 'south america', 'I', NULL);


CREATE TABLE IF NOT EXISTS `tb_domain` (
  `id_domain` int(11) NOT NULL AUTO_INCREMENT,
  `domain_code` varchar(20) NOT NULL,
  `domain_value` varchar(200) NOT NULL,
  `domain_name` varchar(200) NOT NULL,
  `status` varchar(1) NOT NULL,
  PRIMARY KEY (`id_domain`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;


INSERT INTO `tb_domain` (`id_domain`, `domain_code`, `domain_value`, `domain_name`, `status`) VALUES
(1, 'NORM', 'Normal', 'LOGIN_TYPE', 'A'),
(2, 'CARD', 'Card', 'LOGIN_TYPE', 'A'),
(3, 'VOIC', 'Voice', 'LOGIN_TYPE', 'A'),
(4, 'VWEAKY', 'Very Weak', 'PASSWORD_FORCE', 'A'),
(5, 'WEAK', 'Weak', 'PASSWORD_FORCE', 'A'),
(6, 'MEDI', 'Medium', 'PASSWORD_FORCE', 'A'),
(7, 'GOOD', 'Good', 'PASSWORD_FORCE', 'A'),
(8, 'STRONG', 'Strong', 'PASSWORD_FORCE', 'A'),
(9, 'VSTRONG', 'Very Strong', 'PASSWORD_FORCE', 'A'),
(10, 'NCAP', 'Normal Captcha', 'CAPTCHA_TYPE', 'A'),
(11, 'VCAP', 'Voice Captcha', 'CAPTCHA_TYPE', 'A');

-- --------------------------------------------------------



CREATE TABLE IF NOT EXISTS `tb_encrypt` (
  `id_encrypt` int(11) NOT NULL AUTO_INCREMENT,
  `encrypt_name` varchar(50) NOT NULL,
  PRIMARY KEY (`id_encrypt`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

INSERT INTO `tb_encrypt` (`id_encrypt`, `encrypt_name`) VALUES
(1, 'md5'),
(2, 'ripemd160'),
(3, 'sha1'),
(4, 'sha256'),
(5, 'sha512'),
(6, 'Random');



CREATE TABLE IF NOT EXISTS `tb_events_calendar` (
  `id_events` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `image` varchar(100) DEFAULT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id_events`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;


CREATE TABLE IF NOT EXISTS `tb_fonts` (
  `id_fonts` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(300) NOT NULL,
  `folder` varchar(600) NOT NULL,
  `type` varchar(10) NOT NULL,
  PRIMARY KEY (`id_fonts`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;


INSERT INTO `tb_fonts` (`id_fonts`, `name`, `folder`, `type`) VALUES
(1, 'fontawesome', 'css/fontes', ''),
(2, 'coda-heavy', 'css/fontes', ''),
(3, 'glyphicons-halflings', 'css\\fonts', '');



CREATE TABLE IF NOT EXISTS `tb_fonts_files` (
  `id_fonts_files` int(11) NOT NULL AUTO_INCREMENT,
  `file` varchar(300) NOT NULL,
  `id_fonts` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id_fonts_files`),
  KEY `id_fonts` (`id_fonts`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;



CREATE TABLE IF NOT EXISTS `tb_gallery` (
  `id_gallery` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id_gallery`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;



CREATE TABLE IF NOT EXISTS `tb_gallery_item` (
  `id_gallery_item` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `pathImage` varchar(50) NOT NULL,
  `description` varchar(30) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_gallery` int(11) NOT NULL,
  PRIMARY KEY (`id_gallery_item`),
  KEY `id_user` (`id_user`),
  KEY `id_gallery` (`id_gallery`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;



CREATE TABLE IF NOT EXISTS `tb_general` (
  `id_general` int(11) NOT NULL AUTO_INCREMENT,
  `flag_login_type` varchar(8) DEFAULT NULL,
  `flag_login_encrypt` int(11) DEFAULT NULL,
  `number_of_bits` int(11) DEFAULT NULL,
  `number_attempts` int(11) DEFAULT NULL,
  `flag_password_force` varchar(8) DEFAULT NULL,
  `flag_enable_question` varchar(1) DEFAULT NULL,
  `flag_enable_captcha` varchar(1) DEFAULT NULL,
  `flag_captcha_type` varchar(6) NOT NULL,
  `seq_update` varchar(200) NOT NULL,
  `seq_optional` varchar(200) NOT NULL,
  `app_path` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`id_general`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

INSERT INTO `tb_general` (`id_general`, `flag_login_type`, `flag_login_encrypt`, `number_of_bits`, `number_attempts`, `flag_password_force`, `flag_enable_question`, `flag_enable_captcha`, `flag_captcha_type`, `seq_update`, `seq_optional`, `app_path`) VALUES
(1, 'NORM', 5, 10, 3, 'STRONG', 'D', 'D', 'D', '0', '0', 'C:#wamp#www#estudo#wos');



CREATE TABLE IF NOT EXISTS `tb_group` (
  `id_group` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `group_image` varchar(500) NOT NULL,
  `id_group_pai` int(11) NOT NULL,
  PRIMARY KEY (`id_group`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;


INSERT INTO `tb_group` (`id_group`, `name`, `group_image`, `id_group_pai`) VALUES
(1, 'admin', '', 0);




CREATE TABLE IF NOT EXISTS `tb_group_user` (
  `id_group_user` int(11) NOT NULL AUTO_INCREMENT,
  `id_group` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id_group_user`),
  KEY `id_group` (`id_group`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;



CREATE TABLE IF NOT EXISTS `tb_grpusers_files` (
  `id_grpusers_files` int(11) NOT NULL AUTO_INCREMENT,
  `pathfile` varchar(300) NOT NULL,
  `id_group` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id_grpusers_files`),
  KEY `id_group` (`id_group`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;


CREATE TABLE IF NOT EXISTS `tb_grp_control` (
  `id_grp_control` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `priority` int(11) NOT NULL,
  PRIMARY KEY (`id_grp_control`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;



INSERT INTO `tb_grp_control` (`id_grp_control`, `name`, `priority`) VALUES
(1, 'Layout', 2),
(2, 'Security', 1),
(3, 'Format', 3);

-- --------------------------------------------------------



CREATE TABLE IF NOT EXISTS `tb_grp_program` (
  `id_grp_program` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `priority` int(11) NOT NULL,
  PRIMARY KEY (`id_grp_program`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;



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
(11, 'SYSTEM', 11),
(12, 'CHAT', 10);

-- --------------------------------------------------------



CREATE TABLE IF NOT EXISTS `tb_message` (
  `id_message` int(11) NOT NULL AUTO_INCREMENT,
  `text` varchar(4000) NOT NULL,
  `status` varchar(1) NOT NULL,
  `dt_msg` date NOT NULL,
  `id_contact_sender` int(11) NOT NULL,
  `id_contact_receiver` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id_message`),
  KEY `id_contact_sender` (`id_contact_sender`),
  KEY `id_contact_receiver` (`id_contact_receiver`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;



CREATE TABLE IF NOT EXISTS `tb_notes` (
  `id_note` int(11) NOT NULL AUTO_INCREMENT,
  `id_group` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `note` varchar(1000) NOT NULL,
  PRIMARY KEY (`id_note`),
  KEY `id_group` (`id_group`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;


CREATE TABLE IF NOT EXISTS `tb_open` (
  `id_open` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `callFunction` varchar(300) NOT NULL,
  `flagchangepath` varchar(1) NOT NULL,
  PRIMARY KEY (`id_open`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;



INSERT INTO `tb_open` (`id_open`, `name`, `callFunction`, `flagchangepath`) VALUES
(1, 'pdf', 'callWindow(this,''pdf_viewer'',''callWindowPdf_viewer'',file_op);', 'S'),
(2, 'doc', 'callWindow(this,''gdocs'',''callWindowGdocs'',file_op);', 'S'),
(3, 'ppt', 'callWindow(this,''gdocs'',''callWindowGdocs'',file_op);', 'S'),
(4, 'pptx', 'callWindow(this,''gdocs'',''callWindowGdocs'',file_op);', 'S'),
(5, 'docx', 'callWindow(this,''gdocs'',''callWindowGdocs'',file_op);', 'S'),
(6, 'dot', 'callWindow(this,''gdocs'',''callWindowGdocs'',file_op);', 'S'),
(7, 'docx', 'callWindow(this,''gdocs'',''callWindowGdocs'',file_op);', 'S'),
(8, 'mp3', ' callWindow(this,''waudio'',''callWindowWaudio'',file_op);', 'S'),
(9, 'py', 'callWindow(this,''pythoneditor'',''callWindowPythonEditor'',file_op);', 'N'),
(10, 'wav', 'callWindow(this,''waudio'',''callWindowWaudio'',file_op);', 'S'),
(11, 'mp4', 'callWindow(this,''wvideo'',''callWindowWvideo'',file_op);', 'S'),
(12, 'avi', 'callWindow(this,''wvideo'',''callWindowWvideo'',file_op);', 'S'),
(13, 'txt', 'callWindow(this,''wnpad'',''callWindowWnpad'',file_op);', 'N'),
(14, 'wdoc', 'callWindow(this,''wdoc'',''callWindowWdoc'',file_op);', 'N'),
(15, 'html', 'callWindow(this,''htmleditor'',''callWindowHtmlEditor'',file_op);', 'N'),
(16, 'php', 'callWindow(this,''phpeditor'',''callWindowPhpEditor'',file_op);', 'N'),
(17, 'xml', 'callWindow(this,''xmleditor'',''callWindowXmlEditor'',file_op);', 'N'),
(18, 'cs', 'callWindow(this,''ccharpeditor'',''callWindowCcharpEditor'',file_op);', 'N'),
(19, 'css', 'callWindow(this,''csseditor'',''callWindowCssEditor'',file_op);', 'N'),
(20, 'sql', 'callWindow(this,''sqleditor'',''callWindowSqlEditor'',file_op);', 'N'),
(21, 'java', 'callWindow(this,''javaeditor'',''callWindowJavaEditor'',file_op);', 'N'),
(22, 'js', 'callWindow(this,''jseditor'',''callWindowJsEditor'',file_op);', 'N'),
(23, 'jpg', 'callWindow(this,''wslider'',''callWindowWSlider'',file_op);', 'N'),
(24, 'jpeg', 'callWindow(this,''wslider'',''callWindowWSlider'',file_op);', 'N'),
(25, 'png', 'callWindow(this,''wcarousel'',''callWindowWCarousel'',file_op);', 'N'),
(26, 'gif', 'callWindow(this,''galleria'',''callWindowGalleria'',file_op);', 'N'),
(27, 'ytb', 'callWindow(this,''ytbmanager'',''callWindowYtbManager'',file_op);', 'N'),
(28, 'sbm', 'callWindow(this,''soundmanager'',''callWindowSoundManager'',file_op);', 'N'),
(29, 'wcal', 'callWindow(this,''wcalendar'',''callWindowWCalendar'',file_op);', 'N'),
(30, 'zip', 'callWindow(this,''wzip'',''callWindowWZip'',file_op);', 'N');



CREATE TABLE IF NOT EXISTS `tb_open_user` (
  `id_open_user` int(11) NOT NULL AUTO_INCREMENT,
  `id_open` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `callFunction` varchar(300) NOT NULL,
  PRIMARY KEY (`id_open_user`),
  KEY `id_open` (`id_open`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;


CREATE TABLE IF NOT EXISTS `tb_programs` (
  `id_program` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `imagePath` varchar(50) NOT NULL,
  `id_grp_program` int(11) NOT NULL,
  `callFunction` varchar(300) NOT NULL,
  `folder` varchar(300) NOT NULL,
  `serial` varchar(300) NOT NULL,
  `gip` varchar(300) NOT NULL,
  `class_program` varchar(300) NOT NULL,
  `type` varchar(200) NOT NULL,
  `opentype` varchar(300) NOT NULL,
  PRIMARY KEY (`id_program`),
  KEY `id_grp_program` (`id_grp_program`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=67 ;


INSERT INTO `tb_programs` (`id_program`, `name`, `imagePath`, `id_grp_program`, `callFunction`, `folder`, `serial`, `gip`, `class_program`, `type`, `opentype`) VALUES
(1, 'Upload Zone', 'upload.png', 1, 'callUploadWindow(this,''upload'')', '', '', 'gip  fadegip', 'upload', 'normal', ''),
(2, 'Wexplore', 'folder.png', 1, 'callWindowWExplore(this,''wexplore'','''',''normal'','''','''','''')', '', '', 'gip', 'wexplore', 'normal', ''),
(3, 'WDoc', 'doc.png', 2, 'callWindow(this,''wdoc'',''callWindowWdoc'','''')', '', '', 'gip', 'wdoc', 'normal', 'wdoc'),
(4, 'Wnpad', 'txt.png', 2, 'callWindow(this,''wnpad'',''callWindowWnpad'','''')', '', '', 'gip', 'wnpad', 'normal', 'txt,php,xml,java,cs,py,js,css,sql,html'),
(5, 'GDocs', 'gdocs.png', 3, 'callWindow(this,''gdocs'',''callWindowGdocs'','''')', '', '', 'gip', 'gdocs', 'normal', 'pdf,doc,docx,ppt,pptx,dot,dotx'),
(6, 'Pdf Viewer', 'pdf-viewer.png', 3, 'callWindow(this,''pdf_viewer'',''callWindowPdf_viewer'','''')', '', '', 'gip', 'pdf_viewer', 'normal', 'pdf'),
(7, 'Sound Manager', 'sound.png', 4, 'callWindow(this,''soundmanager'',''callWindowSoundManager'','''')', '', '', 'gip', 'soundmanager', 'normal', 'sbm'),
(8, 'WAudio', 'waudio.png', 4, 'callWindow(this,''waudio'',''callWindowWaudio'','''')', '', '', 'gip', 'waudio', 'normal', 'mp3,wav,aac,ogg,wma'),
(9, 'WVideo', 'video_logo.png', 4, 'callWindow(this,''wvideo'',''callWindowWvideo'','''')', '', '', 'gip', 'wvideo', 'normal', 'mp4,avi'),
(10, 'Ytb Manager', 'ytd.png', 4, 'callWindow(this,''ytbmanager'',''callWindowYtbManager'','''')', '', '', 'gip', 'ytbmanager', 'normal', 'ytb'),
(11, 'Galleria', 'galleria.png', 5, 'callWindow(this,''galleria'',''callWindowGalleria'','''')', '', '', 'gip', 'galleria', 'normal', 'jpg,png,gif,jpeg'),
(13, 'Wcarousel', 'wcarousel.png', 5, 'callWindow(this,''wcarousel'',''callWindowWCarousel'','''')', '', '', 'gip', 'wcarousel', 'normal', 'jpg,png,gif,jpeg'),
(14, 'WSlider', 'wslider.png', 5, 'callWindow(this,''wslider'',''callWindowWSlider'','''')', '', '', 'gip', 'wslider', 'normal', 'jpg,png,gif,jpeg'),
(15, 'Xml Editor', 'xml.png', 6, 'callWindow(this,''xmleditor'',''callWindowXmlEditor'','''')', '', '', 'gip', 'xmleditor', 'normal', 'xml'),
(16, 'Html Editor', 'html.png', 6, 'callWindow(this,''htmleditor'',''callWindowHtmlEditor'','''')', '', '', 'gip', 'htmleditor', 'normal', 'html,xhtml'),
(17, 'Php Editor', 'php.png', 6, 'callWindow(this,''phpeditor'',''callWindowPhpEditor'','''')', '', '', 'gip', 'phpeditor', 'normal', 'php'),
(18, 'Ccharp Editor', 'cs.png', 6, 'callWindow(this,''ccharpeditor'',''callWindowCcharpEditor'','''')', '', '', 'gip', 'ccharpeditor', 'normal', 'cs'),
(19, 'Css Editor', 'css.png', 6, 'callWindow(this,''csseditor'',''callWindowCssEditor'','''')', '', '', 'gip', 'csseditor', 'normal', 'css'),
(20, 'Django Editor', 'django.png', 6, 'callWindow(this,''djangoeditor'',''callWindowDjangoEditor'','''')', '', '', 'gip', 'djangoeditor', 'normal', 'py'),
(21, 'Java Editor', 'java.png', 6, 'callWindow(this,''javaeditor'',''callWindowJavaEditor'','''')', '', '', 'gip', 'javaeditor', 'normal', 'java'),
(22, 'JsEditor', 'js.png', 6, 'callWindow(this,''jseditor'',''callWindowJsEditor'','''')', '', '', 'gip', 'jseditor', 'normal', 'js'),
(23, 'Python Editor', 'python.png', 6, 'callWindow(this,''pythoneditor'',''callWindowPythonEditor'','''')', '', '', 'gip', 'pythoneditor', 'normal', 'py'),
(24, 'Sql Editor', 'sql.png', 6, 'callWindow(this,''sqleditor'',''callWindowSqlEditor'','''')', '', '', 'gip', 'sqleditor', 'normal', 'sql'),
(25, 'WCalc', 'wcalc.png', 8, 'callWindowFade(this,''wcalc'','''')', '', '', 'gip  fadegip', 'wcalc', 'normal', ''),
(26, 'Calculator', 'calculator.png', 8, 'callWindowFade(this,''calculator'','''')', '', '', 'gip  fadegip', 'calculator', 'normal', ''),
(27, 'WPaint', 'wpaint.png', 7, 'callWindow(this,''wpaint'',''callWindowWPaint'','''')', '', '', 'gip', 'wpaint', 'normal', 'svg'),
(28, 'Paint', 'paint.png', 7, 'callWindow(this,''paint'',''callWindowPaint'','''')', '', '', 'gip', 'paint', 'normal', ''),
(31, 'WCam', 'wcam.png', 4, 'callWindowFade(this,''wcam'',''callWindowWCam'')', '', '', 'gip  fadegip', 'wcam', 'normal', ''),
(32, 'WCalendar', 'wcalendar.png', 8, 'callWindow(this,''wcalendar'',''callWindowWCalendar'','''')', '', '', 'gip', 'wcalendar', 'normal', 'wcal'),
(33, 'WZip', 'zip.png', 1, 'callWindow(this,''wzip'',''callWindowWZip'','''')', '', '', 'gip', 'wzip', 'normal', 'zip'),
(34, 'Control Panel', 'controlpanel.png', 1, 'callWindow(this,''controlpanel'',''callWindowControlPanel'','''')', '', '', 'gip', 'controlpanel', 'normal', ''),
(35, 'Calendar', 'calendar.png', 10, 'callWindow(this,''calendar'',''callWindowCalendar'','''')', '', '', 'gip', 'calendar', 'system', ''),
(36, 'DClock', 'dclock.png', 10, 'callWindow(this,''dclock'',''callWindowDClock'','''')', '', '', 'gip', 'dclock', 'system', ''),
(37, 'User Account', 'user_account.png', 11, 'callWindow(this,''useraccount'',''callWindowUserAccount'','''')', '', '', 'gip', 'useraccount', 'system', ''),
(38, 'Group Account', 'account_group.png', 11, 'callWindow(this,''groupaccount'',''callWindowGroupAccount'','''')', '', '', 'gip', 'groupaccount', 'system', ''),
(39, 'Window extract', 'extract.png', 11, 'callWindow(this,''window_extract'',''callWindowWindow_extract'','''')', '', '', 'gip', 'window_extract', 'system', ''),
(40, 'Window Zip', 'zippar.png', 11, 'callWindow(this,''window_zip'',''callWindowWindow_zip'','''')', '', '', 'gip', 'window_zip', 'system', ''),
(41, 'WWeather', 'wweather.png', 10, 'callWindowFade(this,''wweather'','''')', '', '', 'gip', 'wweather', 'system', ''),
(42, 'WSound', 'wsound.png', 4, 'callWindowFade(this,''wsound'',''callWindowWSound'')', '', '', 'gip  fadegip', 'wsound', 'normal', 'mp3,wav,aac,ogg,wma'),
(43, 'Audiovisualize', 'audiovisualize.png', 4, 'callWindowFade(this,''audiovisualize'',''callWindowAudiovisualize'')', '', '', 'gip  fadegip', 'audiovisualize', 'normal', 'mp3,wav,aac,ogg,wma'),
(44, 'Stickies', 'stickies.png', 8, 'callWindow(this,''stickies'',''callWindowStickies'')', '', '', 'gip', 'stickies', 'normal', ''),
(45, 'WTalk', 'wtalk.png', 12, 'callWindowFade(this,''wtalk'',''callWindowWtalk'')', '', '', 'gip fadegip', 'wtalk', 'normal', ''),
(46, 'Elfinder', 'elfinder.png', 11, 'callWindowFade(this,''elfinder'',''callWindowElfinder'')', '', '', 'gip  fadegip', 'elfinder', 'normal', ''),
(47, 'Uninstall', 'uninstall.png', 11, 'callWindow(this,''uninstall'',''callWindowUninstall'','''')', '', '', 'gip', 'uninstall', 'system', ''),
(48, 'Install', 'install.png', 11, 'callWindow(this,''install'',''callWindowInstall'','''')', '', '', 'gip', 'install', 'system', ''),
(49, 'Folder Options', 'folder_options.png', 11, 'callWindow(this,''folder_options'',''callWindowFolder_options'','''')', '', '', 'gip', 'folder_options', 'system', ''),
(50, 'Fonts Options', 'fonts_options.png', 11, 'callWindow(this,''fonts_options'',''callWindowFonts_options'','''')', '', '', 'gip', 'fonts_options', 'system', ''),
(51, 'Appearance', 'appearance.png', 11, 'callWindow(this,''appearance'',''callWindowAppearance'','''')', '', '', 'gip', 'appearance', 'system', ''),
(52, 'Timezone', 'timezone.png', 11, 'callWindow(this,''timezone'',''callWindowTimezone'','''')', '', '', 'gip', 'timezone', 'system', ''),
(53, 'Datetime', 'calendar.png', 11, 'callWindow(this,''datetime'',''callWindowDatetime'','''')', '', '', 'gip', 'datetime', 'system', ''),
(54, 'Security', 'security.png', 11, 'callWindow(this,''security'',''callWindowSecurity'','''')', '', '', 'gip', 'security', 'system', ''),
(55, 'Change Password', 'change_password.png', 11, 'callWindow(this,''changepassword'',''callWindowChangepassword'','''')', '', '', 'gip', 'changepassword', 'system', ''),
(56, 'ResetPassword', 'reset_password.png', 11, 'callWindowWithParameter(this,''resetpassword'',''callWindowResetpassword'','''','''')', '', '', 'gip', 'resetpassword', 'system', ''),
(57, 'msg', 'msg.png', 11, 'callWindowWithParameter(this,''msg'',''callWindowMsg'','''','''')', '', '', 'gip', 'msg', 'system', ''),
(58, 'Backup', 'backup.png', 11, 'callWindow(this,''backup'',''callWindowBackup'','''')', '', '', 'gip', 'backup', 'system', ''),
(59, 'Language', 'language.png', 11, 'callWindowWithParameter(this,''language'',''callWindowLanguage'','''',''system,lang_system'')', '', '', 'gip', 'language', 'system', ''),
(61, 'Programs Association', 'program_association.png', 11, 'callWindowWithParameter(this,''programs_association'',''callWindowPrograms_association'','''',1)', '', '', 'gip', 'programs_association', 'system', ''),
(62, 'Programs Options', 'options.png', 11, '', '', '', 'gip', 'programs_options', 'system', ''),
(63, 'SDate', 'datecalendar.png', 11, 'callWindow(this,''sdate'',''callWindowSdate'','''')', '', '', 'gip', 'sdate', 'system', ''),
(64, 'Add User Account', 'user_account.png', 11, 'callWindowWithParameter(this,''adduser'',''callWindowAdduser'','''','''')', '', '', 'gip', 'adduser', 'system', ''),
(65, 'Add Group Account', 'account_group.png', 11, 'callWindowWithParameter(this,''addgroup'',''callWindowAddgroup'','''','''')', '', '', 'gip', 'addgroup', 'system', ''),
(66, 'Wopen', 'wopen.png', 11, 'callWindowWithParameter(this,''wopen'',''callWindowWOpen'','''','''')', '', '', 'gip', 'wopen', 'system', '');



CREATE TABLE IF NOT EXISTS `tb_programs_group` (
  `id_program_group` int(11) NOT NULL AUTO_INCREMENT,
  `id_program` int(11) NOT NULL,
  `id_group` int(11) NOT NULL,
  PRIMARY KEY (`id_program_group`),
  KEY `id_program` (`id_program`),
  KEY `id_group` (`id_group`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;



INSERT INTO `tb_programs_group` (`id_program_group`, `id_program`, `id_group`) VALUES
(3, 1, 4),
(5, 1, 7),
(6, 3, 6);


CREATE TABLE IF NOT EXISTS `tb_programs_grpusers` (
  `id_program_grpusers` int(11) NOT NULL AUTO_INCREMENT,
  `id_program` int(11) NOT NULL,
  `id_group` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id_program_grpusers`),
  KEY `id_program` (`id_program`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;




CREATE TABLE IF NOT EXISTS `tb_program_language` (
  `id_program_language` int(11) NOT NULL AUTO_INCREMENT,
  `id_program` int(11) NOT NULL,
  `id_group` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_country` int(11) NOT NULL,
  PRIMARY KEY (`id_program_language`),
  KEY `id_program` (`id_program`),
  KEY `id_group` (`id_group`),
  KEY `id_user` (`id_user`),
  KEY `id_country` (`id_country`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

CREATE TABLE IF NOT EXISTS `tb_requirements` (
  `id_requirements` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `id_program` int(11) NOT NULL,
  `require_type` varchar(1) NOT NULL,
  PRIMARY KEY (`id_requirements`),
  KEY `id_program` (`id_program`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;


CREATE TABLE IF NOT EXISTS `tb_settings` (
  `id_setting` int(11) NOT NULL AUTO_INCREMENT,
  `system_date` varchar(10) DEFAULT NULL,
  `system_hour` varchar(8) DEFAULT NULL,
  `time_zone` varchar(100) DEFAULT NULL,
  `dateformat` varchar(10) DEFAULT NULL,
  `background` varchar(300) DEFAULT NULL,
  `id_user` int(11) NOT NULL,
  `id_group` int(11) NOT NULL,
  `user_image` varchar(300) DEFAULT NULL,
  `mouse_image` varchar(300) DEFAULT NULL,
  `current_location` varchar(7) DEFAULT NULL,
  `id_country` int(11) NOT NULL,
  PRIMARY KEY (`id_setting`),
  KEY `id_group` (`id_group`),
  KEY `id_user` (`id_user`),
  KEY `fk_country_settings_1` (`id_country`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;



INSERT INTO `tb_settings` (`id_setting`, `system_date`, `system_hour`, `time_zone`, `dateformat`, `background`, `id_user`, `id_group`, `user_image`, `mouse_image`, `current_location`, `id_country`) VALUES
(1, '0', '0:0', 'America/Bahia', NULL, 'images/themes/animals/1.jpg', 1, 1, 'images/account_image/download.png', 'images/mouse_icon/apple_system.png', NULL, 168);



CREATE TABLE IF NOT EXISTS `tb_thema` (
  `id_thema` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id_thema`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;



CREATE TABLE IF NOT EXISTS `tb_user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `login` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `id_group` int(11) NOT NULL,
  `user_image` varchar(500) NOT NULL,
  `voice_password` varchar(20) NOT NULL,
  PRIMARY KEY (`id_user`),
  KEY `id_group` (`id_group`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `name`, `email`, `login`, `password`, `id_group`, `user_image`, `voice_password`) VALUES
(1, 'admin', 'admin', 'admin', '1234', 1, '', '');


CREATE TABLE IF NOT EXISTS `tb_youtube_gallery` (
  `id_youtube_gallery` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `description` varchar(30) NOT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id_youtube_gallery`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;



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


ALTER TABLE `tb_backup`
  ADD CONSTRAINT `tb_backup_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`);

ALTER TABLE `tb_barbottom`
  ADD CONSTRAINT `tb_barbottom_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`);

ALTER TABLE `tb_calendar_item`
  ADD CONSTRAINT `tb_calendar_item_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`),
  ADD CONSTRAINT `tb_calendar_item_ibfk_2` FOREIGN KEY (`id_events`) REFERENCES `tb_events_calendar` (`id_events`);


ALTER TABLE `tb_contact`
  ADD CONSTRAINT `tb_contact_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`);


ALTER TABLE `tb_contact_list`
  ADD CONSTRAINT `tb_contact_list_ibfk_1` FOREIGN KEY (`id_contact`) REFERENCES `tb_contact` (`id_contact`),
  ADD CONSTRAINT `tb_contact_list_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`);


ALTER TABLE `tb_control_elements`
  ADD CONSTRAINT `tb_control_elements_ibfk_1` FOREIGN KEY (`id_grp_control`) REFERENCES `tb_grp_control` (`id_grp_control`);


ALTER TABLE `tb_events_calendar`
  ADD CONSTRAINT `tb_events_calendar_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`);


ALTER TABLE `tb_fonts_files`
  ADD CONSTRAINT `tb_fonts_files_ibfk_1` FOREIGN KEY (`id_fonts`) REFERENCES `tb_fonts` (`id_fonts`),
  ADD CONSTRAINT `tb_fonts_files_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`);


ALTER TABLE `tb_gallery`
  ADD CONSTRAINT `tb_gallery_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`);


ALTER TABLE `tb_gallery_item`
  ADD CONSTRAINT `tb_gallery_item_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`),
  ADD CONSTRAINT `tb_gallery_item_ibfk_2` FOREIGN KEY (`id_gallery`) REFERENCES `tb_gallery` (`id_gallery`);


ALTER TABLE `tb_group_user`
  ADD CONSTRAINT `tb_group_user_ibfk_1` FOREIGN KEY (`id_group`) REFERENCES `tb_group` (`id_group`),
  ADD CONSTRAINT `tb_group_user_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`);


ALTER TABLE `tb_grpusers_files`
  ADD CONSTRAINT `tb_grpusers_files_ibfk_1` FOREIGN KEY (`id_group`) REFERENCES `tb_group` (`id_group`),
  ADD CONSTRAINT `tb_grpusers_files_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`);


ALTER TABLE `tb_message`
  ADD CONSTRAINT `tb_message_ibfk_1` FOREIGN KEY (`id_contact_sender`) REFERENCES `tb_contact` (`id_contact`),
  ADD CONSTRAINT `tb_message_ibfk_2` FOREIGN KEY (`id_contact_receiver`) REFERENCES `tb_contact` (`id_contact`),
  ADD CONSTRAINT `tb_message_ibfk_3` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`);


ALTER TABLE `tb_notes`
  ADD CONSTRAINT `tb_notes_ibfk_1` FOREIGN KEY (`id_group`) REFERENCES `tb_group` (`id_group`),
  ADD CONSTRAINT `tb_notes_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`);


ALTER TABLE `tb_open_user`
  ADD CONSTRAINT `tb_open_user_ibfk_1` FOREIGN KEY (`id_open`) REFERENCES `tb_open` (`id_open`),
  ADD CONSTRAINT `tb_open_user_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`);


ALTER TABLE `tb_programs`
  ADD CONSTRAINT `tb_programs_ibfk_1` FOREIGN KEY (`id_grp_program`) REFERENCES `tb_grp_program` (`id_grp_program`);


ALTER TABLE `tb_programs_group`
  ADD CONSTRAINT `tb_programs_group_ibfk_1` FOREIGN KEY (`id_program`) REFERENCES `tb_programs` (`id_program`),
  ADD CONSTRAINT `tb_programs_group_ibfk_2` FOREIGN KEY (`id_group`) REFERENCES `tb_group` (`id_group`);


ALTER TABLE `tb_programs_grpusers`
  ADD CONSTRAINT `tb_programs_grpusers_ibfk_1` FOREIGN KEY (`id_program`) REFERENCES `tb_programs` (`id_program`),
  ADD CONSTRAINT `tb_programs_grpusers_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`);


ALTER TABLE `tb_program_language`
  ADD CONSTRAINT `tb_program_language_ibfk_1` FOREIGN KEY (`id_program`) REFERENCES `tb_programs` (`id_program`),
  ADD CONSTRAINT `tb_program_language_ibfk_2` FOREIGN KEY (`id_group`) REFERENCES `tb_group` (`id_group`),
  ADD CONSTRAINT `tb_program_language_ibfk_3` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`),
  ADD CONSTRAINT `tb_program_language_ibfk_4` FOREIGN KEY (`id_country`) REFERENCES `tb_country` (`id_country`);


ALTER TABLE `tb_requirements`
  ADD CONSTRAINT `tb_requirements_ibfk_1` FOREIGN KEY (`id_program`) REFERENCES `tb_programs` (`id_program`);


ALTER TABLE `tb_settings`
  ADD CONSTRAINT `fk_country_settings_1` FOREIGN KEY (`id_country`) REFERENCES `tb_country` (`id_country`),
  ADD CONSTRAINT `tb_settings_ibfk_1` FOREIGN KEY (`id_group`) REFERENCES `tb_group` (`id_group`),
  ADD CONSTRAINT `tb_settings_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`);

ALTER TABLE `tb_user`
  ADD CONSTRAINT `tb_user_ibfk_1` FOREIGN KEY (`id_group`) REFERENCES `tb_group` (`id_group`);

ALTER TABLE `tb_youtube_gallery`
  ADD CONSTRAINT `tb_youtube_gallery_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`);

ALTER TABLE `tb_youtube_item`
  ADD CONSTRAINT `tb_youtube_item_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`),
  ADD CONSTRAINT `tb_youtube_item_ibfk_2` FOREIGN KEY (`id_youtube_gallery`) REFERENCES `tb_youtube_gallery` (`id_youtube_gallery`);

