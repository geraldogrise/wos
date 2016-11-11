CREATE TABLE IF NOT EXISTS `tb_open_user` (
  `id_open_user` int(11) NOT NULL AUTO_INCREMENT,
  `id_open` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `callFunction` varchar(300) NOT NULL,
  PRIMARY KEY (`id_open_user`),
  FOREIGN KEY (id_open) REFERENCES tb_open(id_open),
  FOREIGN KEY (id_user) REFERENCES tb_user(id_user)
  
) 