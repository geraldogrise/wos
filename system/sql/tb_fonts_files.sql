CREATE TABLE IF NOT EXISTS `tb_fonts_files` (
  `id_fonts_files` int(11) NOT NULL AUTO_INCREMENT,
  `file` varchar(300) NOT NULL,
  `id_fonts` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id_fonts_files`),
  FOREIGN KEY (id_fonts) REFERENCES tb_fonts(id_fonts),
  FOREIGN KEY (id_user) REFERENCES tb_user(id_user)
  
) 