CREATE TABLE IF NOT EXISTS `tb_programs_group` (
  `id_program_group` int(11) NOT NULL AUTO_INCREMENT,
  `id_program` int(11) NOT NULL,
  `id_group` int(11) NOT NULL,
  PRIMARY KEY (`id_program_group`),
  FOREIGN KEY (id_program) REFERENCES tb_programs(id_program),
  FOREIGN KEY (id_group) REFERENCES tb_group(id_group)
  
) 