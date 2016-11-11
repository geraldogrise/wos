CREATE TABLE IF NOT EXISTS `tb_programs` (
  `id_program` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `imagePath` varchar(50) NOT NULL,
  `id_grp_program` int(11) NOT NULL,
  `callFunction` varchar(100) NOT NULL,
  `folder` varchar(300) NOT NULL,
  `serial` varchar(300) NOT NULL,
  `class_program` varchar(300) NOT NULL,
  `gip` varchar(300) NOT NULL,
  `type` varchar(100) NOT NULL,
  `opentype` varchar(300) NOT NULL,
    PRIMARY KEY (`id_program`),
  FOREIGN KEY (id_grp_program) REFERENCES tb_grp_program(id_grp_program)
  
) 