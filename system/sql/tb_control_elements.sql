CREATE TABLE IF NOT EXISTS `tb_control_elements` (
  `id_control_element` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `imagePath` varchar(50) NOT NULL,
  `id_grp_control` int(11) NOT NULL,
  `callFunction` varchar(100) NOT NULL,
  PRIMARY KEY (`id_control_element`),
  FOREIGN KEY (id_grp_control) REFERENCES tb_grp_control(id_grp_control)
  
) 