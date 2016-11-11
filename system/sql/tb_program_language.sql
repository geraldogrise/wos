CREATE TABLE IF NOT EXISTS `tb_program_language` (
  `id_program_language` int(11) NOT NULL AUTO_INCREMENT,
  `id_program` int(11) NOT NULL,
  `id_group` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_country` int(11) NOT NULL,
   PRIMARY KEY (`id_program_language`),
   FOREIGN KEY (id_program) REFERENCES tb_programs(id_program),
   FOREIGN KEY (id_group) REFERENCES tb_group(id_group),
   FOREIGN KEY (id_user) REFERENCES tb_user(id_user),
   FOREIGN KEY (id_country) REFERENCES tb_country(id_country)
  
) 