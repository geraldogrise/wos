CREATE TABLE IF NOT EXISTS `tb_requirements` (
  `id_requirements` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `id_program` int(11) NOT NULL,
  `require_type` varchar(1) NOT NULL,
  PRIMARY KEY (`id_requirements`),
  FOREIGN KEY (id_program) REFERENCES tb_programs(id_program)
  
) 