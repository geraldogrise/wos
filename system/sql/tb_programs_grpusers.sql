CREATE TABLE IF NOT EXISTS `tb_programs_grpusers` (
  `id_program_grpusers` int(11) NOT NULL AUTO_INCREMENT,
  `id_program` int(11) NOT NULL,
  `id_group` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id_program_grpusers`),
  FOREIGN KEY (id_program) REFERENCES tb_programs(id_program),
  FOREIGN KEY (id_user) REFERENCES tb_user(id_user)
  
) 