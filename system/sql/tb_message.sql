CREATE TABLE IF NOT EXISTS `tb_message` (
  `id_message` int(11) NOT NULL AUTO_INCREMENT,
  `text` varchar(4000) NOT NULL,
  `status` varchar(1) NOT NULL,
  `dt_msg` date NOT NULL ,
  `id_contact_sender` int(11) NOT NULL, 
  `id_contact_receiver` int(11) NOT NULL,  
  `id_user` int(11) NOT NULL,     
   PRIMARY KEY (`id_message`),
    FOREIGN KEY (id_contact_sender) REFERENCES tb_contact(id_contact),
   FOREIGN KEY (id_contact_receiver) REFERENCES tb_contact(id_contact),
    FOREIGN KEY (id_user) REFERENCES tb_user(id_user)
 
  

) 