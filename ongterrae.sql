create database ongterrae;

use ongterrae;
    
create table contato(
    nome varchar(30) not null,
    email varchar(50) not null,
    endereco varchar(50) not null,
    telefone varchar(11) not null,
	sexo varchar(9) not null,
    mensagem varchar(300)  not null
    )


