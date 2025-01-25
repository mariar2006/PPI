DROP DATABASE crud;

CREATE DATABASE IF NOT EXISTS crud character set utf8 collate utf8_general_ci;
USE crud;

CREATE TABLE usuarios(
    id INT (11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR (100) NOT NULL,
    email VARCHAR (100) NOT NULL,
    senha VARCHAR (32) NOT NULL
)