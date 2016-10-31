DROP TABLE IF EXISTS `blogArticles`;

CREATE TABLE `blogArticles` (
 `articleID` NVARCHAR(100) NOT NULL,
 `articleName` TEXT,
 `articleText` TEXT,
 `articleAuthor` NVARCHAR(100)
  PRIMARY KEY (`articleID`)ENGINE=MyISAM DEFAULT CHARSET=latin1);

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users`(
  `username` NVARCHAR(100) NOT NULL,
  `password` TEXT NOT NULL,
  PRIMARY KEY (`username`) ENGINE=MyISAM DEFAULT CHARSET=latin1);

INSERT INTO `users` (`username`, `password`) VALUES
('admin', 'admin');