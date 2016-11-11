CREATE TABLE IF NOT EXISTS `tb_gallery` (
  `id_gallery` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL , 
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id_gallery`),
  FOREIGN KEY (id_user) REFERENCES tb_user(id_user)
  
) 