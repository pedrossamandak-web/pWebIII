<?php 
const host = '127.0.0.1';//liga com o local host
const dbname = 'lanchonete'; //nome do banco de dados
const user = 'root'; //nome comum do laragon
const pass = '';//sem senha

try{
    $pdo - new PDO("mysql:host=".host.",dbname=".dbname,user,pass);//conexao com o host do bd
    $pdo->setAttribute(PDO::ATTR_ERRMODE,
    PDO::ERRMODE_EXCEPTION);//Capta de erro
}catch(PDOExcpetiom $erro){
    die("Erro na conexão".$erro->getMessage());//tratamento de erro caso a conexao n funcione
}
