CREATE TABLE IF NOT EXISTS `tb_general` (
  `id_general` int(11) NOT NULL AUTO_INCREMENT,
  `flag_login_type` varchar(8)   NULL,
  `flag_login_encrypt` int(11)   NULL,
  `number_of_bits` int(11)  NULL , 
  `number_attempts` int(11)  NULL , 
  `flag_password_force` varchar(8)  NULL,
  `flag_enable_question` varchar(1)  NULL,
  `flag_enable_captcha` varchar(1)  NULL,
  `flag_captcha_type` varchar(6) NOT NULL ,
  `seq_update` varchar(200) NOT NULL ,
  `seq_optional` varchar(200) NOT NULL ,
  `app_path` varchar(1000)  NULL ,
    PRIMARY KEY (`id_general`)
  
  
) 