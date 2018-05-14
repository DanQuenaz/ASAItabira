--DATABASE ASA ITABIRA
--CRIADO 12/05/2018
--AUTOR: Dan Pimentel


-- Table: Famílias
CREATE TABLE familias (
    familiaId int NOT NULL AUTO_INCREMENT,
    representante varchar(512) NOT NULL,
    numeroMembros int NOT NULL,
    endereco varchar(512) NOT NULL,
    telefone varchar(256) NOT NULL,
    estado varchar(32) NOT NULL,
    cestasRecebidas int NOT NULL,
    membroIgreja varchar(16) NOT NULL,
    prioridade int NOT NULL,

    PRIMARY KEY (familiaId)
);

-- Table: Doadores
CREATE TABLE doadores (
    doadorId int NOT NULL AUTO_INCREMENT,
    nome varchar(256) NOT NULL,
    endereco varchar(512) NOT NULL,
    telefone varchar(32) NOT NULL,
    intervaloDoacoes varchar(32) NOT NULL,
    ultimaDoacao varchar(32) NOT NULL,

    PRIMARY KEY (doadorId)
);

-- Table: Recursos
CREATE TABLE recursos (
    recursoId int NOT NULL AUTO_INCREMENT,
    nome varchar(256) NOT NULL,
    quantidade varchar(256) NOT NULL,

    PRIMARY KEY (recursoId)
);

-- Table: Usuarios
CREATE TABLE usuarios (
    usuarioId int NOT NULL AUTO_INCREMENT,
    nome varchar(64) NOT NULL,
    nick varchar(64) NOT NULL,
    cpf char(11) NOT NULL,
    endereco varchar(256) NOT NULL,
    email varchar(64) NOT NULL,
    senha varchar(64) NOT NULL,
    nivel int NOT NULL,

    PRIMARY KEY (usuarioId)
);




