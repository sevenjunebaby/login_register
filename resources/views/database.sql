--connect to data base root mysql
mysql -u root -p  --(sudo mysql -u root -p)
--print all data bases in localhost
SHOW TABLES;
--create data base  DB --you can use another name
CREATE DATABASE IF NOT EXISTS DB;
--now you will find your database that you created 
SHOW TABLES;
--use data base BD to create tables
USE DB;
--create table 
CREATE TABLE IF NOT EXISTS user (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phone VARCHAR(15) NOT NULL
);
