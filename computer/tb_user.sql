CREATE TABLE IF NOT EXISTS `tb_user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL , 
  `login` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL ,
  `id_group` int(11) NOT NULL,
  PRIMARY KEY (`id_user`),
  FOREIGN KEY (id_group) REFERENCES tb_group(id_group)
  
) 