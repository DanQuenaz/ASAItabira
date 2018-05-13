--DATABASE ASA ITABIRA
--CRIADO 12/05/2018
--AUTOR: Dan Pimentel


-- Table: Famílias
CREATE TABLE Familias (
    familiaId int NOT NULL AUTO_INCREMENT,
    representante varchar(512) NOT NULL,
    numeroMembros int NOT NULL,
    endereco varchar(512) NOT NULL,
    telefone varchar(256) NOT NULL,
    estado varchar(32) NOT NULL,
    cestasRecebidas int NOT NULL,
    membroIgreja varchar(16), NOT NULL,
    prioridade int NOT NULL,

    PRIMARY KEY (familiaId)
);

-- Table: Doadores
CREATE TABLE Doadores (
    doadorId int NOT NULL AUTO_INCREMENT,
    nome varchar(256) NOT NULL,
    endereco varchar(512) NOT NULL,
    telefone varchar(32) NOT NULL,
    intervaloDoacoes varchar(32) NOT NULL,
    ultimaDoacao varchar(32) NOT NULL,

    PRIMARY KEY (doadorId)
);

-- Table: Usuarios
CREATE TABLE Usuarios (
    usuarioId int NOT NULL AUTO_INCREMENT,
    primeiroNome varchar(64) NOT NULL,
    sobreNome varchar(64) NOT NULL,
    cpf char(11) NOT NULL,
    estado varchar(32) NOT NULL,
    cidade varchar(64) NOT NULL,
    endereco varchar(1000) NOT NULL,
    bairro varchar(64) NOT NULL,
    email varchar(64) NOT NULL,
    senha varchar(64) NOT NULL,
    nivel int NOT NULL,

    PRIMARY KEY (usuarioId)
);

-- Table: Recursos
CREATE TABLE Recursos (
    recursoId int NOT NULL AUTO_INCREMENT,
    nome varchar(256) NOT NULL,
    quantidade varchar(256) NOT NULL,

    PRIMARY KEY (recursoId)
);




