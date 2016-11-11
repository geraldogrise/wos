CREATE TABLE IF NOT EXISTS `tb_country` (
  `id_country` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `abv` varchar(50) NOT NULL,
  `continent` varchar(30) NOT NULL , 
  `status` varchar(1) NOT NULL , 
  `language` varchar(1)  NULL , 
   PRIMARY KEY (`id_country`)
 
  
) 