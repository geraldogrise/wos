CREATE TABLE IF NOT EXISTS `tb_backup` (
  `id_backup` int(11) NOT NULL AUTO_INCREMENT,
  `backup_file` varchar(300) NOT NULL,
  `dt_backup` date NOT NULL,
  `id_user` int(11) NOT NULL , 
   PRIMARY KEY (`id_backup`),
   FOREIGN KEY (id_user) REFERENCES tb_user(id_user)
 
) 