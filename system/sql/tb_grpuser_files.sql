CREATE TABLE IF NOT EXISTS `tb_grpusers_files` (
  `id_grpusers_files` int(11) NOT NULL AUTO_INCREMENT,
  `pathfile` varchar(300) NOT NULL,
  `id_group` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id_grpusers_files`),
  FOREIGN KEY (id_group) REFERENCES tb_group(id_group),
  FOREIGN KEY (id_user) REFERENCES tb_user(id_user)
  
) 