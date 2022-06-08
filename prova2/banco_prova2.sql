-- Drop banco de dados
-- drop database projeto01;

-- Criação do banco de dados
create database prova2;

-- Selecionar banco de dados
use prova2;

-- Criação da tabela usuario
create table fluxo_caixa(
	id_caixa   			int 			not null auto_increment,
    tipo 				varchar(10)		not null,
    valor 				decimal(10,2)	not null, 
    historico			varchar(150)	not null,
	cheque				varchar(3)		not null, 
    data				date			not null,
    primary key (id_caixa)
);