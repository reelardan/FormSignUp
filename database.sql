create database crud_db;
 
use crud_db;
 
CREATE TABLE `users` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(100),
  `email` varchar(100),
  `username` varchar(15),
  `password` varchar(15),
  PRIMARY KEY  (`id`)
);
