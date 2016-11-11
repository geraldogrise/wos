CREATE TABLE IF NOT EXISTS `tb_domain` (
  `id_domain` int(11) NOT NULL AUTO_INCREMENT,
  `domain_code` varchar(20) NOT NULL,
  `domain_value` varchar(200) NOT NULL,
  `domain_name` varchar(200) NOT NULL,
  `status` varchar(1) NOT NULL,
   PRIMARY KEY (`id_domain`)

  
) 