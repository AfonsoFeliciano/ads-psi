CREATE DATABASE ecommerce;

USE ecommerce;

CREATE TABLE  produtos (
 id INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
 nome VARCHAR( 50 ) NOT NULL ,
 descricao VARCHAR( 80 ) NOT NULL ,
 valor DECIMAL(10,2) NOT NULL,
 foto VARCHAR( 100 ) NOT NULL,
 estrelas INT NOT NULL
) ENGINE = MYISAM

INSERT INTO `ecommerce`.`produtos` (`id` ,`nome` ,`descricao` ,`valor` ,`foto` ,`estrelas`)
VALUES (NULL , 'Samsung S5', 'Galaxy S5', '600.15', 'galaxy5.jpg', '4'), 
       (NULL , 'Micro SD', 'SD 8GB', '80.12', 'microsd.jpg', '3');



CREATE TABLE usuarios (
	id int not null AUTO_INCREMENT primary key,
	nome varchar(50) not null,
	login varchar(80) not null, 
	senha varchar(80) not null
) ENGINE = MYISAM;



insert into usuarios (id, nome, login, senha)
	VALUES (NULL, 'Administrador', 'admin', MD5('admin')),
			(NULL, 'Marlon Hugo', 'marlon', MD5(123456));

