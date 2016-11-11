CREATE TABLE IF NOT EXISTS `tb_contact` (
  `id_contact` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(120) NOT NULL , 
  `image` varchar(500) NOT NULL , 
  `id_user` int(11) NOT NULL,
   PRIMARY KEY (`id_contact`),
    FOREIGN KEY (id_user) REFERENCES tb_user(id_user)
 
  
) 