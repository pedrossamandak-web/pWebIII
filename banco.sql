create database lanchonete;
use lanchonete;
create table usuarios(
    usuid integer PRIMARY key AUTO_INCREMENT,
    usunome varchar(100),
    usulogin varchar(100),
    ususenha varchar(100),
    usulogado boolean DEFAULT 0);