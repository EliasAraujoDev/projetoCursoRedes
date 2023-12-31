CREATE DATABASE IF NOT EXISTS projetoRede;

USE projetoRede;

CREATE TABLE IF NOT EXISTS usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    cpf VARCHAR(14) NOT NULL UNIQUE,
    cad VARCHAR(14) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL,
    endereco VARCHAR(255) NOT NULL,
    complemento VARCHAR(100),
    cidade VARCHAR(100) NOT NULL,
    cep VARCHAR(10) NOT NULL
);

