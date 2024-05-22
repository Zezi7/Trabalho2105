-- Active: 1716311489761@@127.0.0.1@3306@trabalhophp

    USE trabalhophp;

    CREATE TABLE login(
    id INTEGER AUTO_INCREMENT PRIMARY KEY,
    usuario VARCHAR(255),
    senha VARCHAR(255)
    );

     CREATE TABLE produto(
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(30) NOT NULL,
    descricao VARCHAR(255),
    valor DOUBLE DEFAULT 0.0
    );
