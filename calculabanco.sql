create database calcula;

use calcula;

create table media(
idmedia int primary key auto_increment,
nome varchar(30) not null,
primeira_nota float(10,2) not null,
segunda_nota float(10,2) not null,
terceira_nota float(10,2) not null,
média_em_conceito varchar(20) not null,
média_em_nota float(10,2) not null
);


