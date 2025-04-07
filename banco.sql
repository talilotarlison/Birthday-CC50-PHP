-- SQL LITE
CREATE TABLE usuarios (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    nome TEXT,
    idade INTEGER
);


INSERT INTO usuarios (nome, idade) VALUES ('João', 30), ('Maria', 25), ('Pedro', 40);
SELECT * FROM usuarios

CREATE TABLE login (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    nome TEXT,
    senha TEXT
);

INSERT INTO login (nome, senha) VALUES ('João', 123456), ('Maria', 123456), ('Pedro', 123456);
SELECT * FROM login