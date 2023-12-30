<div class="titulo">Excluir 2</div>
<?php
include_once("conexao.php");
$conexao = novaconexao();
$registros=[];
if($_GET['excluir']){
    $excluir_sql="DELETE FROM estado WHERE idest=?";
    $stmt=$conexao->prepare($excluir_sql);
    $stmt->bind_param("i",$_GET['excluir']);
    $stmt->execute();

}

$sql="SELECT idest,nome,sigla FROM estado";
$resultado=$conexao->query($sql);

if($resultado->num_rows >0){

    while($row=$resultado->fetch_assoc()){
        $registros[]=$row;
    }
} elseif($conexao->error){
    echo "ERROR".$conexao->connect_error;
}


$conexao->close();
?>

<table class="table table-bordered table-hover table-striped">
    <thead class="table-dark">
        <th>id</th>
        <th>nome</th>
        <th>sigla</th>
        <th>opções</th>
    </thead>

    <tbody>
    <?php foreach($registros as $registro):?>
        <tr>
           
            <td><?=$registro['idest'] ?></td>
            <td><?=$registro['nome'] ?></td>
            <td><?=$registro['sigla'] ?> </td>
            <td>
                <a href="/exercicio.php?dir=revisao3&file=excluir2&excluir=<?=$registro['idest'] ?>" class="btn btn-dark">Excluir</a>
            </td>

          
        </tr>
        <?php endforeach ?>
    </tbody>
</table>