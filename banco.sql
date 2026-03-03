create database lanchonete;
use lanchonete;
create table usuarios(
    usuid integer PRIMARY key AUTO_INCREMENT,
    usunome varchar(100),
    usulogin varchar(100),
    ususenha varchar(100),
    usulogado boolean DEFAULT 0);

insert Into usuários(usunome,usulogin,ususenha)
value
('RICARDO DA SILVA ZANATA','RICKS',MD5(123456)),
('ALFREDO ALEXANDRE DE OLIVEIRA','XANDAO',MD5(123456)),
('JOÃO LUIS CHAGAS SANCHES','JOHNNY',MD5(123456)),
('RICARDO AMORIM','AMORIM',MD5(123456));


SELECT * FROM USUARIOS;