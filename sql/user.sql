DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
    id tinyint(3) unsigned NOT NULL auto_increment,
    username varchar(20),
    password varchar(20),
    email varchar(20),
    status int(1),
    PRIMARY KEY (id)
);