CREATE TABLE IF NOT EXISTS `tb_contact_list` (
  `id_contact_list` int(11) NOT NULL AUTO_INCREMENT,
  `id_contact` int(11)  NULL,
  `status` varchar(1) NOT NULL,
  `name` varchar(200) NOT NULL,
  `id_user` int(11) NOT NULL,
   PRIMARY KEY (`id_contact_list`),
   FOREIGN KEY (id_contact) REFERENCES tb_contact(id_contact),
   FOREIGN KEY (id_user) REFERENCES tb_user(id_user)
   
 
  
) 