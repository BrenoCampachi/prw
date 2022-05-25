-- Drop banco de dados 
-- Drop database projeto01;

-- Criação do banco de dados
create database projeto02;

-- Selecionar banco de dados 
use projeto02;

-- Criação da tabela usuario 
create table usuario(
	id_usuario			int 	not null auto_increment,
    nome		varchar(100)	not null,
    email		varchar(100)	not null,
    telefone	varchar(100)	not null,
    foto_blob   blob,
    foto_nome   varchar(100),
    primary key (id_usuario)
);