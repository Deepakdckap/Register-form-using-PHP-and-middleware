CREATE DATABASE startup;

USE startup;

CREATE TABLE login(
	id int NOT null AUTO_INCREMENT PRIMARY KEY,
	username varchar(255),
	email varchar(255),
	password varchar(255),
	created_at timestamp,
	updated_at timestmap
);


