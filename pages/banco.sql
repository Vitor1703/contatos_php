-- ########################## QUERYS CREATE ##########################

CREATE TABLE contatos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    sobrenome VARCHAR(255) DEFAULT NULL,
    empresa VARCHAR(255) DEFAULT NULL,
    telefone VARCHAR(20) NOT NULL,
    celular VARCHAR(20) NOT NULL,
    email VARCHAR(100) DEFAULT NULL,
    cep VARCHAR(10) DEFAULT NULL,
    rua VARCHAR(255) DEFAULT NULL,
    bairro VARCHAR(255) DEFAULT NULL,
    cidade VARCHAR(255) DEFAULT NULL,
    estado VARCHAR(255) DEFAULT NULL,
    pais VARCHAR(255) DEFAULT NULL,
    aniversario DATE DEFAULT NULL,
    notas TEXT DEFAULT NULL
);

CREATE TABLE usuarios (
  id INT AUTO_INCREMENT PRIMARY KEY,
  email varchar(100) DEFAULT NULL,
  senha varchar(255) DEFAULT NULL
);

-- ########################## QUERYS SELECT ##########################
