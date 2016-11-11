CREATE TABLE IF NOT EXISTS `tb_group` (
  `id_group` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `group_image` varchar(500) NOT NULL,
  `id_group_pai` int(11) NOT NULL,
  
   PRIMARY KEY (`id_group`)
 
  
) 