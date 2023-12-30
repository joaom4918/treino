<div class="titulo">Criar Tabela</div>
<?php

require_once("conexao.php");
$conexao=novaconexao();

$sql="CREATE TABLE IF NOT EXISTS estado(
    idest SERIAL NOT NULL PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    sigla CHAR(2) NOT NULL
)"; 


$sql2="CREATE TABLE IF NOT EXISTS cadastro(
    idcad SERIAL NOT NULL PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    nasimento Date NOT NULL,
    email VARCHAR(100) NOT NULL,
    site VARCHAR(100) NOT NULL,
    filhos INT NOT NULL,
    salario FLOAT NOT NULL

)"; 




$resultado=$conexao->query($sql);

if($resultado){
echo "tabela criada com sucesso<br>";
}else{

echo "Error ". $conexao->error;
}

$resultado2=$conexao->query($sql2);

if($resultado2){
echo "tabela criada com sucesso";
}else{

echo "Error ". $conexao->error;
}

?>