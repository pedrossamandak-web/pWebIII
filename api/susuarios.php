<?php 
require '../app/conexao.php';
$pdo = Conexao::conectar();//conecata ao banco de dados 
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); //setamos tratamentos de erro
$sql = "select * from usuarios;"; //variavel com o select
$prp = $pdo->prepare($sql); //preparando o select
$prp->execute(); //executando o select
$data = $prp->fetchall(PDO::FETCH_ASSOC);//armazena em memorias todos os dados , tipo o datasource; fetch é a contruçao de tabela de acordo com os registros 
echo json_encode($data); //encrever na tela os dados em padrao de json 
