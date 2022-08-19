create database bd_sistemarecap;

use bd_sistemarecap;

create table usuario
(
	codigo_usuario int auto_increment primary key not null,
    nome_usuario varchar(25) not null,
    login_usuario varchar(25) unique not null,
    senha_usuario varchar(255) not null,
	imagem_usuario longblob not null,
    cadastro_usuario timestamp not null,
    obs_usuario varchar(255) null,
    status_usuario varchar(10) not null
);

select * from usuario;


create table fornecedor
(
	codigo_fornecedor int auto_increment primary key not null,
    nome_fornecedor varchar(25) not null,
    datanascimento_fornecedor date not null,
	cadastro_fornecedor timestamp not null,
    cnpfj_fornecedor varchar(25) unique not null,
    cep_fornecedor int(8) not null,
	endereco_fornecedor varchar(100) not null,
    numero_fornecedor int not null,
    bairro_fornecedor varchar(100) not null,
    cidade_fornecedor varchar(100) not null,
    estado_fornecedor varchar(100) not null,
    telefone1_fornecedor int(15) not null,
    telefone2_fornecedor int(15) not null,
    contato_fornecedor varchar(100) not null,
    obs_fornecedor varchar(255) null,
    status_fornecedor varchar(10) not null
);

select * from fornecedor;

create table produto
(
	codigo_produto int auto_increment primary key not null,
    nome_produto varchar(25) not null,
	cadastro_produto timestamp not null,
    imagem_produto blob not null,
    descricao_produto varchar(200) not null,
    qtd_produto int not null,
    valor_produto int not null,
    codigo_categoria int not null,
    obs_produto varchar(255) null,
    status_produto varchar(10) not null,
    constraint FK_codigo_categoria_produto foreign key (codigo_categoria) references categoria (codigo_categoria)
);

select * from produto;

create table categoria
(
	codigo_categoria int auto_increment primary key not null,
    nome_categoria varchar(25) not null,
    localArmaz_categoria varchar(255) not null,
    descricao_categoria varchar(200) not null,
    obs_categoria varchar(255) null,
    status_categoria varchar(10) not null
);

select * FROM categoria;