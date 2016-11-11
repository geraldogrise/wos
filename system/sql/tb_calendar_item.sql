CREATE TABLE IF NOT EXISTS `tb_calendar_item` (
  `id_calendar_item` int(11) NOT NULL AUTO_INCREMENT,
  `dt_event` date NOT NULL,
  `id_events` int(11) NOT NULL , 
  `id_user` int(11) NOT NULL,
  `pathCalendar` varchar(200) NOT NULL,
  PRIMARY KEY (`id_calendar_item`),
  FOREIGN KEY (id_user) REFERENCES tb_user(id_user),
  FOREIGN KEY (id_events) REFERENCES tb_events_calendar(id_events)
  
) 