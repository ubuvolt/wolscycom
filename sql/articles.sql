DROP TABLE IF EXISTS `articles`;
CREATE TABLE `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `create` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modifi` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `categ` varchar(20) NOT NULL,
  `group` varchar(20) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` TEXT,
  `code` TEXT,
  `result` TEXT,
  `writer` tinyint(2) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

ALTER TABLE `articles` CHANGE `group` `groups` varchar(20);