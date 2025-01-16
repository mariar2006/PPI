CREATE DATABASE crud;

USE crud;

CREATE TABLE carros (
    id INT AUTO_INCREMENT PRIMARY KEY,
    modelo VARCHAR(100),
    marca VARCHAR(100),
    ano INT,
    cor VARCHAR(50),
    placa VARCHAR(20)
);

