CREATE TABLE IF NOT EXISTS `tb_settings` (
  `id_setting` int(11) NOT NULL AUTO_INCREMENT,
  `system_date` varchar(10)  NULL,
  `system_hour` varchar(8)  NULL,
  `time_zone` varchar(100)  NULL , 
  `dateformat` varchar(10)  NULL , 
  `background` varchar(300)  NULL,
  `id_country` int(11)  NULL,
  `id_user` int(11) NOT NULL ,
  `id_group` int(11) NOT NULL,
  `user_image` varchar(300)  NULL,
  `mouse_image` varchar(300)  NULL,
  `current_location` varchar(7)  NULL,
  PRIMARY KEY (`id_setting`),
  FOREIGN KEY (id_group) REFERENCES tb_group(id_group),
  FOREIGN KEY (id_user) REFERENCES tb_user(id_user),
  FOREIGN KEY (id_country) REFERENCES tb_country(id_country)
  
) 