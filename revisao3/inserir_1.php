<div class="titulo">Inseir Banco</div>

<?php 

include_once("conexao.php");

$conexao=novaconexao();

$sql="INSERT INTO estado (nome,sigla) VALUES ('PARANA','PR')";
$resultado=$conexao->query($sql);

$sql2="INSERT INTO cadastro (nome,nasimento,email,site,filhos,salario) VALUES ('jhony','2021-10-25','jhony@gmail.com','https://www.google.com.br',0,4000)";

$resultado2=$conexao->query($sql2);

if($resultado){
    echo "Sucesso<br>";
}else{
    echo "ERR0".$conexao->error;
}

if($resultado2){
    echo "Sucesso";
}else{
    echo "ERR0".$conexao->error;
}
?>