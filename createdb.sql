IF OBJECT_ID('blogArticles', 'U') IS NOT NULL
	DROP TABLE blogArticles
GO

CREATE TABLE blogArticles (
 articleID NVARCHAR(100) NOT NULL,
 articleName TEXT,
 articleText TEXT,
 articleAuthor NVARCHAR(100)
 CONSTRAINT pk_Articles PRIMARY KEY (articleID) );

IF OBJECT_ID('users', 'U') IS NOT NULL
	DROP TABLE users
GO

CREATE TABLE users(
  username NVARCHAR(100) NOT NULL,
  password TEXT NOT NULL,
 CONSTRAINT pk_Users PRIMARY KEY (username) );
