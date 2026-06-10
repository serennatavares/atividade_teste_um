CREATE DATABASE sistema_simples_m1; -- Cria o banco de dados

USE sistema_simples_m1; -- usa o banco de dados criado

CREATE TABLE usuarios ( -- Cria a tabela de usuários
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario VARCHAR(87) NOT NULL,
    senha VARCHAR(255) NOT NULL
);

INSERT INTO usuarios (usuario, senha) VALUES ('admin','123'); -- Insere um usuário e senha