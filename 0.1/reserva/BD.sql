create database cliente;

use cliente;

create table usuario(
	id_usuario int primary key,
	e_mail varchar(50),
	nome varchar(50),
	senha varchar(10)
);

create table Telefones(
	id_telefone int primary key,
	telefone varchar(20),
	id_usuario int,
	foreign key (id_usuario) references usuario(id_usuario)
);

delimiter //
create procedure tels(in tel varchar(20),in nome varchar(20))
	begin
		declare id varchar(20);
        declare idt varchar(20);
		select id_usuario into id from usuario u where u.nome = nome;
        select id_telefone into idt from telefones t where t.telefone = tel;
        update telefones set id_usuario = id where id_telefone = idt;
    end;//
    