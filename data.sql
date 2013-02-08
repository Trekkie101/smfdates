-- Create a database and paste the SQL.

CREATE TABLE IF NOT EXISTS `data` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(50) NOT NULL,
  `dob` int(8) NOT NULL,
  `dobt` int(50) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

