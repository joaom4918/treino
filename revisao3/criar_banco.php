<div class="titulo">criar banco</div>

<?php
require_once "conexao.php";

$conexao=novaconexao(null);

$sql='CREATE DATABASE curso_php';
$resultado= $conexao->query($sql);

if($resultado){
    echo ":) sucesso";

}else{
    echo "Erro ".$conexao->error;
}

$conexao->close();

?>

