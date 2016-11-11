CREATE TABLE IF NOT EXISTS `tb_barbottom` (
  `id_barbottom` int(11) NOT NULL AUTO_INCREMENT,
  `class_name` varchar(500) NOT NULL,
  `id_user` int(11) NOT NULL ,
  PRIMARY KEY (`id_barbottom`),
  FOREIGN KEY (id_user) REFERENCES tb_user(id_user)

  
) 