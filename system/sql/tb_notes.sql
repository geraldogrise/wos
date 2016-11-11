CREATE TABLE IF NOT EXISTS `tb_notes` (
  `id_note` int(11) NOT NULL AUTO_INCREMENT,
  `id_group` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `note` varchar(1000) NOT NULL,
  PRIMARY KEY (`id_note`),
  FOREIGN KEY (id_group) REFERENCES tb_group(id_group),
  FOREIGN KEY (id_user) REFERENCES tb_user(id_user)
    
) 