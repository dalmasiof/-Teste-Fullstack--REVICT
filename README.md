# [Teste Fullstack] REVICT

CRUD criado para participar do processo seletivo da empresa REVICT.

Instruçoes: levando em conta que o usuário tenha instalado um servidor web locar(recomendado usar o aplicativo xamp) foi criado o banco de dados no PHPMyAdmin.

Script para a criação do banco.

create database dbtesterevict;
use dbtesterevict;

create table usuario(
    id int primaty key auto_increment,
    nome varchar (50),
    cpf varchar(11),
    email varchar(100),
    devedor int(1),
    divida decimal (8,2),
    estado varchar(2),
    sexo varchar(15),
    telefone varchar(20),   
);

insert into usuario (nome,cpf,sexo,estado,telefone,devedor,divida,email)
        values('Alex','55555555555','masculino','SP','39652148','1',' 150.00','alex@gmail.com'),
        values('Joao','66666666666','masculino','RJ','39652148','0',' 0','joao@gmail.com'),
        values('Aline','99999999999','feminino','MT','39652148','1',' 33500.00','aline@gmail.com'),
        values('Giovana','77777777777','feminino','MG','39652148','0','0','gio@gmail.com'),
        values('JoJo','11111111111','masculino','SP','39652148','0',' 0','jojo@gmail.com');
        

