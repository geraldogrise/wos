CREATE TABLE IF NOT EXISTS `tb_gallery_item` (
  `id_gallery_item` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `pathImage` varchar(50) NOT NULL,
  `description` varchar(30) NOT NULL , 
  `id_user` int(11) NOT NULL,
  `id_gallery` int(11) NOT NULL,
  PRIMARY KEY (`id_gallery_item`),
  FOREIGN KEY (id_user) REFERENCES tb_user(id_user),
  FOREIGN KEY (id_gallery) REFERENCES tb_gallery(id_gallery)
  
) 