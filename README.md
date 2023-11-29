# contatos_php
Avaliação 2º bimestre - 6º período (Bianca Amaral - Heito Zaremba - Vitor Hugo)

## Objetivo
Agenda de Contatos: Um sistema para armazenar informações de contatos, incluindo nome, número de telefone, endereço de e-mail e outras informações relevantes.

## Configuração do Ambiente

Para garantir o correto funcionamento do projeto, é necessário configurar o ambiente de desenvolvimento. Siga as etapas abaixo:

### Banco de Dados

O projeto requer a criação de duas tabelas no banco de dados. Execute os seguintes comandos SQL para criar as tabelas necessárias:

```sql
CREATE TABLE contatos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    sobrenome VARCHAR(255) DEFAULT NULL,
    empresa VARCHAR(255) DEFAULT NULL,
    telefone VARCHAR(20) NOT NULL,
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
