CREATE TABLE IF NOT EXISTS `tb_group_user` (
  `id_group_user` int(11) NOT NULL AUTO_INCREMENT,
  `id_group` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
   PRIMARY KEY (`id_group_user`),
   FOREIGN KEY (id_group) REFERENCES tb_group(id_group),
   FOREIGN KEY (id_user) REFERENCES tb_user(id_user)
 
  
) 