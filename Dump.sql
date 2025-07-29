CREATE DATABASE enquete;

USE enquete;

CREATE TABLE respostas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    esporte_favorito VARCHAR(50) NOT NULL,
    esportes_praticados TEXT,
    email VARCHAR(100),
    frequencia VARCHAR(50) NOT NULL,
    data_envio DATETIME DEFAULT CURRENT_TIMESTAMP
);


-- USE enquete;
-- SELECT * FROM respostas;