<div class="titulo">Excluir</div>
<?php

include_once("conexao.php");

$conexao=novaconexao();

$sql="DELETE FROM estado WHERE idest=4";
$resultado=$conexao->query($sql);

if($resultado){
    echo "Excluido com sucesso";
}elseif($conexao->error){
    echo "ERROR".$conexao->error;
}

?>