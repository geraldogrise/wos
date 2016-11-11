CREATE TABLE IF NOT EXISTS `tb_events_calendar` (
  `id_events` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `image` varchar(100)  NULL , 
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id_events`),
  FOREIGN KEY (id_user) REFERENCES tb_user(id_user)
  
) 