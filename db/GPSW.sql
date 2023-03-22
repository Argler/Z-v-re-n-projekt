CREATE DATABASE Gypsywagon;

DROP TABLE IF EXISTS Users;
CREATE table Users(
   Id int PRIMARY KEY NOT NULL AUTO_INCREMENT,
   Firstname varchar(100) NOT NULL
   Surname varchar(100) NOT NULL
   Email varchar(100) NOT NULL
   Password varchar(300) NOT NULL
);
