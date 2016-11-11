CREATE TABLE IF NOT EXISTS `tb_youtube_gallery` (
  `id_youtube_gallery` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `description` varchar(30) NOT NULL , 
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id_youtube_gallery`),
  FOREIGN KEY (id_user) REFERENCES tb_user(id_user)
  
) 